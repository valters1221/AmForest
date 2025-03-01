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
    <section class="relative overflow-hidden ">
        <img src="/images/services.jpg" alt="Forest background"
            class="absolute inset-0 w-full h-full object-cover  brightness-50 -z-10">
        <div
            class="container w-full max-w-[1200px] h-[500px]  flex flex-col lg:flex-row space-y-8 lg:space-y-0 mx-auto ">
            <div class=" w-full h-full  lg:w-1/2 flex justify-center items-center h">
                <div class="w-full p-4 sm:p-0">
                    <h1 class=" text-4xl sm:text-6xl w-full font-medium text-white"><?php echo __('services.text1'); ?>
                    </h1>
                    <p class=" text-xl sm:text-2xl w-[90%] sm:w-full text-zinc-200 mt-3">
                        <?php echo __('services.text2'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class=" h-fit relative overflow-hidden mt-10">
        <div class="container max-w-3xl mx-auto px-4 py-16">
            <!-- Desktop cards (hidden on mobile) -->
            <div class="grid sm:grid-cols-2 gap-5 sm:gap-3">
                <!-- Card 1 -->
                <div class="bg-white border border-solid border-[#3d5735] rounded-xl overflow-hidden ">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black mb-3"><?php echo __('servicesDesc.textH1'); ?></h3>
                        <p class="text-gray-400 mb-4"><?php echo __('servicesDesc.textD1'); ?></p>
                        <a href="#"
                            class="inline-block bg-zinc-800 text-white px-6 py-2 rounded-full text-sm hover:bg-zinc-700 transition-colors">
                            <?php echo __('btn.text1'); ?>
                            <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white border border-solid border-[#3d5735] rounded-xl overflow-hidden ">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black mb-3"><?php echo __('servicesDesc.textH2'); ?></h3>
                        <p class="text-gray-400 mb-4"><?php echo __('servicesDesc.textD2'); ?></p>
                        <a href="#"
                            class="inline-block bg-zinc-800 text-white px-6 py-2 rounded-full text-sm hover:bg-zinc-700 transition-colors">
                            <?php echo __('btn.text1'); ?>
                            <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>

                <div class="bg-white border border-solid border-[#3d5735] rounded-xl overflow-hidden ">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black mb-3"><?php echo __('servicesDesc.textH3'); ?></h3>
                        <p class="text-gray-400 mb-4"><?php echo __('servicesDesc.textD3'); ?></p>
                        <a href="#"
                            class="inline-block bg-zinc-800 text-white px-6 py-2 rounded-full text-sm hover:bg-zinc-700 transition-colors">
                            <?php echo __('btn.text1'); ?>
                            <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>

                <div class="bg-white border border-solid border-[#3d5735] rounded-xl overflow-hidden ">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black mb-3"><?php echo __('servicesDesc.textH4'); ?></h3>
                        <p class="text-gray-400 mb-4"><?php echo __('servicesDesc.textD4'); ?></p>
                        <a href="#"
                            class="inline-block bg-zinc-800 text-white px-6 py-2 rounded-full text-sm hover:bg-zinc-700 transition-colors">
                            <?php echo __('btn.text1'); ?>
                            <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>

                <div class="bg-white border border-solid border-[#3d5735] rounded-xl overflow-hidden ">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-black mb-3"><?php echo __('servicesDesc.textD5'); ?></h3>
                        <p class="text-gray-400 mb-4"><?php echo __('servicesDesc.textD5'); ?></p>
                        <a href="#"
                            class="inline-block bg-zinc-800 text-white px-6 py-2 rounded-full text-sm hover:bg-zinc-700 transition-colors">
                            <?php echo __('btn.text1'); ?>
                            <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'components/piedavajums.php' ?>
    <?php include 'components/contact_form.php' ?>
    <?php include 'components/footer.php' ?>
    <script src="/js/bg.js"></script>
    <script src="/js/animantion.js"></script>
    <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
    <script src="/js/script.js"></script>

</body>

</html>