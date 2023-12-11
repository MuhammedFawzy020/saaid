<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\Drivers\Facebook\FacebookDriver;

use BotMan\Drivers\Facebook\Extensions\ButtonTemplate;
use BotMan\Drivers\Facebook\Extensions\ElementButton;

class BotManController extends Controller
{

   public function handle()
     {

      $customerServies = \App\Models\Admin::whereHas('roles', function($query) {
         $query->where('role_id', 4);
      })->get();

      $allButtons = [];
      foreach($customerServies as $customerService) {
         
         array_push($allButtons, ElementButton::create($customerService->name)->url('https://wa.me/+966'.$customerService->whats_up_number));
      }
      
        $botman = app('botman');
        $botman->hears('{message}', function($botman, $message) use ($allButtons) {
           $botman->typesAndWaits(2);
           $botman->reply(ButtonTemplate::create('مرحبا بكـ انا مساعدك الالي ، يمكنك مراسلة خدمة العملاء علي الواتساب ')
                  ->addButtons($allButtons)
                  // ->addButton(ElementButton::create('أحمد وائل')->url('https://wa.me/+966592175880'))
                  // ->addButton(ElementButton::create('ممثل خدمة اخر')->url('https://wa.me/+966592175880'))
                  // ->addButton(ElementButton::create('ممثلة خدمة اخري')->url('https://wa.me/+966592175880'))
           );
        });

        $botman->listen();
     }

     public function askName($botman)
     {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you '.$name);
        });
     }
}
