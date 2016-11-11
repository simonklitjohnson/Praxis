<?php
//namespace App\Helpers;


function t($short_name, $parameter = null ) {
  /*$language_id = \App\Models\Language::where("iso", "=", $iso)->select('id')->firstOrFail()['id'];
  $string = \App\Models\Strings::where("short_name", "=", $short_name)->where("language_id", "=", $language_id)->select('content')->firstOrFail();
  return $string['content'];*/
  if($parameter != null)
  {
  	return Lang::get($short_name, $parameter);
  } else {
  	return Lang::get($short_name);
  }
}

?>
