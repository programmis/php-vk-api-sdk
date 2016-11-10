<?php
namespace VkSdk\Notes;

use VkSdk\Includes\Request;

/**
 * Deletes a note of the current user.
 * Class NotesDelete
 *
 * @package VkSdk\Notes
 */
class NotesDelete extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

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
        return "notes.delete";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
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
}
