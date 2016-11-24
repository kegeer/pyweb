<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function microbiome()
    {
        return view('pages.microbiome');
    }
    public function pathogen()
    {
        return view('pages.pathogen');
    }
    public function us()
    {
        return view('pages.us');
    }
    public function hire()
    {
        return view('pages.hire');
    }
    public function partner()
    {
        return view('pages.partner');
    }
    public function baby()
    {
        return view('pages.mb.baby');
    }
    public function mum()
    {
        return view('pages.mb.mum');
    }

    public function baba()
    {
        return view('pages.mb.baba');
    }

    public function diabetes()
    {
        return view('pages.mb.diabetes');
    }

    public function obesity()
    {
        return view('pages.mb.obesity');
    }

    public function cardio()
    {
        return view('pages.mb.cardio');
    }




}
