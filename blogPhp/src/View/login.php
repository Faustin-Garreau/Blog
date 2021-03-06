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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="h-screen bg-indigo-200 flex justify-center items-center">
    <form class="w-full max-w-xs bg-white flex flex-col py-5 px-8 rounded-lg shadow-lg" method="post" action="/login">
    <label class="text-gray-700 font-bold py-2" for="">Username</label>
    <input class="text-gray-700 shadow border rounded border-gray-300 focus:outline-none focus:shadow-outline py-1 px-3 mb-3" type="text" name="usernameL" placeholder="Username">
    <label class="text-gray-700 font-bold py-2" for="">Password</label>
    <input class="text-gray-700 shadow border rounded border-gray-300 mb-3 py-1 px-3 focus:outline-none focus:shadow-outline" type="password"  name="passwordL" placeholder="********">
    <div class="flex justify-between items-center my-4">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded py-2 px-4">
        Connect
        </button>
        <a class="text-blue-600 hover:text-blue-800 font-bold" href="#">
        Forgot Password?
        </a>
    </div>
    
    </form>
</div>

</body>
</html>
<?php unset($_SESSION['error']);?>
