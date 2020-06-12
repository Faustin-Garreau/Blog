<?php 
    function home() {
    require MODEL.'Article.php';
    $articles = getLastArticles();
    require VIEW.'Home.php';
}
?>