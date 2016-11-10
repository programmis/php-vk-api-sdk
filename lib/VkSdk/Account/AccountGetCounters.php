<?php

namespace VkSdk\Account;

use lib\AutoFillObject;
use VkSdk\Account\Includes\Counters;
use VkSdk\Includes\Request;

/**
 * Returns non-null values of user counters.
 * Class AccountGetCounters
 * @package VkSdk\Account
 */
class AccountGetCounters extends Request
{
    use AutoFillObject;

    /**
     * @var Counters
     */
    private $response;

    /**
     * @return Counters
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Counters to be returned
     * (friends, messages, photos, videos, notes, gifts, events, groups, sdk).
     *
     * @return $this
     *
     * @param string $filter
     */
    public function addFilter($filter)
    {
        $this->vkarg_filter[] = $filter;

        return $this;
    }

    /**
     * result in $this->getResponse();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->fillByJson($json);

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
        return "account.getCounters";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'response' => 'VkSdk\Account\Includes\Counters',
        ];
    }

    /**
     * Counters to be returned
     * (friends, messages, photos, videos, notes, gifts, events, groups, sdk).
     *
     * @return $this
     *
     * @param array $filter
     */
    public function setFilter(array $filter)
    {
        $this->vkarg_filter = $filter;

        return $this;
    }
}
