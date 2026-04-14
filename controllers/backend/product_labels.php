<?php

use Tygh\Addons\Labels\ServiceProvider;
use Tygh\Tygh;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

/*if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($mode === 'update') {
        $product_id = isset($_REQUEST['product_id']) ? (int) $_REQUEST['product_id'] : 0;

        if (!$product_id) {
            return [CONTROLLER_STATUS_NO_PAGE];
        }

        $product_data = $_REQUEST['label_data'];
        $service = ServiceProvider::getService();

        $service->updateLabelsProducts($product_data, $product_id);

        return [CONTROLLER_STATUS_OK, 'product_labels.manage'];
    }
}

if ($mode === 'manage') {
    $labels = db_get_array("SELECT * FROM ?:labels");
    Tygh::$app['view']->assign('labels', $labels);
}*/
