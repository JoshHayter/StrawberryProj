<?php

namespace App\Services;

use GuzzleHttp\Client;

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

  public function getAllProducts(){
      $client = new Client();
      $res = $client->request('GET', $this->apiurl.'products.json', [
      ]);
      if($res->getStatusCode() != 200)
      {
        return false;
      };

      return $res->getBody()->getContents();
        // {"type":"User"...'
  }


}
