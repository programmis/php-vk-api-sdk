<?php
namespace VkSdk\Docs;

use lib\AutoFillObject;
use VkSdk\Docs\Includes\Doc;
use VkSdk\Includes\Request;

/**
 * Saves a document after [https://vk.com/dev/upload_files_2?f=10.%2BUploading%2BDocuments|uploading it to a server].
 * Class DocsSave
 *
 * @package VkSdk\Docs
 */
class DocsSave extends Request
{

    use AutoFillObject;

    /**
     * @var Doc
     */
    public $response;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["file"]);

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
        return "docs.save";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Docs\Includes\Doc',
        ];
    }

    /**
     * This parameter is returned when the file is [https://vk.com/dev/upload_files_2?f=10.%2BUploading%2BDocuments|uploaded to the server].
     *
     * @return $this
     *
     * @param string $file
     */
    public function setFile($file)
    {
        $this->vkarg_file = $file;

        return $this;
    }

    /**
     * Document tags.
     *
     * @return $this
     *
     * @param string $tags
     */
    public function setTags($tags)
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
