<?php

require __DIR__ . '/../functions/db.php';

//дата проставляется автоматически CURRENT_TIMESTAMP

dbConnect();

$name = mysql_real_escape_string($_POST['name']);
$bodyArticle = mysql_real_escape_string($_POST['text']);
$sql = 'INSERT INTO news (name, bodyArticle) VALUES ("' . $name . '", "' . $bodyArticle . '")';


if (!mysql_query($sql)) {
    echo '<p>Ошибка при добавлении данных</p>';
} else {
    echo '<p>Новость успешно добавлена!</p>';
}
?>
