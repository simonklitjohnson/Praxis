<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use \App\Models\Site;

class SiteController extends BaseController
{
  use DispatchesJobs, ValidatesRequests;

  public function __construct()
  {
      $this->middleware('auth');
  }

  protected function settings($site_short_name)
  {
  	$site = Site::where('short_name', '=', $site_short_name)->first();
  	return view("site.settings")->with('site', $site);
  }
}

