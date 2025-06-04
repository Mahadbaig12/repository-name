<?php

namespace App\Http\Controllers;

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




        return view('home')->with('page_heading',$page_heading)->with('users',$users)->with('main_contant',$main_contant)->with('main2_contant',$main2_contant)->with('cars',$cars);
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

    public function faqs(Request $request) {
        $faqs = [
            [
                'id' => '1',
                'faq_question' => 'What are the benefits of using this product?',
                'faq_answer' => 'This product improves efficiency and reduces costs, making it an excellent choice for users.',
            ],
            [
                'id' => '2',
                'faq_question' => 'Is there a warranty included?',
                'faq_answer' => 'Yes, the product comes with a 1-year warranty covering manufacturing defects.',
            ],
            [
                'id' => '3',
                'faq_question' => 'How can I get technical support?',
                'faq_answer' => 'You can reach our technical support team via email or phone, available 24/7.',
            ],
            [
                'id' => '4',
                'faq_question' => 'What payment methods are accepted?',
                'faq_answer' => 'We accept credit cards, debit cards, PayPal, and bank transfers.',
            ],
            [
                'id' => '5',
                'faq_question' => 'Can I return the product if I’m not satisfied?',
                'faq_answer' => 'Yes, we have a 30-day return policy for unused and undamaged products.',
            ],
        ];
        



        return view('faqs')->with('faqs', $faqs);
    }
    public function faq(Request $request) {
        $faq = [
            [
                'id' => '1',
                'faq_question' => 'What are the benefits of using this product?',
                'faq_answer' => 'This product improves efficiency and reduces costs, making it an excellent choice for users.',
            ],
            [
                'id' => '2',
                'faq_question' => 'Is there a warranty included?',
                'faq_answer' => 'Yes, the product comes with a 1-year warranty covering manufacturing defects.',
            ],
            [
                'id' => '3',
                'faq_question' => 'How can I get technical support?',
                'faq_answer' => 'You can reach our technical support team via email or phone, available 24/7.',
            ],
            [
                'id' => '4',
                'faq_question' => 'What payment methods are accepted?',
                'faq_answer' => 'We accept credit cards, debit cards, PayPal, and bank transfers.',
            ],
            [
                'id' => '5',
                'faq_question' => 'Can I return the product if I’m not satisfied?',
                'faq_answer' => 'Yes, we have a 30-day return policy for unused and undamaged products.',
            ],
        ];
        



        return view('faq.faq')->with('faq', $faq);
    }
}
