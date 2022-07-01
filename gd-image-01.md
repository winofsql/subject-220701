### HTML スニペット
```html
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <title>タイトル</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$( function(){

    $("#btn").on("click", function(){
        alert("OK");
    });

});
</script>
</head>
<body>
<div id="gd">
    <h3 class="alert alert-primary">
        タイトル
    </h3>
    <div id="content"
        >
        <div>
            <textarea name="text" id="text"></textarea>
        </div>
        <div>
            <input type="button" id="btn" value="ボタン>
        </div>
    </div>
</div>
</body>
</html>
```
