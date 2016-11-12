<?php

namespace VkSdk\Groups;

use VkSdk\Includes\Request;

/**
 * Edits a community.
 *
 * Class GroupsEdit
 * @package VkSdk\Groups
 */
class GroupsEdit extends Request
{
    /**
     * '1' — no limits
     */
    const AGE_LIMITS_1 = 1;

    /**
     * '2' — 16+
     */
    const AGE_LIMITS_2 = 2;

    /**
     * '3' — 18+.
     */
    const AGE_LIMITS_3 = 3;

    /**
     * See constants of class OkResponse
     *
     * @var integer
     */
    private $response;

    /**
     * Market delivery cities (if only one country is specified).
     *
     * @return $this
     *
     * @param integer $market_city
     */
    public function addMarketCity($market_city)
    {
        $this->vkarg_market_city[] = $market_city;

        return $this;
    }

    /**
     * Market delivery countries.
     *
     * @return $this
     *
     * @param integer $market_country
     */
    public function addMarketCountry($market_country)
    {
        $this->vkarg_market_country[] = $market_country;

        return $this;
    }

    /**
     * Keywords for stopwords filter.
     *
     * @return $this
     *
     * @param string $obscene_word
     */
    public function addObsceneWord($obscene_word)
    {
        $this->vkarg_obscene_words[] = $obscene_word;

        return $this;
    }

    /**
     * result in $this->getResponse();
     *
     * {@inheritdoc}
     */
    public function doRequest()
    {
        $this->setRequiredParams(["group_id"]);

        $result = $this->execApi();
        if ($result && ($json = $this->getJsonResponse())) {
            if (isset($json->response) && $json->response) {
                $this->response = $json->response;

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
        return "groups.edit";
    }

    /**
     * Returns 1 if request has been processed successfully
     * See constants of class OkResponse
     *
     * @return integer
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Community type. Possible values:;
     *'0' – open;;
     *'1' – closed;;
     *'2' – private.
     *
     * @return $this
     *
     * @param integer $access
     */
    public function setAccess($access)
    {
        $this->vkarg_access = $access;

        return $this;
    }

    /**
     * Community age limits. Possible values:;
     *'1' — no limits;;
     *'2' — 16+;;
     *'3' — 18+.
     * see self::AGE_LIMITS_* constants
     *
     * @return $this
     *
     * @param integer $age_limits
     */
    public function setAgeLimits($age_limits)
    {
        $this->vkarg_age_limits = $age_limits;

        return $this;
    }

    /**
     * Audio settings. Possible values:;
     *'0' – disabled;;
     *'1' – open;;
     *'2' – limited (for groups and events only).
     *
     * @return $this
     *
     * @param integer $audio
     */
    public function setAudio($audio)
    {
        $this->vkarg_audio = $audio;

        return $this;
    }

    /**
     * Contacts settings (for public pages only).
     * Possible values:;
     *'0' – disabled;;
     *'1' – enabled.;
     *
     * @return $this
     *
     * @param boolean $contacts
     */
    public function setContacts($contacts)
    {
        $this->vkarg_contacts = $contacts;

        return $this;
    }

    /**
     * Community description.
     *
     * @return $this
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->vkarg_description = $description;

        return $this;
    }

    /**
     * Documents settings. Possible values:;
     *'0' – disabled;;
     *'1' – open;;
     *'2' – limited (for groups and events only).
     *
     * @return $this
     *
     * @param integer $docs
     */
    public function setDocs($docs)
    {
        $this->vkarg_docs = $docs;

        return $this;
    }

    /**
     * Organizer email (for events).
     *
     * @return $this
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->vkarg_email = $email;

        return $this;
    }

    /**
     * Event finish date in Unixtime format.
     *
     * @return $this
     *
     * @param integer $event_finish_date
     */
    public function setEventFinishDate($event_finish_date)
    {
        $this->vkarg_event_finish_date = $event_finish_date;

        return $this;
    }

    /**
     * Organizer community ID (for events only).
     *
     * @return $this
     *
     * @param integer $event_group_id
     */
    public function setEventGroupId($event_group_id)
    {
        $this->vkarg_event_group_id = $event_group_id;

        return $this;
    }

    /**
     * Events settings (for public pages only).
     * Possible values:;
     *'0' – disabled;;
     *'1' – enabled.;
     *
     * @return $this
     *
     * @param boolean $events
     */
    public function setEvents($events)
    {
        $this->vkarg_events = $events;

        return $this;
    }

    /**
     * Event start date in Unixtime format.
     *
     * @return $this
     *
     * @param integer $event_start_date
     */
    public function setEventStartDate($event_start_date)
    {
        $this->vkarg_event_start_date = $event_start_date;

        return $this;
    }

    /**
     * Community ID.
     *
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->vkarg_group_id = $group_id;

        return $this;
    }

    /**
     * Links settings (for public pages only).
     * Possible values:;
     *'0' – disabled;;
     *'1' – enabled.;
     *
     * @return $this
     *
     * @param boolean $links
     */
    public function setLinks($links)
    {
        $this->vkarg_links = $links;

        return $this;
    }

    /**
     * Market settings. Possible values:;
     *'0' – disabled;;
     *'1' – enabled.
     *
     * @return $this
     *
     * @param boolean $market
     */
    public function setMarket($market)
    {
        $this->vkarg_market = $market;

        return $this;
    }

    /**
     * Market delivery cities (if only one country is specified).
     *
     * @return $this
     *
     * @param array $market_city
     */
    public function setMarketCity(array $market_city)
    {
        $this->vkarg_market_city = $market_city;

        return $this;
    }

    /**
     * market comments settings. Possible values:;
     *'0' – disabled;;
     *'1' – enabled.
     *
     * @return $this
     *
     * @param boolean $market_comments
     */
    public function setMarketComments($market_comments)
    {
        $this->vkarg_market_comments = $market_comments;

        return $this;
    }

    /**
     * Seller contact for market.;
     * Set '0' for community messages.
     *
     * @return $this
     *
     * @param integer $market_contact
     */
    public function setMarketContact($market_contact)
    {
        $this->vkarg_market_contact = $market_contact;

        return $this;
    }

    /**
     * Market delivery countries.
     *
     * @return $this
     *
     * @param array $market_country
     */
    public function setMarketCountry(array $market_country)
    {
        $this->vkarg_market_country = $market_country;

        return $this;
    }

    /**
     * Market currency settings. Possbile values: ;
     *'643' – Russian rubles;;
     *'980' – Ukrainian hryvnia;;
     *'398' – Kazakh tenge;;
     *'978' – Euro;;
     *'840' – US dollars
     *
     * @return $this
     *
     * @param integer $market_currency
     */
    public function setMarketCurrency($market_currency)
    {
        $this->vkarg_market_currency = $market_currency;

        return $this;
    }

    /**
     * ID of a wiki page with market description.
     *
     * @return $this
     *
     * @param integer $market_wiki
     */
    public function setMarketWiki($market_wiki)
    {
        $this->vkarg_market_wiki = $market_wiki;

        return $this;
    }

    /**
     * Community messages. Possible values:;
     *'0' — disabled;;
     *'1' — enabled.
     *
     * @return $this
     *
     * @param boolean $messages
     */
    public function setMessages($messages)
    {
        $this->vkarg_messages = $messages;

        return $this;
    }

    /**
     * Obscene expressions filter in comments.
     * Possible values: ;
     *'0' – disabled;;
     *'1' – enabled.
     *
     * @return $this
     *
     * @param boolean $obscene_filter
     */
    public function setObsceneFilter($obscene_filter)
    {
        $this->vkarg_obscene_filter = $obscene_filter;

        return $this;
    }

    /**
     * Stopwords filter in comments. Possible values: ;
     *'0' – disabled;;
     *'1' – enabled.
     *
     * @return $this
     *
     * @param boolean $obscene_stopwords
     */
    public function setObsceneStopwords($obscene_stopwords)
    {
        $this->vkarg_obscene_stopwords = $obscene_stopwords;

        return $this;
    }

    /**
     * Keywords for stopwords filter.
     *
     * @return $this
     *
     * @param array $obscene_words
     */
    public function setObsceneWords(array $obscene_words)
    {
        $this->vkarg_obscene_words = $obscene_words;

        return $this;
    }

    /**
     * Organizer phone number (for events).
     * @return $this
     *
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->vkarg_phone = $phone;

        return $this;
    }

    /**
     * Photos settings. Possible values:;
     *'0' – disabled;; *'1' – open;;
     *'2' – limited (for groups and events only).;
     * @return $this
     *
     * @param integer $photos
     */
    public function setPhotos($photos)
    {
        $this->vkarg_photos = $photos;

        return $this;
    }

    /**
     * Places settings (for public pages only).
     * Possible values:;
     *'0' – disabled;;
     *'1' – enabled.;
     * @return $this
     *
     * @param boolean $places
     */
    public function setPlaces($places)
    {
        $this->vkarg_places = $places;

        return $this;
    }

    /**
     * Public page category ID.
     *
     * @return $this
     *
     * @param integer $public_category
     */
    public function setPublicCategory($public_category)
    {
        $this->vkarg_public_category = $public_category;

        return $this;
    }

    /**
     * Founding date of a company or organization owning the community
     * in "dd.mm.YYYY" format.
     *
     * @return $this
     *
     * @param string $public_date
     */
    public function setPublicDate($public_date)
    {
        $this->vkarg_public_date = $public_date;

        return $this;
    }

    /**
     * Public page subcategory ID.
     *
     * @return $this
     *
     * @param integer $public_subcategory
     */
    public function setPublicSubcategory($public_subcategory)
    {
        $this->vkarg_public_subcategory = $public_subcategory;

        return $this;
    }

    /**
     * RSS feed address for import (available only to communities
     * with special permission. Contact vk.com/support to get it.
     *
     * @return $this
     *
     * @param string $rss
     */
    public function setRss($rss)
    {
        $this->vkarg_rss = $rss;

        return $this;
    }

    /**
     * Community screen name.
     * @return $this
     *
     * @param string $screen_name
     */
    public function setScreenName($screen_name)
    {
        $this->vkarg_screen_name = $screen_name;

        return $this;
    }

    /**
     * Community subject. Possible values: ;
     *'1' – auto/moto;;
     *'2' –  activity holidays;;
     *'3' – business;;
     *'4' – pets;;
     *'5' – health;;
     *'6' – dating and communication; ;
     *'7' – games;;
     *'8' – IT (computers and software);;
     *'9' – cinema;;
     *'10' – beauty and fashion;;
     *'11' – cooking;;
     *'12' – art and culture;;
     *'13' – literature;;
     *'14' – mobile services and internet;;
     *'15' – music;;
     *'16' – science and technology;;
     *'17' – real estate;;
     *'18' – news and media;;
     *'19' – security;;
     *'20' – education;;
     *'21' – home and renovations;;
     *'22' – politics;;
     *'23' – food;;
     *'24' – industry;;
     *'25' – travel;;
     *'26' – work;;
     *'27' – entertainment;;
     *'28' – religion;;
     *'29' – family;;
     *'30' – sports;;
     *'31' – insurance;;
     *'32' – television;;
     *'33' – goods and services;;
     *'34' – hobbies;;
     *'35' – finance;;
     *'36' – photo;;
     *'37' – esoterics;;
     *'38' – electronics and appliances;;
     *'39' – erotic;;
     *'40' – humor;;
     *'41' – society, humanities;;
     *'42' – design and graphics.
     *
     * @return $this
     *
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->vkarg_subject = $subject;

        return $this;
    }

    /**
     * Community title.
     *
     * @return $this
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->vkarg_title = $title;

        return $this;
    }

    /**
     * Board topics settings. Possbile values: ;
     *'0' – disabled;;
     *'1' – open;;
     *'2' – limited (for groups and events only).;
     *
     * @return $this
     *
     * @param integer $topics
     */
    public function setTopics($topics)
    {
        $this->vkarg_topics = $topics;

        return $this;
    }

    /**
     * Video settings. Possible values:;
     *'0' – disabled;;
     *'1' – open;;
     *'2' – limited (for groups and events only).
     *
     * @return $this
     *
     * @param integer $video
     */
    public function setVideo($video)
    {
        $this->vkarg_video = $video;

        return $this;
    }

    /**
     * Wall settings. Possible values:;
     *'0' – disabled;;
     *'1' – open;;
     *'2' – limited (groups and events only);;
     *'3' – closed (groups and events only).;
     *
     * @return $this
     *
     * @param integer $wall
     */
    public function setWall($wall)
    {
        $this->vkarg_wall = $wall;

        return $this;
    }

    /**
     * Website that will be displayed in the
     * community information field.
     *
     * @return $this
     *
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->vkarg_website = $website;

        return $this;
    }

    /**
     * Wiki pages settings. Possible values:;
     *'0' – disabled;;
     *'1' – open;;
     *'2' – limited (for groups and events only).
     *
     * @return $this
     *
     * @param integer $wiki
     */
    public function setWiki($wiki)
    {
        $this->vkarg_wiki = $wiki;

        return $this;
    }
}
