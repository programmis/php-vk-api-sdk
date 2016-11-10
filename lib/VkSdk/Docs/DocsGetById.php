<?php
namespace VkSdk\Docs;

use VkSdk\Includes\Request;

/**
 * Returns information about documents by their IDs.
 * Class DocsGetById
 *
 * @package VkSdk\Docs
 */
class DocsGetById extends Request
{

    /**
     * Document IDs. Example: ; "66748_91488,66748_91455";
     *
     * @return $this
     *
     * @param string $doc
     */
    public function addDoc($doc)
    {
        $this->vkarg_docs[] = $doc;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["docs"]);

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
        return "docs.getById";
    }

    /**
     * Document IDs. Example: ; "66748_91488,66748_91455";
     *
     * @return $this
     *
     * @param array $docs
     */
    public function setDocs(array $docs)
    {
        $this->vkarg_docs = $docs;

        return $this;
    }
}
