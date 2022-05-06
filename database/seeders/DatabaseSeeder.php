<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        //Continents Sample Data
        \App\Models\Continent::create(['continentName' => 'Asia']);
        \App\Models\Continent::create(['continentName' => 'Europe']);
        \App\Models\Continent::create(['continentName' => 'Africa']);
        \App\Models\Continent::create(['continentName' => 'Australia']);
        \App\Models\Continent::create(['continentName' => 'North America']);
        \App\Models\Continent::create(['continentName' => 'South America']);

        //Language Groups Sample Data
        \App\Models\LanguageGroup::create(['langGroupName' => 'Slavic', 'id' => '1']);
        \App\Models\LanguageGroup::create(['langGroupName' => 'Germanic', 'id' => '2']);
        \App\Models\LanguageGroup::create(['langGroupName' => 'Romance', 'id' => '3']);
        \App\Models\LanguageGroup::create(['langGroupName' => 'Hellenic', 'id' => '4']);
        \App\Models\LanguageGroup::create(['langGroupName' => 'Celtic', 'id' => '5']);

        //Languages Sample Data
        // \App\Models\Language::create(['languageName' => 'Polish', 'id' => '1', 'speakersCount' => '4000000', 'langGroupID' => '1', 'description' => 'It is a West Slavic language']);
        // \App\Models\Language::create(['languageName' => 'German', 'id' => '2', 'speakersCount' => '7000000', 'langGroupID' => '2', 'description' => 'It is a Germanic language']);


    }
}
