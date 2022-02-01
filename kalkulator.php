<?php
$ubiNum = 6942099721371337;
$client = new SoapClient('https://www.dataaccess.com/webservicesserver/NumberConversion.wso?WSDL');
$strung = $client->__soapCall('NumberToWords',[['ubiNum'=>$ubiNum]]);
echo '<b>cyfra: </b>' . $ubiNum . ' :D<br><br>';
echo '<b>string: </b>' . $strung->NumberToWordsResult . '!<br><br><br>' ;
// var_dump($strung->NumberToWordsResult);


$dNum = 88921;
$dollars = $client->__soapCall('NumberToDollars',[['dNum'=>$dNum]]);
echo '<b>hajs: </b>' . $dNum . ' :D<br><br>';
echo '<b>string: </b>' . $dollars->NumberToDollarsResult . '!' ;
?>