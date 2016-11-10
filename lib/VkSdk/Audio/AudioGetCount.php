<?php
namespace VkSdk\Audio;

use VkSdk\Includes\Request;

/**
 * Returns the total number of audio files on a user or community page.
 * Class AudioGetCount
 *
 * @package VkSdk\Audio
 */
class AudioGetCount extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["owner_id"]);

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
        return "audio.getCount";
    }

    /**
     * ID of the user or community that owns the audio files. By default, current user ID.
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
