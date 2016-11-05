<?php

namespace VkSdk\Status;

use VkSdk\Audio\Includes\AudioInfo;
use VkSdk\Includes\Request;

/**
 * Получает текст статуса пользователя или сообщества.
 *
 * Class StatusGet
 * @package VkSdk\Status
 */
class StatusGet extends Request
{
    /** @var string $text */
    private $text;
    /** @var AudioInfo $audio */
    private $audio;

    /**
     * информация о прослушиваемой аудиозаписи
     *
     * @return AudioInfo
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * статус пользователя
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * идентификатор сообщества, статус которого необходимо получить.
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
     * идентификатор пользователя или сообщества,
     * информацию о статусе которого нужно получить.
     * по умолчанию идентификатор текущего пользователя
     *
     * @param int $user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->vkarg_user_id = $user_id;

        return $this;
    }

    /** @inheritdoc */
    public function getMethod()
    {
        return "status.get";
    }

    /** @inheritdoc */
    public function getApiVersion()
    {
        return '5.60';
    }

    /**
     * В случае успеха возвращает объект, у которого в поле text содержится
     * текст статуса пользователя или сообщества.
     * Если у пользователя включена трансляция играющей музыки в статус и
     * в данный момент воспроизводится аудиозапись,
     * то также будет возвращен объект audio.
     * результат можно посмотреть вызвав методы getText и getAudio
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();

        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                if (isset($json->response->text)) {
                    $this->text = $json->response->text;
                }
                if (isset($json->response->audio)) {
                    $this->audio = new AudioInfo();
                    $this->audio->fillByJson($json->response->audio);
                }

                return true;
            }
        }

        return false;
    }
}
