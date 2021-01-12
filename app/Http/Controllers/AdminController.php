<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth:admin')->except('login', 'home');
    // }


    public function home(){
        $title = 'Welcome Home - Admin Management for RFCS';
        $description = '';

        return view('pages.admin.home')->with(['title'=> $title, 'description'=>$description]);
    }

    public function list_students(){
        $title = 'Welcome Home - Admin Management for RFCS';
        $description = '';

        return view('pages.admin.list-students')->with(['title'=> $title, 'description'=>$description]);
    }

    public function list_teachers(){
        $title = 'Welcome Home - Admin Management for RFCS';
        $description = '';

        return view('pages.admin.list-teachers')->with(['title'=> $title, 'description'=>$description]);
    }

    public function create_student(){
        $title = 'Create Student - Admin Management for RFCS';
        $description = '';

        return view('pages.admin.add-student')->with(['title'=> $title, 'description'=>$description]);
    }

    //process for creating student
    public function create_user(Request $request)   {

        $formData = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        //
        $formData['confirmPassword'] = $request->input('password_confirmation');

        $requestResult = $this->sendPost('auth/register', $formData);

        //var_dump($requestResult);

        if (is_null($requestResult)) {

            if(isset($this->getPostErr->err)){
                $error = $this->getPostErr->err;
            }
            elseif(isset($this->getPostErr->message)){
                $error = $this->getPostErr->message;
            }

            return redirect()->back()->with('failed', $error)->withInput($request->input());

        }

        $body = json_decode((string) $requestResult->getBody(), true);

        //var_dump($requestResult);
        if($requestResult->getStatusCode() != 200){
            return back()->with('failed', 'Something with wrong:unable to create user.')->withInput($request());
        }

        $confirm = $body['message'];

        return redirect('confirm-email')->with(['confirm' => $confirm]);

    }

    public function create_teacher(){
        $title = 'Create Teacher - Admin Management for RFCS';
        $description = '';

        return view('pages.admin.add-teacher')->with(['title'=> $title, 'description'=>$description]);
    }

    public function add_subject(){
        $title = 'Add Subject - Admin Management for RFCS';
        $description = '';

        return view('pages.admin.add-subject')->with(['title'=> $title, 'description'=>$description]);
    }

    public function add_lesson(){
        $title = 'Add Lesson - Admin Management for RFCS';
        $description = '';

        return view('pages.admin.add-lesson')->with(['title'=> $title, 'description'=>$description]);
    }
    //authenticate user before logging in
    public function authenticate(Request $request){

        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            return redirect()->intend('admin-home');
        }

        return redirect('admin-login')->with('error', 'Ooops! You have entered the invalid credentials');

    }
    //creates a new student
    public function storeUser(Request $request) {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
            'group' => 'required'
        ]);

        User::create([
            'fname' => $request->name,
            'email' => $request->email,
            'group' => $request->group,
            'password' => Hash::make($request->password),
        ]);

        return redirect('admin-home');
    }

}
