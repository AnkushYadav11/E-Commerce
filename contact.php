<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="./styles/fonts.css">
</head>

<body>
    <header>
        <?php include './header.php' ?>
    </header>

    <div class="flex flex-col justify-center items-center h-[281px] bg-[#F5F5F5]">
        <h1 class="outfit-extralight text-[60px]">CONTACT</h1>
        <p class="outfit-extralight"> Home > <a href="./contact.php" class="outfit-extralight">Contact</a></p>
    </div>


    <!-- contact info fill -->
    <div class="flex [&>*]:w-[50%] gap-5" style="margin-top: 140px; margin-left:190px; margin-right:190px">

        <div>
            <h1 class="text-[30px] text-[#272727] outfit-extralight">CONTACT INFO</h1>
            <p class="text-[21px] outfit-extralight">Tortor dignissim convallis aenean et tortor at risus viverra adipiscing.</p>
            <div class="flex gap-[20px]" style="margin-top:36px">
                <span>
                    <h1 class="text-[30px] text-[#272727] outfit-extralight" style="margin-bottom: 14px;">OFFICE</h1>
                    <p class="text-[21px] text-[#272727] outfit-extralight">730 Glenstone Ave 65802, Springfield, US</p>
                    <p class="text-[21px] text-[#272727] outfit-extralight">+123 222 333 44</p>
                    <p class="text-[21px] text-[#272727] outfit-extralight">info@yourinfo.com</p>
                </span>
                <span>
                    <h1 class="text-[30px] text-[#272727] outfit-extralight" style="margin-bottom: 14px;">MANAGEMENT</h1>
                    <p class="text-[21px] text-[#272727] outfit-extralight">730 Glenstone Ave 65802, Springfield, US</p>
                    <p class="text-[21px] text-[#272727] outfit-extralight">+123 666 777 88</p>
                    <p class="text-[21px] text-[#272727] outfit-extralight">info@yourinfo.com</p>
                </span>
            </div>
        </div>

        <div>
            <div>
                <h1 class="text-[30px] text-[#272727] outfit-extralight">ANY QUESTIONS?</h1>
                <p class="text-[21px] outfit-extralight">Use the form below to get in touch with us.</p>
            </div>

            <form method="POST">
                <div style="margin-top:36px;">
                    <span class="flex gap-[20px]" style="margin-bottom:20px;">
                        <input type="text" name="name" placeholder="Your full name *" style="padding-top:39px; padding-bottom:39px;" class="grow border border-[#E3E3E3] rounded-xl">
                        <input type="email" name="email" placeholder="Write your email here *" style="padding-top:39px; padding-bottom:39px;" class="grow border border-[#E3E3E3] rounded-xl">
                    </span>
                    <span class="flex flex-col gap-[20px]">
                        <input type="number" placeholder="Phone Number" name="phone" id="" style="padding-top:39px; padding-bottom:39px;" class="grow border border-[#E3E3E3] rounded-xl">
                        <input type="text" placeholder="Write your subject here" name="subject" id="" style="padding-top:39px; padding-bottom:39px;" class="grow border border-[#E3E3E3] rounded-xl">
                        <input type="text" placeholder="Write your message here *" name="message" id="message" style="padding-top:39px; padding-bottom:39px;" class="grow border border-[#E3E3E3] rounded-xl">
                    </span>
                </div>
                <button class="bg-[#FF6543] text-[#FFFFFF] h-[56px] w-[149px] rounded-4xl hover:bg-[#FF3E14] hover:rounded-3xl" style="margin-top:36px" type="submit">Submit</button>
            </form>
        </div>

    </div>

    <!-- Our stores -->

    <div class="flex h-[620px] [&>*]:w-[50%]" style="margin-top: 140px; margin-left:190px; margin-right:190px;">
        <div>
            <img src="./images/contact.svg" alt="contact page" class="h-[620px]">
        </div>
        <div class="flex flex-col justify-center">
            <div class="h-[274px]" style="padding-left: 60px;">
                <div style="margin-bottom: 36px;">
                    <h1 class="text-[30px] text-[#272727] outfit-extralight">OUR STORES</h1>
                    <p class="text-[21px] text-[#272727] outfit-extralight">You can also directly buy products from our stores.</p>
                </div>
                <div class="flex gap-[20px]">
                    <span>
                        <h1 class="text-[30px] text-[#272727] outfit-extralight" style="margin-bottom: 14px;">USA</h1>
                        <p class="text-[21px] text-[#272727] outfit-extralight">730 Glenstone Ave 65802, US</p>
                        <p class="text-[21px] text-[#272727] outfit-extralight">+123 666 777 88</p>
                        <p class="text-[21px] text-[#272727] outfit-extralight">info@yourinfo.com</p>
                    </span>
                    <span>
                        <h1 class="text-[30px] text-[#272727] outfit-extralight" style="margin-bottom: 14px;">FRANCE</h1>
                        <p class="text-[21px] text-[#272727] outfit-extralight">13 Rue Montmartre 75001, Paris, France</p>
                        <p class="text-[21px] text-[#272727] outfit-extralight">+123 222 333 44</p>
                        <p class="text-[21px] text-[#272727] outfit-extralight">info@yourinfo.com</p>
                    </span>
                </div>

            </div>
        </div>
    </div>













    <?php include "./reviews.php" ?>
    <?php include "./posts.php" ?>
    <?php include "./footer.php" ?>
</body>

</html>