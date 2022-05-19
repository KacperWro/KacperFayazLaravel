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
        \App\Models\Language::create(['languageName' => 'Polish', 'id' => '1', 'speakersCount' => '4000000', 'langGroupID' => '1', 'description' => 'It is a West Slavic language', 'user_id' => '1']);
        \App\Models\Language::create(['languageName' => 'German', 'id' => '2', 'speakersCount' => '7000000', 'langGroupID' => '2', 'description' => 'It is a Germanic language', 'user_id' => '2']);

        //Country Sample Data
        \App\Models\Country::create(['countryName' => 'Poland', 
        'capital' => 'Warsaw', 
        'population' => '4000000',
        'area' => '123',
        'popDensity' => '456', 
        'history' => 'Poland, country of central Europe. Poland is located at a geographic crossroads that links the forested lands of northwestern Europe to the sea lanes of the Atlantic Ocean and the fertile plains of the Eurasian frontier. Now bounded by seven nations, Poland has waxed and waned over the centuries, buffeted by the forces of regional history. In the early Middle Ages, Poland’s small principalities and townships were subjugated by successive waves of invaders, from Germans and Balts to Mongols. In the mid-1500s, united Poland was the largest state in Europe and perhaps the continent’s most powerful nation. Yet two and a half centuries later, during the Partitions of Poland (1772–1918), it disappeared, parceled out among the contending empires of Russia, Prussia, and Austria.',
        'culture' => 'Poles are generally friendly and active people, who like to keep themselves busy with extracurricular activities, trips, and family get-togethers. You’re likely to find a close-knit family with grandparents often living in the home. In Polish culture, parents usually give their children quite a bit of independence and responsibility. Polish families come in all shapes and sizes, some lead very quiet lives, others are quite busy and their household is noisy. Some take frequent trips or outings, while others spend most of their time at home. Both parents may work outside the home or only one. Families also come from a variety of socio-economic backgrounds. Families will usually gather on Sundays to have lunch with immediate and extended family members. Polish society is young and well-educated, with a strong sense of initiative and creativity.',
        'food' => 'Undeniable, pierogi is the most popular Polish food. Pierogi is already plural in Polish (pieróg is singular), but in the US people love to call it pierogis which makes no sense. They are thinly rolled-out dough filled with a variety of fillings, savory or sweet. They could be served as an appetizer, main dish or dessert.',
        'tourism' => 'The Jewish Culture Festival has been organized in Cracow, the capital of Lesser Poland, since 1988, which makes it one of the oldest and biggest events celebrating Jewish culture. Its goal is to present the contemporary culture created by Jews living in Israel as well as by the Diaspora that is scattered all over the world. Subsequent editions of the festival encompass about 200 events: lectures, workshops, discussions, and concerts, including ‘Szalom na Szerokiej’ (Shalom in Szeroka street) – a seven-hour review of Jewish music.',
        'id' => '1', 'user_id' => '1', 'continentID' => '2', 'languageID' => '1', 'image_path' => '6285dd47601d4-.png']);

       


    }
}
