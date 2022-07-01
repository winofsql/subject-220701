<?php
header( "Content-Type: application/json; charset=utf-8" );

// 文字列を挿入する先の画像
$file = "blue.png";

// コピー先画像作成
$image = imagecreatefrompng($file);

// 挿入する文字列
$text = $_POST["param_01"];
$text_color = $_POST["param_02"];
$tc1 = substr($text_color,1,2);
$tc2 = substr($text_color,3,2);
$tc3 = substr($text_color,5,2);

// 挿入する文字列のフォント(今回はWindowsに入ってたメイリオを使う)
$fontfile = "C:\Windows\Fonts\HGRPP1.TTC";

// 挿入する文字列の色(白)
$color = imagecolorallocate($image, hexdec($tc1), hexdec($tc2), hexdec($tc3));

// 挿入する文字列のサイズ(ピクセル)
$size = $_POST["param_05"];

// 挿入する文字列の角度
$angle = 0;

// 挿入位置
$x = $_POST["param_03"] + 0;     // 左からの座標(ピクセル)
$y = $_POST["param_04"] + $size; // 上からの座標(ピクセル)

// 文字列挿入
imagettftext(
    $image,     // 挿入先の画像
    $size,      // フォントサイズ
    $angle,     // 文字の角度
    $x,         // 挿入位置 x 座標
    $y,         // 挿入位置 y 座標
    $color,     // 文字の色
    $fontfile,  // フォントファイル
    $text);     // 挿入文字列

// ファイル名を指定して画像出力
imagepng($image,"gd-image.png");


$json = new stdClass;
$json->param1 = "OK";

print json_encode( $json );
?>