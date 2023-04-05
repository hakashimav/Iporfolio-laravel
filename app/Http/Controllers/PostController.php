<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function portfolio()
    {

        $name = 'Project information';
        $category = 'Web design';
        $client = 'ASU Company';
        $pro_date = '01 March, 2020';
        $pro_url = 'www.example.com';

        return view('portfolio-details',[

            'name' => $name,
            'category' => $category,
            'client' => $client,
            'pro_date' => $pro_date,
            'pro_url' => $pro_url

        ]);
    }
}



















?>
