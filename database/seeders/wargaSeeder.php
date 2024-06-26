<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class wargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i=0;$i<50;$i++){
            DB::table('wargas')->insert([
                'nik' => $faker->unique()->numerify('##############'),
                'nama'=>$faker->name,
                'alamat'=>$faker->address,
                'no_telpon'=>$faker->phoneNumber,
            ]);
        }
    }
}
