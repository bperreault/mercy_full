<x-app-layout>

<x-slot name="title">Edit Tab</x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tab') }}
        </h2>
        <x-jet-dropdown-link href="{{ route('apps.edit',['teamid' => Auth::user()->allTeams()->first()->id, 'appid' => $tabdata->app_id])   }}">
                    {{ __('Return to App') }}
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
