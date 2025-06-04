<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\person;

class personseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persons = collect(
            [
                [
                    'name' => 'faizan',
                    'email' => 'faizan@gmail.com',
                    'age' => '21',
                    'city' => 'faislabad',
                    'desc' => 'asdgsdahasdsadgasdgsad',
                    
                ],
                [
                    'name' => 'ahsan',
                    'email' => 'ahsan@gmail.com',
                    'age' => '25',
                    'city' => 'faislabad',
                    'desc' => 'asdgsdahasdsadgasdgsad',
                ],
                [
                    'name' => 'rehman',
                    'email' => 'rehman@gmail.com',
                    'age' => '26',
                    'city' => 'gujrat',
                    'desc' => 'asdgsdahasdsadgasdgsad',
                ],
                [
                    'name' => 'ahmed',
                    'email' => 'ahmed@gmail.com',
                    'age' => '30',
                    'city' => 'larkana',
                    'desc' => 'asdgsdahasdsadgasdgsad',
                ],
              ]
            );

            $persons->each(function($persons){
                person::insert($persons);
            });
    }
}
