@extends('layouts.app')
@section('title','Posts')

@section('content')
<div class="container px-6 mx-auto grid">
    <div class="mt-10 ">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-3">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 dark:text-gray-300 text-gray-900">Personal Information</h3>
                    <p class="mt-1 text-sm dark:text-gray-400 text-gray-600">Use a permanent address where you can
                        receive mail.</p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-3">
                <form action="#" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white dark:bg-slate-800 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name"
                                        class="block text-sm dark:text-gray-400 font-medium text-gray-700">First
                                        name</label>
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name"
                                        class="block dark:text-gray-400 text-sm font-medium text-gray-700">Last
                                        name</label>
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="email-address"
                                        class="block dark:text-gray-400 text-sm font-medium text-gray-700">Email
                                        address</label>
                                    <input type="text" name="email-address" id="email-address" autocomplete="email"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country"
                                        class="block text-sm dark:text-gray-400 font-medium text-gray-700">Country</label>
                                    <select id="country" name="country" autocomplete="country-name"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block text-sm font-medium dark:text-gray-400 text-gray-700"> Photo
                                    </label>
                                    <div class="mt-1 flex items-center">
                                        <span
                                            class="inline-block h-14 w-16 rounded-full overflow-hidden mr-3 bg-gray-500 dark:text-gray-300">
                                            <svg class="h-full w-full text-gray-300" fill="currentColor"
                                                viewBox="0 0 24 24">
                                                <path
                                                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </span>
                                        <input type="file" class="block w-full text-sm text-slate-500
                                            file:mr-4 file:py-2 file:px-4
                                            file:rounded-full file:border-0
                                            dark:text-gray-400
                                            file:text-sm file:font-semibold
                                            file:bg-violet-50 file:text-violet-700
                                            hover:file:bg-violet-100" value="Change" />
                                    </div>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="street-address"
                                        class="block text-sm font-medium text-gray-700 dark:text-gray-400">Street
                                        address</label>
                                    <input type="text" name="street-address" id="street-address"
                                        autocomplete="street-address"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                    <label for="city"
                                        class="block text-sm font-medium text-gray-700 dark:text-gray-400">City</label>
                                    <input type="text" name="city" id="city" autocomplete="address-level2"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="region"
                                        class="block text-sm font-medium text-gray-700 dark:text-gray-400">State /
                                        Province</label>
                                    <input type="text" name="region" id="region" autocomplete="address-level1"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="postal-code"
                                        class="block text-sm font-medium text-gray-700 dark:text-gray-400">ZIP /
                                        Postal code</label>
                                    <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                        </div>

                        <div class="px-4 py-3 bg-gray-50 dark:bg-slate-800 text-right sm:px-6">
                            <input type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                value="Save Changes" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection()