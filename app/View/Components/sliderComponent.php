<?php

namespace App\View\Components;

use Illuminate\View\Component;

class sliderComponent extends Component{

    public $sliderid;


    public function __construct($sliderId){
        $this->sliderid = $sliderId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render(){
        return view('components.slider-component');
    }
}
