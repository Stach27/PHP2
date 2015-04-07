<?php
// функции для работы с базой данных
function dbConnect()
{
    mysql_connect('localhost', 'root', '');
    mysql_select_db('siteOfNews');
}

function dbFindAllByQuery($sql)
{
    dbConnect();
    $res = mysql_query($sql);
    $ret = [];
    while (false !==($row = mysql_fetch_array($res))) {
        $ret[] = $row;
    }
    return $ret;
}

function dbFindOneByQuery($sql)
{
    return dbFindAllByQuery($sql)[0];
}