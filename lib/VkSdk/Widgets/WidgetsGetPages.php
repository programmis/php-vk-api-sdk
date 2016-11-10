<?php

namespace VkSdk\Widgets;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Widgets\Includes\WidgetPage;

/**
 * Gets a list of application/site pages where the  or  is installed.
 * Class WidgetsGetPages
 * @package VkSdk\Widgets
 */
class WidgetsGetPages extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var WidgetPage[]
     */
    private $pages;

    /**
     * @return $this
     *
     * @param WidgetPage $page
     */
    public function addPage(WidgetPage $page)
    {
        $this->pages[] = $page;

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
     * @inheritdoc
     */
    public function getMethod()
    {
        return "widgets.getPages";
    }

    /**
     * @return WidgetPage[]
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'pages' => [
                'class'  => 'VkSdk\Widgets\Includes\WidgetPage',
                'method' => 'addPage'
            ],
        ];
    }

    /**
     * @return $this
     *
     * @param string $order
     */
    public function setOrder($order)
    {
        $this->vkarg_order = $order;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $period
     */
    public function setPeriod($period)
    {
        $this->vkarg_period = $period;

        return $this;
    }

    /**
     * @return $this
     *
     * @param integer $widget_api_id
     */
    public function setWidgetApiId($widget_api_id)
    {
        $this->vkarg_widget_api_id = $widget_api_id;

        return $this;
    }
}
