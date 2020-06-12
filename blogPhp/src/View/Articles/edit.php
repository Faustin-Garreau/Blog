<?php
    function getError($field) {
    if(isset($_SESSION['error'][$field])) {
        $error = $_SESSION['error'][$field];
        unset($_SESSION['error'][$field]);
        return $error;
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editer son article</title>
</head>
<body>
<h1 class="text-center">Editer son article</h1>
<div class="flex items-stretch">
    <div class="flex-1 text-gray-700 text-center"></div>
    <div class="flex-2 text-gray-800 text-center">
        <div class="w-full max-w-xs">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/articles/<?php echo $article['slug'];?>" method="post">
    <div class="mb-4">
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo $article['title'];?>"  id="title" type="text" name="title" placeholder="title">
            <span class="text-red-500"><?php echo getError('titleErr'); ?></span>

    </div>
    <div class="mb-4">
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="<?php echo $article['slug'];?>"  id="title" type="text" name="slug" placeholder="slug">
            <span class="text-red-500"><?php echo getError('slugErr'); ?></span>

    </div>
    <div class="mb-6">
        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="text" placeholder="contenue" name="contenu"><?php echo $article['contenu'];?></textarea>
            <span class="text-red-500"><?php echo getError('contenuErr'); ?></span>
    </div>
    <div class="flex items-center justify-between">
        <input class="bg-gray-400 rounded" type="submit" value="edit">
    </div>
    </form>
</div></div>
    <div class="flex-1 text-gray-700 text-center"></div>
</div>

</body>
</html>
<?php unset($_SESSION['error']);?>