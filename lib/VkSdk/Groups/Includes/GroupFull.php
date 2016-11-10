<?php

namespace VkSdk\Groups\Includes;

use lib\AutoFillObject;
use VkSdk\Base\Country;
use VkSdk\Base\Objects;

/**
 * Class GroupFull
 * @package VkSdk\Groups\Includes
 */
class GroupFull
{

    use AutoFillObject;

    /**
     * @var string
     */
    private $activity;

    /**
     * @var integer
     */
    private $admin_level;

    /**
     * @var integer
     */
    private $age_limits;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_create_topic;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_message;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_post;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_see_all_posts;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $can_upload_video;

    /**
     * @var Objects
     */
    private $city;

    /**
     * @var ContactsItem[]
     */
    private $contacts;

    /**
     * @var CountersGroup
     */
    private $counters;

    /**
     * @var Country
     */
    private $country;

    /**
     * @var string
     */
    private $deactivated;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $finish_date;

    /**
     * @var integer
     */
    private $fixed_post;

    /**
     * @var string
     */
    private $id;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $is_admin;

    /**
     * @var integer
     */
    private $is_closed;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $is_favorite;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $is_member;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $is_messages_allowed;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $is_subscribed;

    /**
     * @var LinksItem[]
     */
    private $links;

    /**
     * @var integer
     */
    private $main_album_id;

    /**
     * @var integer
     */
    private $main_section;

    /**
     * @var MarketInfo
     */
    private $market;

    /**
     * @var integer
     */
    private $member_status;

    /**
     * @var integer
     */
    private $members_count;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $photo_100;

    /**
     * @var string
     */
    private $photo_200;

    /**
     * @var string
     */
    private $photo_50;

    /**
     * @var string
     */
    private $screen_name;

    /**
     * @var string
     */
    private $site;

    /**
     * @var integer
     */
    private $start_date;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $type;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    private $verified;

    /**
     * @var string
     */
    private $wiki_page;

    /**
     * @return $this
     *
     * @param ContactsItem $contact
     */
    public function addContact(ContactsItem $contact)
    {
        $this->contacts[] = $contact;

        return $this;
    }

    /**
     * @return $this
     *
     * @param LinksItem $link
     */
    public function addLink(LinksItem $link)
    {
        $this->links[] = $link;

        return $this;
    }

    /**
     * Type of group, start date of event or category of public page
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @return $this
     *
     * @param string $activity
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Level of current user's credentials as manager
     *
     * @return integer
     */
    public function getAdminLevel()
    {
        return $this->admin_level;
    }

    /**
     * @return $this
     *
     * @param integer $admin_level
     */
    public function setAdminLevel($admin_level)
    {
        $this->admin_level = $admin_level;

        return $this;
    }

    /**
     * Information whether age limit
     *
     * @return integer
     */
    public function getAgeLimits()
    {
        return $this->age_limits;
    }

    /**
     * @return $this
     *
     * @param integer $age_limits
     */
    public function setAgeLimits($age_limits)
    {
        $this->age_limits = $age_limits;

        return $this;
    }

    /**
     * Information whether current user can create topic
     *
     * @return integer
     */
    public function getCanCreateTopic()
    {
        return $this->can_create_topic;
    }

    /**
     * @return $this
     *
     * @param integer $can_create_topic
     */
    public function setCanCreateTopic($can_create_topic)
    {
        $this->can_create_topic = $can_create_topic;

        return $this;
    }

    /**
     * Information whether current user can send a message to community
     *
     * @return integer
     */
    public function getCanMessage()
    {
        return $this->can_message;
    }

    /**
     * @return $this
     *
     * @param integer $can_message
     */
    public function setCanMessage($can_message)
    {
        $this->can_message = $can_message;

        return $this;
    }

    /**
     * Information whether current user can post on community's wall
     *
     * @return integer
     */
    public function getCanPost()
    {
        return $this->can_post;
    }

    /**
     * @return $this
     *
     * @param integer $can_post
     */
    public function setCanPost($can_post)
    {
        $this->can_post = $can_post;

        return $this;
    }

    /**
     * Information whether current user can see all posts on community's wall
     *
     * @return integer
     */
    public function getCanSeeAllPosts()
    {
        return $this->can_see_all_posts;
    }

    /**
     * @return $this
     *
     * @param integer $can_see_all_posts
     */
    public function setCanSeeAllPosts($can_see_all_posts)
    {
        $this->can_see_all_posts = $can_see_all_posts;

        return $this;
    }

    /**
     * Information whether current user can upload video
     *
     * @return integer
     */
    public function getCanUploadVideo()
    {
        return $this->can_upload_video;
    }

    /**
     * @return $this
     *
     * @param integer $can_upload_video
     */
    public function setCanUploadVideo($can_upload_video)
    {
        $this->can_upload_video = $can_upload_video;

        return $this;
    }

    /**
     * @return Objects
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return $this
     *
     * @param Objects $city
     */
    public function setCity(Objects $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return ContactsItem[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * @return $this
     *
     * @param array $contacts
     */
    public function setContacts(array $contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * @return CountersGroup
     */
    public function getCounters()
    {
        return $this->counters;
    }

    /**
     * @return $this
     *
     * @param CountersGroup $counters
     */
    public function setCounters(CountersGroup $counters)
    {
        $this->counters = $counters;

        return $this;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return $this
     *
     * @param Country $country
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Information whether community is banned
     *
     * @return string
     */
    public function getDeactivated()
    {
        return $this->deactivated;
    }

    /**
     * @return $this
     *
     * @param string $deactivated
     */
    public function setDeactivated($deactivated)
    {
        $this->deactivated = $deactivated;

        return $this;
    }

    /**
     * Community description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return $this
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Finish date of event in Unixtime
     *
     * @return integer
     */
    public function getFinishDate()
    {
        return $this->finish_date;
    }

    /**
     * @return $this
     *
     * @param integer $finish_date
     */
    public function setFinishDate($finish_date)
    {
        $this->finish_date = $finish_date;

        return $this;
    }

    /**
     * Fixed post ID
     *
     * @return integer
     */
    public function getFixedPost()
    {
        return $this->fixed_post;
    }

    /**
     * @return $this
     *
     * @param integer $fixed_post
     */
    public function setFixedPost($fixed_post)
    {
        $this->fixed_post = $fixed_post;

        return $this;
    }

    /**
     * Community ID
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Information whether current user is administrator
     *
     * @return integer
     */
    public function getIsAdmin()
    {
        return $this->is_admin;
    }

    /**
     * @return $this
     *
     * @param integer $is_admin
     */
    public function setIsAdmin($is_admin)
    {
        $this->is_admin = $is_admin;

        return $this;
    }

    /**
     * Information whether community is closed
     *
     * @return integer
     */
    public function getIsClosed()
    {
        return $this->is_closed;
    }

    /**
     * @return $this
     *
     * @param integer $is_closed
     */
    public function setIsClosed($is_closed)
    {
        $this->is_closed = $is_closed;

        return $this;
    }

    /**
     * Information whether community is in faves
     *
     * @return integer
     */
    public function getIsFavorite()
    {
        return $this->is_favorite;
    }

    /**
     * @return $this
     *
     * @param integer $is_favorite
     */
    public function setIsFavorite($is_favorite)
    {
        $this->is_favorite = $is_favorite;

        return $this;
    }

    /**
     * Information whether current user is member
     *
     * @return integer
     */
    public function getIsMember()
    {
        return $this->is_member;
    }

    /**
     * @return $this
     *
     * @param integer $is_member
     */
    public function setIsMember($is_member)
    {
        $this->is_member = $is_member;

        return $this;
    }

    /**
     * Information whether current user can send a message to community
     *
     * @return integer
     */
    public function getIsMessagesAllowed()
    {
        return $this->is_messages_allowed;
    }

    /**
     * @return $this
     *
     * @param integer $is_messages_allowed
     */
    public function setIsMessagesAllowed($is_messages_allowed)
    {
        $this->is_messages_allowed = $is_messages_allowed;

        return $this;
    }

    /**
     * Information whether current user is subscribed
     *
     * @return integer
     */
    public function getIsSubscribed()
    {
        return $this->is_subscribed;
    }

    /**
     * @return $this
     *
     * @param integer $is_subscribed
     */
    public function setIsSubscribed($is_subscribed)
    {
        $this->is_subscribed = $is_subscribed;

        return $this;
    }

    /**
     * @return LinksItem[]
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @return $this
     *
     * @param array $links
     */
    public function setLinks(array $links)
    {
        $this->links = $links;

        return $this;
    }

    /**
     * Community's main photo album ID
     * @return integer
     */
    public function getMainAlbumId()
    {
        return $this->main_album_id;
    }

    /**
     * @return $this
     *
     * @param integer $main_album_id
     */
    public function setMainAlbumId($main_album_id)
    {
        $this->main_album_id = $main_album_id;

        return $this;
    }

    /**
     * Main section of community
     * @return integer
     */
    public function getMainSection()
    {
        return $this->main_section;
    }

    /**
     * @return $this
     *
     * @param integer $main_section
     */
    public function setMainSection($main_section)
    {
        $this->main_section = $main_section;

        return $this;
    }

    /**
     * @return MarketInfo
     */
    public function getMarket()
    {
        return $this->market;
    }

    /**
     * @return $this
     *
     * @param MarketInfo $market
     */
    public function setMarket(MarketInfo $market)
    {
        $this->market = $market;

        return $this;
    }

    /**
     * Community members number
     * @return integer
     */
    public function getMembersCount()
    {
        return $this->members_count;
    }

    /**
     * @return $this
     *
     * @param integer $members_count
     */
    public function setMembersCount($members_count)
    {
        $this->members_count = $members_count;

        return $this;
    }

    /**
     * Current user's member status
     * @return integer
     */
    public function getMemberStatus()
    {
        return $this->member_status;
    }

    /**
     * @return $this
     *
     * @param integer $member_status
     */
    public function setMemberStatus($member_status)
    {
        $this->member_status = $member_status;

        return $this;
    }

    /**
     * Community name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * URL of square photo of the community with 100 pixels in width
     * @return string
     */
    public function getPhoto100()
    {
        return $this->photo_100;
    }

    /**
     * @return $this
     *
     * @param string $photo_100
     */
    public function setPhoto100($photo_100)
    {
        $this->photo_100 = $photo_100;

        return $this;
    }

    /**
     * URL of square photo of the community with 200 pixels in width
     * @return string
     */
    public function getPhoto200()
    {
        return $this->photo_200;
    }

    /**
     * @return $this
     *
     * @param string $photo_200
     */
    public function setPhoto200($photo_200)
    {
        $this->photo_200 = $photo_200;

        return $this;
    }

    /**
     * URL of square photo of the community with 50 pixels in width
     * @return string
     */
    public function getPhoto50()
    {
        return $this->photo_50;
    }

    /**
     * @return $this
     *
     * @param string $photo_50
     */
    public function setPhoto50($photo_50)
    {
        $this->photo_50 = $photo_50;

        return $this;
    }

    /**
     * Domain of the community page
     * @return string
     */
    public function getScreenName()
    {
        return $this->screen_name;
    }

    /**
     * @return $this
     *
     * @param string $screen_name
     */
    public function setScreenName($screen_name)
    {
        $this->screen_name = $screen_name;

        return $this;
    }

    /**
     * Community's website
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @return $this
     *
     * @param string $site
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Start date of event in Unixtime
     * @return integer
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * @return $this
     *
     * @param integer $start_date
     */
    public function setStartDate($start_date)
    {
        $this->start_date = $start_date;

        return $this;
    }

    /**
     * Community status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return $this
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Community type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return $this
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Information whether community is verified
     * @return integer
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * @return $this
     *
     * @param integer $verified
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;

        return $this;
    }

    /**
     * Community's main wiki page title
     * @return string
     */
    public function getWikiPage()
    {
        return $this->wiki_page;
    }

    /**
     * @return $this
     *
     * @param string $wiki_page
     */
    public function setWikiPage($wiki_page)
    {
        $this->wiki_page = $wiki_page;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'market'   => 'VkSdk\Groups\Includes\MarketInfo',
            'city'     => 'VkSdk\Base\Objects',
            'country'  => 'VkSdk\Base\Country',
            'counters' => 'VkSdk\Groups\Includes\CountersGroup',
            'links'    => [
                'class'  => 'VkSdk\Groups\Includes\LinksItem',
                'method' => 'addLink'
            ],
            'contacts' => [
                'class'  => 'VkSdk\Groups\Includes\ContactsItem',
                'method' => 'addContact'
            ],
        ];
    }
}
