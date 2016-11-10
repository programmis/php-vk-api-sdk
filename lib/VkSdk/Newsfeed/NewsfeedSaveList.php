<?php
namespace VkSdk\Newsfeed;

use VkSdk\Includes\Request;

/**
 * Creates and edits user newsfeed lists
 * Class NewsfeedSaveList
 *
 * @package VkSdk\Newsfeed
 */
class NewsfeedSaveList extends Request
{

    /**
     * users and communities identifiers to be added to the list. Community identifiers must be negative numbers.
     *
     * @return $this
     *
     * @param integer $source_id
     */
    public function addSourceId($source_id)
    {
        $this->vkarg_source_ids[] = $source_id;

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
        return "newsfeed.saveList";
    }

    /**
     * numeric list identifier (if not sent, will be set automatically).
     *
     * @return $this
     *
     * @param integer $list_id
     */
    public function setListId($list_id)
    {
        $this->vkarg_list_id = $list_id;

        return $this;
    }

    /**
     * reposts display on and off ('1' is for off).
     *
     * @return $this
     *
     * @param boolean $no_reposts
     */
    public function setNoReposts($no_reposts)
    {
        $this->vkarg_no_reposts = $no_reposts;

        return $this;
    }

    /**
     * users and communities identifiers to be added to the list. Community identifiers must be negative numbers.
     *
     * @return $this
     *
     * @param array $source_ids
     */
    public function setSourceIds(array $source_ids)
    {
        $this->vkarg_source_ids = $source_ids;

        return $this;
    }

    /**
     * list name.
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
}
