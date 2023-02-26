<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Team') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Team Member') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('Ensure your account is well detailed') }}
                            </p>
                        </header>

                        <form method="post" action="{{ route('team.store') }}" class="mt-6 space-y-6">
                            @csrf

                            <div>
                                <x-input-label for="full_name" :value="__('Full Name')" />
                                <x-text-input id="full_name" name="full_name" type="text" class="mt-1 block w-full" autocomplete="full_name" />
                            </div>

                            
                            <div>
                                <x-input-label for="department" :value="__('Department')" />
                                <x-text-input id="department" name="department" type="text" class="mt-1 block w-full" autocomplete="department" />
                            </div>
                            
                            
                            <div>
                                <x-input-label for="level" :value="__('Level')" />
                                <x-text-input id="level" name="level" type="text" class="mt-1 block w-full" autocomplete="level" />
                            </div>
                            
                            
                            <div>
                                <x-input-label for="position" :value="__('Position')" />
                                <x-text-input id="position" name="position" type="text" class="mt-1 block w-full" autocomplete="position" />
                            </div>

                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </section>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>