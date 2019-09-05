<?php

namespace App\Http\Controllers;

use App\Options;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Contr extends Controller
{
    /*public function get_options() {
        return view('options');
    }
    public function post_options(Request $request) {

        try {
            $options = new Options();
            $options->one = $request->input('one');
            $options->two = $request->input('two');
            $options->three = $request->input('three');
            $options->four = $request->input('four');
            $options->save();
            return redirect('options')->with("options", $options);

        } catch (Exception $e) {
            return 'try again';
        }
        return "It's added";
    }*/


}
