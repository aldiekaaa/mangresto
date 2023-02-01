<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>

            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <p class="pl-10 pt-10 pb-3">Where you go ?</p>
                <ul class="pl-10 pb-10 text-sm text-blue-500">
                    <li>
                        <a href="{{ route('products.index') }}">- Mang Resto Admin</a>
                    </li>
                    <li>
                        <a href="">- Mang Resto User</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
