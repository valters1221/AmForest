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

    <section class="my-20">
    <div class="container mx-auto px-4 max-w-[1200px]">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Service Card 1: Transports -->
            <div class="bg-zinc-100 rounded-md shadow-lg p-4 sm:p-7 animate blur-grow">
                <div class="flex mb-4">
                    <div class="w-12 h-12 bg-[#99FF94] bg-opacity-30 rounded-md flex items-center justify-center mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="1" y="3" width="15" height="13"></rect>
                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                            <circle cx="5.5" cy="18.5" r="2.5"></circle>
                            <circle cx="18.5" cy="18.5" r="2.5"></circle>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold ">Transports</h3>
                </div>
                <p class="text-gray-700 text-base">
                    dolor sit amet consectetur adipisicing elit. Commodi sunt totam laboriosam aliquam
                    corporis cumque eum voluptates vitae architecto cum
                </p>
                <a href="#" class="text-black font-medium text-sm flex items-center hover:underline mt-2">
                  Learn more
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                  </svg>
                </a>
            </div>

            <!-- Service Card 2: Cirsmas sagatavoana -->
            <div class="bg-zinc-100 rounded-md shadow-lg p-4 sm:p-7 animate delays-[0.1] blur-grow">
                <div class="flex mb-4">
                    <div class="w-12 h-12 bg-[#99FF94] bg-opacity-30 rounded-md flex items-center justify-center mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m14 12-8.5 8.5a2.12 2.12 0 1 1-3-3L11 9"></path>
                            <path d="M15 13 9 7l4-4 6 6h3a8 8 0 0 1-7 7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mt-2">Cirsmas sagatavoana</h3>
                </div>
                <p class="text-gray-700 text-base mt-2">
                    dolor sit amet consectetur adipisicing elit. Commodi sunt totam laboriosam aliquam
                    corporis cumque eum voluptates vitae architecto cum
                </p>
                <a href="#" class="text-black font-medium text-sm flex items-center hover:underline mt-2">
                  Learn more
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                  </svg>
                </a>
            </div>

            <!-- Service Card 3: Pirkt mezus -->
            <div class="bg-zinc-100 rounded-md shadow-lg p-4 sm:p-7 animate delays-[0.2] blur-grow">
                <div class="flex mb-4">
                    <div class="w-12 h-12 bg-[#99FF94] bg-opacity-30 rounded-md flex items-center justify-center mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mt-2.5">Pirkt mezus</h3>
                </div>
                <p class="text-gray-700 text-base">
                    dolor sit amet consectetur adipisicing elit. Commodi sunt totam laboriosam aliquam
                    corporis cumque eum voluptates vitae architecto cum
                </p>
                <a href="services/perkam.php" class="text-black font-medium text-sm flex items-center hover:underline mt-2">
                  Learn more
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                  </svg>
                </a>
            </div>

            <!-- Service Card 4: Meza konsultacija -->
            <div class="bg-zinc-100 rounded-md shadow-lg p-4 sm:p-7 animate delays-[0.3] blur-grow">
                <div class="flex mb-4">
                    <div class="w-12 h-12 bg-[#99FF94] bg-opacity-30 rounded-md flex items-center justify-center mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 16v-4"></path>
                            <path d="M12 8h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mt-2.5">Meza konsultacija</h3>
                </div>
                <p class="text-gray-700 text-base">
                    dolor sit amet consectetur adipisicing elit. Commodi sunt totam laboriosam aliquam
                    corporis cumque eum voluptates vitae architecto cum
                </p>
                <a href="#" class="text-black font-medium text-sm flex items-center hover:underline mt-2">
                  Learn more
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                  </svg>
                </a>
            </div>
            <div class="bg-zinc-100 rounded-md shadow-lg p-4 sm:p-7 animate delays-[0.3] blur-grow">
                <div class="flex mb-4">
                    <div class="w-12 h-12 bg-[#99FF94] bg-opacity-30 rounded-md flex items-center justify-center mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 16v-4"></path>
                            <path d="M12 8h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mt-2.5">Meza konsultacija</h3>
                </div>
                <p class="text-gray-700 text-base">
                    dolor sit amet consectetur adipisicing elit. Commodi sunt totam laboriosam aliquam
                    corporis cumque eum voluptates vitae architecto cum
                </p>
                <a href="#" class="text-black font-medium text-sm flex items-center hover:underline mt-2">
                  Learn more
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                  </svg>
                </a>
            </div>
            <div class="bg-zinc-100 rounded-md shadow-lg p-4 sm:p-7 animate delays-[0.3] blur-grow">
                <div class="flex mb-4">
                    <div class="w-12 h-12 bg-[#99FF94] bg-opacity-30 rounded-md flex items-center justify-center mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 16v-4"></path>
                            <path d="M12 8h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold mt-2.5">Meza konsultacija</h3>
                </div>
                <p class="text-gray-700 text-base">
                    dolor sit amet consectetur adipisicing elit. Commodi sunt totam laboriosam aliquam
                    corporis cumque eum voluptates vitae architecto cum
                </p>
                <a href="#" class="text-black font-medium text-sm flex items-center hover:underline mt-2">
                  Learn more
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="ml-1">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                  </svg>
                </a>
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