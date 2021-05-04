<?php

namespace App\Http\Controllers;


class PageController extends Controller
{

    public function homepage()
    {
        $data = [];
        $data['title'] = 'Homepage | MagicAK';

        return view('homepage',$data);
    }

}
