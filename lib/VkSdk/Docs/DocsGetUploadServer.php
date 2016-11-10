<?php

namespace VkSdk\Docs;

use VkSdk\Includes\Request;

/**
 * Returns the server address for document upload.
 * Class DocsGetUploadServer
 * @package VkSdk\Docs
 */
class DocsGetUploadServer extends Request
{

    /**
     * @var string
     */
    private $upload_url;

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
     * @inheritdoc
     */
    public function getMethod()
    {
        return "docs.getUploadServer";
    }

    /**
     * Upload URL
     *
     * @return string
     */
    public function getUploadUrl()
    {
        return $this->upload_url;
    }

    /**
     * Community ID (if the document will be uploaded to the community).
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }
}
