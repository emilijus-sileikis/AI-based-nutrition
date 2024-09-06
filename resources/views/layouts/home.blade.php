@extends('layouts.app')
@section('content')
    <section class="px-2 py-10 bg-white md:px-0">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
            <div class="flex flex-wrap items-center sm:-mx-3">
                <div class="w-full md:w-1/2 md:px-3">
                    <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                        <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                            <span class="block xl:inline">Handy Tool to</span><br>
                            <span class="block text-indigo-600 xl:inline">Help You Track Your Nutrition!</span>
                        </h1>
                        <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">Track nutrition, get a personal fitness plan, see AI recommendations and more!</p>
                        <div class="relative flex flex-col sm:flex-row sm:space-x-4">
                            <button type="button" class="openLoginPopup flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto">
                                Try It Now
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </button>
{{--                            <a href="#_" class="flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600">--}}
{{--                                Learn More--}}
{{--                            </a>--}}
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="w-3/4 h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
                        <img src="{{ asset('assets/food.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full bg-white pt-7 pb-7 md:pt-20 md:pb-24">
        <div class="box-border flex flex-col items-center content-center px-8 mx-auto leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">

            <!-- Image -->
            <div class="box-border relative w-full max-w-md px-4 mt-5 mb-4 -ml-5 text-center bg-no-repeat bg-contain border-solid md:ml-0 md:mt-0 md:max-w-none lg:mb-0 md:w-1/2 xl:pl-10">
                <img src="{{ asset('assets/woman.jpg') }}" class="p-2 pl-6 pr-5 xl:pl-16 xl:pr-20 ">
            </div>

            <!-- Content -->
            <div class="box-border order-first w-full text-black border-solid md:w-1/2 md:pl-10 md:order-none">
                <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                    Boost Your Health
                </h2>
                <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-12 xl:pr-32 lg:text-lg">
                    A good nutrient-rich diet can help you to:
                </p>
                <ul class="p-0 m-0 leading-6 border-0 border-gray-300">
                    <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                        <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white rounded-full" style="background-color: #ffe1d8"><span class="text-sm font-bold">✓</span></span> Boost Your Mood
                    </li>
                    <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                        <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white rounded-full" style="background-color: #ffe1d8"><span class="text-sm font-bold">✓</span></span> Enhance Energy Levels
                    </li>
                    <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                        <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white rounded-full" style="background-color: #ffe1d8"><span class="text-sm font-bold">✓</span></span> Improve Focus and Concentration
                    </li>
                    <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                        <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white rounded-full" style="background-color: #ffe1d8"><span class="text-sm font-bold">✓</span></span> Support Weight Management
                    </li>
                    <li class="box-border relative py-1 pl-0 text-left text-gray-500 border-solid">
                        <span class="inline-flex items-center justify-center w-6 h-6 mr-2 text-white rounded-full" style="background-color: #ffe1d8"><span class="text-sm font-bold">✓</span></span> Strengthen Your Immune System
                    </li>
                </ul>
            </div>
            <!-- End  Content -->
        </div>
        <div class="box-border flex flex-col items-center content-center px-8 mx-auto mt-2 leading-6 text-black border-0 border-gray-300 border-solid md:mt-20 xl:mt-0 md:flex-row max-w-7xl lg:px-16">

            <!-- Content -->
            <div class="box-border w-full text-black border-solid md:w-1/2 md:pl-6 xl:pl-32">
                <h2 class="m-0 text-xl font-semibold leading-tight border-0 border-gray-300 lg:text-3xl md:text-2xl">
                    Discover the power of good nutrition tailored just for you.
                </h2>
                <p class="pt-4 pb-8 m-0 leading-7 text-gray-700 border-0 border-gray-300 sm:pr-10 lg:text-lg">
                    Our AI-powered platform analyzes your unique needs and preferences to create a customized nutrition plan that's easy to follow and effective. Track your progress, receive personalized recommendations, and achieve your health goals with confidence.
                </p>
            </div>
            <!-- End  Content -->

            <!-- Image -->
            <div class="box-border relative w-full max-w-md px-4 mt-10 mb-4 text-center bg-no-repeat bg-contain border-solid md:mt-0 md:max-w-none lg:mb-0 md:w-1/2">
                <img src="{{ asset('assets/AI.png') }}" class="pl-4 sm:pr-10 xl:pl-10 lg:pr-32">
            </div>
        </div>
    </section>

    <div id="login-popup" tabindex="-1"
         class="hidden bg-black/50 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 h-full items-center justify-center flex">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">

            <div class="relative bg-white rounded-lg shadow">
                <button type="button"
                        id="closeLoginPopup"
                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                    <svg aria-hidden="true" class="w-5 h-5" fill="#c6c7c7" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close popup</span>
                </button>

                <div class="p-5">
                    <h3 class="text-2xl mb-0.5 font-medium"></h3>
                    <p class="mb-4 text-sm font-normal text-gray-800"></p>

                    <div class="text-center">
                        <p class="mb-3 text-2xl font-semibold leading-5 text-slate-900">
                            Login to your account
                        </p>
                        <p class="mt-2 text-sm leading-4 text-slate-600">
                            Login to get the best of our services. <br>
                            Or continue as a guest for a limited experience.
                        </p>
                    </div>

                    <div class="mt-7 flex flex-col gap-2">

                        <button
                            class="inline-flex h-10 w-full items-center justify-center gap-2 rounded border border-slate-300 bg-white p-2 text-sm font-medium text-black outline-none focus:ring-2 focus:ring-[#333] focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-60"><img
                                src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google"
                                class="h-[18px] w-[18px] ">Continue with
                            Google
                        </button>


                        <button
                            class="inline-flex h-10 w-full items-center justify-center gap-2 rounded border border-slate-300 bg-white p-2 text-sm font-medium text-black outline-none focus:ring-2 focus:ring-[#333] focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-60"><img
                                src="https://www.svgrepo.com/show/448234/linkedin.svg" alt="Google"
                                class="h-[18px] w-[18px] ">Continue with
                            LinkedIn
                        </button>
                    </div>

                    <div class="flex w-full items-center gap-2 py-6 text-sm text-slate-600">
                        <div class="h-px w-full bg-slate-200"></div>
                        OR
                        <div class="h-px w-full bg-slate-200"></div>
                    </div>


                    <form class="w-full">
                        <label for="email" class="sr-only">Email address</label>
                        <input name="email" type="email" autocomplete="email" required=""
                               class="block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-black focus:ring-offset-1"
                               placeholder="Email Address" value="">
                        <label for="password" class="sr-only">Password</label>
                        <input name="password" type="password" autocomplete="current-password" required=""
                               class="mt-2 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-black focus:ring-offset-1"
                               placeholder="Password" value="">
                        <p class="mb-3 mt-2 text-sm text-gray-500">
                            <a href="/forgot-password" class="text-blue-800 hover:text-blue-600">Reset your password?</a>
                        </p>
                        <button type="submit"
                                class="inline-flex w-full items-center justify-center rounded-lg bg-black p-2 py-3 text-sm font-medium text-white outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 disabled:bg-gray-400">
                            Continue
                        </button>
                    </form>

                    <div class="mt-6 text-center text-sm text-slate-600">
                        Don't have an account?
                        <a href="/signup" class="font-medium text-[#4285f4]">Sign up</a>
                    </div>

                    <div class="mt-1 text-center text-sm text-slate-600">
                        Don't want an account?
                        <a href="/guest" class="font-medium text-[#4285f4]">Continue as guest</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Get all buttons with the class 'openLoginPopup'
        const openButtons = document.querySelectorAll('.openLoginPopup');

        // Add event listeners to all buttons
        openButtons.forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('login-popup').classList.remove('hidden');
            });
        });

        // Close Popup
        document.getElementById('closeLoginPopup').addEventListener('click', function () {
            document.getElementById('login-popup').classList.add('hidden');
        });

        // Close Popup when clicking outside the modal content
        document.getElementById('login-popup').addEventListener('click', function (e) {
            if (e.target === this) {
                this.classList.add('hidden');
            }
        });
    </script>
@endsection
