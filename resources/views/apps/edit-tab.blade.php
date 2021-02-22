<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tab') }}
        </h2>
        <x-jet-dropdown-link href="{{ route('apps.show', Auth::user()->allTeams()->first()->id)  }}">
                    {{ __('Return to Apps') }}
                </x-jet-responsive-nav-link>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('apps.tab-info-form',[ 'tabdata'=>$tabdata, 
                         'sortorders' => $sortorders 
                        , 'moredata' => $moredata ,'icondata' => $icondata
                        ]);
            <x-jet-section-border />

        </div>
    </div>
</x-app-layout>
