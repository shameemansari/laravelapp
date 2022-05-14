@extends('layouts.guest')
@section('title','Login')
@section('content')
<div class="min-h-screen overflow-hidden bg-slate-200 flex">
    <div class="hidden lg:block relative w-0 flex-1">
        <img class="absolute inset-0 h-full w-full object-cover"
            src="https://images.unsplash.com/photo-1581472723648-909f4851d4ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
            alt="">
    </div>
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
        <div class="mx-auto w-full max-w-sm lg:w-96">
            <div>
                <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                    alt="Workflow">
                <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                    Sign in to your account
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    or
                    <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                        register for our services
                    </a>
                </p>
            </div>

            <div class="mt-8">
                <div>
                    <div>
                        <p class="text-sm font-medium text-gray-700">
                            Sign in with
                        </p>

                        <div class="mt-1 grid grid-cols-4 gap-4">
                            <div>
                                <a href="#"
                                    class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-indigo-600 text-white text-sm font-medium ">
                                    <span class="sr-only">Sign in with Facebook</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <a href="#"
                                    class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-slate-200 text-sm font-medium ">
                                    <span class="sr-only">Sign in with Google</span>
                                    <svg class="w-5 h-5" shape-rendering="geometricPrecision"
                                        text-rendering="geometricPrecision" image-rendering="optimizeQuality"
                                        xmlns="http://www.w3.org/2000/svg" width="2500" height="1809"
                                        viewBox="7.086 7.087 1277.149 924.008">
                                        <path fill="none" d="M1138.734 931.095h.283M1139.017 931.095h-.283" />
                                        <path
                                            d="M1179.439 7.087c57.543 0 104.627 47.083 104.627 104.626v30.331l-145.36 103.833-494.873 340.894L148.96 242.419v688.676h-37.247c-57.543 0-104.627-47.082-104.627-104.625V111.742C7.086 54.198 54.17 7.115 111.713 7.115l532.12 394.525L1179.41 7.115l.029-.028z"
                                            fill="#e75a4d" />
                                        <linearGradient id="a" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107"
                                            x2="26066.213" y2="737.107"
                                            gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)">
                                            <stop offset="0" stop-color="#f8f6ef" />
                                            <stop offset="1" stop-color="#e7e4d6" />
                                        </linearGradient>
                                        <path fill="url(#a)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z" />
                                        <path fill="#e7e4d7"
                                            d="M148.96 242.419v688.676h989.774V245.877L643.833 586.771z" />
                                        <path fill="#b8b7ae"
                                            d="M148.96 931.095l494.873-344.324-2.24-1.586L148.96 923.527z" />
                                        <path fill="#b7b6ad" d="M1138.734 245.877l.283 685.218-495.184-344.324z" />
                                        <path
                                            d="M1284.066 142.044l.17 684.51c-2.494 76.082-35.461 103.238-145.219 104.514l-.283-685.219 145.36-103.833-.028.028z"
                                            fill="#b2392f" />
                                        <linearGradient id="b" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107"
                                            x2="26066.213" y2="737.107"
                                            gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)">
                                            <stop offset="0" stop-color="#f8f6ef" />
                                            <stop offset="1" stop-color="#e7e4d6" />
                                        </linearGradient>
                                        <path fill="url(#b)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z" />
                                        <linearGradient id="c" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107"
                                            x2="26066.213" y2="737.107"
                                            gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)">
                                            <stop offset="0" stop-color="#f8f6ef" />
                                            <stop offset="1" stop-color="#e7e4d6" />
                                        </linearGradient>
                                        <path fill="url(#c)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z" />
                                        <linearGradient id="d" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107"
                                            x2="26066.213" y2="737.107"
                                            gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)">
                                            <stop offset="0" stop-color="#f8f6ef" />
                                            <stop offset="1" stop-color="#e7e4d6" />
                                        </linearGradient>
                                        <path fill="url(#d)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z" />
                                        <linearGradient id="e" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107"
                                            x2="26066.213" y2="737.107"
                                            gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)">
                                            <stop offset="0" stop-color="#f8f6ef" />
                                            <stop offset="1" stop-color="#e7e4d6" />
                                        </linearGradient>
                                        <path fill="url(#e)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z" />
                                        <linearGradient id="f" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107"
                                            x2="26066.213" y2="737.107"
                                            gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)">
                                            <stop offset="0" stop-color="#f8f6ef" />
                                            <stop offset="1" stop-color="#e7e4d6" />
                                        </linearGradient>
                                        <path fill="url(#f)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z" />
                                        <linearGradient id="g" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107"
                                            x2="26066.213" y2="737.107"
                                            gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)">
                                            <stop offset="0" stop-color="#f8f6ef" />
                                            <stop offset="1" stop-color="#e7e4d6" />
                                        </linearGradient>
                                        <path fill="url(#g)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z" />
                                        <linearGradient id="h" gradientUnits="userSpaceOnUse" x1="1959.712" y1="737.107"
                                            x2="26066.213" y2="737.107"
                                            gradientTransform="matrix(.0283 0 0 -.0283 248.36 225.244)">
                                            <stop offset="0" stop-color="#f8f6ef" />
                                            <stop offset="1" stop-color="#e7e4d6" />
                                        </linearGradient>
                                        <path fill="url(#h)" d="M111.713 7.087l532.12 394.525L1179.439 7.087z" />
                                        <path fill="#f7f5ed" d="M111.713 7.087l532.12 394.525L1179.439 7.087z" />
                                    </svg>
                                </a>
                            </div>
                            <div>
                                <a href="#"
                                    class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-blue-500 text-white text-sm font-medium">
                                    <span class="sr-only">Sign in with Twitter</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path
                                            d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                            </div>

                            <div>
                                <a href="#"
                                    class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-slate-900 text-sm font-medium text-white ">
                                    <span class="sr-only">Sign in with GitHub</span>
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 relative">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-xs">
                            <span class="uppercase bg-slate-200 px-3 text-gray-700 font-semibold tracking-wider">
                                or continue with
                            </span>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action="{{ route('login') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="username" class="block text-sm font-medium text-gray-700">
                                Username
                            </label>
                            <div class="mt-1">
                                <input id="username" name="username" type="text" required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label for="password" class="block text-sm font-medium text-gray-700">
                                Password
                            </label>
                            <div class="mt-1">
                                <input id="password" name="password" type="password" autocomplete="current-password"
                                    required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember" type="checkbox"
                                    class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                <label for="remember-me" class="ml-2 block text-sm text-gray-900">
                                    Remember me
                                </label>
                            </div>

                            <div class="text-sm">
                                @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"
                                    class="font-medium text-indigo-600 hover:text-indigo-500">
                                    Forgot your password?
                                </a>
                                @endif
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Sign in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection