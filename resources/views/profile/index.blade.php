<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Team Members') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <a href="{{route('team.create')}}" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-cyan-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-cyan-600 dark:hover:bg-blue-500 dark:bg-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            <span>Add Team Member</span>
        </a>
        <div class="w-full">
            <div class="p-4 sm:p-8 bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                                <th class="px-4 py-3">Full Name</th>
                                <th class="px-4 py-3">Position</th>
                                <th class="px-4 py-3">Level</th>
                                <th class="px-4 py-3">Department</th>
                                <th class="px-4 py-3">Created By</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y">
                            @foreach($members as $member)
                            <tr>
                                <td class="px-4 py-3 text-sm">
                                    {{ $member->full_name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $member->position }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $member->level }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $member->department }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $member->user_id }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>