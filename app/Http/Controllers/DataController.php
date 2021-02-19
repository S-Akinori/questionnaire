<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //

    public function index() {
        $id = 13;
        $data = Form::findOrFail($id);
        // dd($data);
        
        // return $data->way_to_get_info;
        return json_decode($data->way_to_get_info, true);

        return $id;
    }
}
