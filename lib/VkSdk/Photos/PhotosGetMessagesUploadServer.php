<?php

namespace VkSdk\Photos;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\PhotoUpload;
use VkSdk\Photos\Includes\UploadResult;

/**
 * Returns the server address for photo upload in a private message for a user.
 * Class PhotosGetMessagesUploadServer
 *
 * @package VkSdk\Photos
 */
class PhotosGetMessagesUploadServer extends Request
{
    use AutoFillObject;

    /**
     * @var PhotoUpload
     */
    private $response;

    /**
     * @var UploadResult $uploadResult
     */
    private $uploadResult;

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->fillByJson($json);

                return true;
            }
        }

        return false;
    }

    /**
     * @return UploadResult
     */
    public function getUploadResult()
    {
        return $this->uploadResult;
    }

    /**
     * @param array $files
     *
     * @return bool
     */
    public function upload($files)
    {
        $result = $this->uploadFiles($this->getResponse()->getUploadUrl(), $files);
        if ($result && ($json = $this->getJsonResponse())) {
            $this->uploadResult = new UploadResult();
            $this->uploadResult->fillByJson($json);

            return true;
        }

        return false;
    }

    /**
     * @return PhotoUpload
     */
    public function getResponse()
    {
        return $this->response;
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
        return "photos.getMessagesUploadServer";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Photos\Includes\PhotoUpload',
        ];
    }
}
