<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/articles" method="post">
        <div>
    <input type="text" name="title" id="title" placeholder="title">
        </div>

        <div>
        <input type="text" name="slug" id="title" placeholder="slug">
        </div>

        <div class="form-example">
    <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
        </div>
        <div class="form-example">
    <input type="submit" value="crée">
        </div>
</form>

</body>
</html>