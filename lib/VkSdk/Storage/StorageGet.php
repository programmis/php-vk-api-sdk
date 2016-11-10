<?php

namespace VkSdk\Storage;

use VkSdk\Includes\Request;

/**
 * Returns a value of variable with the name set by key parameter.
 * Class StorageGet
 * @package VkSdk\Storage
 */
class StorageGet extends Request
{

    /**
     * @return $this
     *
     * @param string $key
     */
    public function addKey($key)
    {
        $this->vkarg_keys[] = $key;

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
        return "storage.get";
    }

    /**
     * @return $this
     *
     * @param string $key
     */
    public function setKey($key)
    {
        $this->vkarg_key = $key;

        return $this;
    }

    /**
     * @return $this
     *
     * @param array $keys
     */
    public function setKeys(array $keys)
    {
        $this->vkarg_keys = $keys;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $user_id
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }
}
