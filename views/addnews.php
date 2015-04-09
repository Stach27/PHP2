<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="stylesheet" href="../css/style.css" type="text/css"/>
    <meta charset="UTF-8">
    <title>Добавление</title>
</head>
<body>
<div id="wrapper">
    <div id="header"></div>

    <div id="side-menu">Navigation menu</div>

    <form action="/../models/addnews.php" method="post" name="userform" enctype="multipart/form-data">
        <fieldset>
            <legend>Добавление новости:</legend>
            <p><input type="text" name="name" placeholder="Название" size="40"/></p>
            <p><textarea name="text" cols="41" rows="4" placeholder="Содержание"></textarea></p>
            <p><input type="submit" value="Отправить"></p>
        </fieldset>
    </form>
    <div id="footer"></div>

</div>
</body>
</html>

