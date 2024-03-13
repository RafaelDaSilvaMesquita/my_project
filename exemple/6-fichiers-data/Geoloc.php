<?php
// Get a Visitor Location Details using IP Address PHP Function
function getLocationByIp(){  
    $client_ip  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward_ip = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote_ip  = @$_SERVER['REMOTE_ADDR'];
    $result  = array('countryCode'=>'', 'countryName'=>'', 'region'=>'', 'city'=>'');
    if(filter_var($client_ip, FILTER_VALIDATE_IP)){
        $ip_address = $client_ip;
    }elseif(filter_var($forward_ip, FILTER_VALIDATE_IP)){
        $ip_address = $forward_ip;
    }else{
        $ip_address = $remote_ip;
    }
    // pour le test
    $ip_address='41.87.139.102';

    $loc_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip_address));    
    if($loc_data && $loc_data->geoplugin_countryName != null){
        $result['countryCode'] = $loc_data->geoplugin_countryCode;
        $result['countryName'] = $loc_data->geoplugin_countryName;
        $result['region'] = $loc_data->geoplugin_region;
        $result['city'] = $loc_data->geoplugin_city;
    }else{
        $result['countryCode'] = 'US';
    }
    return $result;
}

$loc = getLocationByIp();
echo $countryCode = $loc['countryCode'].'<br />';
echo $countryname = $loc['countryName'].'<br />';
echo $cityname = $loc['city'];
?>