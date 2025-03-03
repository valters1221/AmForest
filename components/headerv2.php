<header id="header" class="fixed top-0 left-0 right-0 z-40 py-4 transition-all duration-300 ease-in-out bg-transparent">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="/" id="logo" class="font-bold tracking-tighter transition-all duration-300 text-5xl text-black">
                AM
            </a>

            <!-- Desktop Menu Links -->
            <nav id="Links" class="hidden md:flex items-center space-x-8 font-medium">
                <a href="/index" class="text-sm font-medium hover:text-primary">Sākums</a>
                <a href="/aboutUs" class="text-sm font-medium hover:text-primary">Par Mums</a>
                <a href="/Pakalpojumi"
                    class="text-sm font-medium hover:text-primary">Pakalpojumi</a>
                <a href="/contact" class="text-sm font-medium hover:text-primary">Kontakti</a>
            </nav>

            <!-- Call Us Button for Desktop -->
            <button
                class="hidden md:block  hover:bg-primary text-primary text-white hover:text-black hover:bg-white bg-[#153a34] border border-primary hover:border-transparent rounded-full px-4 py-2 text-sm font-medium transition-colors duration-300">
                <?php echo __('navbar.btn'); ?>
            </button>

            <!-- Mobile Menu Toggle Button -->
            <button id="menuToggle"
                class="md:hidden text-black px-3 py-2 rounded-md bg-white font-bold text-2xl focus:outline-none">
                &#9776;
                <!-- Hamburger Icon -->
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<div id="mobileMenu"
    class="fixed top-0 right-0 w-3/4 h-full bg-white shadow-lg transform translate-x-full z-50 md:hidden">
    <div class="flex flex-col items-start p-6 space-y-6">
        <!-- Close Button -->
        <button id="closeMenu" class="self-end text-3xl font-bold bg-white text-gray-700 focus:outline-none">
            &times;
        </button>
        <!-- Mobile Menu Links -->
        <a href="/index"
            class="text-lg font-medium text-gray-800 hover:text-primary">Sākums</a>
        <a href="/aboutUs"
            class="text-lg font-medium text-gray-800 hover:text-primary">Par Mums</a>
        <a href="/Pakalpojumi"
            class="text-lg font-medium text-gray-800 hover:text-primary">Pakalpojumi</a>
        <a href="/contact"
            class="text-lg font-medium text-gray-800 hover:text-primary">Kontakti</a>
        <!-- Call Us Button -->
        <button
            class="bg-primary text-white rounded-full px-6 py-2 text-sm font-medium hover:bg-opacity-80 transition duration-300">
            <?php echo __('navbar.btn'); ?>
        </button>
    </div>
</div>

<div class="fixed bottom-4 right-4 z-[100]">
    <div class="relative inline-block text-left z-[100]">
        <div>
            <button type="button"
                class="z-[100] inline-flex justify-center items-center rounded-md border border-gray-300 shadow-sm p-2 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                id="language-menu-button" aria-expanded="false" aria-haspopup="true">
                <img src="https://flagcdn.com/w40/gb.png" width="40" height="30" alt="English" class="rounded">
                <svg class="ml-2 h-5 w-5 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" id="arrow-icon">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
        <div class="z-[100] hidden origin-bottom-right absolute right-0 bottom-12 mt-2 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
            role="menu" aria-orientation="vertical" aria-labelledby="language-menu-button" tabindex="-1"
            id="language-menu">
            <div class="p-1 z-[100]" role="none">
                <button class=" z-[100] flex items-center p-2 rounded-md hover:bg-gray-100" role="menuitem"
                    tabindex="-1" id="language-menu-item-0" data-lang="en" data-flag="gb">
                    <img src="https://flagcdn.com/w40/gb.png" width="40" height="30" alt="English" class="rounded">
                </button>
                <button class="z-[100] flex items-center p-2 rounded-md hover:bg-gray-100" role="menuitem" tabindex="-1"
                    id="language-menu-item-1" data-lang="lv" data-flag="lv">
                    <img src="https://flagcdn.com/w40/lv.png" width="40" height="30" alt="Latvian" class="rounded">
                </button>
            </div>
        </div>
    </div>
</div>
<script>
const button = document.getElementById('language-menu-button');
const menu = document.getElementById('language-menu');
const arrowIcon = document.getElementById('arrow-icon');

button.addEventListener('click', () => {
    const expanded = button.getAttribute('aria-expanded') === 'true';
    button.setAttribute('aria-expanded', !expanded);
    menu.classList.toggle('hidden');

    if (expanded) {
        arrowIcon.classList.remove('rotate-arrow');
        arrowIcon.classList.add('rotate-arrow-back');
    } else {
        arrowIcon.classList.remove('rotate-arrow-back');
        arrowIcon.classList.add('rotate-arrow');
    }
});

// Close the dropdown when clicking outside
document.addEventListener('click', (event) => {
    if (!button.contains(event.target) && !menu.contains(event.target)) {
        button.setAttribute('aria-expanded', 'false');
        menu.classList.add('hidden');
        arrowIcon.classList.remove('rotate-arrow');
        arrowIcon.classList.add('rotate-arrow-back');
    }
});

// Change language when an option is selected
const languageOptions = document.querySelectorAll('#language-menu button');
languageOptions.forEach(option => {
    option.addEventListener('click', (e) => {
        const flag = e.currentTarget.getAttribute('data-flag');
        button.querySelector('img').src = `https://flagcdn.com/w40/${flag}.png`;
        button.querySelector('img').alt = e.currentTarget.querySelector('img').alt;
        menu.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        arrowIcon.classList.remove('rotate-arrow');
        arrowIcon.classList.add('rotate-arrow-back');
    });
});
</script>


<!-- JavaScript -->
<script>
const header = document.getElementById('header');
const logo = document.getElementById('logo');
const menuToggle = document.getElementById('menuToggle');
const mobileMenu = document.getElementById('mobileMenu');
const closeMenu = document.getElementById('closeMenu');

// Scroll effect for shrinking header
function handleScroll() {
    if (window.scrollY > 50) {
        header.classList.add('py-2', 'bg-white/50', 'backdrop-blur-md');
        header.classList.remove('py-4');
        logo.classList.remove('text-5xl');
        logo.classList.add('text-3xl', 'text-black');
        logo.classList.remove('text-black');
        Links.classList.add('text-black');
        Links.classList.remove('text-black');
    } else {
        header.classList.remove('py-2', 'bg-white/50', 'backdrop-blur-md');
        header.classList.add('py-4');
        logo.classList.add('text-5xl', 'text-black');
        logo.classList.remove('text-3xl', 'text-black');
        Links.classList.add('text-black');
        Links.classList.remove('text-black');
    }
}

// Mobile Menu - Slide In and Out
menuToggle.addEventListener('click', () => {
    mobileMenu.classList.remove('slide-out');
    mobileMenu.classList.add('slide-in');
});

closeMenu.addEventListener('click', () => {
    mobileMenu.classList.remove('slide-in');
    mobileMenu.classList.add('slide-out');
});

window.addEventListener('scroll', handleScroll);
</script>