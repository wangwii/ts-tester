<?php
require_once __DIR__ . '/vendor/autoload.php';

use Aliyun\OTS\OTSClient as OTSClient;

$otsClient = new OTSClient(array(
  'EndPoint' => "http://<Your endpoint>",
  'AccessKeyID' => "Your Access Key ID",
  'AccessKeySecret' => "Your Access Key Secret",
  'InstanceName' => "Your instance name",
));

echo $otsClient;
