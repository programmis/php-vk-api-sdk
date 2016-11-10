<?php
namespace VkSdk\Apps;

use lib\AutoFillObject;
use VkSdk\Apps\Includes\App;
use VkSdk\Includes\Request;

/**
 * Returns applications data.
 * Class AppsGet
 *
 * @package VkSdk\Apps
 */
class AppsGet extends Request
{

    use AutoFillObject;

    /**
     * 'abl' — prepositional.
     */
    const NAME_CASE_ABL = 'abl';

    /**
     * 'acc' — accusative
     */
    const NAME_CASE_ACC = 'acc';

    /**
     * 'dat' — dative
     */
    const NAME_CASE_DAT = 'dat';

    /**
     * 'gen' — genitive
     */
    const NAME_CASE_GEN = 'gen';

    /**
     * 'ins' — instrumental
     */
    const NAME_CASE_INS = 'ins';

    /**
     * 'nom' — nominative (default)
     */
    const NAME_CASE_NOM = 'nom';

    /**
     * 'android' — Android
     */
    const PLATFORM_ANDROID = 'android';

    /**
     * 'ios' — iOS
     */
    const PLATFORM_IOS = 'ios';

    /**
     * 'web' — приложения на vk.com.
     */
    const PLATFORM_WEB = 'web';

    /**
     * 'winphone' — Windows Phone
     */
    const PLATFORM_WINPHONE = 'winphone';

    /**
     * @var integer
     */
    public $count;

    /**
     * @var App[]
     */
    public $items;

    /**
     * List of application ID
     *
     * @return $this
     *
     * @param string $app_id
     */
    public function addAppId($app_id)
    {
        $this->vkarg_app_ids[] = $app_id;

        return $this;
    }

    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'contacts', 'education', 'online', 'counters', 'relation', 'last_seen', 'activity', 'can_write_private_message', 'can_see_all_posts', 'can_post', 'universities';  (only if return_friends - 1)
     * see FieldsValues::FIELD_* constants
     *
     * @return $this
     *
     * @param string $field
     */
    public function addField($field)
    {
        $this->vkarg_fields[] = $field;

        return $this;
    }

    /**
     * @return $this
     *
     * @param App $item
     */
    public function addItem(App $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                return true;
            }
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function getApiVersion()
    {
        return "5.60";
    }

    /**
     * Total number
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return App[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "apps.get";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Apps\Includes\App',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Application ID
     *
     * @return $this
     *
     * @param integer $app_id
     */
    public function setAppId($app_id)
    {
        $this->vkarg_app_id = $app_id;

        return $this;
    }

    /**
     * List of application ID
     *
     * @return $this
     *
     * @param array $app_ids
     */
    public function setAppIds(array $app_ids)
    {
        $this->vkarg_app_ids = $app_ids;

        return $this;
    }

    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate' (birthdate), 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'contacts', 'education', 'online', 'counters', 'relation', 'last_seen', 'activity', 'can_write_private_message', 'can_see_all_posts', 'can_post', 'universities';  (only if return_friends - 1)
     * see FieldsValues::FIELD_* constants
     *
     * @return $this
     *
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->vkarg_fields = $fields;

        return $this;
    }

    /**
     * Case for declension of user name and surname:; 'nom' — nominative (default);; 'gen' — genitive;; 'dat' — dative;; 'acc' — accusative;; 'ins' — instrumental;; 'abl' — prepositional.; ; (only if 'return_friends' = '1')
     * see self::NAME_CASE_* constants
     *
     * @return $this
     *
     * @param string $name_case
     */
    public function setNameCase($name_case)
    {
        $this->vkarg_name_case = $name_case;

        return $this;
    }

    /**
     * platform. Possible values:; *'ios' — iOS;; *'android' — Android;; *'winphone' — Windows Phone;; *'web' — приложения на vk.com.; By default: 'web'.
     * see self::PLATFORM_* constants
     *
     * @return $this
     *
     * @param string $platform
     */
    public function setPlatform($platform)
    {
        $this->vkarg_platform = $platform;

        return $this;
    }
}
