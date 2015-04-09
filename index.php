<?php
// контроллер
require __DIR__ . '/models/news.php';

$news = findAllNews();

require __DIR__ . '/views/index.php';

