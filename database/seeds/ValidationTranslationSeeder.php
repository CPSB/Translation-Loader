<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use ActivismeBe\TranslationLoader\LanguageLine;

class ValidationTranslationSeeder extends Seeder
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
               'group'  => 'validation',
               'key'    => 'accepted',
               'text'   => [
                   'nl' => ':attribute moet geaccepteerd zijn.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'active_url',
               'text'   => [
                   'nl' => ':attribute is geen geldige URL.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'after',
               'text'   => [
                   'nl' => ':attribute moet een datum na :date zijn.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'after_or_equal',
               'text'   => [
                   'nl' => ':attribute moet een datum na of gelijk aan :date zijn.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'alpha',
               'text'   => [
                   'nl' => ':attribute mag alleen letters bevatten.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'alpha_dash',
               'text'   => [
                   'nl' => ':attribute mag alleen letters, nummers, underscores (_) en streepjes (-) bevatten',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'alpha_num',
               'text'   => [
                   'nl' => ':attribute mag alleen letters en nummers bevatten.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'array',
               'text'   => [
                   'nl' => ':attribute moet geselecteerde elementen bevatten',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'before',
               'text'   => [
                   'nl' => ':attribute moet een datum voor :date zijn.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'before_or_equal',
               'text'   => [
                   'nl' => ':attribute moet een datum voor of gelijk aan :date zijn.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'between.numeric',
               'text'   => [
                   'nl' => ':attribute moet tussen :min en :max zijn.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'between.file',
               'text'   => [
                   'nl' => ':attribute moet tussen :min en :max kilobyter zijn.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'between.string',
               'text'   => [
                   'nl' => ':attribute moet tussen :min en :max karakters zijn.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'between.array',
               'text'   => [
                   'nl' => ':attribute moet tussen :min en :max items bevatten.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'boolean',
               'text'   => [
                   'nl' => ':attribute moet ja of nee zijn.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'confirmed',
               'text'   => [
                   'nl' => ':attribute bevestiging komt niet overeen.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'date',
               'text'   => [
                   'nl' => ':attribute moet een datum bevatten.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'date_format',
               'text'   => [
                   'nl' => ':attribute moet een geldig datum formaat bevatten.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'different',
               'text'   => [
                   'nl' => ':attribute en :other moeten verschillend zijn.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'digits',
               'text'   => [
                   'nl' => ':attribute moet bestaan uit :digits cijfers.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'digits_between',
               'text'   => [
                   'nl' => ':attribute moet bestaan uit minimaal :min en maximaal :max cijfes.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'dimensions',
               'text'   => [
                   'nl' => ':attribute heeft geen geldige afmetingen voor afbeeldingen.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'distinct',
               'text'   => [
                   'nl' => ':attribute heeft een dubbele waarde.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'email',
               'text'   => [
                   'nl' => ':attribute is geen geldig e-mailadres',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'exists',
               'text'   => [
                   'nl' => ':attribute bestaan niet.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'file',
               'text'   => [
                   'nl' => ':attribute moet een bestand zijn.',
               ],
           ],[
               'group'  => 'validation',
               'key'    => 'filled',
               'text'   => [
                   'nl' => '',
               ],
           ],
        ];

        LanguageLine::truncate();
        LanguageLine::insert($data);
    }
}