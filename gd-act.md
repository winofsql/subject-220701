### テキストとテキスト色
```php
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
```
