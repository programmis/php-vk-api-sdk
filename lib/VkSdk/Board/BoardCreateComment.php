<?php

namespace VkSdk\Board;

use VkSdk\Includes\Request;
use VkSdk\Wall\Includes\WallAttachments;

/**
 * Добавляет новый комментарий в обсуждении.
 *
 * Class BoardCreateComment
 *
 * @see https://vk.com/dev/board.createComment
 *
 * @package VkSdk\Board
 */
class BoardCreateComment extends Request
{
    /**
     * @var WallAttachments[] $attachments
     */
    private $attachments = [];

    /**
     * @var int $comment_id
     */
    private $comment_id;

    /**
     * идентификатор созданного комментария.
     *
     * @return int
     */
    public function getCommentId()
    {
        return $this->comment_id;
    }

    /**
     * идентификатор стикера.
     * положительное число
     *
     * @param int $sticker_id
     *
     * @return $this
     */
    public function setStickerId($sticker_id)
    {
        $this->vkarg_sticker_id = $sticker_id;

        return $this;
    }

    /**
     * Добавление в список объектов, приложенных к комментарию
     *
     * @param WallAttachments $attachments
     *
     * @return $this
     */
    public function addAttachment(WallAttachments $attachments)
    {
        $this->attachments[] = $attachments;

        return $this;
    }

    /**
     * 1 — сообщение будет опубликовано от имени группы,
     * 0 — сообщение будет опубликовано от имени пользователя (по умолчанию).
     * флаг, может принимать значения 1 или 0
     *
     * @param int $from_group
     *
     * @return $this
     */
    public function setFromGroup($from_group)
    {
        $this->vkarg_from_group = $from_group;

        return $this;
    }

    /**
     * текст комментария.
     * Обязательный параметр, если не добавлено значение addAttachment.
     *
     * @param string $message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->vkarg_message = $message;

        return $this;
    }

    /**
     * идентификатор сообщества, в котором находится обсуждение.
     * обязательный параметр
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
     * идентификатор темы, в которой необходимо оставить комментарий.
     * обязательный параметр
     *
     * @param int $topic_id
     *
     * @return $this
     */
    public function setTopicId($topic_id)
    {
        $this->vkarg_topic_id = $topic_id;
        return $this;
    }

    /**
     * уникальный идентификатор,
     * предназначенный для предотвращения повторной отправки одинакового комментария.
     *
     * @param string $guid
     *
     * @return $this
     */
    public function setGuid($guid)
    {
        $this->vkarg_topic_id = $guid;

        return $this;
    }

    /** @inheritdoc */
    public function getMethod()
    {
        return "board.createComment";
    }

    /** @inheritdoc */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * В случае успеха идентификатор созданного комментария
     * можно посмотреть вызвав метод getCommentId
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $attachments = "";

        $first = true;
        foreach ($this->attachments as $attach) {
            if (!$first) {
                $attachments .= ",";
            }
            $attachments .= $attach->getAttachment();
            $first = false;
        }

        if ($attachments) {
            $this->setParameter("attachments", $attachments);
        } else {
            $this->setRequiredParams('message');
        }

        $this->setRequiredParams(array(
            'group_id',
            'topic_id',
        ));

        $result = $this->execApi();

        if ($json = $this->getJsonResponse()) {
            if (isset($json->response) && $json->response) {
                $this->comment_id = $json->response;
            }
        }

        return $result;
    }
}
