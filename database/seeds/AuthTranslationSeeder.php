<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use ActivismeBe\TranslationLoader\LanguageLine;

class AuthTranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = [
           [
               'group'  => 'auth',
               'key'    => 'failed',
               'text'   => [
                   'nl' => 'Deze combinatie van e-mail adres en wachtwoord is niet geldig.',
               ],
           ],[
               'group'  => 'auth',
               'key'    => 'throttle',
               'text'   => [
                   'nl' => 'Teveel mislukte loginpogingen. Probeer het over :seconds seconden nogmaals.',
               ],
           ],
        ];

        LanguageLine::truncate();
        LanguageLine::insert($data);
    }
}
