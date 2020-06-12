<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
foreach ($articles as $article) {
?>    
<div class="container mx-auto">
    <div class="p-4 text-gray-800 bg-gray-400">
        <h1 class="mb-9 text-6xl font-bold leading-none tracking-tight text-gray-800 text-center"><?php echo $article['title'];?></h1>
        <p class="leading-normal text-center break-words"><?php echo $article['contenu'];?></p>
        <div class="">
            <div class="md:text-4xl">Jan 13 7 PM</div>
                <div class="flex justify-between items-center">
                <form action="/articles/<?php echo $article['slug']?>/edit" method="post">
            <button class="text-right" type="submit"><i class="fas fa-edit bg-gray-500 p-4"></i></button>
                </form>
            <a href="/articles/<?php echo $article['slug'];?>"><i class="fas fa-eye  bg-gray-500 p-4"></i></a>
                </div>
    </div>
</div>
            
    
<?php
    }
    ?>
</body>
</html>