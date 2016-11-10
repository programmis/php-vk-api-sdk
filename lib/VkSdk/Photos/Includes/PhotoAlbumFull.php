<?php

namespace VkSdk\Photos\Includes;

use lib\AutoFillObject;

/**
 * Class PhotoAlbumFull
 * @package VkSdk\Photos\Includes
 */
class PhotoAlbumFull
{

    use AutoFillObject;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_upload;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $comments_disabled;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var array
     */
    private $privacy_comment;

    /**
     * @var array
     */
    private $privacy_view;

    /**
     * @var integer
     */
    private $size;

    /**
     * @var PhotoSizes[]
     */
    private $sizes;

    /**
     * @var integer
     */
    private $thumb_id;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $thumb_is_last;

    /**
     * @var string
     */
    private $thumb_src;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $updated;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $upload_by_admins_only;

    /**
     * @return $this
     *
     * @param PhotoSizes $size
     */
    public function addSize(PhotoSizes $size)
    {
        $this->sizes[] = $size;

        return $this;
    }

    /**
     * Information whether current user can upload photo to the album
     *
     * @return integer
     */
    public function getCanUpload()
    {
        return $this->can_upload;
    }

    /**
     * @return $this
     *
     * @param integer $can_upload
     */
    public function setCanUpload($can_upload)
    {
        $this->can_upload = $can_upload;

        return $this;
    }

    /**
     * Information whether album comments are disabled
     *
     * @return integer
     */
    public function getCommentsDisabled()
    {
        return $this->comments_disabled;
    }

    /**
     * @return $this
     *
     * @param integer $comments_disabled
     */
    public function setCommentsDisabled($comments_disabled)
    {
        $this->comments_disabled = $comments_disabled;

        return $this;
    }

    /**
     * Date when the album has been created in Unixtime
     *
     * @return integer
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return $this
     *
     * @param integer $created
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Photo album description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return $this
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Photo album ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Album owner's ID
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;

        return $this;
    }

    /**
     * @return array
     */
    public function getPrivacyComment()
    {
        return $this->privacy_comment;
    }

    /**
     * @return $this
     *
     * @param array $privacy_comment
     */
    public function setPrivacyComment(array $privacy_comment)
    {
        $this->privacy_comment = $privacy_comment;

        return $this;
    }

    /**
     * @return array
     */
    public function getPrivacyView()
    {
        return $this->privacy_view;
    }

    /**
     * @return $this
     *
     * @param array $privacy_view
     */
    public function setPrivacyView(array $privacy_view)
    {
        $this->privacy_view = $privacy_view;

        return $this;
    }

    /**
     * Photos number
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return $this
     *
     * @param integer $size
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return PhotoSizes[]
     */
    public function getSizes()
    {
        return $this->sizes;
    }

    /**
     * @return $this
     *
     * @param array $sizes
     */
    public function setSizes(array $sizes)
    {
        $this->sizes = $sizes;

        return $this;
    }

    /**
     * Thumb photo ID
     *
     * @return integer
     */
    public function getThumbId()
    {
        return $this->thumb_id;
    }

    /**
     * @return $this
     *
     * @param integer $thumb_id
     */
    public function setThumbId($thumb_id)
    {
        $this->thumb_id = $thumb_id;

        return $this;
    }

    /**
     * Information whether the album thumb is last photo
     *
     * @return integer
     */
    public function getThumbIsLast()
    {
        return $this->thumb_is_last;
    }

    /**
     * @return $this
     *
     * @param integer $thumb_is_last
     */
    public function setThumbIsLast($thumb_is_last)
    {
        $this->thumb_is_last = $thumb_is_last;

        return $this;
    }

    /**
     * URL of the thumb image
     *
     * @return string
     */
    public function getThumbSrc()
    {
        return $this->thumb_src;
    }

    /**
     * @return $this
     *
     * @param string $thumb_src
     */
    public function setThumbSrc($thumb_src)
    {
        $this->thumb_src = $thumb_src;

        return $this;
    }

    /**
     * Photo album title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Date when the album has been updated last time in Unixtime
     *
     * @return integer
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @return $this
     *
     * @param integer $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Information whether only community administrators can upload photos
     *
     * @return integer
     */
    public function getUploadByAdminsOnly()
    {
        return $this->upload_by_admins_only;
    }

    /**
     * @return $this
     *
     * @param integer $upload_by_admins_only
     */
    public function setUploadByAdminsOnly($upload_by_admins_only)
    {
        $this->upload_by_admins_only = $upload_by_admins_only;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'sizes' => [
                'class'  => 'VkSdk\Photos\Includes\PhotoSizes',
                'method' => 'addSize'
            ],
        ];
    }
}
