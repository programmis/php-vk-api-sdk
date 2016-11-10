<?php

namespace VkSdk\Wall\Includes;

use lib\AutoFillObject;
use VkSdk\Base\Geo;

/**
 * Class Wallpost
 * @package VkSdk\Wall\Includes
 */
class Wallpost
{

    use AutoFillObject;

    /**
     * @var Wallpost[]
     */
    private $attachments;

    /**
     * @var integer
     */
    private $date;

    /**
     * @var integer
     */
    private $from_id;

    /**
     * @var Geo
     */
    private $geo;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $owner_id;

    /**
     * @var PostSource
     */
    private $post_source;

    /**
     * See constants of class PostType
     *
     * @var string
     */
    private $post_type;

    /**
     * @var integer
     */
    private $signer_id;

    /**
     * @var string
     */
    private $text;

    /**
     * @return Wallpost[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @return $this
     *
     * @param array $attachments
     */
    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;

        return $this;
    }

    /**
     * Date of publishing in Unixtime
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return $this
     *
     * @param integer $date
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Post author ID
     *
     * @return integer
     */
    public function getFromId()
    {
        return $this->from_id;
    }

    /**
     * @return $this
     *
     * @param integer $from_id
     */
    public function setFromId($from_id)
    {
        $this->from_id = $from_id;

        return $this;
    }

    /**
     * @return Geo
     */
    public function getGeo()
    {
        return $this->geo;
    }

    /**
     * @return $this
     *
     * @param Geo $geo
     */
    public function setGeo(Geo $geo)
    {
        $this->geo = $geo;

        return $this;
    }

    /**
     * Post ID
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Wall owner's ID
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * @return $this
     *
     * @param integer $owner_id
     */
    public function setOwnerId($owner_id)
    {
        $this->owner_id = $owner_id;

        return $this;
    }

    /**
     * @return PostSource
     */
    public function getPostSource()
    {
        return $this->post_source;
    }

    /**
     * @return $this
     *
     * @param PostSource $post_source
     */
    public function setPostSource(PostSource $post_source)
    {
        $this->post_source = $post_source;

        return $this;
    }

    /**
     * Post type
     *
     * @return string
     */
    public function getPostType()
    {
        return $this->post_type;
    }

    /**
     * @return $this
     *
     * @param string $post_type
     */
    public function setPostType($post_type)
    {
        $this->post_type = $post_type;

        return $this;
    }

    /**
     * Post signer ID
     *
     * @return integer
     */
    public function getSignerId()
    {
        return $this->signer_id;
    }

    /**
     * @return $this
     *
     * @param integer $signer_id
     */
    public function setSignerId($signer_id)
    {
        $this->signer_id = $signer_id;

        return $this;
    }

    /**
     * Post text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return $this
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'geo'         => 'VkSdk\Base\Geo',
            'post_source' => 'VkSdk\Wall\Includes\PostSource',
        ];
    }
}
