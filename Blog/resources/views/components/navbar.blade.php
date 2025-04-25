<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <!-- ! header  -->

    {{-- bg-opacity-60 backdrop-blur-3xl --}}
    <header>
        <nav class="fixed top-0 left-0 w-full my-1 shadow-lg z-50">
            <div class="container mx-auto flex items-center justify-between p-4 ">
                <!-- Brand -->
                <a class="text-3xl font-bold text-white" href="#page-top">
                    <div class="divider">
                        <label class="swap swap-flip">
                            <input type="checkbox" />
                            <div class="swap-off text-white">LOGO</div>
                            <div class="swap-on text-center text-white">🖕</div>
                        </label>
                    </div>
                </a>

                <!-- Toggler for Mobile -->
                <link rel="stylesheet" href="style.css">
                <button class="text-white text-xl md:hidden" type="button" id="navbarToggle">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <!-- Navigation Menu -->
                <div class="hidden md:flex text-white flex-grow items-center justify-center space-x-4">
                    <a class="hover:text-gray-300" href="{{ url('/example') }}">Example</a>
                    <a href="{{ url('/about') }}" class="btn btn-secondary text-white">About</a>
                    <a href="{{ url('/contact') }}" class="btn btn-secondary text-white">Contact</a>
                    <a href="{{ url('/') }}" class="btn btn-secondary text-white">Home</a>
                </div>

                <!-- Search Form -->
                <form class="hidden md:flex items-center space-x-2">
                    <input class="form-input border border-gray-300 rounded-md py-1 px-3 text-black" type="text"
                        placeholder="Search.....">
                    <button class="bg-white text-black px-3 py-1 rounded-md hover:bg-gray-200" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>

            <!-- Collapsible Menu for Mobile -->
            <div class="md:hidden fixed inset-0  z-24 hidden  " id="navbarCollapse">
                <div class="flex flex-col items-center justify-between p-4 space-y-4  "> {{--  here  --}}
                    <!-- Close Button -->
                    <button class="self-end text-white text-xl" id="navbarClose">
                        <i class="fa-solid fa-xmark"></i>
                    </button>

                    <!-- Mobile Menu Links -->
                    <div class="flex flex-col items-center space-y-5 ">
                        <a class="hover:text-gray-300" href="{{ url('/example') }}">Example</a>
                        <a href="{{ url('/about') }}" class="btn btn-secondary text-white">About</a>
                        <a href="{{ url('/contact') }}" class="btn btn-secondary text-white">Contact</a>
                        <a href="{{ url('/') }}" class="btn btn-secondary text-white">Home</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- ! header ends -->



    <script>
        // ! navbar script 
        document.getElementById('navbarToggle').addEventListener('click', function() {
            document.getElementById('navbarCollapse').classList.toggle('hidden'); // Toggle visibility
            document.getElementById('navbarCollapse').classList.toggle('block'); // Add block when visible
        });

        document.getElementById('navbarClose').addEventListener('click', function() {
            document.getElementById('navbarCollapse').classList.add(
                'hidden'); // Hide navbar when close button is clicked
            document.getElementById('navbarCollapse').classList.remove('block'); // Remove block class
        });
    </script>

</div>
