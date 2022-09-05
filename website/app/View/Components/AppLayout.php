<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * The alert active.
     *
     * @var string
     */
    public $active;

    /**
     * The alert title.
     *
     * @var string
     */
    public $title;

    /**
     * The alert content class.
     *
     * @var string
     */
    public $areawrapper;

    /**
     * Create the component instance.
     *
     * @param  string  $active
     * @param  string  $title
     * @param  string  $areawrapper
     * @return void
     */
    public function __construct($active = null, $title = null, $areawrapper = false)
    {
        $this->active = $active;
        $this->title = $title;
        $this->areawrapper = $areawrapper;
    }
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}
