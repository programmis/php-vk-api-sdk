<?php

namespace VkSdk\Status;

use VkSdk\Includes\Request;

/**
 * Устанавливает новый статус текущему пользователю или сообществу.
 *
 * @see     https://vk.com/dev/status.set
 *
 * Class StatusSet
 * @package VkSdk\Status
 */
class StatusSet extends Request
{
    /**
     * идентификатор сообщества, в котором будет установлен статус.
     * По умолчанию статус устанавливается текущему пользователю.
     *
     * @param int $group_id
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }

    /**
     * текст нового статуса.
     *
     * @param string $text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->vkarg_text = $text;

        return $this;
    }

    public function getMethod()
    {
        return "status.set";
    }

    public function getApiVersion()
    {
        return '5.60';
    }

    /**
     * В случае успешной установки или очистки статуса возвращает true
     *
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
}
