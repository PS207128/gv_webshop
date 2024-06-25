<?php

namespace Database\Seeders;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $usaStates = [
            "NB" => 'NoordBrabant',
            "ZH" => 'ZuidHolland',
            "GR" => 'Groningen',
            "NH" => 'NoordHolland',
            "GL" => 'Gelderland',
        ];
        $countries = [
            ['code' => 'DE', 'name' => 'Duitsland', 'states' => null],
            ['code' => 'BG', 'name' => 'Belgie', 'states' => null],
            ['code' => 'NL', 'name' => 'Nederland', 'states' => json_encode($usaStates)],
            ['code' => 'A', 'name' => 'oostenrijk', 'states' => null],
        ];
        Country::insert($countries);
    }
}
