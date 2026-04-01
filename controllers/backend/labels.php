<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

use Tygh\Tygh;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($mode === 'add') {
        fn_labels_create($_REQUEST['label_data']);
        return [CONTROLLER_STATUS_OK, 'labels.manage'];
    }

    if ($mode === 'delete') {
        fn_labels_delete((int) $_REQUEST['label_id']);
        return [CONTROLLER_STATUS_OK, 'labels.manage'];
    }
}

if ($mode === 'manage') {
    $labels = fn_labels_get_all();
    Tygh::$app['view']->assign('labels', $labels);
}

