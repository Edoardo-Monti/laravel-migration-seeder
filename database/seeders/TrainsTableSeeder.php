<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newTrain = new Train();
            $newTrain->Azienda = $faker->company();
            $newTrain->Stazione_di_partenza = $faker->city();
            $newTrain->Stazione_di_arrivo = $faker->city();
            $newTrain->Orario_di_partenza = $faker->time();
            $newTrain->Orario_di_arrivo = $faker->time();
            $newTrain->Codice_Treno = $faker->bothify('?????-#####');
            $newTrain->Numero_Carrozze = $faker->randomNumber(2, false);
            $newTrain->In_orario = $faker->randomElement(['sii','noo']);
            $newTrain->Cancellato = $faker->randomElement(['sii','noo']);
            $newTrain->created_at = $faker->time();
            $newTrain->updated_at = $faker->time();
            $newTrain->save();


        }
    }
}
