<?php
namespace VkSdk\Messages;

use lib\AutoFillObject;
use VkSdk\Includes\Request;
use VkSdk\Messages\Includes\Message;

/**
 * Returns a list of the current user's private messages that match search criteria.
 * Class MessagesSearch
 *
 * @package VkSdk\Messages
 */
class MessagesSearch extends Request
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var Message[]
     */
    public $items;

    /**
     * @return $this
     *
     * @param Message $item
     */
    public function addItem(Message $item)
    {
        $this->items[] = $item;

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
     * Number of messages to return.
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
     * @return Message[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return "messages.search";
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'items' => [
                'class'  => 'VkSdk\Messages\Includes\Message',
                'method' => 'addItem'
            ],
        ];
    }

    /**
     * Date to search message before in Unixtime.
     *
     * @return $this
     *
     * @param integer $date
     */
    public function setDate($date)
    {
        $this->vkarg_date = $date;

        return $this;
    }

    /**
     * Destination ID.; ; "For user:; 'User ID', e.g. '12345'.; ; For chat:; '2000000000' + 'chat_id', e.g. '2000000001'.; ; For community:; '- community ID', e.g. '-12345'.; "
     *
     * @return $this
     *
     * @param integer $peer_id
     */
    public function setPeerId($peer_id)
    {
        $this->vkarg_peer_id = $peer_id;

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
