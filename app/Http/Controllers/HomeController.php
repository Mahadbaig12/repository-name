<?php

namespace App\Http\Controllers;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(Request $request){

        //fetch data from db

        $card_title = "honda";

        // $cards = [
        //     [
        //         'id' => 1,
        //         'image_path' => 'images/honda.jpg',
        //         'card_title' => 'honda',
        //         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur animi temporibus nesciunt praesentium' ,
        //     ],
        //     [
        //         'image_path' => 'images/bmw.jpg',
        //         'id' => 2,
        //         'card_title' => 'BMW',
        //         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur animi temporibus nesciunt praesentium' ,
        //     ],
        //     [
        //         'image_path' => 'images/toyota.jpg',
        //         'id' => 3,
        //         'card_title' => 'Toyota',
        //         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur animi temporibus nesciunt praesentium' ,
        //     ],
        //     [
        //         'image_path' => 'images/Hyundai.jpg',
        //         'id' => 4,
        //         'card_title' => 'Hyundai',
        //         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur animi temporibus nesciunt praesentium' ,
        //     ],
        //     [
        //         'image_path' => 'images/lambo.jpg',
        //         'id' => 5,
        //         'card_title' => 'Lambo',
        //         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur animi temporibus nesciunt praesentium' ,
        //     ],
        // ];


        $cards = DB::table('person')->get();




        return view('welcome')->with('cards',$cards);
    }
    public function home(Request $request){
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
                ["name" => "Ford", "engine" => "2.3L EcoBoost", "horsepower" => 310, "fuel_type" => "Gasoline"],
                ["name" => "Chevrolet", "engine" => "2.0L Turbo I4", "horsepower" => 275, "fuel_type" => "Gasoline"],
                ["name" => "BMW", "engine" => "3.0L I6 Twin-Turbo", "horsepower" => 382, "fuel_type" => "Gasoline"],
                ["name" => "Mercedes", "engine" => "2.0L I4 Turbo", "horsepower" => 255, "fuel_type" => "Gasoline"],
                ["name" => "Audi", "engine" => "2.0L TFSI I4", "horsepower" => 261, "fuel_type" => "Gasoline"],
                ["name" => "Tesla", "engine" => "Electric", "horsepower" => 670, "fuel_type" => "Electric"],
                ["name" => "Nissan", "engine" => "3.5L V6", "horsepower" => 300, "fuel_type" => "Gasoline"],
                ["name" => "Hyundai", "engine" => "1.6L Turbo I4", "horsepower" => 180, "fuel_type" => "Gasoline"]
            ];

            $main_contant = "NEW CARS SPOT HERE";


            $main2_contant = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quod officia saepe expedita laborum cumque, quia nam. Explicabo porro eos odio nemo provident tempore nesciunt, magnam sapiente expedita quibusdam magni, eligendi hic doloribus ipsam nobis animi exercitationem quas. Est, neque totam perferendis nemo beatae nihil ex repudiandae fugit! Cum ";

            
            $faqs = DB::table('faqs')->get();
            $cards = DB::table('person')->get();
            $gallery =DB::table('galleries')->get();

        return view('home',compact('faqs','cards','gallery'))->with('page_heading',$page_heading)->with('users',$users)->with('main_contant',$main_contant)->with('main2_contant',$main2_contant)->with('cars',$cars);
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

   
   
}
