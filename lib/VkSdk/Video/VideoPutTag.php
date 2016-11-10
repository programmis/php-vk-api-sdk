<?php
namespace VkSdk\Video;

use VkSdk\Includes\Request;

/**
 * Adds a tag on a video.
 * Class VideoPutTag
 *
 * @package VkSdk\Video
 */
class VideoPutTag extends Request
{

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["user_id", "video_id"]);

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
        return "video.putTag";
    }

    /**
     * ID of the user or community that owns the video.
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
     * Tag text.
     *
     * @return $this
     *
     * @param string $tagged_name
     */
    public function setTaggedName($tagged_name)
    {
        $this->vkarg_tagged_name = $tagged_name;

        return $this;
    }

    /**
     * ID of the user to be tagged.
     *
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }

    /**
     * Video ID.
     *
     * @return $this
     *
     * @param integer $video_id
     */
    public function setVideoId($video_id)
    {
        $this->vkarg_video_id = $video_id;

        return $this;
    }
}
