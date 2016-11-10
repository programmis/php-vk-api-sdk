<?php
namespace VkSdk\Apps\Includes;

use lib\AutoFillObject;
use VkSdk\Photos\Includes\Photo;

/**
 * Class App
 *
 * @package VkSdk\Apps\Includes
 */
class App
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $author_group;

    /**
     * @var integer
     */
    public $author_id;

    /**
     * @var string
     */
    public $author_url;

    /**
     * @var string
     */
    public $banner_1120;

    /**
     * @var string
     */
    public $banner_560;

    /**
     * @var integer
     */
    public $catalog_position;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $genre;

    /**
     * @var integer
     */
    public $genre_id;

    /**
     * @var string
     */
    public $icon_139;

    /**
     * @var string
     */
    public $icon_150;

    /**
     * @var string
     */
    public $icon_278;

    /**
     * @var string
     */
    public $icon_75;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $international;

    /**
     * @var integer
     */
    public $is_in_catalog;

    /**
     * @var integer
     */
    public $leaderboard_type;

    /**
     * @var integer
     */
    public $members_count;

    /**
     * @var integer
     */
    public $platform_id;

    /**
     * @var integer
     */
    public $published_date;

    /**
     * @var string
     */
    public $screen_name;

    /**
     * @var Photo[]
     */
    public $screenshots;

    /**
     * @var string
     */
    public $section;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @return $this
     *
     * @param Photo $screenshot
     */
    public function addScreenshot(Photo $screenshot)
    {
        $this->screenshots[] = $screenshot;

        return $this;
    }

    /**
     * Official community's ID
     *
     * @return integer
     */
    public function getAuthorGroup()
    {
        return $this->author_group;
    }

    /**
     * @return $this
     *
     * @param integer $author_group
     */
    public function setAuthorGroup($author_group)
    {
        $this->author_group = $author_group;

        return $this;
    }

    /**
     * Application author's ID
     *
     * @return integer
     */
    public function getAuthorId()
    {
        return $this->author_id;
    }

    /**
     * @return $this
     *
     * @param integer $author_id
     */
    public function setAuthorId($author_id)
    {
        $this->author_id = $author_id;

        return $this;
    }

    /**
     * Application author's URL
     *
     * @return string
     */
    public function getAuthorUrl()
    {
        return $this->author_url;
    }

    /**
     * @return $this
     *
     * @param string $author_url
     */
    public function setAuthorUrl($author_url)
    {
        $this->author_url = $author_url;

        return $this;
    }

    /**
     * URL of the app banner with 1120 px in width
     *
     * @return string
     */
    public function getBanner1120()
    {
        return $this->banner_1120;
    }

    /**
     * @return $this
     *
     * @param string $banner_1120
     */
    public function setBanner1120($banner_1120)
    {
        $this->banner_1120 = $banner_1120;

        return $this;
    }

    /**
     * URL of the app banner with 560 px in width
     *
     * @return string
     */
    public function getBanner560()
    {
        return $this->banner_560;
    }

    /**
     * @return $this
     *
     * @param string $banner_560
     */
    public function setBanner560($banner_560)
    {
        $this->banner_560 = $banner_560;

        return $this;
    }

    /**
     * Catalog position
     *
     * @return integer
     */
    public function getCatalogPosition()
    {
        return $this->catalog_position;
    }

    /**
     * @return $this
     *
     * @param integer $catalog_position
     */
    public function setCatalogPosition($catalog_position)
    {
        $this->catalog_position = $catalog_position;

        return $this;
    }

    /**
     * Application description
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
     * Genre name
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @return $this
     *
     * @param string $genre
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Genre ID
     *
     * @return integer
     */
    public function getGenreId()
    {
        return $this->genre_id;
    }

    /**
     * @return $this
     *
     * @param integer $genre_id
     */
    public function setGenreId($genre_id)
    {
        $this->genre_id = $genre_id;

        return $this;
    }

    /**
     * URL of the app icon with 139 px in width
     *
     * @return string
     */
    public function getIcon139()
    {
        return $this->icon_139;
    }

    /**
     * @return $this
     *
     * @param string $icon_139
     */
    public function setIcon139($icon_139)
    {
        $this->icon_139 = $icon_139;

        return $this;
    }

    /**
     * URL of the app icon with 150 px in width
     *
     * @return string
     */
    public function getIcon150()
    {
        return $this->icon_150;
    }

    /**
     * @return $this
     *
     * @param string $icon_150
     */
    public function setIcon150($icon_150)
    {
        $this->icon_150 = $icon_150;

        return $this;
    }

    /**
     * URL of the app icon with 279 px in width
     *
     * @return string
     */
    public function getIcon278()
    {
        return $this->icon_278;
    }

    /**
     * @return $this
     *
     * @param string $icon_278
     */
    public function setIcon278($icon_278)
    {
        $this->icon_278 = $icon_278;

        return $this;
    }

    /**
     * URL of the app icon with 75 px in width
     *
     * @return string
     */
    public function getIcon75()
    {
        return $this->icon_75;
    }

    /**
     * @return $this
     *
     * @param string $icon_75
     */
    public function setIcon75($icon_75)
    {
        $this->icon_75 = $icon_75;

        return $this;
    }

    /**
     * Application ID
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
     * Information whether the application is multilanguage
     *
     * @return integer
     */
    public function getInternational()
    {
        return $this->international;
    }

    /**
     * @return $this
     *
     * @param integer $international
     */
    public function setInternational($international)
    {
        $this->international = $international;

        return $this;
    }

    /**
     * Information whther application is in mobile catalog
     *
     * @return integer
     */
    public function getIsInCatalog()
    {
        return $this->is_in_catalog;
    }

    /**
     * @return $this
     *
     * @param integer $is_in_catalog
     */
    public function setIsInCatalog($is_in_catalog)
    {
        $this->is_in_catalog = $is_in_catalog;

        return $this;
    }

    /**
     * Leaderboard type
     *
     * @return integer
     */
    public function getLeaderboardType()
    {
        return $this->leaderboard_type;
    }

    /**
     * @return $this
     *
     * @param integer $leaderboard_type
     */
    public function setLeaderboardType($leaderboard_type)
    {
        $this->leaderboard_type = $leaderboard_type;

        return $this;
    }

    /**
     * Members number
     *
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
     * Application ID in store
     *
     * @return integer
     */
    public function getPlatformId()
    {
        return $this->platform_id;
    }

    /**
     * @return $this
     *
     * @param integer $platform_id
     */
    public function setPlatformId($platform_id)
    {
        $this->platform_id = $platform_id;

        return $this;
    }

    /**
     * Date when the application has been published in Unixtime
     *
     * @return integer
     */
    public function getPublishedDate()
    {
        return $this->published_date;
    }

    /**
     * @return $this
     *
     * @param integer $published_date
     */
    public function setPublishedDate($published_date)
    {
        $this->published_date = $published_date;

        return $this;
    }

    /**
     * Screen name
     *
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
     * @return Photo[]
     */
    public function getScreenshots()
    {
        return $this->screenshots;
    }

    /**
     * @return $this
     *
     * @param array $screenshots
     */
    public function setScreenshots(array $screenshots)
    {
        $this->screenshots = $screenshots;

        return $this;
    }

    /**
     * Application section name
     *
     * @return string
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @return $this
     *
     * @param string $section
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Application title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
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

    /**
     * Application type
     *
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
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'screenshots' => [
                'class'  => 'VkSdk\Photos\Includes\Photo',
                'method' => 'addScreenshot'
            ],
        ];
    }
}
