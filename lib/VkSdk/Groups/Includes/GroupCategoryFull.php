<?php
namespace VkSdk\Groups\Includes;

use lib\AutoFillObject;

/**
 * Class GroupCategoryFull
 *
 * @package VkSdk\Groups\Includes
 */
class GroupCategoryFull
{

    use AutoFillObject;

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var integer
     */
    public $page_count;

    /**
     * @var Group[]
     */
    public $page_previews;

    /**
     * @var GroupCategory[]
     */
    public $subcategories;

    /**
     * @return $this
     *
     * @param Group $page_preview
     */
    public function addPagePreview(Group $page_preview)
    {
        $this->page_previews[] = $page_preview;

        return $this;
    }

    /**
     * @return $this
     *
     * @param GroupCategory $subcategorie
     */
    public function addSubcategorie(GroupCategory $subcategorie)
    {
        $this->subcategories[] = $subcategorie;

        return $this;
    }

    /**
     * Category ID
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
     * Category name
     *
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
     * Pages number
     *
     * @return integer
     */
    public function getPageCount()
    {
        return $this->page_count;
    }

    /**
     * @return $this
     *
     * @param integer $page_count
     */
    public function setPageCount($page_count)
    {
        $this->page_count = $page_count;

        return $this;
    }

    /**
     * @return Group[]
     */
    public function getPagePreviews()
    {
        return $this->page_previews;
    }

    /**
     * @return $this
     *
     * @param array $page_previews
     */
    public function setPagePreviews(array $page_previews)
    {
        $this->page_previews = $page_previews;

        return $this;
    }

    /**
     * @return GroupCategory[]
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }

    /**
     * @return $this
     *
     * @param array $subcategories
     */
    public function setSubcategories(array $subcategories)
    {
        $this->subcategories = $subcategories;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function objectFields()
    {
        return [
            'subcategories' => [
                'class'  => 'VkSdk\Groups\Includes\GroupCategory',
                'method' => 'addSubcategorie'
            ],
            'page_previews' => [
                'class'  => 'VkSdk\Groups\Includes\Group',
                'method' => 'addPagePreview'
            ],
        ];
    }
}
