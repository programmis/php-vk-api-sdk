<?php

namespace VkSdk\Board;

use VkSdk\Includes\Request;
use VkSdk\Wall\Includes\WallAttachments;

/**
 * Редактирует одно из сообщений в обсуждении сообщества.
 * Требуются права доступа: groups.
 *
 * Class BoardEditComment
 *
 * @see https://vk.com/dev/board.editComment
 *
 * @package VkSdk\Board
 */
class BoardEditComment extends Request
{
    /**
     * @var WallAttachments[] $attachments
     */
    private $attachments = [];

    /**
     * идентификатор комментария в обсуждении.
     * положительное число, обязательный параметр
     *
     * @param int $comment_id
     *
     * @return $this
     */
    public function setCommentId($comment_id)
    {
        $this->vkarg_comment_id = $comment_id;

        return $this;
    }

    /**
     * новый список объектов, приложенных к комментарию.
     * является обязательным, если не задан setMessage.
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
     * новый текст комментария
     * является обязательным, если не добавлено значение addAttachment.
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
     * идентификатор сообщества, в котором размещено обсуждение.
     * положительное число, обязательный параметр
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
     * идентификатор обсуждения.
     * положительное число, обязательный параметр
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

    /** @inheritdoc */
    public function getMethod()
    {
        return "board.editComment";
    }

    /** @inheritdoc */
    public function getApiVersion()
    {
        return '5.60';
    }

    /**
     * После успешного выполнения возвращает true
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

        if (!$this->getParameter('message')) {
            $this->setRequiredParams('attachments');
        }

        $this->setRequiredParams(array(
            'group_id',
            'topic_id',
            'comment_id'
        ));

        $result = $this->execApi();

        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }
}
