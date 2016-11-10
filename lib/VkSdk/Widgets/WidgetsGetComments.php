<?php
namespace VkSdk\Widgets;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Widgets\Includes\WidgetComment;

/**
 * Gets a list of comments for the page added through the .
 * Class WidgetsGetComments
 *
 * @package VkSdk\Widgets
 */
class WidgetsGetComments extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var WidgetComment[]
     */
    public $posts;

    /**
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
     * @param WidgetComment $post
     */
    public function addPost(WidgetComment $post)
    {
        $this->posts[] = $post;

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
        return "widgets.getComments";
    }

    /**
     * @return WidgetComment[]
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'posts' => [
                'class'  => 'VkSdk\Widgets\Includes\WidgetComment',
                'method' => 'addPost'
            ],
        ];
    }

    /**
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
     * @param string $page_id
     */
    public function setPageId($page_id)
    {
        $this->vkarg_page_id = $page_id;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->vkarg_url = $url;

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
