<?php

// echo htmlspecialchars("hi!" . $_GET['name'], ENT_QUOTES, "utf-8");

//配列の作成
$rs = array(
    "message" => htmlspecialchars("hi!" . $_GET['name'], ENT_QUOTES, "utf-8"),
    "length" => strlen($_GET['name'])
);

header('Content-Type: application/json; charset=utf-8');

//配列をjson形式で渡す
echo json_encode($rs);