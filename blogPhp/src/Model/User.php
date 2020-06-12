<?php
    function storeUser() {
        global $bdd;
        $req = $bdd->prepare('INSERT INTO users (username,password) VALUES (:username, :password)');
        $req->execute ([
            'username' => $_POST['usernameR'],
            'password' => password_hash($_POST['passwordR'], PASSWORD_DEFAULT)
        ]);

    }

    function getUser($username) {
            global $bdd;
            $req = $bdd->prepare('SELECT * FROM users WHERE username = :username');
            $req->execute([
                'username' => $_POST['usernameL']
            ]);
            return $req->fetch();
        }
?>