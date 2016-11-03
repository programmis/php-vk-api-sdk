<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;

/**
 * Одобряет или создает заявку на добавление в друзья.
 * Если идентификатор выбранного пользователя присутствует
 * в списке заявок на добавление в друзья,
 * полученном методом friends.getRequests,
 * то одобряет заявку на добавление и добавляет
 * выбранного пользователя в друзья к текущему пользователю.
 * В противном случае создает заявку на добавление в друзья
 * текущего пользователя к выбранному пользователю.
 * Требуются права доступа: friends.
 *
 * Class FriendsAdd
 *
 * @see https://vk.com/dev/friends.add
 *
 * @package VkSdk\Friends
 */
class FriendsAdd extends Request
{
    const RESULT_REQUEST_SEND = 1;
    const RESULT_REQUEST_ACCEPT = 2;
    const RESULT_REQUEST_RESEND = 4;

    /**
     * @var int $result
     */
    private $result;

    /**
     * RESULT_REQUEST_SEND — заявка на добавление данного пользователя в друзья отправлена;
     * RESULT_REQUEST_ACCEPT — заявка на добавление в друзья от данного пользователя одобрена;
     * RESULT_REQUEST_RESEND — повторная отправка заявки.
     *
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * true, если необходимо отклонить входящую заявку
     * (оставить пользователя в подписчиках).
     *
     * @param bool $follow
     *
     * @return $this
     */
    public function setFollow($follow)
    {
        $this->vkarg_follow = $follow ? '1' : '0';

        return $this;
    }

    /**
     * текст сопроводительного сообщения для заявки на добавление в друзья.
     * Максимальная длина сообщения — 500 символов.
     *
     * @param $text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->vkarg_text = $text;

        return $this;
    }

    /**
     * идентификатор пользователя,
     * которому необходимо отправить заявку,
     * либо заявку от которого необходимо одобрить.
     * положительное число, обязательный параметр
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
        return 'friends.add';
    }

    /** @inheritdoc */
    public function getApiVersion()
    {
        return '5.60';
    }

    /**
     * В случае успеха,
     * результат можно посмотреть вызвав метод getResult
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams('user_id');

        $result = $this->execApi();

        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->result = $json->response;
                return true;
            }
        }

        return false;
    }
}
