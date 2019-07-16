<?php
$curl = curl_init();
curl_setopt($curl,CURLOPT_USERAGENT,"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36");
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
curl_setopt($curl,CURLOPT_URL,"http://data.ntpc.gov.tw/api/v1/rest/datastore/382000000A-002489-001");
$result = curl_exec($curl);
curl_close($curl);

$json = json_decode($result,true);
?>




    <?php
        $zc = array();
        $chTxt = "";
        $chVar = "";
        $chPieCount = null;
        $chPie = null;
        foreach ($json["result"]["records"] as $rec) {
            
            $zc[] .= substr(str_replace(' ','',$rec["Add"]),9,9);
            // $zc[] += $rec["Zipcode"];
        }
        $zc = array_count_values($zc);
        foreach ($zc as $key => $value) {
            if($value>=5){
                $chTxt .= "'".$key."'".',';
                $chVar .= $value.',';
                $chPieCount += $value;
            }
        }
        foreach ($zc as $value) {
            if($value>=5){

            $chPie .= round(($value / $chPieCount) * 100).',';
            }
        }


        // echo rtrim($chVar,",").'<br>';
        // array_count_values($zc);
        // print_r($zc);
        
    ?>