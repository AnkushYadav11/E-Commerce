<?php
include './db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $st = $conn->prepare("select id,uname,password from user where email=?");
    $st->bind_param("s", $email);

    $st->execute();
    $st->store_result();
    $st->bind_result($id, $name, $password);

    if ($st->fetch() && password_verify($pass, $password)) {
        $_SESSION["id"] = $id;
        $_SESSION["name"] = $name;
        header("location:./index.php");
    } else {
        $erro = "Wrong credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./styles/fonts.css">
</head>

<body class="bg-[#FF6543] flex justify-center items-center">
    <div class="bg-[#FFFFFF] border border-[#FFFFFF] rounded-4xl h-[700px] w-[1080px] [&>*]:w-[50%] flex" style="margin-top: 17px;">
        <div class="flex justify-center items-center">
            <img src="./images/loginpage.jpg" alt="login photo" class="relative rounded-4xl">
        </div>
        <div class="rounded-4xl" style="padding-left: 80px;padding-top:50px">
            <h1 style="margin-bottom: 60px;" class="text-[60px] outfit-extralight">Login</h1>
            <form method="POST" style="padding-bottom: 79px;">
                <input type="email" alt="username" name="email" class="block rounded bg-[#D9D9D9] outfit-extralight" style="height:50px; width:300px;padding-left:30px; margin-bottom:32px" placeholder="Email address*">
                <input type="password" alt="password" name="password" class="block rounded bg-[#D9D9D9] outfit-extralight" style="height:50px; width:300px;padding-left:30px; margin-bottom:32px" placeholder="Password*">
                <p><?= (isset($erro)) ? $erro:null ?></p>
                <button type="submit" class="rounded bg-[#101010] text-[#FFFFFF] hover:bg-[#444948] outfit-medium" style="width: 300px; height:50px">Login</button>
            </form>
            <h5 class="outfit-extralight" style="padding-bottom: 5px;">Forgot Password ?</h5>
            <h5 class="outfit-extralight">Don't have account? <a href="register.php" class="text-[#3F00D2]">Register here</a></h5>
        </div>
    </div>
</body>

</html>