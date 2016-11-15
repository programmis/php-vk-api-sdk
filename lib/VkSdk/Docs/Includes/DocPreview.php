<?php

namespace VkSdk\Docs\Includes;

use lib\AutoFillObject;

/**
 * Class DocPreview
 * @package VkSdk\Docs\Includes
 */
class DocPreview
{
    use AutoFillObject;

    /**
     * @var DocPreviewPhoto
     */
    public $photo;

    /**
     * @var DocPreviewVideo
     */
    public $video;

    /**
     * @return DocPreviewPhoto
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return DocPreviewVideo
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'photo' => 'VkSdk\Docs\Includes\DocPreviewPhoto',
            'video' => 'VkSdk\Docs\Includes\DocPreviewVideo',
        ];
    }

    /**
     * @return $this
     *
     * @param DocPreviewPhoto $photo
     */
    public function setPhoto(DocPreviewPhoto $photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return $this
     *
     * @param DocPreviewVideo $video
     */
    public function setVideo(DocPreviewVideo $video)
    {
        $this->video = $video;

        return $this;
    }
}
