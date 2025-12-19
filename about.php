<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT PAGE</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./styles/fonts.css">
</head>

<body>
    <header>
        <?php include './header.php' ?>
    </header>

    <div class="bg-[#F5F5F5] h-[281px]">
        <h1 class=" flex justify-center  text-[40px] outfit-extralight" style="padding-top: 100px;">ABOUT US</h1>
        <span class="flex justify-center">
            <a href="./index.php" class="outfit-extralight">Home > </a>
            <u class="outfit-extralight">About us</u>
        </span>
    </div>

    <!-- Tags -->
    <div class="flex [&>*]:grow gap-5" style="margin-top:140px; margin-bottom:140px; padding-left:2em; padding-right: 2em;">
        <div>
            <img src="./images/cartorenge.svg" class="inline" alt="cart orenge"> <span> Free delivery</span>
            <p style="margin-left: 2.5em;">Consectetur adipi elit lorem ipsum dolor sit amet.</p>
        </div>
        <div>
            <img src="./images/troffy.svg" alt="Troffy" class="inline"><span> Quality guarantee</span>
            <p style="margin-left: 2.5em;">Dolor sit amet orem ipsu mcons ectetur adipi elit.</p>
        </div>
        <div>
            <img src="./images/tag.svg" alt="Tag" class="inline"><span> Daily offers</span>
            <p style="margin-left: 2.5em;">Amet consectetur adipi elit loreme ipsum dolor sit.</p>
        </div>
        <div>
            <img src="./images/comment.svg" alt="Comment" class="inline"><span> 100% secure payment</span>
            <p style="margin-left: 2.5em;">Rem Lopsum dolor sit amet, consectetur adipi elit.</p>
        </div>
    </div>


    <!-- Video tag -->
    <div class="flex h-[612px] [&>*]:w-[50%]" style="padding-left: 190px; padding-right:190px">

        <div>
            <div class="bg-cover bg-center">
                <img src="./images/aboutimg.svg" alt=" image" style="height: 612px;">
            </div>
        </div>

        <div style="height: 335px; width: 660px; margin-top: 8em; margin-left:5em;">
            <div class="m-15">
                <h1 class="text-[30px] outfit-extralight">Best Digital Store BasicStore</h1>
                <p class="text-[21px] outfit-extralight">Risus augue curabitur diam senectus congue velit et. Sed vitae metus nibh sit
                    era. Nulla adipiscing
                    pharetra pellentesque maecenas odio eros at. Et libero vulputate amet duis erat volutpat vitae eget.
                    Sed vitae metus nibh sit era.Nulla adipiscing pharetra eros at.
                    Nulla adipiscing pharetra pellentesque maecenas odio eros at.Et libero vulputate amet duis erat
                    volutpat vitae eget. Quam libero etiam et in ac at quis. Risus augue curabitur diam senectus congue
                    velit e. 
                </p>
                <button class="rounded-full bg-[#FF6543] h-[56px] w-[194px]" style="margin-top: 39px;"> GO TO SHOP </button>
            </div>
        </div>

    </div>
</body>

</html>