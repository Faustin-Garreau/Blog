<?php
function register() {
    if (isset($_POST["usernameR"]) && isset($_POST["passwordR"]) && isset($_POST["confirmR"])) {
        $_SESSION['usernameR'] = $_POST['usernameR'];
        $_SESSION['passwordR'] = $_POST['passwordR'];
        $_SESSION['confirmR'] = $_POST['confirmR'];
        if (empty($_SESSION['usernameR'])) {
            $_SESSION['error']['usernameErr'] = "le name est requis";
        }else if (!preg_match('#^[A-Za-z]{2,20}$#', $_SESSION['usernameR'])) {
            $_SESSION['error']['usernameErr'] = "Format incorrect (entre 2 et 20 lettres)";
        } else {
            $_SESSION['usernameR'] = $_SESSION['usernameR'];
        }
    

        if (empty($_SESSION['passwordR'])) {
            $_SESSION['error']['passwordErr'] = "le password est requis";
        }else if (!preg_match('#^[A-Za-z0-9]{6,}$#', $_SESSION['passwordR'])) {
            $_SESSION['error']['passwordErr'] = "Format incorrect (au moins 6 caractères)";
        } else {
            $_SESSION['passwordR'] = $_SESSION['passwordR'];
        }
    
        if (empty($_SESSION['confirmR'])) {
            $_SESSION['error']['confirmErr'] = "le password est requis";
        }else if (!preg_match('#^[A-Za-z0-9]{6,}$#', $_SESSION['confirmR'])) {
            $_SESSION['error']['confirmErr'] = "Format incorrect (au moins 6 caractères)";
        } else {
            $_SESSION['confirmR'] = $_SESSION['confirmR'];
        }

        if ($_SESSION['passwordR'] != $_SESSION['confirmR']) {
            $_SESSION['error']['confirmErr'] = "ce n'est pas égal au password";
        }

            if (!isset($_SESSION['error'])) {
                
                require MODEL.'User.php';
                $user = getUser($_POST['usernameR']);

                if ($user) {
                    $_SESSION['error']['UsernameErr'] = "Il est déjà pris désolé";
                    header('Location: /register');
                    exit();
                } else {
                    storeUser();
                    header('Location: /articles');
                }

                

            } else {
                header('Location: /register');
            }
        
}
}

function showRegister() {
    require VIEW.'register.php';
}

function showLogin() {
    require VIEW.'login.php';
}

function login() {


    require MODEL.'User.php';
    $user = getUser($_POST['usernameL']);
    if ($user) {
        $_SESSION['user'] = $user;
        header('Location: /articles');
        exit();
    } else {
        die();
        header('Location: /login');
    }
}
?>
