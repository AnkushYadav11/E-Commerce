<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./styles/fonts.css">
</head>

<body>
    <header>
        <?php include './header.php' ?>
    </header>

    <div class="flex flex-col justify-center items-center h-[281px] bg-[#F5F5F5]">
        <h1 class="outfit-extralight text-[60px]">BLOGS</h1>
        <p class="outfit-extralight "> Home > <a href="./blogs.php" class="outfit-extralight">Blog</a></p>
    </div>

    <?php include "./reviews.php" ?>
    <?php include "./posts.php" ?>
    <?php include "./footer.php" ?>
</body>

</html>