<?php 
function getLastArticles() {
    global $bdd;
        $req=$bdd->query('SELECT * FROM articles ORDER BY created_at DESC LIMIT 3');
        return $req->fetchAll();
}

function getArticles() {
    global $bdd;
    $req=$bdd->query('SELECT * FROM articles ORDER BY created_at');
    return $req->fetchAll();
}

function getArticle($slug) {
    global $bdd;
    $req=$bdd->prepare('SELECT * FROM articles WHERE slug = :slug');
    $req->execute ([
        "slug" => $slug
    ]);
    return $req->fetch();
}

function updateArticle($slug) {
    global $bdd;
    $req=$bdd->prepare('UPDATE articles SET title = :title, slug = :slug, contenu = :contenu WHERE slug = :prevslug');
    $req->execute ([
        "slug" => $_POST['slug'],
        "title" => $_POST['title'],
        "contenu" => $_POST['contenu'],
        "prevslug" => $slug
    ]);
}

function deleteArticle($slug) {
    global $bdd;
    $req = $bdd->prepare('DELETE FROM articles WHERE slug = :slug');
    $req->execute([
        "slug" => $slug
    ]);
}
function storeArticle() {
    global $bdd;
    $req = $bdd->prepare('INSERT INTO articles (title,slug,contenu, user_id) VALUES (:title, :slug, :contenu, 1)');
    $req->execute([
        'title' => $_POST['title'],
        'slug' => $_POST['slug'],
        'contenu' => $_POST['contenu']
    ]);
}






