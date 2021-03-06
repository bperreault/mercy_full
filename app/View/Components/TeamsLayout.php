<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TeamsLayout extends Component
{
    public $teams;
    public $selected_team;

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($selectedteam, $teams)
    {
        $this->teams = $teams;
        $this->selected_team = $selectedteam;
    }
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.teams-layout');
    }
}
