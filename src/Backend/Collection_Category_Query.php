<?php
/**
 * Collection_Category_Query generated on 2022-04-30
 * @see https://sdkgen.app
 */

class Collection_Category_Query extends Collection_Query implements \JsonSerializable
{
    protected ?int $categoryId = null;
    public function setCategoryId(?int $categoryId) : void
    {
        $this->categoryId = $categoryId;
    }
    public function getCategoryId() : ?int
    {
        return $this->categoryId;
    }
    public function jsonSerialize() : \stdClass
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('categoryId' => $this->categoryId), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
