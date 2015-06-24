<?php

class recruitingCategoriesType
{

    /**
     * @var recruitingCategoryType $recruitingCategory
     */
    protected $recruitingCategory = null;

    /**
     * @param recruitingCategoryType $recruitingCategory
     */
    public function __construct($recruitingCategory)
    {
      $this->recruitingCategory = $recruitingCategory;
    }

    /**
     * @return recruitingCategoryType
     */
    public function getRecruitingCategory()
    {
      return $this->recruitingCategory;
    }

    /**
     * @param recruitingCategoryType $recruitingCategory
     * @return recruitingCategoriesType
     */
    public function setRecruitingCategory($recruitingCategory)
    {
      $this->recruitingCategory = $recruitingCategory;
      return $this;
    }

}
