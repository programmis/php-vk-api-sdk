<?php

namespace VkSdk\Notes;

use VkSdk\Includes\Request;

/**
 * Adds a new comment on a note.
 * Class NotesCreateComment
 * @package VkSdk\Notes
 */
class NotesCreateComment extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["note_id", "message"]);

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
        return "notes.createComment";
    }

    /**
     * @return $this
     *
     * @param string $guid
     */
    public function setGuid($guid)
    {
        $this->vkarg_guid = $guid;

        return $this;
    }

    /**
     * Comment text.
     *
     * @return $this
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->vkarg_message = $message;

        return $this;
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

    /**
     * ID of the user to whom the reply is addressed (if the comment is a reply to another comment).;
     *
     * @return $this
     *
     * @param integer $reply_to
     */
    public function setReplyTo($reply_to)
    {
        $this->vkarg_reply_to = $reply_to;

        return $this;
    }
}
