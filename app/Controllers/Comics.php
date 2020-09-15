<?php

namespace App\Controllers;

class Comics extends BaseController
{

  public function index()
  {
    $data = [
      'title' => 'Dafter Komik'
    ];
    return view('comic/index', $data);
  }
}
