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
<body>
    <?php include 'components/headerv2.php' ?>
    
<section class="w-full flex justify-center mt-16">
    <form class=" w-full max-w-[700px] rounded-lg px-8 pt-6 pb-8 mb-4">
        <h1 class="text-4xl font-semibold mb-5">Contact</h1>
        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label class="block text-black text-sm font-bold mb-2" for="name">
                    <?php echo __('contact.text1'); ?>
                </label>
                <input class="shadow appearance-none border bg-[#dde9e8] rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="<?php echo __('contact.text2'); ?>">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block text-black text-sm font-bold mb-2" for="lastname">
                    <?php echo __('contact.text3'); ?>
                </label>
                <input class="shadow appearance-none border bg-[#dde9e8] rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="lastname" type="text" placeholder="<?php echo __('contact.text4'); ?>">
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-black text-sm font-bold mb-2" for="email">
                <?php echo __('contact.text5'); ?>
            </label>
            <input class="shadow appearance-none border bg-[#dde9e8] rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="<?php echo __('contact.text6'); ?>">
        </div>
        <div class="mb-4">
            <label class="block text-black text-sm font-bold mb-2" for="phone">
                <?php echo __('contact.text7'); ?>
            </label>
            <input class="shadow appearance-none border bg-[#dde9e8] rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="phone" type="tel" placeholder="<?php echo __('contact.text8'); ?>">
        </div>
        <div class="mb-6">
            <label class="block text-black text-sm font-bold mb-2" for="message">
                <?php echo __('contact.text9'); ?>
            </label>
            <textarea class="shadow appearance-none border bg-[#dde9e8] rounded w-full py-2 px-3 text-black leading-tight focus:outline-none focus:shadow-outline" id="message" placeholder="<?php echo __('contact.text10'); ?>" rows="4"></textarea>
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-[#154d3b] hover:bg-[#45a385] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                <?php echo __('contact.text11'); ?>
            </button>
        </div>
    </form>
    <div class="bg-[#154d3b] rounded-r-2xl max-w-[500px] w-full text-white">
        <div class="p-6">
            <h2 class="text-xl font-semibold text-white mb-4"><?php echo __('contact.text13'); ?></h2>
            <div class="space-y-6">
                <div class="flex items-center space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                    </svg>
                    <span><?php echo __('contact.text14'); ?></span>
                </div>
                <div class="space-y-2">
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                        <span><?php echo __('contact.text15'); ?></span>
                    </div>
                    <div class="flex items-center space-x-3 pl-8">
                        <span><?php echo __('contact.text16'); ?></span>
                    </div>
                </div>
                <div class="flex items-start space-x-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white mt-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    <div>
                        <p><?php echo __('contact.text17'); ?></p>
                    </div>
                </div>
                <div class="pt-4 border-t border-gray-200">
                    <h3 class="font-semibold mb-2 text-white"><?php echo __('contact.text18'); ?></h3>
                    <p class="mt-2 mb-1 font-bold"><?php echo __('contact.text19'); ?></p>
                    <p><?php echo __('contact.text20'); ?></p>
                    <p><?php echo __('contact.text21'); ?></p>
                    <p class="mt-2 mb-1 font-bold"><?php echo __('contact.text22'); ?></p>
                    <p><?php echo __('contact.text23'); ?></p>
                    <p class="mt-2 mb-1 font-bold"><?php echo __('contact.text24'); ?></p>
                    <p><?php echo __('contact.text26'); ?></p>
                    <p><?php echo __('contact.text27'); ?></p>
                </div>
            </div>
        </div>
</section>
    <?php include 'components/footer.php' ?>
    <script src="js/bg.js"></script>
    <script src="js/animantion.js"></script>
    <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>