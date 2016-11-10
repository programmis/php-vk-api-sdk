<?php
namespace VkSdk\Pages\Includes;

/**
 * Class WikipageFull
 *
 * @package VkSdk\Pages\Includes
 */
class WikipageFull
{

    /**
     * @var integer
     */
    public $created;

    /**
     * @var integer
     */
    public $creator_id;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $current_user_can_edit;

    /**
     * See constants of class BoolInt
     *
     * @var integer
     */
    public $current_user_can_edit_access;

    /**
     * @var integer
     */
    public $edited;

    /**
     * @var integer
     */
    public $editor_id;

    /**
     * @var integer
     */
    public $group_id;

    /**
     * @var string
     */
    public $html;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $view_url;

    /**
     * @var integer
     */
    public $views;

    /**
     * See constants of class PrivacySettings
     *
     * @var integer
     */
    public $who_can_edit;

    /**
     * See constants of class PrivacySettings
     *
     * @var integer
     */
    public $who_can_view;

    /**
     * Date when the page has been created in Unixtime
     *
     * @return integer
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return $this
     *
     * @param integer $created
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Page creator ID
     *
     * @return integer
     */
    public function getCreatorId()
    {
        return $this->creator_id;
    }

    /**
     * @return $this
     *
     * @param integer $creator_id
     */
    public function setCreatorId($creator_id)
    {
        $this->creator_id = $creator_id;

        return $this;
    }

    /**
     * Information whether current user can edit the page
     *
     * @return integer
     */
    public function getCurrentUserCanEdit()
    {
        return $this->current_user_can_edit;
    }

    /**
     * @return $this
     *
     * @param integer $current_user_can_edit
     */
    public function setCurrentUserCanEdit($current_user_can_edit)
    {
        $this->current_user_can_edit = $current_user_can_edit;

        return $this;
    }

    /**
     * Information whether current user can edit the page access settings
     *
     * @return integer
     */
    public function getCurrentUserCanEditAccess()
    {
        return $this->current_user_can_edit_access;
    }

    /**
     * @return $this
     *
     * @param integer $current_user_can_edit_access
     */
    public function setCurrentUserCanEditAccess($current_user_can_edit_access)
    {
        $this->current_user_can_edit_access = $current_user_can_edit_access;

        return $this;
    }

    /**
     * Date when the page has been edited in Unixtime
     *
     * @return integer
     */
    public function getEdited()
    {
        return $this->edited;
    }

    /**
     * @return $this
     *
     * @param integer $edited
     */
    public function setEdited($edited)
    {
        $this->edited = $edited;

        return $this;
    }

    /**
     * Last editor ID
     *
     * @return integer
     */
    public function getEditorId()
    {
        return $this->editor_id;
    }

    /**
     * @return $this
     *
     * @param integer $editor_id
     */
    public function setEditorId($editor_id)
    {
        $this->editor_id = $editor_id;

        return $this;
    }

    /**
     * Community ID
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * @return $this
     *
     * @param integer $group_id
     */
    public function setGroupId($group_id)
    {
        $this->group_id = $group_id;

        return $this;
    }

    /**
     * Page content, HTML
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * @return $this
     *
     * @param string $html
     */
    public function setHtml($html)
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Page ID
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
     * Page content, wiki
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @return $this
     *
     * @param string $source
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Page title
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
     * Views number
     *
     * @return integer
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @return $this
     *
     * @param integer $views
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * URL of the page preview
     *
     * @return string
     */
    public function getViewUrl()
    {
        return $this->view_url;
    }

    /**
     * @return $this
     *
     * @param string $view_url
     */
    public function setViewUrl($view_url)
    {
        $this->view_url = $view_url;

        return $this;
    }

    /**
     * Edit settings of the page
     *
     * @return integer
     */
    public function getWhoCanEdit()
    {
        return $this->who_can_edit;
    }

    /**
     * @return $this
     *
     * @param integer $who_can_edit
     */
    public function setWhoCanEdit($who_can_edit)
    {
        $this->who_can_edit = $who_can_edit;

        return $this;
    }

    /**
     * View settings of the page
     *
     * @return integer
     */
    public function getWhoCanView()
    {
        return $this->who_can_view;
    }

    /**
     * @return $this
     *
     * @param integer $who_can_view
     */
    public function setWhoCanView($who_can_view)
    {
        $this->who_can_view = $who_can_view;

        return $this;
    }
}
