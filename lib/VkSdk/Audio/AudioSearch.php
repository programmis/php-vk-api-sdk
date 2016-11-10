<?php
namespace VkSdk\Audio;

use lib\AutoFillObject;
use VkSdk\Audio\Includes\Full;
use VkSdk\Includes\Request;

/**
 * Returns a list of audio matching the search criteria.
 * Class AudioSearch
 *
 * @package VkSdk\Audio
 */
class AudioSearch extends Request
{

    use AutoFillObject;

    /**
     * '0' — by date added.
     */
    const SORT_0 = 0;

    /**
     * '1' — by duration
     */
    const SORT_1 = 1;

    /**
     * '2' — by popularity
     */
    const SORT_2 = 2;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Full[]
     */
    public $items;

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
        return "audio.search";
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
     * '1' — to correct for mistakes in the search query (e.g., if you enter 'Beetles', the system will search for 'Beatles').
     *
     * @return $this
     *
     * @param boolean $auto_complete
     */
    public function setAutoComplete($auto_complete)
    {
        $this->vkarg_auto_complete = $auto_complete;

        return $this;
    }

    /**
     * '1' — to return only audio files that have associated lyrics.
     *
     * @return $this
     *
     * @param boolean $lyrics
     */
    public function setLyrics($lyrics)
    {
        $this->vkarg_lyrics = $lyrics;

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
     * '1' — to search only by artist name.
     *
     * @return $this
     *
     * @param boolean $performer_only
     */
    public function setPerformerOnly($performer_only)
    {
        $this->vkarg_performer_only = $performer_only;

        return $this;
    }

    /**
     * Search query string (e.g., 'The Beatles').
     *
     * @return $this
     *
     * @param string $q
     */
    public function setQ($q)
    {
        $this->vkarg_q = $q;

        return $this;
    }

    /**
     * '1' — to search among current user's audios. By default: '0'.
     *
     * @return $this
     *
     * @param boolean $search_own
     */
    public function setSearchOwn($search_own)
    {
        $this->vkarg_search_own = $search_own;

        return $this;
    }

    /**
     * Sort order: ; '1' — by duration;; '2' — by popularity;; '0' — by date added.
     * see self::SORT_* constants
     *
     * @return $this
     *
     * @param integer $sort
     */
    public function setSort($sort)
    {
        $this->vkarg_sort = $sort;

        return $this;
    }
}
