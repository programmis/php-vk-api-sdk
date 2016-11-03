<?php

namespace VkSdk\Board;

use VkSdk\Includes\Request;

/**
 * Удаляет сообщение темы в обсуждениях сообщества.
 * Требуются права доступа: groups.
 *
 * Class BoardDeleteComment
 *
 * @see https://vk.com/dev/board.deleteComment
 *
 * @package VkSdk\Board
 */
class BoardDeleteComment extends Request
{
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

    /**
     * идентификатор сообщества.
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

    public function getMethod()
    {
        return 'board.deleteComment';
    }

    public function getApiVersion()
    {
        return '5.60';
    }

    /**
     * После успешного выполнения, а также в том случае,
     * если комментарий уже удален, возвращает true.
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
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
