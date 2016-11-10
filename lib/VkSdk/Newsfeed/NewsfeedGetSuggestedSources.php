<?php

namespace VkSdk\Newsfeed;

use VkSdk\Includes\Request;

/**
 * Returns communities and users that current user is suggested to follow.
 * Class NewsfeedGetSuggestedSources
 * @package VkSdk\Newsfeed
 */
class NewsfeedGetSuggestedSources extends Request
{

    /**
     * list of extra fields to be returned. See  and .
     *
     * @return $this
     *
     * @param string $field
     */
    public function addField($field)
    {
        $this->vkarg_fields[] = $field;

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
     * @inheritdoc
     */
    public function getMethod()
    {
        return "newsfeed.getSuggestedSources";
    }

    /**
     * amount of communities or users to return.
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
     * list of extra fields to be returned. See  and .
     *
     * @return $this
     *
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->vkarg_fields = $fields;

        return $this;
    }

    /**
     * offset required to choose a particular subset of communities or users.
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
     * shuffle the returned list or not.
     *
     * @return $this
     *
     * @param boolean $shuffle
     */
    public function setShuffle($shuffle)
    {
        $this->vkarg_shuffle = $shuffle;

        return $this;
    }
}
