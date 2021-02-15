<?php

namespace App\View\Components;

use Illuminate\View\Component;

use function PHPSTORM_META\type;

class CheckBox extends Component
{
    public $type;
    public $name;
    public $id;
    public $str;
    public $value;
    public $key;
    public $imgpath;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'checkbox', $name, $id, $str, $value, $key, $imgpath = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->str = $str;
        $this->value = $value;
        $this->key = $key;
        $this->imgpath = $imgpath;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.checkbox');
    }
}
