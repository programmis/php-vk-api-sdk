<?php
namespace VkSdk\Messages;

use VkSdk\Includes\Request;

/**
 * Returns a list of IDs of users participating in a chat.
 * Class MessagesGetChatUsers
 *
 * @package VkSdk\Messages
 */
class MessagesGetChatUsers extends Request
{

    /**
     * 'abl' — prepositional
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
     * Chat IDs.
     *
     * @return $this
     *
     * @param integer $chat_id
     */
    public function addChatId($chat_id)
    {
        $this->vkarg_chat_ids[] = $chat_id;

        return $this;
    }

    /**
     * Profile fields to return.;
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
     * @inheritdoc
     */
    public function getMethod()
    {
        return "messages.getChatUsers";
    }

    /**
     * Chat ID.
     *
     * @return $this
     *
     * @param integer $chat_id
     */
    public function setChatId($chat_id)
    {
        $this->vkarg_chat_id = $chat_id;

        return $this;
    }

    /**
     * Chat IDs.
     *
     * @return $this
     *
     * @param array $chat_ids
     */
    public function setChatIds(array $chat_ids)
    {
        $this->vkarg_chat_ids = $chat_ids;

        return $this;
    }

    /**
     * Profile fields to return.;
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
     * Case for declension of user name and surname:; 'nom' — nominative (default); 'gen' — genitive; 'dat' — dative; 'acc' — accusative; 'ins' — instrumental; 'abl' — prepositional
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
}
