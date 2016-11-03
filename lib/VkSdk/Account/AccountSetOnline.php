<?php

namespace VkSdk\Account;

use VkSdk\Includes\Request;

/**
 * Помечает текущего пользователя как online на 15 минут.
 *
 * Class AccountSetOnline
 *
 * @see https://vk.com/dev/account.setOnline
 *
 * @package VkSdk\Account
 */
class AccountSetOnline extends Request
{
    /**
     * возможны ли видеозвонки для данного устройства
     *
     * @param bool $voip
     *
     * @return $this
     */
    public function setVoip($voip)
    {
        $this->vkarg_voip = $voip ? '1' : '0';

        return $this;
    }

    /** @inheritdoc */
    public function getMethod()
    {
        return "account.setOnline";
    }

    /** @inheritdoc */
    public function getApiVersion()
    {
        return '5.60';
    }

    /**
     * В случае успешного выполнения метода будет возвращён true.
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $json = $this->execApi();
        if (!$json) {
            return false;
        }

        if (!is_object($json) && $json < 0) {
            return $json;
        }

        if (isset($json->response) && $json->response) {
            return true;
        }

        return false;
    }
}
