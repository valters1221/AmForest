<?php include $_SERVER['DOCUMENT_ROOT'] . '/lang/handling.php' ; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/meta.php'?>
</head>

<body>
    <?php include 'components/headerv2.php' ?>
    <section class="sm:max-h-[80svh] sm:h-[80svh] h-auto flex justify-center items-center">
        <img src="/images/dear2.png" alt="dear"
            class=" absolute h-[90svh]  min-[1550px]:left-[-20%] min-[1340px]:left-[-35%] min-[1200px]:left-[-45%] min-[1024px]:left-[-55%]  hidden min-[1024px]:block">
        <div class="container max-w-[1200px] mx-auto flex flex-col lg:flex-row ">
            <div class="w-full lg:w-1/2 flex justify-start items-end">
                <img src="/images/dear.png " alt="dear" class=" h-[60svh] min-[1024px]:hidden mt-auto ">
            </div>
            <div
                class="w-full lg:w-1/2 flex justify-center items-center animate blur-in-down fast-3 bg-white sm:bg-transparent pt-5 sm:pt-0">
                <div class="mb-16  sm:my-0 sm:mb-0">
                    <h1 class=" font-bold text-center text-5xl mb-5">Par Mums</h1>
                    <div class="flex justify-center items-center">
                        <p class=" text-center max-w-[90%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto ipsum excepturi tenetur ab! Voluptates quibusdam doloribus numquam, sit impedit velit consectetur dignissimos soluta corrupti sed assumenda laborum earum tempore dolorem. eveniet, culpa mollitia voluptatem earum praesentium? Ipsa nemo deleniti cumque ab?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'components/piedavajums.php' ?>
    <?php include 'components/contact_form.php' ?>
    <?php include 'components/footer.php' ?>

    <script src="/js/animantion.js"></script>
    <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
    <script src="/js/script.js"></script>
    <script src="/js/bg.js"></script>
</body>

</html>