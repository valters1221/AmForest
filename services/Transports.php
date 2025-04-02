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
    <?php include 'components/header.php' ?>

    <section>
        <div class="relative h-[600px] flex flex-col justify-between">
            <img src="/images/photorealistic-perspective-wood-logs (2).jpg" alt="Forest background"
                class="absolute inset-0 w-full h-full object-cover brightness-75">
            <div
                class="relative z-10 flex-grow flex flex-col items-center justify-center rounded-xl p-8 max-w-3xl mx-auto inline-block text-center ">
                <div>
                    <p id="typing-quote" class="text-xl md:text-2xl text-white font-normal italic">kā pārdot mežu?</p>
                </div>
            </div>

            <div
                class="bg-zinc-900/80 w-[95%] sm:w-auto rounded-xl p-4 absolute sm:left-1/2 -bottom-12 z-20 backdrop-blur-md mx-auto left-0 right-0 sm:-translate-x-1/2 text-white">
                <div class="flex flex-wrap sm:flex-nowrap justify-between items-stretch">
                    <a href="#"
                        class="w-1/2 sm:w-1/4 px-3 sm:px-7 py-4 flex flex-col items-center justify-center animate blur-grow fast-2">
                        <div class="text-lg md:text-lg lg:text-lg hover:text-[#309474] transition-colors">Konsultācija
                        </div>
                    </a>
                    <div class="hidden sm:block w-px bg-[#309474] self-stretch"></div>
                    <a href="#"
                        class="w-1/2 sm:w-1/4 px-3 sm:px-7 py-4 flex flex-col items-center justify-center animate blur-grow fast-2 delays-1">
                        <div class="text-lg md:text-lg lg:text-lg hover:text-[#309474] transition-colors">Uzskopšana
                        </div>
                    </a>
                    <div class="hidden sm:block w-px bg-[#309474] self-stretch"></div>
                    <a href="#"
                        class="w-1/2 sm:w-1/4 px-3 sm:px-7 py-4 flex flex-col items-center justify-center animate blur-grow fast-2 delays-2">
                        <div class="text-lg md:text-lg lg:text-lg hover:text-[#309474] transition-colors tracking-wide">
                            Transports</div>
                    </a>
                    <div class="hidden sm:block w-px bg-[#309474] self-stretch"></div>
                    <a href="#"
                        class="w-1/2 sm:w-1/4 px-3 sm:px-7 py-4 flex flex-col items-center justify-center animate blur-grow fast-2 delays-3">
                        <div class="text-lg md:text-lg lg:text-lg hover:text-[#309474] transition-colors">Transports
                        </div>
                    </a>
                </div>
            </div>
    </section>

    <section class="sm:max-h-[80svh] sm:h-[80svh] h-auto flex justify-center items-center">
        <img src="/images/dear2.png" alt="dear"
            class=" absolute h-[90svh]  min-[1550px]:left-[-20%] min-[1340px]:left-[-25%] min-[1200px]:left-[-30%] min-[1024px]:left-[-55%]  hidden min-[1024px]:block">
        <div class="container max-w-[1200px] mx-auto flex flex-col lg:flex-row ">
            <div class="w-full lg:w-1/2 flex justify-start items-end">
                <img src="/images/dear.png " alt="dear" class=" h-[60svh] min-[1024px]:hidden mt-auto ">
            </div>
            <div
                class="w-full lg:w-1/2 flex justify-center items-center animate blur-in-down fast-3 bg-white sm:bg-transparent pt-5 sm:pt-0">
                <div class="mb-16  sm:my-0 sm:mb-0">
                    <h1 class=" font-bold text-center text-5xl mb-5">Par Mums</h1>
                    <div class="flex justify-center items-center">
                        <p class=" text-center max-w-[90%]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto ipsum excepturi tenetur
                            ab! Voluptates quibusdam doloribus numquam, sit impedit velit consectetur dignissimos soluta
                            corrupti sed assumenda laborum earum tempore dolorem. eveniet, culpa mollitia voluptatem
                            earum praesentium? Ipsa nemo deleniti cumque ab?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/steps.php'?>






    <?php include 'components/contact_form.php' ?>
    <?php include 'components/footer.php' ?>
    <script src="/js/bg.js"></script>
    <script src="/js/animantion.js"></script>
    <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>