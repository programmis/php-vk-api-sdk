<?php

namespace VkSdk\Messages;

use VkSdk\Includes\Request;

/**
 * Returns a list of the current user's conversations that match search criteria.
 * Class MessagesSearchDialogs
 * @package VkSdk\Messages
 */
class MessagesSearchDialogs extends Request
{

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
        return "messages.searchDialogs";
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
     * Maximum number of results.
     *
     * @return $this
     *
     * @param integer $limit
     */
    public function setLimit($limit)
    {
        $this->vkarg_limit = $limit;

        return $this;
    }

    /**
     * Search query string.
     *
     * @return $this
     *
     * @param string $q
     */
    public function setQ($q)
    {
        $this->vkarg_q = $q;

        return $this;
    }
}
