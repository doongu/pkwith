<?php
# type 2ss
$main_key = ["창업지원단 공지사항", "pkwith로 연결", "개발진 소개"];
$message = array(
   'type' => 'buttons',
   'buttons' => $main_key
); //$message = array 부터 $main_key 까지가 버튼으로된 대답을 불러오는 과정

echo json_encode( $message, JSON_UNESCAPED_UNICODE );

# type 1
// echo <<< EOT
// {
// "type" : "buttons",
// "buttons" : ["버튼1", "버튼2", "버튼3"]
// }
// EOT;
?>