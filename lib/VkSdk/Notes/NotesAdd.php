<?php

namespace VkSdk\Notes;

use VkSdk\Includes\Request;

/**
 * Creates a new note for the current user.
 * Class NotesAdd
 * @package VkSdk\Notes
 */
class NotesAdd extends Request
{

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
        $this->setRequiredParams(["title", "text"]);

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
        return "notes.add";
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
