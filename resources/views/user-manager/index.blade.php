<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                <div class="my-2 text-right">
                    <a href={{route('user-manager.create')}}>
                        <button type="button" class="right-0 px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg 
                                                        hover:bg-blue-800 
                                                        focus:ring-4 focus:outline-none focus:ring-blue-300 
                                                        dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Create
                        </button>
                    </a>
                </div>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="table w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        {{-- header --}}
                        <div class="table-header-group text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <div class="table-row">
                                <div class="table-cell font-semibold px-6 py-3">
                                    ID
                                </div>
                                <div class="table-cell font-semibold px-6 py-3">
                                    Name
                                </div>
                                <div class="table-cell font-semibold px-6 py-3">
                                    Email
                                </div>
                                <div class="table-cell font-semibold px-6 py-3">
                                    Join @
                                </div>
                            </div>
                        </div>
                        {{-- content cells --}}
                        <div class="table-row-group">
                            @foreach($users as $user)
                                <a href="#" class="table-row bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <div class="table-cell pl-6 pr-3 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$user->id}}
                                    </div>
                                    <div class="table-cell pl-6 pr-3 py-4">
                                        {{$user->name}}
                                    </div>
                                    <div class="table-cell pl-6 pr-3 py-4">
                                        {{$user->email}}
                                    </div>
                                    <div class="table-cell pl-6 pr-3 py-4">
                                        {{$user->created_at}}
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>