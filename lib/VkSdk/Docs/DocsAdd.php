<?php

namespace VkSdk\Docs;

use VkSdk\Includes\Request;

/**
 * Copies a document to a user's or community's document list.
 * Class DocsAdd
 * @package VkSdk\Docs
 */
class DocsAdd extends Request
{

    /**
     * @var integer
     */
    private $id;

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
     * Doc ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "docs.add";
    }

    /**
     * Access key. This parameter is required if 'access_key' was returned with the document's data.
     *
     * @return $this
     *
     * @param string $access_key
     */
    public function setAccessKey($access_key)
    {
        $this->vkarg_access_key = $access_key;

        return $this;
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
     * ID of the user or community that owns the document. Use a negative value to designate a community ID.
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
