<?php

    function articleIndex() {
        require MODEL.'Article.php';
        $articles = getArticles();
        require VIEW.'Articles/index.php';
    }

    function articleShow($slug) {
        require MODEL.'Article.php';
        $article = getArticle($slug);
        if ($article) {
            require VIEW.'Articles/show.php';
        } else {
            header('Location: /404');
        }
    }

    function articleCreate() {
        require VIEW.'Articles/create.php';
    }

    function articleUpdate($slug) {
        if (isset($_POST['title']) && isset($_POST['contenu']) && isset($_POST['slug'])) {
            $_SESSION['title'] = $_POST['title'];
            $_SESSION['contenu'] = $_POST['contenu'];
            $_SESSION['slug'] = $_POST['slug'];
            if (empty($_POST['title'])) {
                $_SESSION['error']['titleErr'] = "le title est requis";
            }
            if (empty($_POST['slug'])) {
                $_SESSION['error']['slugErr'] = "le slug est requis";
            }
            if (empty($_POST['contenu'])) {
                $_SESSION['error']['contenuErr'] = "le contenu est requis";
            }
            if (!isset($_SESSION['error'])) {
                
                require MODEL.'Article.php';
                updateArticle($slug);
                header('Location: /articles/' . $_POST['slug']);

            } else {
                header('Location: /articles' . $slug . '/edit');
            }
        
    }

}

    function articleEdit($slug) {
        require MODEL.'Article.php';
        $article = getArticle($slug);
        if ($article) {
            require VIEW.'Articles/edit.php';
        } else {
            header('Location: /404');
        }
    }

    function articleDelete($slug) {
        require MODEL.'Article.php';
        deleteArticle($slug);
        header('Location: /articles');
    }
    function articleStore() {
        require MODEL.'Article.php';
        storeArticle();
        header('Location: /articles');
    }
?>