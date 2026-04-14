<?php

use Tygh\Addons\Labels\ServiceProvider;
use Tygh\Tygh;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($mode === 'update') {
    //if (!defined('AJAX_REQUEST') || empty($_REQUEST['product_id'])) {
        //return [CONTROLLER_STATUS_NO_PAGE];
    //}

    $product_repository = ServiceProvider::getProductRepository();
    $product_data = $product_repository->findLabelProduct($_REQUEST['product_id']);

    if ($product_data) {
        Tygh::$app['view']->assign('product_data[alow_labels]', $product_data['allow_labels']);
    }
}