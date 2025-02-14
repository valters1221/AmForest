<?php include 'include/langDetect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animantion.css">
</head>
<body class="">

<?php include 'components/header.php' ?>
<div id="background" class=" -z-50"></div>

<section>
    <div class="relative h-[700px]  flex flex-col justify-between">
        <img src="images/bg.jpg" alt="Forest background" class="absolute inset-0 w-full h-full object-cover brightness-75">
        <div class="relative z-10 flex-grow flex flex-col items-center justify-center rounded-xl p-8 max-w-3xl mx-auto inline-block text-center ">
            <div>
                <p id="typing-quote" class="text-xl md:text-2xl text-white font-normal italic"></p>
            </div>
            <div class="flex space-x-4 mt-10 animate blur-grow fast-2">
                <a href="#about" class="px-6 py-2 bg-[#154d3b] text-white font-light rounded-md hover:bg-green-600 transition duration-300"><?php echo __('home.text2'); ?></a>
                <a href="#contact" class="px-6 py-2 border-2 border-white text-white font-light rounded-md hover:bg-white hover:text-black transition duration-300"><?php echo __('home.text3'); ?></a>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden">
     <div class="container mx-auto flex flex-col-reverse flex-col lg:flex-row space-y-8 lg:space-y-0 ">
        <div class="w-full lg:w-1/2 flex justify-center items-center">
            <img src="images/tree-stump.png" alt="tree stump" class=" w-[90%]">
        </div>
        <div class="w-full lg:w-1/2 overflow-hidden flex justify-center items-center animate blur-in-down fast-3">
            <div class="my-14 mb-16  sm:my-0 sm:mb-0">
                <h1 class=" font-bold text-center text-5xl mb-5"><?php echo __('home.text4'); ?></h1>
                <div class="flex justify-center items-center">
                    <p class=" text-center max-w-[90%]"><?php echo __('home.text5'); ?></p>
                </div>
            </div>
        </div>
     </div>
</section>

<section class="mt-16 mb-7 text-white">
    <div class="max-w-7xl mx-auto relative">
    <!-- Stats Section -->
     
    <div class=" bg-zinc-900/80 rounded-xl p-4 md:p-6 w-full mx-auto overflow-hidden ">
      
      <div class="flex flex-wrap sm:flex-nowrap justify-between items-stretch">
        <div class=" w-1/2 sm:w-1/4 px-4 py-4 flex flex-col items-center justify-center animate blur-grow fast-2">
          <div class="text-sm md:text-base lg:text-lg text-gray-400"><?php echo __('home.text6'); ?></div>
          <div class="text-3xl md:text-4xl lg:text-5xl font-bold "><?php echo __('home.text7'); ?></div>
        </div>
        <div class=" hidden sm:block w-px bg-gray-700 self-stretch"></div>
        <div class=" w-1/2 sm:w-1/4 px-4 py-4 flex flex-col items-center justify-center animate blur-grow fast-2 delays-1">
          <div class="text-sm md:text-base lg:text-lg text-gray-400"><?php echo __('home.text8'); ?></div>
          <div class="text-3xl md:text-4xl lg:text-5xl font-bold"><?php echo __('home.text9'); ?></div>
        </div>
        <div class=" hidden sm:block w-px bg-gray-700 self-stretch"></div>
        <div class=" w-1/2 sm:w-1/4 px-4 py-4 flex flex-col items-center justify-center animate blur-grow fast-2 delays-2">
          <div class="text-sm md:text-base lg:text-lg text-gray-400"><?php echo __('home.text10'); ?></div>
          <div class="text-3xl md:text-4xl lg:text-5xl font-bold "><?php echo __('home.text11'); ?></div>
        </div>
        <div class=" hidden sm:block w-px bg-gray-700 self-stretch"></div>
        <div class=" w-1/2 sm:w-1/4 px-4 py-4 flex flex-col items-center justify-center animate blur-grow fast-2 delays-3">
          <div class="text-sm md:text-base lg:text-lg text-gray-400"><?php echo __('home.text12'); ?></div>
          <div class="text-3xl md:text-4xl lg:text-5xl font-bold "><?php echo __('home.text13'); ?></div>
        </div>
      </div>
    </div>
    </div>
</section>
    
<section class="relative pt-28 pb-16  ">
        <div class="flex overflow-hidden">
            <!-- Left margin (2/10) -->
            <div class="w-1/10"></div>
            
            <div class="flex  flex-1">
                <div class=" w-[4%] ">
                    <div class="writing-mode-vertical text-4xl text-[#154d3b] font-bold tracking-wider">
                    <h1>
                        <span class="block py-1 text-center">P</span>
                        <span class="block py-1 text-center">A</span>
                        <span class="block py-1 text-center">K</span>
                        <span class="block py-1 text-center">A</span>
                        <span class="block py-1 text-center">L</span>
                        <span class="block py-1 text-center">P</span>
                        <span class="block py-1 text-center">O</span>
                        <span class="block py-1 text-center">J</span>
                        <span class="block py-1 text-center">U</span>
                        <span class="block py-1 text-center">M</span>
                        <span class="block py-1 text-center">I</span>
                    </h1>
                    </div>
                </div>
                
                <div class="flex-1 space-y-8 overflow-hidden items-center my-auto">
                    <!-- Top Swiper -->
                    <div class="relative">
                        <div class="swiper top-services-swiper">
                            <div class="swiper-wrapper">
                                <!-- Original slides -->
                                <div class="swiper-slide !w-auto max-w-[calc(33.33%-16px)] animate blur-grow fast-2">
                                    <div class="group p-6 space-y-4 bg-white">
                                        <h3 class="text-2xl font-medium group-hover:text-primary transition-colors"><?php echo __('servicesDesc.textH1'); ?></h3>
                                        <p class="text-muted-foreground"><?php echo __('servicesDesc.textD1'); ?></p>
                                        <div class="flex items-center space-x-2 text-primary">
                                            <span><?php echo __('btn.text1'); ?></span>
                                            <span class="group-hover:translate-x-1 transition-transform">→</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide !w-auto max-w-[calc(33.33%-16px)] animate blur-grow fast-2 delays-1">
                                    <div class="group p-6 space-y-4 bg-white">
                                        <h3 class="text-2xl font-medium group-hover:text-primary transition-colors"><?php echo __('servicesDesc.textH2'); ?></h3>
                                        <p class="text-muted-foreground"><?php echo __('servicesDesc.textD2'); ?></p>
                                        <div class="flex items-center space-x-2 text-primary">
                                            <span><?php echo __('btn.text1'); ?></span>
                                            <span class="group-hover:translate-x-1 transition-transform">→</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide !w-auto max-w-[calc(33.33%-16px)] animate blur-grow fast-2 delays-2">
                                    <div class="group p-6 space-y-4 bg-white">
                                        <h3 class="text-2xl font-medium group-hover:text-primary transition-colors"><?php echo __('servicesDesc.textH3'); ?></h3>
                                        <p class="text-muted-foreground"><?php echo __('servicesDesc.textD3'); ?></p>
                                        <div class="flex items-center space-x-2 text-primary">
                                            <span><?php echo __('btn.text1'); ?></span>
                                            <span class="group-hover:translate-x-1 transition-transform">→</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Duplicated slides for loop -->
                                <div class="swiper-slide !w-auto max-w-[calc(33.33%-16px)] animate blur-grow fast-2">
                                    <div class="group p-6 space-y-4 bg-white">
                                        <h3 class="text-2xl font-medium group-hover:text-primary transition-colors"><?php echo __('servicesDesc.textH4'); ?></h3>
                                        <p class="text-muted-foreground"><?php echo __('servicesDesc.textD4'); ?></p>
                                        <div class="flex items-center space-x-2 text-primary">
                                            <span><?php echo __('btn.text1'); ?></span>
                                            <span class="group-hover:translate-x-1 transition-transform">→</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide !w-auto max-w-[calc(33.33%-16px)] animate blur-grow fast-2">
                                    <div class="group p-6 space-y-4 bg-white">
                                        <h3 class="text-2xl font-medium group-hover:text-primary transition-colors"><?php echo __('servicesDesc.textH5'); ?></h3>
                                        <p class="text-muted-foreground"><?php echo __('servicesDesc.textD5'); ?></p>
                                        <div class="flex items-center space-x-2 text-primary">
                                            <span><?php echo __('btn.text1'); ?></span>
                                            <span class="group-hover:translate-x-1 transition-transform">→</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide !w-auto max-w-[calc(33.33%-16px)] animate blur-grow fast-2 delays-1">
                                    <div class="group p-6 space-y-4 bg-white">
                                        <h3 class="text-2xl font-medium group-hover:text-primary transition-colors"><?php echo __('servicesDesc.textH3'); ?></h3>
                                        <p class="text-muted-foreground"><?php echo __('servicesDesc.textD3'); ?></p>
                                        <div class="flex items-center space-x-2 text-primary">
                                            <span><?php echo __('btn.text1'); ?></span>
                                            <span class="group-hover:translate-x-1 transition-transform">→</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="absolute right-0 top-0 bottom-0 w-32 fade-overlay pointer-events-none z-10"></div>
                    </div>
                    
                    <!-- Horizontal divider -->
                    <div class="h-px bg-gray-200"></div>
                    
                    <!-- Bottom Swiper -->
                    <div class="relative">
                        <div class="swiper bottom-services-swiper">
                            <div class="swiper-wrapper">
                                <!-- Original slides -->
                                <div class="swiper-slide !w-auto max-w-[calc(33.33%-16px)] animate blur-grow fast-2">
                                    <div class="group p-6 space-y-4 bg-white">
                                        <h3 class="text-2xl font-medium group-hover:text-primary transition-colors"><?php echo __('servicesDesc.textH1'); ?></h3>
                                        <p class="text-muted-foreground"><?php echo __('servicesDesc.textD1'); ?></p>
                                        <div class="flex items-center space-x-2 text-primary">
                                            <span><?php echo __('btn.text1'); ?></span>
                                            <span class="group-hover:translate-x-1 transition-transform">→</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide !w-auto max-w-[calc(33.33%-16px)] animate blur-grow fast-2 delays-1">
                                    <div class="group p-6 space-y-4 bg-white">
                                        <h3 class="text-2xl font-medium group-hover:text-primary transition-colors"><?php echo __('servicesDesc.textH2'); ?></h3>
                                        <p class="text-muted-foreground"><?php echo __('servicesDesc.textD2'); ?></p>
                                        <div class="flex items-center space-x-2 text-primary">
                                            <span><?php echo __('btn.text1'); ?></span>
                                            <span class="group-hover:translate-x-1 transition-transform">→</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide !w-auto max-w-[calc(33.33%-16px)] animate blur-grow fast-2 delays-2">
                                    <div class="group p-6 space-y-4 bg-white">
                                        <h3 class="text-2xl font-medium group-hover:text-primary transition-colors"><?php echo __('servicesDesc.textH3'); ?></h3>
                                        <p class="text-muted-foreground"><?php echo __('servicesDesc.textD3'); ?></p>
                                        <div class="flex items-center space-x-2 text-primary">
                                            <span><?php echo __('btn.text1'); ?></span>
                                            <span class="group-hover:translate-x-1 transition-transform">→</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Duplicated slides for loop -->
                                <div class="swiper-slide !w-auto max-w-[calc(33.33%-16px)] animate blur-grow fast-2">
                                    <div class="group p-6 space-y-4 bg-white">
                                        <h3 class="text-2xl font-medium group-hover:text-primary transition-colors"><?php echo __('servicesDesc.textH4'); ?></h3>
                                        <p class="text-muted-foreground"><?php echo __('servicesDesc.textD4'); ?></p>
                                        <div class="flex items-center space-x-2 text-primary">
                                            <span><?php echo __('btn.text1'); ?></span>
                                            <span class="group-hover:translate-x-1 transition-transform">→</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide !w-auto max-w-[calc(33.33%-16px)] animate blur-grow fast-2">
                                    <div class="group p-6 space-y-4 bg-white">
                                        <h3 class="text-2xl font-medium group-hover:text-primary transition-colors"><?php echo __('servicesDesc.textH5'); ?></h3>
                                        <p class="text-muted-foreground"><?php echo __('servicesDesc.textD5'); ?></p>
                                        <div class="flex items-center space-x-2 text-primary">
                                            <span><?php echo __('btn.text1'); ?></span>
                                            <span class="group-hover:translate-x-1 transition-transform">→</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide !w-auto max-w-[calc(33.33%-16px)] animate blur-grow fast-2 delays-1">
                                    <div class="group p-6 space-y-4 bg-white">
                                        <h3 class="text-2xl font-medium group-hover:text-primary transition-colors"><?php echo __('servicesDesc.textH3'); ?></h3>
                                        <p class="text-muted-foreground"><?php echo __('servicesDesc.textD3'); ?></p>
                                        <div class="flex items-center space-x-2 text-primary">
                                            <span><?php echo __('btn.text1'); ?></span>
                                            <span class="group-hover:translate-x-1 transition-transform">→</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="absolute right-0 top-0 bottom-0 w-32 fade-overlay pointer-events-none z-10"></div>
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

<section>
    <div class=" h-fit relative overflow-hidden bg-black">
        <!-- Background image with overlay -->
        <div class="absolute inset-0 z-0">
            <img src="images/logging.jpg" alt="Dark forest background" class="w-full h-full object-cover opacity-10">
        </div>

        <!-- Gradient overlays -->
        <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-white opacity-70 blur-[200px] rounded-full -translate-x-1/4 -translate-y-1/4"></div>
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-green-400 opacity-70 blur-[200px] rounded-full translate-x-1/4 translate-y-1/4"></div>

        <!-- Content container -->
        <div class="relative z-10 container mx-auto px-6 py-12 flex items-center">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- Left side - Image -->
                <div class="rounded-2xl overflow-hidden w-full h-[300px] lg:h-[500px]">
                    <img src="images/walk.jpg" alt="People hiking in forest" class="w-full h-full object-cover">
                </div>

                <!-- Right side - Cards -->
                <div class="space-y-6 flex flex-col">
                    <!-- Individual Cards -->
                    <div class="bg-[#154d3b] rounded-xl p-6 flex items-start space-x-4 animate blur-in-right fast-2">
                        <div class="bg-white p-3 rounded-lg shrink-0">
                            <svg class="w-8 h-8 text-teal-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <p class="text-white text-lg"><?php echo __('home.text32'); ?></p>
                    </div>

                    <div class="bg-[#154d3b] rounded-xl p-6 flex items-start space-x-4 animate blur-in-right fast-2">
                        <div class="bg-white p-3 rounded-lg shrink-0">
                            <svg class="w-8 h-8 text-teal-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01M6.5 6.5h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <p class="text-white text-lg"><?php echo __('home.text33'); ?></p>
                    </div>

                    <div class="bg-[#154d3b] rounded-xl p-6 flex items-start space-x-4 animate blur-in-right fast-2">
                        <div class="bg-white p-3 rounded-lg shrink-0">
                            <svg class="w-8 h-8 text-teal-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <p class="text-white text-lg"><?php echo __('home.text34'); ?></p>
                    </div>

                    <div class="bg-[#154d3b] rounded-xl p-6 flex items-start space-x-4 animate blur-in-right fast-2">
                        <div class="bg-white p-3 rounded-lg shrink-0">
                            <svg class="w-8 h-8 text-teal-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <p class="text-white text-lg"><?php echo __('home.text35'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden ">
      <div class="container mx-auto flex flex-col lg:flex-row space-y-8 lg:space-y-0 ">
        <div class="w-full lg:w-1/2 overflow-hidden flex justify-center items-center animate blur-in-down fast-3">
            <div class="my-14 mb-16  sm:my-0 sm:mb-0">
                <h1 class=" font-bold text-center text-5xl mb-5"><?php echo __('home.text36'); ?></h1>
                <div class="flex justify-center items-center">
                    <p class=" text-center max-w-[90%]"><?php echo __('home.text37'); ?></p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 flex justify-center items-center">
            <img src="images/mesEsam.jpg" alt="Us" class=" w-[100%]">
        </div>
      </div>
</section>

<section class="overflow-hidden ">
     <div class="container mx-auto flex flex-col-reverse flex-col lg:flex-row space-y-8 lg:space-y-0 ">
        <div class="w-full lg:w-1/2 flex justify-center items-center">
            <img src="images/laptopforest.jpg" alt="Us" class=" w-[100%]">
        </div>
        <div class="w-full lg:w-1/2 overflow-hidden flex justify-center items-center animate blur-in-down fast-3">
            <div class="my-14 mb-16  sm:my-0 sm:mb-0">
                <h1 class=" font-bold text-center text-5xl mb-5"><?php echo __('home.text38'); ?></h1>
                <div class="flex justify-center items-center">
                    <p class=" text-center max-w-[90%]"><?php echo __('home.text39'); ?></p>
                </div>
            </div>
        </div>
     </div>
</section>


<?php include 'components/piedavajums.php' ?>
<?php include 'components/contact_form.php' ?>
<?php include 'components/footer.php' ?>

    <script src="js/bg.js"></script>
    <script src="js/animantion.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        const quote = `"<?php echo __('home.text1'); ?>"`;
        const typingSpeed = 50; // milliseconds per character
        const typingElement = document.getElementById('typing-quote');
        let charIndex = 0;

        function typeQuote() {
            if (charIndex < quote.length) {
                typingElement.textContent += quote.charAt(charIndex);
                charIndex++;
                let delay = typingSpeed;
                
                // Add slight pauses for punctuation
                if ('.,:;!?'.includes(quote.charAt(charIndex - 1))) {
                    delay = typingSpeed * 5;
                }
                
                setTimeout(typeQuote, delay);
            }
        }

        // Start the typing effect when the page loads
        window.onload = typeQuote;
    </script>
</body>
</html>