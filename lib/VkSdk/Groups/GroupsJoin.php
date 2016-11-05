<?php

namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * Данный метод позволяет вступить в группу, публичную страницу,
 * а также подтвердить участие во встрече.
 *
 * Class GroupsJoin
 * @package VkSdk\Groups
 */
class GroupsJoin extends Request
{
    /**
     * идентификатор сообщества.
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
     * опциональный параметр, учитываемый, если group_id принадлежит встрече.
     * true — Возможно пойду. false — Точно пойду.
     * По умолчанию false.
     *
     * @param $not_sure
     *
     * @return $this
     */
    public function setNotSure($not_sure)
    {
        $this->vkarg_not_sure = $not_sure ? '1' : '0';

        return $this;
    }

    /** @inheritdoc */
    public function getMethod()
    {
        return "groups.join";
    }

    /** @inheritdoc */
    public function getApiVersion()
    {
        return '5.60';
    }

    /**
     * В случае успешного вступления метод вернёт true
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams('group_id');

        $result = $this->execApi();

        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response)) {
                return true;
            }
        }

        return false;
    }
}
