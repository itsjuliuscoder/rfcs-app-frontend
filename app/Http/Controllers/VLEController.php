<?php

/**
 * Project: RFCS Website
 * Author: Julius Olajumoke
 * Contact: TW: @JuliusOlajumoke & Github: itsjuliuscoder
 * Filename: VLEController
 * Description: Hosts and controllers the public site of the project
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Traits\GuzzleTrait;
use Illuminate\Http\Request;

class VLEController extends Controller
{

    use GuzzleTrait;

    public function __construct(){

        //$this->middleware('custom.auth')->except(['register', 'create_user', 'reset', 'forget', 'create_comment']);
        $this->initGuzzle();

    }
    //
    public function login(){
        $title = 'Login - RFCS Virtual Learning Environment';
        $description = '';

        return view('pages.vle.login')->with(['title'=> $title, 'description'=>$description]);
    }

    public function authenticate(Request $request) {

        $formData = $request->validate([
          'email' => 'required|email',
          'password' => 'required',

        ]);

        //dd($formData); exit();


        $requestResult = $this->sendPost('login', $formData);

        //$code = $requestResult->getStatusCode();

        //dd($code); exit();


        if(is_null($requestResult)){
          //remove authenticated, user and token from session
          //CookieHelper::destroyAuthCookies();
          //return response()->json($this->getPostErr);
          return redirect()->back()->with('error','Email Address and Password Combination Failed, TRY AGAIN')->withInput($request->input());
        }

        $statusCode = $requestResult->getStatusCode();

        if($statusCode != 200){

          return redirect()->back()->with('error','Something went wrong, UNABLE TO LOGIN')->withInput($request());

        } else if ($statusCode = 200){


            $response = json_decode((string) $requestResult->getBody(), true);

            var_dump($response); exit();
            //   $this->token = $this->response['token'];
            //   $this->id = $this->response['data']['_id'];
            //   $this->fullname = $this->response['data']['fullname'];
            //   $this->email = $this->response['data']['email'];
            //   //$this->password = $this->response['data']['password'];
            //   $this->profile_img = $this->response['data']['profile_img'];
            //   $this->about = $this->response['data']['about'];
            // $user = $this->response['data'];


            // if($request->get('remember') == true){
            // $this->rememberPeriod = config('aiptconfig.duration.remember'); //7 days
            // }

            //store authenticated, user and token in cookies to be checked by authentication middleware
            //   setcookie("authenticated",true,time()+$this->rememberPeriod);
            //   setcookie("fullname",$this->fullname,time()+$this->rememberPeriod);
            //   setcookie("email",$this->email,time()+$this->rememberPeriod);
            //   //setcookie("password",$this->password,time()+$this->rememberPeriod);
            //   setcookie("id",$this->id,time()+$this->rememberPeriod);
            //   setcookie("profile_img",$this->profile_img,time()+$this->rememberPeriod);
            //   setcookie("about",$this->about,time()+$this->rememberPeriod);
            //   setcookie("token",$this->token,time()+$this->rememberPeriod);

            //   var_dump($this->profile_img);
            //   return redirect('publisher/home');

        }
        else {
          return redirect()->back()->with('error','Something went wrong, TRY AGAIN');
        }

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

    public function get_all_subjects(Request $request){

        $requestResult = $this->sendGet('subjects');

        $body = $requestResult->getStatusCode();

        $response = json_decode((string) $requestResult->getBody()->getContents(), true);

        var_dump($response); exit();

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
