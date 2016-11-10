<?php

namespace VkSdk\Photos;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Photos\Includes\PhotoAlbumFull;

/**
 * Creates an empty photo album.
 * Class PhotosCreateAlbum
 * @package VkSdk\Photos
 */
class PhotosCreateAlbum extends Request
{

    use AutoFillObject;

    /**
     * @var PhotoAlbumFull
     */
    private $response;

    /**
     * @return $this
     *
     * @param string $privacy_comment
     */
    public function addPrivacyComment($privacy_comment)
    {
        $this->vkarg_privacy_comment[] = $privacy_comment;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $privacy_view
     */
    public function addPrivacyView($privacy_view)
    {
        $this->vkarg_privacy_view[] = $privacy_view;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["title"]);

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
        return "photos.createAlbum";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Photos\Includes\PhotoAlbumFull',
        ];
    }

    /**
     * @return $this
     *
     * @param boolean $comments_disabled
     */
    public function setCommentsDisabled($comments_disabled)
    {
        $this->vkarg_comments_disabled = $comments_disabled;

        return $this;
    }

    /**
     * Album description.
     *
     * @return $this
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->vkarg_description = $description;

        return $this;
    }

    /**
     * ID of the community in which the album will be created.
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

    /**
     * @return $this
     *
     * @param array $privacy_comment
     */
    public function setPrivacyComment(array $privacy_comment)
    {
        $this->vkarg_privacy_comment = $privacy_comment;

        return $this;
    }

    /**
     * @return $this
     *
     * @param array $privacy_view
     */
    public function setPrivacyView(array $privacy_view)
    {
        $this->vkarg_privacy_view = $privacy_view;

        return $this;
    }

    /**
     * Album title.
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

    /**
     * @return $this
     *
     * @param boolean $upload_by_admins_only
     */
    public function setUploadByAdminsOnly($upload_by_admins_only)
    {
        $this->vkarg_upload_by_admins_only = $upload_by_admins_only;

        return $this;
	}
}
