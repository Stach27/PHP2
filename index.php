<?php
// контроллер
require 'models/news.php';

$news = findAllNews();

require 'views/index.php';

