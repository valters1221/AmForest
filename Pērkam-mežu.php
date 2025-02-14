<?php include 'include/langDetect.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/animantion.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'components/header.php' ?>

<section>
    <div class="relative h-[600px] flex flex-col justify-between">
        <img src="images/photorealistic-perspective-wood-logs (2).jpg" alt="Forest background" class="absolute inset-0 w-full h-full object-cover brightness-75">
        <div class="relative z-10 flex-grow flex flex-col items-center justify-center rounded-xl p-8 max-w-3xl mx-auto inline-block text-center ">
            <div>
                <p id="typing-quote" class="text-xl md:text-2xl text-white font-normal italic">kā pārdot mežu?</p>
            </div>
        </div>

        <div class=" bg-zinc-900/80 w-full sm:w-auto rounded-xl p-4 absolute left-1/2 -bottom-12 z-40 backdrop-blur-md  -translate-x-1/2 text-white">
            <div class="flex flex-wrap sm:flex-nowrap justify-between items-stretch">
              <a href="#" class=" w-1/2 sm:w-1/4 px-7 py-4 flex flex-col items-center justify-center animate blur-grow fast-2">
                <div class="text-lg md:text-lg lg:text-lg hover:text-[#309474] transition-colors  ">Konsultācija</div>
              </a>
              <div class=" hidden sm:block w-px bg-[#309474] self-stretch"></div>
              <a href="#" class=" w-1/2 sm:w-1/4 px-7 py-4 flex flex-col items-center justify-center animate blur-grow fast-2 delays-1">
                <div class="text-lg md:text-lg lg:text-lg hover:text-[#309474] transition-colors ">Uzskopšana</div>
              </a>
              <div class=" hidden sm:block w-px bg-[#309474] self-stretch"></div>
              <a href="#" class=" w-1/2 sm:w-1/4 px-7 py-4 flex flex-col items-center justify-center animate blur-grow fast-2 delays-2">
                <div class="text-lg md:text-lg lg:text-lg hover:text-[#309474] transition-colors tracking-wide">Transports</div>
              </a>
              <div class=" hidden sm:block w-px bg-[#309474] self-stretch"></div>
              <a href="#" class=" w-1/2 sm:w-1/4 px-7 py-4 flex flex-col items-center justify-center animate blur-grow fast-2 delays-3">
                <div class="text-lg md:text-lg lg:text-lg hover:text-[#309474] transition-colors ">Transports</div>
              </a>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden">
     <div class="container mx-auto flex flex-col-reverse flex-col lg:flex-row space-y-8 lg:space-y-0 ">
        <div class="w-full lg:w-1/2 flex justify-center items-center">
            <img src="images/wood-processing-factory.jpg" alt="tree stump" class=" w-full">
        </div>
        <div class="w-full lg:w-1/2 bg-[#154d3b] rounded-b-md text-white overflow-hidden flex justify-center items-center ">
            <div class="my-14 mb-16  sm:my-0 sm:mb-0 py-16 animate blur-in-down fast-3">
                <h1 class=" font-bold text-center text-5xl mb-5">ko mes piedavajam</h1>
                <div class="flex justify-center items-center">
                    <p class=" text-center max-w-[90%]">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus recusandae sed laudantium qui? Voluptas ex quo, ab nobis omnis velit aliquid a error suscipit. Blanditiis iste adipisci sunt ad debitis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, accusamus voluptatum voluptates natus dolorum velit temporibus eos accusantium alias cupiditate sunt ea at facilis, rerum repudiandae nulla quam, numquam aspernatur.</p>
                </div>
            </div>
        </div>
     </div>
</section>

<section>
        <img src="images/wood2.png" class=" absolute -z-50 left-[0%] opacity-10 h-full sm:block hidden " alt="stump">
        <div class="w-full max-w-7xl mx-auto px-1 sm:px-4 py-6 sm:py-12">
        <h1 class="text-5xl font-bold mb-16 "><?php echo __('home.text24'); ?></h1>
        <div class="grid md:grid-cols-3 gap-2 sm:gap-8 lg:gap-12">
            <!-- Card 1 -->
            <div class="relative p-4 sm:p-8 lg:p-12 shadow-xl rounded-[1.5rem] sm:rounded-[2rem] w-[98%] mx-auto sm:w-full bg-white overflow-hidden animate blur-in-down fast-2">
                <!-- Main Gradient Blur -->
                <div class="absolute -top-20 -right-20 w-80 h-80 gradient-blur"></div>
                <!-- Additional Shine Effect -->
                <div class="absolute -top-10 -right-10 w-60 h-60 shine-effect"></div>
                <div class="absolute top-0 right-0 w-20 h-20 overflow-hidden">
                    <div class="absolute rotate-45 bg-black/5 w-32 h-10 -right-6 top-8"></div>
                </div>
                <div class="flex flex-col items-center text-center gap-6 sm:gap-8 relative z-10">
                    <div class="bg-black text-white rounded-full w-16 h-16 sm:w-18 sm:h-18 lg:w-20 lg:h-20 flex items-center justify-center text-2xl sm:text-3xl lg:text-4xl font-bold">
                        01
                    </div>
                    <h2 class="text-2xl sm:text-2xl lg:text-3xl font-bold"><?php echo __('home.text'); ?></h2>
                    <p class="text-center text-base sm:text-lg lg:text-xl leading-relaxed">
                        <?php echo __('home.text25'); ?>
                    </p>
                    <button class="bg-[#9efa82] w-full sm:w-auto px-6 sm:px-8 lg:px-10 py-3 sm:py-3 lg:py-4 rounded-full text-base sm:text-lg font-semibold hover:bg-[#8ee375] transition-colors transform hover:scale-105 duration-200 shadow-lg">
                        <?php echo __('home.text26'); ?>
                    </button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative p-4 sm:p-8 lg:p-12 shadow-xl rounded-[1.5rem] sm:rounded-[2rem] w-[98%] mx-auto sm:w-full bg-white overflow-hidden animate blur-in-down fast-2 delays-1">
                <!-- Main Gradient Blur -->
                <div class="absolute -top-20 -right-20 w-80 h-80 gradient-blur"></div>
                <!-- Additional Shine Effect -->
                <div class="absolute -top-10 -right-10 w-60 h-60 shine-effect"></div>
                <div class="absolute top-0 right-0 w-20 h-20 overflow-hidden">
                    <div class="absolute rotate-45 bg-black/5 w-32 h-10 -right-6 top-8"></div>
                </div>
                <div class="flex flex-col items-center text-center gap-6 sm:gap-8 relative z-10">
                    <div class="bg-black text-white rounded-full w-16 h-16 sm:w-18 sm:h-18 lg:w-20 lg:h-20 flex items-center justify-center text-2xl sm:text-3xl lg:text-4xl font-bold">
                        02
                    </div>
                    <h2 class="text-2xl sm:text-2xl lg:text-3xl font-bold"><?php echo __('home.text27'); ?></h2>
                    <p class="text-center text-base sm:text-lg lg:text-xl leading-relaxed">
                        <?php echo __('home.text28'); ?>
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative p-4 sm:p-8 lg:p-12 shadow-xl rounded-[1.5rem] sm:rounded-[2rem] w-[98%] mx-auto sm:w-full bg-white overflow-hidden animate blur-in-down fast-2 delays-2">
                <!-- Main Gradient Blur -->
                <div class="absolute -top-20 -right-20 w-80 h-80 gradient-blur"></div>
                <!-- Additional Shine Effect -->
                <div class="absolute -top-10 -right-10 w-60 h-60 shine-effect"></div>
                <div class="absolute top-0 right-0 w-20 h-20 overflow-hidden">
                    <div class="absolute rotate-45 bg-black/5 w-32 h-10 -right-6 top-8"></div>
                </div>
                <div class="flex flex-col items-center text-center gap-6 sm:gap-8 relative z-10">
                    <div class="bg-black text-white rounded-full w-16 h-16 sm:w-18 sm:h-18 lg:w-20 lg:h-20 flex items-center justify-center text-2xl sm:text-3xl lg:text-4xl font-bold">
                        03
                    </div>
                    <h2 class="text-2xl sm:text-2xl lg:text-3xl font-bold"><?php echo __('home.text29'); ?></h2>
                    <p class="text-center text-base sm:text-lg lg:text-xl leading-relaxed">
                        <?php echo __('home.text30'); ?>
                    </p>
                    <button class="bg-[#9efa82] w-full sm:w-auto px-6 sm:px-8 lg:px-10 py-3 sm:py-3 lg:py-4 rounded-full text-base sm:text-lg font-semibold hover:bg-[#8ee375] transition-colors transform hover:scale-105 duration-200 shadow-lg">
                        <?php echo __('home.text31'); ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>




    

    <?php include 'components/contact_form.php' ?>
    <?php include 'components/footer.php' ?>
    <script src="js/bg.js"></script>
    <script src="js/animantion.js"></script>
    <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>