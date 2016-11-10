<?php
namespace VkSdk\Photos;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\PhotoUpload;

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
    public $response;

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
