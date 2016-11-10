<?php
namespace VkSdk\Notes;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Notes\Includes\NoteComment;

/**
 * Returns a list of comments on a note.
 * Class NotesGetComments
 *
 * @package VkSdk\Notes
 */
class NotesGetComments extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var NoteComment[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param NoteComment $item
     */
    public function addItem(NoteComment $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["note_id"]);

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
     * Number of comments to return.
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
     * @return NoteComment[]
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
        return "notes.getComments";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Notes\Includes\NoteComment',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Note ID.
     *
     * @return $this
     *
     * @param integer $note_id
     */
    public function setNoteId($note_id)
    {
        $this->vkarg_note_id = $note_id;

        return $this;
    }

    /**
     * Note owner ID.
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }
}
