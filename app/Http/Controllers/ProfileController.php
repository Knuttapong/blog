<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  function getList(){
    return [
      ["Name"=>"AA"],
      ["Name"=>"BB"]
    ];
  }

  function getName($id){
    return $this->getList()[$id-1]["Name"];
  }

  function getInfo(){
    return 'BonuZz';
  }

}
