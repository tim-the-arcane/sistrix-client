<?php

namespace SistrixClient\SistrixClient;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

class SistrixClient
{
  private $apiKey;
  private $apiUrl;
  private $httpClient;

  public function __construct()
  {
    $this->apiKey = $_ENV['SISTRIX_API_KEY'];
    $this->apiUrl = $_ENV['SISTRIX_API_BASE_URI'];
    $this->httpClient = new \GuzzleHttp\Client([
      'base_uri' => $_ENV['SISTRIX_API_BASE_URI']
    ]);
  }

  public function getCredits(): string
  {
    return "No credits data available";
  }
}
