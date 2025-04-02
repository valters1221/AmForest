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

    <section class="overflow-hidden">
        <div class="container mx-auto flex flex-col-reverse lg:flex-row">
            <div class="w-full lg:w-1/2 flex justify-center items-center">
                <img src="/images/wood-processing-factory.jpg" alt="tree stump" class="w-full">
            </div>
            <div
                class="w-full lg:w-1/2 bg-[#154d3b] rounded-b-md text-white overflow-hidden flex justify-center items-center">
                <div class="py-8 lg:py-16 px-4 animate blur-in-down fast-3">
                    <h1 class="font-bold text-center text-4xl lg:text-5xl mb-4">ko mes piedavajam</h1>
                    <div class="flex justify-center items-center">
                        <p class="text-center max-w-[90%]">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Saepe enim minima assumenda voluptas quos nisi velit sit adipisci, similique deleniti est
                            laborum eum sequi, repellat, modi blanditiis cumque nesciunt tempore autem voluptates quia!
                            Soluta ipsa dignissimos quo eligendi enim blanditiis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'components/steps.php'?>






    <?php include 'components/contact_form.php' ?>
    <?php include '../components/footer.php' ?>
    <script src="/js/bg.js"></script>
    <script src="/js/animantion.js"></script>
    <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
    <script src="/js/script.js"></script>
</body>

</html>