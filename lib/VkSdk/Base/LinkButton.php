<?php

namespace VkSdk\Base;

use lib\AutoFillObject;

/**
 * Class LinkButton
 * @package VkSdk\Base
 */
class LinkButton
{
    use AutoFillObject;

    /**
     * @var LinkButtonAction
     */
    public $action;

    /**
     * @var string
     */
    public $title;

    /**
     * Button action
     * @return LinkButtonAction
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Button title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'action' => 'VkSdk\Base\LinkButtonAction',
        ];
    }

    /**
     * @return $this
     *
     * @param LinkButtonAction $action
     */
    public function setAction(LinkButtonAction $action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
