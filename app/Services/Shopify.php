<?php

namespace App\Services;

/**
 *
 */
class Shopify
{

  protected $apikey;
  protected $password;
  protected $hostname;
  protected $secret;
  public $apiurl;

  public function __construct($apikey, $password, $hostname, $secret)

  {
      $this->apikey = $apikey;
      $this->password = $password;
      $this->hostname = $hostname;
      $this->secret = $secret;
      $this->apiurl = "https://{$apikey}:{$password}@{$hostname}/admin/";
  }
}
