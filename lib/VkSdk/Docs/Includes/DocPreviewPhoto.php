<?php
namespace VkSdk\Docs\Includes;

use lib\AutoFillObject;
use VkSdk\Photos\Includes\PhotoSizes;

/**
 * Class DocPreviewPhoto
 * @package VkSdk\Docs\Includes
 */
class DocPreviewPhoto
{
    use AutoFillObject;

    /**
     * @var PhotoSizes[]
     */
    public $sizes;

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
     * @return PhotoSizes[]
     */
    public function getSizes()
    {
        return $this->sizes;
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
}
