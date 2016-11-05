<?php

namespace VkSdk\Messages;

use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\MessageItem;

/**
 * Возвращает список входящих либо исходящих личных сообщений
 * текущего пользователя/сообщества.
 *
 * @see     https://vk.com/dev/messages.get
 *
 * Class MessagesGet
 * @package VkSdk\Messages
 */
class MessagesGet extends Request
{
    private $count;

    private $messages = [];

    public function getMessages()
    {
        return $this->messages;
    }

    public function getCount()
    {
        return $this->count;
    }

    /**
     * если этот параметр равен true, сервер вернет исходящие сообщения.
     *
     * @param boolean $out
     *
     * @return $this
     */
    public function setOut($out)
    {
        $this->vkarg_out = $out ? '1' : '0';

        return $this;
    }

    /**
     * смещение, необходимое для выборки определенного
     * подмножества сообщений
     *
     * @param int $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * количество сообщений, которое необходимо получить.
     * положительное число, по умолчанию 20,
     * максимальное значение 200
     *
     * @param int $count
     *
     * @return $this
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * максимальное время, прошедшее с момента отправки сообщения до
     * текущего момента в секундах. 0, если Вы хотите получить
     * сообщения любой давности.
     *
     * @param int $time_offset
     *
     * @return $this
     */
    public function setTimeOffset($time_offset)
    {
        $this->vkarg_time_offset = $time_offset;

        return $this;
    }

    /**
     * фильтр возвращаемых сообщений:
     * 8 — важные сообщения.
     *
     * @param int $filters
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->vkarg_filters = $filters;

        return $this;
    }

    /**
     * количество символов, по которому нужно обрезать сообщение.
     * Укажите 0, если Вы не хотите обрезать сообщение.
     * (по умолчанию сообщения не обрезаются).
     * Обратите внимание, текст обрезается по словам,
     * точное число символов может не совпадать с указанным значением.
     *
     * @param int $preview_length
     *
     * @return $this
     */
    public function setPreviewLength($preview_length)
    {
        $this->vkarg_preview_length = $preview_length;

        return $this;
    }

    /**
     * идентификатор сообщения, полученного перед тем,
     * которое нужно вернуть последним
     * (при условии, что после него было получено не более count сообщений,
     * иначе необходимо использовать с параметром offset).
     *
     * @param int $last_message_id
     *
     * @return $this
     */
    public function setLastMessageId($last_message_id)
    {
        $this->vkarg_last_message_id = $last_message_id;

        return $this;
    }

    /** @inheritdoc */
    public function getMethod()
    {
        return "messages.get";
    }

    /** @inheritdoc */
    public function getApiVersion()
    {
        return '5.60';
    }

    /**
     * После успешного выполнения возвращает объект,
     * содержащий число результатов в поле count и массив объектов,
     * описывающих личные сообщения
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();

        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                if (isset($json->response->count)) {
                    $this->count = $json->response->count;
                }
                if (isset($json->response->items)) {
                    foreach ($json->response->items as $key => $msg) {
                        $this->messages[$key] = new MessageItem();
                        $this->messages[$key]->setId($msg->id)
                            ->setDate($msg->date)
                            ->setOut($msg->out)
                            ->setUserId($msg->user_id)
                            ->setReadState($msg->read_state)
                            ->setTitle($msg->title)
                            ->setBody($msg->body);
                    }
                }

                return true;
            }
        }

        return false;
    }
}
