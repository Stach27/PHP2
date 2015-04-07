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

    <form action="addnews.php" method="post" name="userform" enctype="multipart/form-data">
        <fieldset>
            <legend>Добавление новости:</legend>
            <p><textarea name="name" cols="40" rows="1"></textarea></p>
            <p><textarea name="text" cols="40" rows="4"></textarea></p>
            <p><input type="submit" value="Отправить"></p>
        </fieldset>
    </form>
    <div id="footer"></div>

</div>
</body>
</html>

