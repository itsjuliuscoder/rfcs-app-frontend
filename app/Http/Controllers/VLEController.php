<?php

/**
 * Project: RFCS Website
 * Author: Julius Olajumoke
 * Contact: TW: @JuliusOlajumoke & Github: itsjuliuscoder
 * Filename: VLEController
 * Description: Hosts and controllers the public site of the project
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VLEController extends Controller
{
    //
    public function login(){
        $title = 'Login - RFCS Virtual Learning Environment';
        $description = '';

        return view('pages.vle.login')->with(['title'=> $title, 'description'=>$description]);
    }

    public function home(){
        $title = 'Welcome Julius - RFCS Virtual Learning Environment';
        $description = '';

        return view('pages.vle.home')->with(['title'=> $title, 'description'=>$description]);
    }

    public function subject(){
        $title = 'Subject - RFCS Virtual Learning Environment';
        $description = '';

        return view('pages.vle.subject')->with(['title'=> $title, 'description'=>$description]);
    }

    public function lesson(){
        $title = 'Welcome Julius - RFCS Virtual Learning Environment';
        $description = '';

        return view('pages.vle.lesson')->with(['title'=> $title, 'description'=>$description]);
    }

    public function user_guide(){
        $title = 'Welcome Julius - RFCS Virtual Learning Environment';
        $description = '';

        return view('pages.vle.user_guide')->with(['title'=> $title, 'description'=>$description]);
    }

    public function feedback(){
        $title = 'Share Feedback  Julius - RFCS Virtual Learning Environment';
        $description = '';

        return view('pages.vle.feedback')->with(['title'=> $title, 'description'=>$description]);
    }

    public function profile(){
        $title = 'My Profile - RFCS Virtual Learning Environment';
        $description = '';

        return view('pages.vle.profile')->with(['title'=> $title, 'description'=>$description]);
    }




}
