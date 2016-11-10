<?php
namespace VkSdk\Polls;

use VkSdk\Includes\Request;

/**
 * Returns a list of IDs of users who selected specific answers in the poll.
 * Class PollsGetVoters
 *
 * @package VkSdk\Polls
 */
class PollsGetVoters extends Request
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
     * Answer IDs.
     *
     * @return $this
     *
     * @param integer $answer_id
     */
    public function addAnswerId($answer_id)
    {
        $this->vkarg_answer_ids[] = $answer_id;

        return $this;
    }

    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate (birthdate)', 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online', 'counters'.;
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
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["poll_id", "answer_ids"]);

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
        return "polls.getVoters";
    }

    /**
     * Answer IDs.
     *
     * @return $this
     *
     * @param array $answer_ids
     */
    public function setAnswerIds(array $answer_ids)
    {
        $this->vkarg_answer_ids = $answer_ids;

        return $this;
    }

    /**
     * Number of user IDs to return (if the 'friends_only' parameter is not set, maximum '1000'; otherwise '10').; '100' — (default)
     *
     * @return $this
     *
     * @param integer $count
     */
    public function setCount($count)
    {
        $this->vkarg_count = $count;

        return $this;
    }

    /**
     * Profile fields to return. Sample values: 'nickname', 'screen_name', 'sex', 'bdate (birthdate)', 'city', 'country', 'timezone', 'photo', 'photo_medium', 'photo_big', 'has_mobile', 'rate', 'contacts', 'education', 'online', 'counters'.;
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
     * '1' — to return only current user's friends; '0' — to return all users (default);
     *
     * @return $this
     *
     * @param boolean $friends_only
     */
    public function setFriendsOnly($friends_only)
    {
        $this->vkarg_friends_only = $friends_only;

        return $this;
    }

    /**
     * @return $this
     *
     * @param boolean $is_board
     */
    public function setIsBoard($is_board)
    {
        $this->vkarg_is_board = $is_board;

        return $this;
    }

    /**
     * Case for declension of user name and surname: ; 'nom' — nominative (default) ; 'gen' — genitive ; 'dat' — dative ; 'acc' — accusative ; 'ins' — instrumental ; 'abl' — prepositional
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
     * Offset needed to return a specific subset of voters.; '0' — (default)
     *
     * @return $this
     *
     * @param integer $offset
     */
    public function setOffset($offset)
    {
        $this->vkarg_offset = $offset;

        return $this;
    }

    /**
     * ID of the user or community that owns the poll.  Use a negative value to designate a community ID.
     *
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->vkarg_owner_id = $owner_id;

        return $this;
    }

    /**
     * Poll ID.
     *
     * @return $this
     *
     * @param integer $poll_id
     */
    public function setPollId($poll_id)
    {
        $this->vkarg_poll_id = $poll_id;

        return $this;
    }
}
