<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class DashboardController extends BaseController
{
  use DispatchesJobs, ValidatesRequests;

  public function __construct()
  {
      $this->middleware('auth');
  }

  protected function index()
  {
    return view("dashboard/index");
  }
}

