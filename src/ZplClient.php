<?php
/*!
 * Zakony pro lidi - PHP SDK
 * https://www.zakonyprolidi.cz/
 * Created by: https://europedev.com
 */

namespace EuropeDev\ZplSdk;

use GuzzleHttp\Client;
use EuropeDev\ZplSdk\Tools\GuzzleClient;
use EuropeDev\ZplSdk\Models\SbirkaZakonu;
use EuropeDev\ZplSdk\Models\MezinarodniSmlouvy;

class ZplClient
{
  protected $apiToken; // to obtain api key contact support@aion.cz
  protected $baseUrl;
  
    public function __construct(string $apiToken, $baseUrl = 'http://www.zakonyprolidi.cz/api/v1/', $userAgent = '')
    {
        $this->apiToken = $apiToken;
        $this->baseUrl = $baseUrl;
        $this->userAgent = $userAgent;
        $this->httpClient = new GuzzleClient($this);
        self::$instance = $this;
    }
  
}
