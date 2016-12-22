<?php

namespace VkApi\Methods;

use VkApi\Includes\ApiTrait;

/**
 * Class Docs
 *
 * @package VkApi\Methods
 */
class Docs
{
    use ApiTrait;

    /**
     * @return \VkSdk\Docs\DocsAdd
     */
    public function add()
    {
        return new \VkSdk\Docs\DocsAdd($this->token);
    }

    /**
     * @return \VkSdk\Docs\DocsDelete
     */
    public function delete()
    {
        return new \VkSdk\Docs\DocsDelete($this->token);
    }

    /**
     * @return \VkSdk\Docs\DocsEdit
     */
    public function edit()
    {
        return new \VkSdk\Docs\DocsEdit($this->token);
    }

    /**
     * @return \VkSdk\Docs\DocsGet
     */
    public function get()
    {
        return new \VkSdk\Docs\DocsGet($this->token);
    }

    /**
     * @return \VkSdk\Docs\DocsGetById
     */
    public function getById()
    {
        return new \VkSdk\Docs\DocsGetById($this->token);
    }

    /**
     * @return \VkSdk\Docs\DocsGetTypes
     */
    public function getTypes()
    {
        return new \VkSdk\Docs\DocsGetTypes($this->token);
    }

    /**
     * @return \VkSdk\Docs\DocsGetUploadServer
     */
    public function getUploadServer()
    {
        return new \VkSdk\Docs\DocsGetUploadServer($this->token);
    }

    /**
     * @return \VkSdk\Docs\DocsGetWallUploadServer
     */
    public function getWallUploadServer()
    {
        return new \VkSdk\Docs\DocsGetWallUploadServer($this->token);
    }

    /**
     * @return \VkSdk\Docs\DocsSave
     */
    public function save()
    {
        return new \VkSdk\Docs\DocsSave($this->token);
    }

    /**
     * @return \VkSdk\Docs\DocsSearch
     */
    public function search()
    {
        return new \VkSdk\Docs\DocsSearch($this->token);
    }
}
