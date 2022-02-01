<?php
$iso = 'PL';
$client = new SoapClient('http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL');
$strung = $client->__soapCall('CountryFlag',[['sCountryISOCode'=>$iso]]);
echo '<b>iso: </b>' . $iso . ' :D<br><br>';
echo '<img src="' . $strung->CountryFlagResult . '">';
// $strung->CountryFlagResult
?>