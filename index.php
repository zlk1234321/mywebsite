<?php
// index.php
// A网实际地址
$url = 'http://www.wap.cnyiot.com/(S(1anop2yy2zciw1zp5mgp1evq))/nat/pay.aspx?mid=19102341435';

$html = file_get_contents($url);

$pattern = '/<label.*?>(\d+\.\d+)<\/label>/is';

if(preg_match($pattern, $html, $matches)){

  $power = $matches[1];

  echo "您的剩余电量是: $power kWh";

} else {

  echo "正则匹配失败"; 
}






