<?php
// 입력된 이름의 첫 글자에 따라 힌트를 생성하는 함수
function getHint($name) {
  $hints = array();

  // 이름과 관련된 힌트 생성 로직을 구현
  if ($name === 'A') {
    $hints[] = 'Apple';
    $hints[] = 'Avocado';
  } elseif ($name === 'B') {
    $hints[] = 'Banana';
    $hints[] = 'Blueberry';
  } elseif ($name === 'C') {
    $hints[] = 'Cherry';
    $hints[] = 'Coconut';
  }

  return $hints;
}

// GET 요청으로 전달된 입력 값 (q) 확인
if (isset($_GET['q'])) {
  $name = $_GET['q'];

  // 힌트 생성 함수 호출
  $hintList = getHint($name);

  // 생성된 힌트를 쉼표로 구분하여 문자열로 조합
  $hintString = implode(', ', $hintList);

  // 힌트 문자열 반환
  echo $hintString;
}
?>
