<?php
// контроллер
require __DIR__ . '/models/news.php';

$article = findOneByID($_GET['id']);

require __DIR__ . '/views/article.php';
