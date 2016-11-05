<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;

/**
 * Возвращает информацию о полученных или отправленных заявках
 * на добавление в друзья для текущего пользователя.
 *
 * Class FriendsGetRequests
 * @package VkSdk\Friends
 */
class FriendsGetRequests extends Request
{
    /** @var int $count */
    private $count;
    /** @var array $items */
    private $items;

    /**
     * количество записей
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * результат запроса
     *
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * false - не возвращать просмотренные заявки,
     * true — возвращать просмотренные заявки.
     * (Если out = true, данный параметр не учитывается).
     *
     * @param bool $need_viewed
     *
     * @return $this
     */
    public function setNeedViewed($need_viewed)
    {
        $this->vkarg_need_viewed = $need_viewed ? '1' : '0';

        return $this;
    }

    /**
     * true — возвращать рекомендованных другими пользователями друзей,
     * false — возвращать заявки в друзья (по умолчанию).
     *
     * @param bool $suggested
     *
     * @return $this
     */
    public function setSuggested($suggested)
    {
        $this->vkarg_suggested = $suggested ? '1' : '0';

        return $this;
    }

    /**
     * false — сортировать по дате добавления,
     * true — сортировать по количеству общих друзей.
     * (Если out = true, этот параметр не учитывается).
     *
     * @param bool $sort
     *
     * @return $this
     */
    public function setSort($sort)
    {
        $this->vkarg_sort = $sort ? '1' : '0';

        return $this;
    }

    /**
     * false — возвращать полученные заявки в друзья (по умолчанию),
     * true — возвращать отправленные пользователем заявки.
     *
     * @param bool $out
     *
     * @return $this
     */
    public function setOut($out)
    {
        $this->vkarg_out = $out ? '1' : '0';

        return $this;
    }

    /**
     * определяет, требуется ли возвращать в ответе список общих друзей,
     * если они есть. Обратите внимание, что при использовании
     * need_mutual будет возвращено не более 2 заявок.
     *
     * @param bool $need_mutual
     *
     * @return $this
     */
    public function setNeedMutual($need_mutual)
    {
        $this->vkarg_need_mutual = $need_mutual ? '1' : '0';

        return $this;
    }

    /**
     * смещение, необходимое для выборки определенного
     * подмножества заявок на добавление в друзья.
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
     * максимальное количество заявок на добавление в друзья,
     * которые необходимо получить (не более 1000).
     * По умолчанию — 100.
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
     * определяет, требуется ли возвращать в ответе сообщения от
     * пользователей, подавших заявку на добавление в друзья.
     * И отправителя рекомендации при suggested = 1.
     *
     * @param bool $extended
     *
     * @return $this
     */
    public function setExtended($extended)
    {
        $this->vkarg_extended = $extended ? '1' : '0';

        return $this;
    }

    /** @inheritdoc */
    public function getMethod()
    {
        return "friends.getRequests";
    }

    /** @inheritdoc */
    public function getApiVersion()
    {
        return '5.60';
    }

    /**
     * Если не установлен параметр need_mutual,
     * то в случае успеха возвращает отсортированный в антихронологическом
     * порядке по времени подачи заявки список идентификаторов (id)
     * пользователей (кому или от кого пришла заявка).
     *
     * Если установлен параметр need_mutual,
     * то в случае успеха возвращает отсортированный в
     * антихронологическом порядке по времени подачи заявки массив объектов,
     * содержащих информацию о заявках на добавление в друзья.
     * Каждый из объектов содержит поле user_id являющийся идентификатором
     * пользователя. При наличии общих друзей, в объекте будет содержаться
     * поле mutual, в котором будет находиться список идентификаторов
     * общих друзей.
     *
     * результат можно посмотреть вызвав метод getItems
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
                if (isset($json->response->items) && $json->response->items) {
                    $this->items = $json->response->items;
                }

                return true;
            }
        }

        return false;
    }
}
