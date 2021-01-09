<?php

/**
 * Project: RFCS Website
 * Author: Julius Olajumoke
 * Contact: TW: @JuliusOlajumoke & Github: itsjuliuscoder
 * Filename: PublicController
 * Description: Hosts and controllers the public site of the project
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    //landing/index page
    public function index(){
        $title = 'Right International School - Ensuring a better Future';
        $description = '';

        return view('pages.public.index')->with(['title'=> $title, 'description'=>$description]);
    }

    //about page
    public function about(){
        $title = 'About us - Right International School';
        $description = '';

        return view('pages.public.about')->with(['title'=> $title, 'description'=>$description]);
    }

    //contact page
    public function contact(){
        $title = 'Contact us - Right International School';
        $description = '';

        return view('pages.public.contact')->with(['title'=> $title, 'description'=>$description]);
    }

    //executive page
    public function executive(){
        $title = 'Executive Director Note - Right International School';
        $description = '';

        return view('pages.public.executive')->with(['title'=> $title, 'description'=>$description]);
    }

    //executive page
    public function management(){
        $title = 'School Management - Right International School';
        $description = '';

        return view('pages.public.management')->with(['title'=> $title, 'description'=>$description]);
    }

    //Anthem
    public function anthem(){
        $title = 'School Anthem & Prayer - Right Foundation Children School';
        $description = '';

        return view('pages.public.school-anthem')->with(['title'=> $title, 'description'=>$description]);
    }

    //Gallery page
    public function gallery(){
        $title = 'School Gallery - Right Foundation Children School';
        $description = '';

        return view('pages.public.gallery')->with(['title'=> $title, 'description'=>$description]);
    }

    //Alumni page
    public function alumni(){
        $title = 'Alumni Community - Right Foundation Children School';
        $description = '';

        return view('pages.public.alumni')->with(['title'=> $title, 'description'=>$description]);
    }

    //Why choose RFCS page
    public function whychooserfcs(){
        $title = 'Why Choose Us - Right International School';
        $description = '';

        return view('pages.public.why-choose')->with(['title'=> $title, 'description'=>$description]);
    }

    //Admission page
    public function admission(){
        $title = 'School Admission Procedure - Right International School';
        $description = '';

        return view('pages.public.admission')->with(['title'=> $title, 'description'=>$description]);
    }

    //Tuition page
    public function tuition(){
        $title = 'School Tuition - Right International School';
        $description = '';

        return view('pages.public.tuition')->with(['title'=> $title, 'description'=>$description]);
    }

    //Prospectus page
    public function prospectus(){
        $title = 'School Prospectus Request - Right International School';
        $description = '';

        return view('pages.public.prospectus')->with(['title'=> $title, 'description'=>$description]);
    }

    //VLE page
    public function vle(){
        $title = 'Virtual Learning Environment - Right International School';
        $description = '';

        return view('pages.public.vle')->with(['title'=> $title, 'description'=>$description]);
    }

    //Day care page
    public function daycare(){
        $title = 'Day care - Right International School';
        $description = '';

        return view('pages.public.daycare')->with(['title'=> $title, 'description'=>$description]);
    }

    //Nursery school page
    public function nursery(){
        $title = 'Nursery - Right International School';
        $description = '';

        return view('pages.public.nursery')->with(['title'=> $title, 'description'=>$description]);
    }

    //Primary school page
    public function primary(){
        $title = 'Primary - Right International School';
        $description = '';

        return view('pages.public.primary')->with(['title'=> $title, 'description'=>$description]);
    }

    //Secondary school page
    public function secondary(){
        $title = 'Secondary - Right International School';
        $description = '';

        return view('pages.public.secondary')->with(['title'=> $title, 'description'=>$description]);
    }

    //Learning Support page
    public function learningsupport(){
        $title = 'Contact us - Right International School';
        $description = '';

        return view('pages.public.learning-support')->with(['title'=> $title, 'description'=>$description]);
    }

    //Curriculum page
    public function curriculum(){
        $title = 'Contact us - Right International School';
        $description = '';

        return view('pages.public.curriculum')->with(['title'=> $title, 'description'=>$description]);
    }

    //News & Events page
    public function newsevents(){
        $title = 'News & Events - Right International School';
        $description = '';

        return view('pages.public.news-events')->with(['title'=> $title, 'description'=>$description]);
    }

    //Blog page
    public function blog(){
        $title = 'Blog - Right International School';
        $description = '';

        return view('pages.public.blog')->with(['title'=> $title, 'description'=>$description]);
    }

    //FAQs page
    public function faqs(){
        $title = 'Frequently Asked Questions - Right International School';
        $description = '';

        return view('pages.public.faqs')->with(['title'=> $title, 'description'=>$description]);
    }

}
