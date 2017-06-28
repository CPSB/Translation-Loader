<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use ActivismeBe\TranslationLoader\LanguageLine;

class PaginationTranslationSeeder extends Seeder
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
               'group'  => 'pagination',
               'key'    => 'previous',
               'text'   => [
                   'nl' => '&laquo; Vorige',
               ],
           ],[
               'group'  => 'pagination',
               'key'    => 'next',
               'text'   => [
                   'nl' => 'Volgende &raquo;',
               ],
           ],
        ];

        LanguageLine::truncate();
        LanguageLine::insert($data);
    }
}