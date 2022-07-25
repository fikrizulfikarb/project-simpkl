<?php

namespace App\View\Components\Template\Button;

use Illuminate\View\Component;

class DeleteButton extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url;
    public $id;
    public $title = null;
    public function __construct($url, $id, $title = null)
    {
        $this->url = $url;
        $this->id = $id;
        $this->title = $title;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.template.button.delete-button');
    }
}
