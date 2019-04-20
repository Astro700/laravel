<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class StaticConroller extends BaseController{

  function index(){

    $chema::create('reservation',function(){
      $t->date('date'); 
      $t->timr('time');
      $t->integer('person');
      $t->string('lastname');
      $t->string('message');
      $t->timestamps();
    });

      return view('index');
  }
}
?>