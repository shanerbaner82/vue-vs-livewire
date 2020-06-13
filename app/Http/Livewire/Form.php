<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $savedData = null;
    public $first_name;
    public $last_name;
    public $email;
    public $country = 'United States';
    public $street_address = '';
    public $city;
    public $state;
    public $zip;

    public function store()
    {
        $items = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'country' => 'sometimes',
            'street_address' => 'sometimes',
            'city' => 'sometimes',
            'state' => 'sometimes',
            'zip' => 'sometimes',
        ]);

        $this->savedData = $items;
    }
    public function render()
    {
        return view('livewire.form');
    }
}
