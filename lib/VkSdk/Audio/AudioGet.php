<?php
namespace VkSdk\Audio;

use lib\AutoFillObject;
use VkSdk\Audio\Includes\Full;
use VkSdk\Includes\Request;

/**
 * Returns a list of audio files of a user or community.
 * Class AudioGet
 *
 * @package VkSdk\Audio
 */
class AudioGet extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Full[]
     */
    public $items;

    /**
     * IDs of the audio files to return.
     *
     * @return $this
     *
     * @param integer $audio_id
     */
    public function addAudioId($audio_id)
    {
        $this->vkarg_audio_ids[] = $audio_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param Full $item
     */
    public function addItem(Full $item)
    {
        $this->items[] = $item;

        return $this;
    }

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
     * Total number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of audio files to return.
     *
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * @return Full[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "audio.get";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Audio\Includes\Full',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Audio album ID.
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
     * IDs of the audio files to return.
     *
     * @return $this
     *
     * @param array $audio_ids
     */
    public function setAudioIds(array $audio_ids)
    {
        $this->vkarg_audio_ids = $audio_ids;

        return $this;
    }

    /**
     * '1' — to return information about users who uploaded audio files
     *
     * @return $this
     *
     * @param boolean $need_user
     */
    public function setNeedUser($need_user)
    {
        $this->vkarg_need_user = $need_user;

        return $this;
    }

    /**
     * Offset needed to return a specific subset of audio files.
     *
     * @return $this
     *
     * @param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * ID of the user or community that owns the audio file. Use a negative value to designate a community ID.
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
