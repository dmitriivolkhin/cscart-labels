<?php

namespace Tygh\Addons\Labels;

use Tygh\Addons\Labels\Product\Labels\LabelsProducts;
use Tygh\Common\OperationResult;
use Tygh\Addons\Labels\Product\Repository as ProductRepository;
use Tygh\Addons\Labels\Product\Labels\Repository as LabelRepository;

class Service
{
    private $productRepository;
    private $labelRepositoy;

    public function __construct(
        ProductRepository $productRepository, 
        LabelRepository $labelRepository
    ) {
        $this->productRepository = $productRepository;
        $this->labelRepositoy = $labelRepository;
    }

    /**
     * @param array $product_data
     * @param int $product_id
     * 
     * 
     * @return \Tygh\Common\OperationResult
     */
    public function updateLabelsProducts($product_data, $product_id)
    {
        $result = new OperationResult(true);
        
        $allow = !empty($product_data['allow_labels']) ? 'Y' : 'N';
        $labelsProducts = new LabelsProducts();
        $labelsProducts->setProductId($product_id);
        $labelsProducts->setAllowLabels($allow);

        $this->productRepository->updateLabelsProducts($labelsProducts);

        $result->setSuccess(true);

        return $result;
    }
}