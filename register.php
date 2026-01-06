<?php
include './db.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $name = $_POST["uname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $pass = $_POST["password"];
    $pass1 = $_POST["repassword"];
   
    if($pass == $pass1){
        $pass2 = password_hash($_POST["password"],PASSWORD_BCRYPT);

        $st = $conn->prepare("insert into user(uname,email,phone,password) values(?,?,?,?)");
        $st->bind_param("ssis",$name,$email,$phone,$pass2);

        if($st->execute()){
            header('location:./login.php');
        }
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
        <div class="rounded-4xl" style="padding-left: 80px; padding-top:30px">
            <h1 style="padding-bottom:30px" class="text-[60px] outfit-extralight">Register</h1>
            
            <form method="POST" style="padding-bottom: 20px;">
                <input type="text" alt="username" name="uname" class="block rounded bg-[#D9D9D9] outfit-extralight" style="height:50px; width:300px;padding-left:30px; margin-bottom:20px" placeholder="Enter username*">
                <input type="email" alt="Email" name="email" class="block rounded bg-[#D9D9D9] outfit-extralight" style="height:50px; width:300px;padding-left:30px; margin-bottom:20px" placeholder="Email address*">
                <input type="number" alt="Phone" name="phone" class="block rounded bg-[#D9D9D9] outfit-extralight" style="height:50px; width:300px;padding-left:30px; margin-bottom:20px" placeholder="Phone*">
                <input type="password" alt="Password" name="password" class="block rounded bg-[#D9D9D9] outfit-extralight" style="height:50px; width:300px;padding-left:30px; margin-bottom:20px" placeholder="Password*">
                <input type="password" alt="Re-Password" name="repassword" class="block rounded bg-[#D9D9D9] outfit-extralight" style="height:50px; width:300px;padding-left:30px; margin-bottom:20px" placeholder="Re-Password*">
                <button type="submit" class="rounded bg-[#101010] text-[#FFFFFF] hover:bg-[#444948] outfit-medium" style="width: 300px; height:50px">Login</button>
            </form>

            <h5 class="outfit-extralight">Aready have account? <a href="login.php" class="text-[#3F00D2]">Login!</a></h5>
        </div>
</div>
</body>

</html>