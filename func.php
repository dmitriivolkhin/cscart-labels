<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_labels_install()
{
    fn_set_notification('N', 'Success', 'Labels addon installed');
}

function fn_labels_uninstall()
{
    fn_set_notification('N', 'Success', 'Labels addon removed');
}

function fn_labels_get_all()
{
    return db_get_array("SELECT * FROM ?:labels");
}

function fn_labels_get_by_id($label_id)
{
    return db_get_row(
        "SELECT * FROM ?:labels WHERE label_id = ?i",
        $label_id
    );
}

function fn_labels_create(array $data)
{
    return db_query(
        "INSERT INTO ?:labels ?e", 
        $data
    );
}

function fn_labels_update($label_id, array $data)
{
    return db_query(
        "UPDATE ?:labels SET ?u WHERE label_id = ?i",
        $data,
        $label_id
    );
}

function fn_labels_delete($label_id)
{
    return db_query(
        "DELETE FROM ?:labels WHERE label_id = ?i",
        $label_id
    );

}