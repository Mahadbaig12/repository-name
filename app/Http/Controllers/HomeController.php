<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(Request $request){

        // if (!Auth::check()) {
        //     return redirect()->route('login');
        // }

    

        $card_title = "honda";

        

        $cards = DB::table('person')->get();




        return view('welcome')->with('cards',$cards);
    }
    public function home(Request $request)
{
  

    $page_heading = "WELCOME";

    $users = [
        [
            'id' => 1,
            'name' => 'BMW',
            'Engin' => '1400cc',
        ],
        [
            'id' => 2,
            'name' => 'Lambo',
            'degree' => '',
        ]
    ];
    $cars = [
        ["name" => "Toyota", "engine" => "2.5L I4", "horsepower" => 203, "fuel_type" => "Gasoline"],
        ["name" => "Honda", "engine" => "1.5L Turbo I4", "horsepower" => 190, "fuel_type" => "Gasoline"],
        // ... other cars
    ];

    $main_contant = "NEW CARS SPOT HERE";
    $main2_contant = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vel urna nisl. Ut scelerisque libero nec nibh tristique, ac bibendum ex laoreet. Vivamus vehicula, justo vel tincidunt interdum, mauris orci malesuada metus. Pellentesque nec felis ut nisl bibendum vehicula. Fusce volutpat, ligula at tempus varius, turpis metus fermentum felis, nec tristique eros lorem vel risus. Nulla facilisi. Aenean euismod, nisi sed vestibulum gravida, ipsum eros convallis elit, a tempus orci lacus et metus.









";

    $faqs = DB::table('faqs')->get();
    $cards = DB::table('person')->get();
    $gallery = DB::table('galleries')->get();

    return view('home', compact('faqs', 'cards', 'gallery'))
        ->with('page_heading', $page_heading)
        ->with('users', $users)
        ->with('main_contant', $main_contant)
        ->with('main2_contant', $main2_contant)
        ->with('cars', $cars);
}

    public function crud(Request $request){
        return view('crud');
    }
    public function superadmin(Request $request){
        return view('superadmin.superadmin');
    }
    public function contact(Request $request){

        $head_contact = "Contact Us Form";


        return view('contact')->with('head_contact', $head_contact);
    }
    public function policy(Request $request){

        $head_policy = "Policy page";

        $policy_contant = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quod officia saepe expedita laborum cumque, quia nam. Explicabo porro eos odio nemo provident tempore nesciunt, magnam sapiente expedita quibusdam magni, eligendi hic doloribus ipsam nobis animi exercitationem quas. Est, neque totam perferendis nemo beatae nihil ex repudiandae fugit! Cum 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quod officia saepe expedita laborum cumque, quia nam. Explicabo porro eos odio nemo provident tempore nesciunt, magnam sapiente expedita quibusdam magni, eligendi hic doloribus ipsam nobis animi exercitationem quas. Est, neque totam perferendis nemo beatae nihil ex repudiandae fugit! Cum 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quod officia saepe expedita laborum cumque, quia nam. Explicabo porro eos odio nemo provident tempore nesciunt, magnam sapiente expedita quibusdam magni, eligendi hic doloribus ipsam nobis animi exercitationem quas. Est, neque totam perferendis nemo beatae nihil ex repudiandae fugit! Cum 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quod officia saepe expedita laborum cumque, quia nam. Explicabo porro eos odio nemo provident tempore nesciunt, magnam sapiente expedita quibusdam magni, eligendi hic doloribus ipsam nobis animi exercitationem quas. Est, neque totam perferendis nemo beatae nihil ex repudiandae fugit! Cum ";
        


        return view('policy')->with('head_policy', $head_policy)->with('policy_contant',$policy_contant);
    }
    public function login(Request $request){

       


        return view('login');
    }
    public function logout(){

        Auth::logout();


        return view('login');
    }
    public function login2(Request $request){

        $cred = $request->validate([
         
            'email' => 'required|email',
            'password' => 'required',
       ]);

       if(Auth::attempt($cred)){
        return redirect()->route('home');
       }


        
    }
    public function signup(Request $request){

       


        return view('register');
    }
    public function register(Request $request){

       $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
       ]);

       $user = User::create($data);

       if($user) {
        return redirect()->route('login');
       }

      
    }

   
   
}
