<?php
$name = $_POST["name"]; //nameを受け取る
$birthPlace = $_POST["birthPlace"]; //nameを受け取る
$time = date("Y/m/d H:i:s");
$data = $time . "/" . $name . "/" . $birthPlace ."\n";  
file_put_contents("data/data.txt",$data,FILE_APPEND);
// ファイルに書き込み

//意味　→　条件式 ? 真の場合の値 : 偽の場合の値;
// $message = $result !== false ? "ファイルを書き込みました。" : "ファイルの書き込みに失敗しました。";

if ($result !== false) { // ファイルの書き込みが成功した場合
    $message = "ファイルを書き込みました。";
} else { // ファイルの書き込みが失敗した場合
    $message = "ファイルの書き込みに失敗しました。";
}

header("Location: 01_input.php?message=" . urlencode($message));
exit();

?>