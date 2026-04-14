<?php

namespace Tygh\Addons\Labels\Product\Labels;

class LabelsProducts
{
    /** @var int */
    private $product_id;

    /** @var string */
    private $allow_labels;

    protected function __construt(int $productId = 0, bool $allow = false)
    {
        $this->product_id = $productId;
        $this->allow_labels = $allow ? 'Y' : 'N';
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param int $id
     */
    public function setProductId($productId)
    {
        $this->product_id = $productId;
    }

    /**
     * @return bool
     */
    public function hasAllowLabels()
    {
        return $this->allow_labels == 'Y';
    }

    /**
     * @return string
     */
    public function getAllowLabels()
    {
        return $this->allow_labels;
    }

    /**
     * @param bool $allow
     */
    public function setAllowLabels($allow)
    {
        $this->allow_labels = $allow ? 'Y' : 'N';
    }

    /**
     * Converts instance to array
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'product_id' => $this->product_id,
            'allow_labels' => $this->allow_labels
        ];
    }
}