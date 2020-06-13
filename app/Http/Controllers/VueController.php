<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueController extends Controller
{
    public function mockSave()
    {
        $items = request()->validate([
            'profile.first_name' => 'required',
            'profile.last_name' => 'required',
            'profile.email' => 'required',
            'profile.country' => 'sometimes',
            'profile.street_address' => 'sometimes',
            'profile.city' => 'sometimes',
            'profile.state' => 'sometimes',
            'profile.zip' => 'sometimes',
        ]);

        return $items;
    }
}
