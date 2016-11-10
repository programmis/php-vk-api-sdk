<?php

namespace VkSdk\Notes;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Notes\Includes\Note;

/**
 * Returns a note by its ID.
 * Class NotesGetById
 * @package VkSdk\Notes
 */
class NotesGetById extends Request
{

    use AutoFillObject;

    /**
     * @var Note
     */
    private $response;

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
     * @inheritdoc
     */
    public function getMethod()
    {
        return "notes.getById";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Notes\Includes\Note',
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
