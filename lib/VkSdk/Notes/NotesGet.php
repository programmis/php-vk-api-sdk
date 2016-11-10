<?php
namespace VkSdk\Notes;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Notes\Includes\Note;

/**
 * Returns a list of notes created by a user.
 * Class NotesGet
 *
 * @package VkSdk\Notes
 */
class NotesGet extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Note[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param Note $item
     */
    public function addItem(Note $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Note IDs.
     *
     * @return $this
     *
     * @param integer $note_id
     */
    public function addNoteId($note_id)
    {
        $this->vkarg_note_ids[] = $note_id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * Total number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of notes to return.
     *
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * @return Note[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "notes.get";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Notes\Includes\Note',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Note IDs.
     *
     * @return $this
     *
     * @param array $note_ids
     */
    public function setNoteIds(array $note_ids)
    {
        $this->vkarg_note_ids = $note_ids;

        return $this;
    }

    /**
     * Note owner ID.
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
