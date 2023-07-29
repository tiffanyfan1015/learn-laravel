@extends('user-manager.layout')

@section('title')

{{ __('Users\' Profile') }}

@endsection


@section('content')

<x-validation-errors class="mb-4" />
<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <div class="flex items-left justify-left space-x-3">
        <img class="rounded-full block h-12 w-auto" src="{{ $user->profile_photo_url }}" alt="profile picture">
        <div class="space-y-0.5 font-medium dark:text-white text-left">
            <div>{{ $user->name }}</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">{{ $user->email }}</div>
        </div>
    </div>

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Identity Number: {{ $user->id }}
    </h1>
</div>

<div class="flex items-center justify-end mt-4">
    <a href="{{ route('user-manager.edit', ['user_manager' => $user->id]) }}">
        <x-button class="ml-4">
            {{ __('Edit') }}
        </x-button>
    </a>

    <form action="{{ route('user-manager.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <x-danger-button class="ml-3" type="submit">
            {{ __('Delete') }}
        </x-danger-button>
    </form>
</div>

@endsection