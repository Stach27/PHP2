<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="stylesheet" href="../css/style.css" type="text/css"/>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>

<div id="wrapper">
    <div id="header"></div>

    <div id="side-menu">Navigation menu</div>

    <div id="ListNews">
        <h1>Новости</h1>

        <?php foreach ($news as $article): ?>
            <article>

                <h3><a href="article.php?id=<?php echo $article['id']; ?>">
                        <?php echo $article['name']; ?></a></h3>

                <div><?php echo $article['bodyArticle']; ?></div>

            </article>
        <?php endforeach; ?>

        <br>
        <br>
    <a href="/views/addnews.php">Добавить новость</a>
    </div>

    <div id="footer"></div>

</div>
</body>
</html>