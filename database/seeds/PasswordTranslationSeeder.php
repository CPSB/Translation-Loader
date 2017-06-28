<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use ActivismeBe\TranslationLoader\LanguageLine;

class PasswordTranslationSeeder extends Seeder
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
               'group'  => 'passwords',
               'key'    => 'password',
               'text'   => [
                   'nl' => 'Wachtwoord moet minimaal zes tekens lang zijn en de wachtwoorden moeten overeenkomen.',
               ],
           ],[
               'group'  => 'passwords',
               'key'    => 'reset',
               'text'   => [
                   'nl' => 'Het wachtwoord van uw account is gewijzigd.',
               ],
           ],[
               'group'  => 'passwords',
               'key'    => 'send',
               'text'   => [
                   'nl' => 'We hebben een e-mail verstuurd met instructies om een nieuw wachtwoord in te stellen.',
               ],
           ],[
               'group'  => 'passwords',
               'key'    => 'token',
               'text'   => [
                   'nl' => 'Dit wachtwoord reset token is niet geldig.',
               ],
           ],[
               'group'  => 'passwords',
               'key'    => 'user',
               'text'   => [
                   'nl' => 'Geen gebruiker bekend met dat e-mailadres',
               ],
           ],
        ];

        LanguageLine::truncate();
        LanguageLine::insert($data);
    }
}