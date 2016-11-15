<?php

namespace VkSdk\Photos;

use VkSdk\Includes\Request;

/**
 * Edits information about a photo album.
 *
 * Class PhotosEditAlbum
 * @package VkSdk\Photos
 */
class PhotosEditAlbum extends Request
{
    /**
     * See constants of class OkResponse
     *
     * @var integer
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
     * result in $this->getResponse();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["album_id"]);

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
        return "photos.editAlbum";
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
     * ID of the photo album to be edited.
     *
     * @return $this
     *
     * @param integer $album_id
     */
    public function setAlbumId($album_id)
    {
        $this->vkarg_album_id = $album_id;

        return $this;
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
     * New album description.
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
     * ID of the user or community that owns the album.
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
     * New album title.
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
