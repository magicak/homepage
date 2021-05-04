<?php

namespace App\Http\Controllers;


class PageController extends Controller
{

    public function homepage()
    {
        $data = [];
        $data['title'] = 'Homepage | MagicAK';
        $data['homepage'] = 'homepage';

        return view('homepage',$data);
    }
    public function services()
    {
        $data = [];
        $data['title'] = 'Services | MagicAK';

        return view('services',$data);
    }
    public function aboutus()
    {
        $data = [];
        $data['title'] = 'About Us | MagicAK';

        return view('aboutus',$data);
    }

    public function support()
    {
        $data = [];
        $data['title'] = 'Support | MagicAK';

        return view('support',$data);
    }
    public function partners()
    {
        $data = [];
        $data['title'] = 'Partners | MagicAK';

        return view('partners',$data);
    }
    public function contact()
    {
        $data = [];
        $data['title'] = 'Contact | MagicAK';

        return view('contact',$data);
    }
}
