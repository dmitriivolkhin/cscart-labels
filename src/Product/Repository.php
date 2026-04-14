<?php

namespace Tygh\Addons\Labels\Product;

use Tygh\Addons\Labels\Product\Labels\LabelsProducts;
use Tygh\Addons\ProductVariations\Tools\QueryFactory;

class Repository
{
    const TABLE_LABELS_PRODUCTS = 'labels_products';

    /** @var \Tygh\Addons\ProductVariations\Tools\QueryFactory */
    protected $query_factory;

    /** @var string */
    protected $lang_code;

    /**
     * Repository constructor.
     *
     * @param \Tygh\Addons\ProductVariations\Tools\QueryFactory $query_factory
     * @param string                                            $lang_code
     */
    public function __construct(QueryFactory $query_factory, $lang_code)
    {
        $this->query_factory = $query_factory;
        $this->lang_code = $lang_code;
    }

    /**
     * @param string|array $table_id
     * @param array        $conditions
     * @param array        $fields
     * @param string       $table_alias
     *
     * @return \Tygh\Addons\ProductVariations\Tools\Query
     */
    protected function createQuery($table_id, array $conditions = [], array $fields = [], $table_alias = null)
    {
        return $this->query_factory->createQuery($table_id, $conditions, $fields, $table_alias);
    }

    public function findLabelProduct(string $productId): array
    {
        return $this->createQuery(self::TABLE_LABELS_PRODUCTS, ['product_id' => $productId], ['*'])->select();
    }

    public function updateLabelsProducts(LabelsProducts $labelsProducts): bool
    {
        $item = $this->createQuery(self::TABLE_LABELS_PRODUCTS, ['product_id' => $labelsProducts->getProductId()], ['*'])->select();
        
        if ($item) {
            $this->createQuery(self::TABLE_LABELS_PRODUCTS)
                ->addConditions(['product_id' => $labelsProducts->getProductId()])
                ->update(['allow_labels' => $labelsProducts->getAllowLabels()]); 
        } else {
            $this->createQuery(self::TABLE_LABELS_PRODUCTS)->insert($labelsProducts->toArray());
        }
        
        return true;
    }
}