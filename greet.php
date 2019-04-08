<?php
//htmlspecialchars : > や "" など、特殊な意味を持つ特殊文字を単なる文字列に変換
//ENT_QUOTES: シングルクオートとダブルクオートを共に変換する。
// echo htmlspecialchars("hi!" . $_GET['name'], ENT_QUOTES, "utf-8");

//配列の作成
$rs = array(
    "message" => htmlspecialchars("hi!" . $_GET['name'], ENT_QUOTES, "utf-8"),
    "length" => strlen($_GET['name'])
);

header('Content-Type: application/json; charset=utf-8');

//配列をjson形式で渡す
echo json_encode($rs);