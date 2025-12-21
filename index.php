<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="./styles/fonts.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <header>
        <?php include './header.php' ?>
    </header>

    <main style="margin-bottom:20px;">
        <!-- Banner -->
        <div class="flex h-[678px] [&>*]:w-[50%] justify-center bg-[#EEEEEE]" style="padding-left: 5em; padding-right:5em;">
            <div style="padding-top: 10em; padding-left:5em;">
                <h1 class="text-[51px] outfit-extralight">GoPro hero9 Black</h1>
                <p class="text-[21px] outfit-extralight">Limited stocks available. Grab it now!</p>
                <button class="h-[56px] w-[249px] bg-[#FF6543] rounded-full outfit-light" style="margin-top: 2em;"><a href="#" class="text-[#FFFFFF]">Shop collection</a></button>
            </div>
            <div class="rounded-[50em] bg-[#DBDBDB]" style="padding-top: 5em; padding-left:2em;"><img src="./images/gopro.svg" alt="GoPro" height="612.2" width="596.4"></div>
        </div>

        <!-- Tags -->
        <div class="flex [&>*]:grow gap-5" style="margin-top:2em; margin-left:190px; margin-right: 190px;">
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

        <!-- Categories -->
        <div style="margin-top: 5em; margin-left:108px; margin-right:108px;">
            <h1 class="text-[30px] flex text-[#272727] outfit-extralight" style="margin-bottom: 39px;">Categories <span class="text-[#D0D0D0]">///////////////////////////////////////////////////////////////////////////////////////////////////</span></h1>
            <div class="flex gap-[20px] grow [&>*]:border [&>*]:border-[#E0E0E0] [&>*]:h-[296px] [&>*]:w-[240px] [&>*]:hover:drop-shadow-xl/50">
                <div class="flex flex-col justify-center items-center text-center rounded-[5px]">
                    <img src="./images/iphone.svg" class="h-[195px] w-[172px]" alt="Iphone cover">
                    <p>Phones</p>
                </div>
                <div class="flex flex-col justify-center items-center text-center rounded-[5px]">
                    <img src="./images/playstation.svg" class="h-[195px] w-[172px]" alt="PlayStations">
                    <p>PlayStation</p>
                </div>
                <div class="flex flex-col justify-center items-center text-center rounded-[5px]">
                    <img src="./images/watch.svg" class="h-[195px] w-[172px]" alt="Hand watch">
                    <p>Digital Watches</p>
                </div>
                <div class="flex flex-col justify-center items-center text-center rounded-[5px]">
                    <img src="./images/joysticks.svg" class="h-[195px] w-[172px]" alt="Controler">
                    <p>Joysticks</p>
                </div>
                <div class="flex flex-col justify-center items-center text-center rounded-[5px]">
                    <img src="./images/airpods.svg" class="h-[195px] w-[172px]" alt="Airpods">
                    <p>EarPods</p>
                </div>
                <div class="flex flex-col justify-center items-center text-center rounded-[5px]">
                    <img src="./images/laptop.svg" class="h-[195px] w-[172px]" alt="Laptop">
                    <p>Laptops</p>
                </div>
            </div>
        </div>

        <!-- Best selling items -->'
         <div style="margin-top: 140px; margin-left:108px; margin-right:108px;">
            <h1 class="text-[30px] text-[#272727] outfit-extralight" style="display:inline;">BEST SELLING ITEMS <span class="text-[#D0D0D0]">////////////////////////////////////////////////////////////////////////////////////</span></h1>
        <div class="gap-[20px] flex overflow-x-scroll [&>*]:shrink-0 [&>*]:border [&>*]:border-[#D0D0D0] [&>*]:rounded-xl [&>*]:h-[393px] [&>*]:w-[292px]" style="margin-top:39px; margin-left:82px; margin-right:82px;">
            <div class="flex flex-col justify-center items-center">
                <img src="./images/ipad.svg" style="height:143px; width:235px;" alt="Ipad Cover">
                <p class="outfit-light text-[21px]" style="margin-top:70px;">IPad (9th Gen)</p>
                <p class="outfit-light text-[21px] text-[#FF6543]" style="margin-top: 9px;">$400</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img src="./images/drone.svg" style="height:197px; width:197px;" alt="Drone">
                <p class="outfit-light text-[21px]" style="margin-top:42px;">Drone With Camera</p>
                <p class="outfit-light text-[21px] text-[#FF6543]" style="margin-top: 9px;">$400</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img src="./images/watchs.svg" style="height:183px; width:192px;" alt="Digital Watche">
                <p class="outfit-light text-[21px]" style="margin-top:57px;">Apple Watch (2nd Gen)</p>
                <p class="outfit-light text-[21px] text-[#FF6543]" style="margin-top: 9px;">$400</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img src="./images/tv.svg" style="height:165px; width:239px;" alt="TV">
                <p class="outfit-light text-[21px]" style="margin-top:62px;">Ultra HD TV</p>
                <p class="outfit-light text-[21px] text-[#FF6543]" style="margin-top: 9px;">$400</p>
            </div>
            <div class="flex flex-col justify-center items-center">
                <img src="./images/speaker.svg" style="height:185px; width:164px;" alt="Speaker">
                <p class="outfit-light text-[21px]" style="margin-top:50px;">Bluetooth Speaker</p>
                <p class="outfit-light text-[21px] text-[#FF6543]" style="margin-top: 9px;">$400</p>
            </div>
        </div>
        </div>
    </main>

    <footer>

    </footer>

</body>

</html>