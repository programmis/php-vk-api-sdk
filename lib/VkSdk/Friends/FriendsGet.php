<?php

namespace VkSdk\Friends;

use VkSdk\Includes\Request;
use VkSdk\Users\Includes\UserInfo;

/**
 * Возвращает список идентификаторов друзей пользователя
 * или расширенную информацию о друзьях пользователя
 * (при использовании параметра fields).
 *
 * Class FriendsGet
 *
 * @see     https://vk.com/dev/friends.get
 *
 * @package VkSdk\Friends
 */
class FriendsGet extends Request
{
    /**
     * порядок, в котором нужно вернуть список друзей.
     * сортировать по рейтингу, аналогично тому,
     * как друзья сортируются в разделе Мои друзья
     * (данный параметр доступен только для Desktop-приложений).
     */
    const ORDER_HINT = 'hints';

    /**
     * порядок, в котором нужно вернуть список друзей.
     * возвращает друзей в случайном порядке.
     */
    const ORDER_RANDOM = 'random';

    /**
     * порядок, в котором нужно вернуть список друзей.
     * возвращает выше тех друзей,
     * у которых установлены мобильные приложения.
     */
    const ORDER_MOBILE = 'mobile';

    /**
     * порядок, в котором нужно вернуть список друзей.
     * сортировать по имени. Данный тип сортировки работает медленно,
     * так как сервер будет получать всех друзей
     * а не только указанное количество count.
     * (работает только при переданном параметре fields).
     */
    const ORDER_NAME = 'name';

    /**
     * падеж для склонения имени и фамилии пользователя.
     * именительный
     */
    const NAME_CASE_NOM = 'nom';

    /**
     * падеж для склонения имени и фамилии пользователя.
     * родительный
     */
    const NAME_CASE_GEN = 'gen';

    /**
     * падеж для склонения имени и фамилии пользователя.
     * дательный
     */
    const NAME_CASE_DAT = 'dat';

    /**
     * падеж для склонения имени и фамилии пользователя.
     * винительный
     */
    const NAME_CASE_ACC = 'acc';

    /**
     * падеж для склонения имени и фамилии пользователя.
     * творительный
     */
    const NAME_CASE_INS = 'ins';

    /**
     * падеж для склонения имени и фамилии пользователя.
     * предложный
     */
    const NAME_CASE_ABL = 'abl';

    /** @var int $count */
    private $count;
    /** @var array $fields */
    private $fields = [];
    /** @var array $ids */
    private $ids = [];
    /** @var UserInfo[] $users */
    private $users;

    /**
     * При использовании параметра fields
     * возвращает список объектов пользователей
     *
     * @return UserInfo[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param UserInfo $user
     *
     * @return $this
     */
    public function addUser($user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * список идентификаторов (id) друзей пользователя,
     * если метод addField не использовался
     *
     * @return array
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * количество записей в результате
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * падеж для склонения имени и фамилии пользователя.
     * Возможные значения: см. константы NAME_CASE_*
     * По умолчанию NAME_CASE_NOM.
     *
     * @param string $name_case
     *
     * @return $this
     */
    public function setNameCase($name_case)
    {
        $this->vkarg_name_case = $name_case;

        return $this;
    }

    /**
     * список дополнительных полей, которые необходимо вернуть.
     * константы из класса FriendsFields
     *
     * @param string $field
     *
     * @return $this
     */
    public function addField($field)
    {
        $this->fields[] = $field;

        return $this;
    }

    /**
     * смещение, необходимое для выборки
     * определенного подмножества друзей.
     *
     * @param $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * количество друзей, которое нужно вернуть.
     * (по умолчанию – все друзья)
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
     * идентификатор списка друзей, полученный методом
     * friends.getLists, друзей из которого необходимо получить.
     * Данный параметр учитывается,
     * только когда параметр user_id равен идентификатору
     * текущего пользователя.
     * Данный параметр доступен только для Desktop-приложений.
     *
     * @param int $list_id
     *
     * @return $this
     */
    public function setListId($list_id)
    {
        $this->vkarg_list_id = $list_id;

        return $this;
    }

    /**
     * порядок, в котором нужно вернуть список друзей.
     * По умолчанию список сортируется в порядке возрастания
     * идентификаторов пользователей.
     * Допустимые значения: смотри константы ORDER_*
     *
     * @param string $order
     *
     * @return $this
     */
    public function setOrder($order)
    {
        $this->vkarg_order = $order;

        return $this;
    }

    /**
     * идентификатор пользователя, для которого необходимо получить
     * список друзей. Если параметр не задан, то считается,
     * что он равен идентификатору текущего пользователя
     * (справедливо для вызова с передачей access_token).
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
        return 'friends.get';
    }

    /** @inheritdoc */
    public function getApiVersion()
    {
        return '5.60';
    }

    /**
     * После успешного выполнения возвращает список идентификаторов
     * (id) друзей пользователя, которые можно посмотреть вызвав метод getIds,
     * если метод addField не использовался.
     * При использовании метода addField возвращает список объектов
     * пользователей (метод getUsers), но не более 5000.
     * колличество возвращенных записей можно посмотреть вызвав метод getCount
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        if ($this->fields) {
            $this->setParameter("fields", implode(",", $this->fields));
        }

        $result = $this->execApi();

        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                if (isset($json->response->count)) {
                    $this->count = $json->response->count;
                }
                if (isset($json->response->items)
                    && $json->response->items
                    && isset($json->response->items[0])
                ) {
                    if (is_object($json->response->items[0])) {
                        foreach ($json->response->items as $item) {
                            $user = new UserInfo();
                            $user->fillByJson($item);
                            $this->addUser($user);
                        }
                    } else {
                        $this->ids = $json->response->items;
                    }
                }

                return true;
            }
        }

        return false;
    }
}
