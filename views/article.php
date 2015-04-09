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

    <h1>Новость</h1>

    <article>
        <h3> <?php echo $article['name']; ?> </h3>
        <div><?php echo $article['bodyArticle']; ?></div>
    </article>

    <div id="footer"></div>

</div>
</body>
</html>