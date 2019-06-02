<?php
    
header("Content-Type: application/json; charset=utf-8");
$raw_post_data = file_get_contents( "php://input" );
// $data = json_decode( $raw_post_data, true ); // array
$data = json_decode( $raw_post_data ); // stdClass Object
$user_key = $data->user_key;
$text = $data->content;
//얘내는 위쪽에 몰아둬야함



$main_key = ["기초교양교육원 공지사항","창업지원단 공지사항", "pkwith로 연결", "개발진 소개"];



if ( $text == "기초교양교육원 공지사항" ) { //창업지원단 공지사항 응답
  $message = array(
    'message' => array('text' => "기초교양교육원 공지사항 입니다\n\n1. 2018학년도 명강의 에세이 공모전 실시 안내\n2.2018학년도 줄탁동시 [교수-학생 세미나] 실시\n3.2017학년도 명강의 에세이 공모전 실시 안내\n4.2017-2학기 교수법 연구모임 운영 안내 -융합 교양 교과목 연구 및 개발 모임 지원-\n\n",
      'message_button' =>array(
      "label" => "공지사항 홈페이지",
      "url" => "http://ctl.pknu.ac.kr/ctl/ur/event_info_form.acl") 
    ),

      //$notice, 이미지 주소 직접넣는거는 안뜸 .
 
    'keyboard' => array(
      'type' => 'buttons',
      'buttons' => $main_key
    )
  );
}


else if ( $text == "창업지원단 공지사항" ) {
  $message = array(
    'message' => array('text' => "부경대학교 창업지원단 공지사항\n\n1.♡♥2018년 크라우드펀딩 창업캠프 참가자 모집♥♡\n2.도전! Start-Up IR! 참가자 모집\n3.2018년 창업동아리 중간보고서 제출\n4.2018 수산창업 씨앗심기 지원사업(2차)\n5.2018 수산창업 씨앗심기 지원사업\n6.장보고클럽(창업서포터즈) 모집\n7.창업동아리실 사용 신청서 제출\n8.2018 초기창업 글로벌 인재육성 지원사업 참가자 모집\n9.2018년 창업동아리 지원금 사용계획서 제출\n10.2018 창업 플리마켓 서포터즈 모집\n11.창업동아리 발표심사 PPT 제출\n12.2018년 창업동아리 지원금 지원 신청서 제출\n\n",
      'message_button' => array(
        "label"=> "홈페이지 연결",
        "url" => "http://startup.pknu.ac.kr/html2015/02apply/01.do")),
     //$notice, 이미지 주소 직접넣는거는 안뜸 .
 
    'keyboard' => array(
      'type' => 'buttons',
      'buttons' => $main_key
    )
  );
}

else if ( $text == "pkwith로 연결" ) {
  $message = array(
    'message' => array('text' => "😁pkwith로 연결하여 여러분들의 전공을 공유하고 함께 공모전에 참가해 보세요 !!",
      'message_button' => array(
        "label"=> "홈페이지 연결",
        "url" => "http://52.14.18.3")),
     //$notice, 이미지 주소 직접넣는거는 안뜸 .
 
    'keyboard' => array(
      'type' => 'buttons',
      'buttons' => $main_key
    )
  );
}


else if ( $text == "개발진 소개" ) {
  $message = array(
    'message' => array('text' => "컴퓨터 공학과😀\n'14정인호'\n'14배재현'\n'14길도연'\n'14박 진'\n'15권재헌'\n'17한준규'\n문의 : (kakaotalk : must1080)"
    ),
    'keyboard' => array(
      'type' => 'buttons',
      'buttons' => $main_key
    )
  );
}


else if ( !isset($message) ) { //주관식으로 질문이 들어왔을때 하는 대답 인듯.
   $message = array(
      'message' => array('text' => "오류입니다." ),
      'keyboard' => array(
         'type' => 'buttons',
         'buttons' => $main_key //다시 버튼으로 하는 대답으로 돌아감.
      )
   );
}



echo json_encode( $message );
// echo json_encode( $message, JSON_UNESCAPED_UNICODE );
// print_r($message);

?>
