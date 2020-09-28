<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','about','services',
        'skills','project','contact']]);
    }

    public function index(){
        return view('pages.index');

    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function skills(){
        return view('pages.skills');
    }
    public function login(){
        return view('auth.login');
    }
    public function mywork(){
        return view('pages.mywork');
    }
    public function viewMessage(){
        return view('pages.messageView');
    }


}
