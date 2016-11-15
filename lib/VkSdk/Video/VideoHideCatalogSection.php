<?php

namespace VkSdk\Video;

use VkSdk\Includes\Request;

/**
 * Hides a video catalog section from a user.
 *
 * Class VideoHideCatalogSection
 * @package VkSdk\Video
 */
class VideoHideCatalogSection extends Request
{
    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * result in $this->getResponse();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["section_id"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->response = $json->response;

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
        return "video.hideCatalogSection";
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
     * 'id' value returned with a block to hide by the '' method.
     *
     * @return $this
     *
     * @param integer $section_id
     */
    public function setSectionId($section_id)
    {
        $this->vkarg_section_id = $section_id;

        return $this;
    }
}
