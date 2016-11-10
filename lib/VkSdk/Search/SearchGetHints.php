<?php
namespace VkSdk\Search;

use VkSdk\Includes\Request;

/**
 * Allows the programmer to do a quick search for any substring.
 * Class SearchGetHints
 *
 * @package VkSdk\Search
 */
class SearchGetHints extends Request
{

    /**
     * @return $this
     *
     * @param string $filter
     */
    public function addFilter($filter)
    {
        $this->vkarg_filters[] = $filter;

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
        return "search.getHints";
    }

    /**
     * @return $this
     *
     * @param array $filters
     */
    public function setFilters(array $filters)
    {
        $this->vkarg_filters = $filters;

        return $this;
    }

    /**
     * Maximum number of results to return.
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

    /**
     * @return $this
     *
     * @param boolean $search_global
     */
    public function setSearchGlobal($search_global)
    {
        $this->vkarg_search_global = $search_global;

        return $this;
    }
}
