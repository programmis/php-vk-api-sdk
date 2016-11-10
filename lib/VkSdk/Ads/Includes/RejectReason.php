<?php

namespace VkSdk\Ads\Includes;

use lib\AutoFillObject;

/**
 * Class RejectReason
 * @package VkSdk\Ads\Includes
 */
class RejectReason
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var Rules[]
     */
    private $rules;

    /**
     * @return $this
     *
     * @param Rules $rule
     */
    public function addRule(Rules $rule)
    {
        $this->rules[] = $rule;

        return $this;
    }

    /**
     * Comment text
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return $this
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return Rules[]
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * @return $this
     *
     * @param array $rules
     */
    public function setRules(array $rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'rules' => [
                'class'  => 'VkSdk\Ads\Includes\Rules',
                'method' => 'addRule'
            ],
        ];
    }
}
