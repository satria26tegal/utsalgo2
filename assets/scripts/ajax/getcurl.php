<?php
$curl = curl_init();
curl_setopt_array($curl,array(
  CURLOPT_URL => 'https://harber.mimoapps.xyz/api/getaccess.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING =>'',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET'
));

$response = curl_exec($curl);

curl_close($curl);
$response_array = json_decode($response, true);
$onscreen = '<table class= "table" width= "100%">
                <thead>
                  <th>Kode Barang</th>
                  <th>Nama Barang/th>
                  <th>Harga Jual</th>
                  <th>Quantity</th>
                  <th>Total Asset</th>
                </thead>
              ';
foreach ($response_array as $resp) {
  $onscreen.='<tr>
                <td>'.$resp['Kode Barang'].'</td>
                <td>'.$resp['Nama Barang'].'</td>
                <td>'.$resp['Harga Jual'].'</td>
                <td>'.$resp['Quantity'].'</td>
                <td>'.$resp['Total Asset'].'</td>
              </tr>';
}
$onscreen = '</table>';
echo $onscreen;
