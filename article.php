<?php
// контроллер
require 'models/news.php';

$article = findOneByID($_GET['id']);

require 'views/article.php';
