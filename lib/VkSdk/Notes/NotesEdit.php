<?php
namespace VkSdk\Notes;

use VkSdk\Includes\Request;

/**
 * Edits a note of the current user.
 * Class NotesEdit
 *
 * @package VkSdk\Notes
 */
class NotesEdit extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    public $response;

    /**
     * @return $this
     *
     * @param string $privacy_comment
     */
    public function addPrivacyComment($privacy_comment)
    {
        $this->vkarg_privacy_comment[] = $privacy_comment;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $privacy_view
     */
    public function addPrivacyView($privacy_view)
    {
        $this->vkarg_privacy_view[] = $privacy_view;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["note_id", "title", "text"]);

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
        return "notes.edit";
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

    /**
     * @return $this
     *
     * @param array $privacy_comment
     */
    public function setPrivacyComment(array $privacy_comment)
    {
        $this->vkarg_privacy_comment = $privacy_comment;

        return $this;
    }

    /**
     * @return $this
     *
     * @param array $privacy_view
     */
    public function setPrivacyView(array $privacy_view)
    {
        $this->vkarg_privacy_view = $privacy_view;

        return $this;
    }

    /**
     * Note text.
     *
     * @return $this
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->vkarg_text = $text;

        return $this;
    }

    /**
     * Note title.
     *
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->vkarg_title = $title;

        return $this;
    }
}
