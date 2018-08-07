<?php

/**
 * Country Detect plugin for Craft CMS 3.x
 *
 * @link      https://serieseight.com/
 * @copyright Copyright (c) 2018 Series Eight
 */

namespace serieseight\countrydetect\variables;

use serieseight\countrydetect\CountryDetect;
use Craft;

class CountryDetectVariable
{
  public function country()
  {
    if ( array_key_exists("HTTP_CF_IPCOUNTRY", $_SERVER) ) {
      $country = $_SERVER["HTTP_CF_IPCOUNTRY"];
      return $country;
    } else {
      return "";
    }
  }
}
