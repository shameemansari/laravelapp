@props(['posts','links'])

<div class="w-full overflow-hidden rounded-lg shadow-xs pt-4">
    <div class="w-full mx-auto mb-3 flex flex-wrap items-center justify-center md:justify-end">
        <a href="{{ route('posts.create') }}"
            class="inline-flex m-1 items-center px-4 py-2 bg-gray-800  border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Create
            post</a>
        <a href="{{ route('downloadPdf') }}"
            class="inline-flex m-1 items-center px-4 py-2 bg-gray-800  border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Export
            PDF</a>
        <a href="{{ route('downloadExcel') }}"
            class="inline-flex m-1 items-center px-4 py-2 bg-gray-800  border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Export
            Excel</a>
    </div>
    <div class="w-full mx-auto overflow-x-auto shadow-md">
        <table class="w-full rounded-lg">
            <thead>
                <tr
                    class="text-xs font-semibold tracking-wide text-left text-white uppercase border-b dark:border-gray-700 bg-slate-700 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-5 py-3"><input type="checkbox" name="select_all" onchange="checkAll()" class="h-3 w-3"
                            id="select_all"></th>
                    <th class="px-4 py-3">Code</th>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Amount</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @forelse ($posts as $post)
                <tr class="text-gray-700 dark:text-gray-400">
                    <td class="px-5 py-3"><input type="checkbox" class="checklist-checkbox h-3 w-3"></td>
                    <td class="px-4 py-3">
                        <p class="text-sm tracking-wide">
                            {{ $post->code }}
                        </p>
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            <!-- Avatar with inset shadow -->
                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full" src="{{ $post->image }}"
                                    alt="{{ $post->name }}" loading="lazy" />
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div>
                            <div>
                                <p class="font-semibold"><a href="{{ route('posts.show',['post' => $post->id]) }}">{{
                                        $post->name }}</a></p>
                                <p class="text-xs text-gray-600 dark:text-gray-400">
                                    {{ $post->email }}
                                </p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        $ {{ $post->amount }}
                    </td>
                    <td class="px-4 py-3">
                        <span @class([ 'px-3 py-1 text-xs font-semibold tracking-widest leading-tight rounded-full'
                            , 'text-emerald-700 bg-emerald-200 dark:bg-green-400 dark:text-black'=>
                            ($post->status->value === 'completed'),
                            'text-yellow-700 bg-yellow-200 dark:bg-yellow-300 dark:text-black' => ($post->status->value
                            === 'processing'),
                            'text-rose-700 bg-rose-200 dark:bg-rose-400 dark:text-black' => ($post->status->value ==
                            'cancelled'),
                            ])>
                            {{ $post->status->value }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $post->created_at->format('jS F, Y') }}
                    </td>
                    <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                            <a href="{{ route('posts.edit',['post'=>$post->id]) }}"
                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-indigo-600  rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                aria-label="Edit">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                    </path>
                                </svg>
                            </a>
                            <button x-on:click="openModal({{ $post->id }})"
                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-rose-500 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                aria-label="Delete">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td></td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="w-full px-2 mx-auto my-5">
        {!! $links !!}
    </div>
</div>


<!-- Modal backdrop. This what you want to place close to the closing body tag -->
<div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
    <!-- Modal -->
    <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150"
        x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="closeModal"
        @keydown.escape="closeModal"
        class="w-full px-6 py-4 overflow-hidden bg-slate-200 rounded-t-lg dark:bg-gray-800 sm:rounded-lg m-10 sm:m-4 sm:max-w-xl"
        role="dialog" id="modal">
        <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
        <header class="flex justify-end">
            <button
                class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                aria-label="close" @click="closeModal">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                    <path
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </button>
        </header>
        <!-- Modal body -->
        <div class="mt-4 mb-3">
            <!-- Modal title -->
            <div class="sm:flex gap-2 sm:items-start">
                <div
                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <!-- Heroicon name: outline/exclamation -->
                    <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-lg leading-6 font-medium text-gray-900 dark:text-gray-200" id="modal-title">Delete
                        post</h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500 dark:text-gray-400"> All of your
                            data will be permanently removed. This action cannot be undone. Are you sure you want to
                            delete this post? </p>
                    </div>
                </div>
            </div>
        </div>
        <footer
            class="flex flex-col items-center justify-end px-6 py-4 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-3 sm:flex-row bg-transparent">
            <button @click="closeModal"
                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                Cancel
            </button>
            <form action="{{ route('posts.delete') }}" class="w-full sm:w-auto" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="post" x-model="postId">
                <button type="submit"
                    class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Delete </button>
            </form>
        </footer>
    </div>
</div>
<!-- End of modal backdrop -->