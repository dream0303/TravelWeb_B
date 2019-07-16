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
        foreach ($json["result"]["records"] as $rec) {
        ?>


    <tr>
         <td data-th="名稱"><?=$rec["Name"]?></td>
         <td data-th="地址"><?=$rec["Add"]?></td>
         <td data-th="開放時間"><?=$rec["Opentime"]?></td>

         <td style="display:none"><?=$rec["Toldescribe"]?></td>
         <td style="display:none"><?=$rec["Tel"]?></td>
         <td data-th="詳細介紹" class="text-right">
            <a href="#" class="btn btn-link btn-warning btn-just-icon edit btn-more"><i class="material-icons">dvr</i></a>
         </td>
         <!-- <td data-th="介紹"><button type="button" class="btn btn-link btn-more"><i class="fas fa-eye">詳細資料</i></button></td> -->
    </tr>

    <?php
        }
        
    ?>