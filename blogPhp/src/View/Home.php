<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="flex items-center justify-between flex-wrap bg-red-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">
    <span class="font-semibold text-xl tracking-tight">FBlog</span>
    </div>
    <div class="w-full block flex-grow lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
        <a href="/register" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        REGISTER
        </a>
        <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
        LOGIN
        </a>
    </div>
    </div>
</nav>
    <?php
foreach ($articles as $article) {
?>    
        <div class="container mx-auto">
    <div class="p-4 text-gray-800 bg-gray-400">
        <h1 class="mb-9 text-6xl font-bold leading-none tracking-tight text-gray-800 text-center"><?php echo $article['title'];?></h1>
        <p class="leading-normal text-center"><?php echo $article['contenu'];?></p>
        <div class="flex justify-between items-center">
            <div class="md:text-4xl">Jan 13 7 PM</div>
        </div>
    </div>
</div>
<?php
    }
    ?>
</body>
</htm