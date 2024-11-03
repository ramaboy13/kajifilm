@props(['user'])
<nav class="custom-bcg p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo and Name -->
        <div class="flex items-center">
            <img src="../../assets/LOGO.png" alt="Logo" class="h-10 w-10 mr-2">
            <span class="text-white text-xl font-bold"><i>KAJIFILM</i></span>
        </div>

        <!-- Hamburger Menu -->
        <button id="hamburger" class="text-white md:hidden focus:outline-none">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Navigation Links -->
        <div id="nav-links" class="hidden md:flex space-x-8">
            <a href="{{ route('user.home') }}" class="text-gray-300 hover:text-white">Home</a>
            <a href="{{ route('user.form-compare') }}" class="text-gray-300 hover:text-white">Compare Film</a>
            <a href="{{ route('user.forum-diskusi') }}" class="text-gray-300 hover:text-white">Forum Diskusi</a>
            <a href="https://drive.google.com/file/d/1CQh9IQqx6pRCJ0KPbvmJoqoxFad2A0-t/view?usp=drive_link"
                class="text-gray-300 hover:text-white">Bantuan</a>
        </div>

        <!-- User Profile -->
        <div class="relative">
            <button id="user-menu-button" class="flex items-center text-gray-300 hover:text-white focus:outline-none">
                <img src="../../assets/user.png" alt="User Photo" class="h-8 w-8 rounded-full mr-2">
                <span>{{ $user->nama ?? 'Im User' }}</span>
            </button>

            <!-- Dropdown Menu -->
            <div id="user-menu"
                class="custom-hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-20">
                <a href="{{ route('logout-user') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Sign Out
                </a>
                <form id="logout-form" action="{{ route('logout-user') }}" method="POST" class="custom-hidden">
                    @csrf
                </form>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Links -->
    <div id="mobile-nav" class="hidden flex-col space-y-2 mt-4 md:hidden">
        <a href="{{ route('user.home') }}" class="text-gray-300 hover:text-white">Home</a>
        <a href="{{ route('user.form-compare') }}" class="text-gray-300 hover:text-white">Compare Film</a>
        <a href="{{ route('user.forum-diskusi') }}" class="text-gray-300 hover:text-white">Forum Diskusi</a>
        <a href="https://drive.google.com/file/d/1CQh9IQqx6pRCJ0KPbvmJoqoxFad2A0-t/view?usp=drive_link"
            class="text-gray-300 hover:text-white">Bantuan</a>
    </div>
</nav>

<!-- Pop-up Modal -->
<div id="help-modal" class="fixed inset-0 flex items-center justify-center z-50 custom-hidden">
    <div class="bg-white p-6 rounded shadow-lg w-1/3">
        <h2 class="text-xl mb-4 text-black">Download Manual Book</h2>
        <p>Anda dapat mengunduh file Manual Book PDF dari tautan di bawah ini:</p>
        <a href="https://drive.google.com/file/d/1CQh9IQqx6pRCJ0KPbvmJoqoxFad2A0-t/view?usp=drive_link"
            class="text-blue-500 underline mt-4" target="_blank">Download PDF</a>
        <button id="close-help-modal" class="mt-4 bg-gray-500 text-white py-2 px-4 rounded">Close</button>
    </div>
</div>

<!-- Overlay -->
<div id="help-modal-overlay" class="fixed inset-0 bg-black opacity-50 z-40 custom-hidden"></div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const hamburger = document.getElementById('hamburger');
        const mobileNav = document.getElementById('mobile-nav');
        const helpLink = document.getElementById('help-link');
        const userMenuButton = document.getElementById('user-menu-button');
        const userMenu = document.getElementById('user-menu');

        // Hamburger menu toggle
        hamburger.addEventListener('click', () => {
            mobileNav.classList.toggle('active');
        });

        // User menu dropdown toggle
        userMenuButton.addEventListener('click', (e) => {
            e.stopPropagation();
            userMenu.classList.toggle('custom-hidden');
        });

        window.addEventListener('click', (e) => {
            if (!userMenuButton.contains(e.target) && !userMenu.contains(e.target)) {
                userMenu.classList.add('custom-hidden');
            }
        });

      
    });
</script>
