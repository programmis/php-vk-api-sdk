<?php

namespace VkSdk\Docs;

use VkSdk\Includes\Request;

/**
 * Edits a document.
 * Class DocsEdit
 * @package VkSdk\Docs
 */
class DocsEdit extends Request
{

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * Document tags.
     *
     * @return $this
     *
     * @param string $tag
     */
    public function addTag($tag)
    {
        $this->vkarg_tags[] = $tag;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id", "doc_id"]);

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
        return "docs.edit";
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
     * Document ID.
     *
     * @return $this
     *
     * @param integer $doc_id
     */
    public function setDocId($doc_id)
    {
        $this->vkarg_doc_id = $doc_id;

        return $this;
    }

    /**
     * User ID or community ID. Use a negative value to designate a community ID.
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
     * Document tags.
     *
     * @return $this
     *
     * @param array $tags
     */
    public function setTags(array $tags)
    {
        $this->vkarg_tags = $tags;

        return $this;
    }

    /**
     * Document title.
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
