<?php
//модель - все функции для работы с новостями
require __DIR__ . '/../functions/db.php';

function findAllNews()
{
    $sql = 'SELECT * FROM news ORDER BY date DESC';
    $ret = dbFindAllByQuery($sql);
    return $ret;
}

function findOneByID($id)
{
    $sql = 'SELECT * FROM news WHERE id=' . $id;
    $ret = dbFindOneByQuery($sql);
    return $ret;
}

