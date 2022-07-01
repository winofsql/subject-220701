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
    <div id="content" class="m-4">
        <div>
            <textarea name="text" id="text" style="width:400px;height:100px;"></textarea>
        </div>
        <div>
            <input type="button" id="btn" value="ボタン" class="btn btn-primary">
        </div>
    </div>
</div>
</body>
</html>
```

### スニペット化
```json
    "HTML-01": {
        "prefix": "HTML-01",
        "body": [
            "<!DOCTYPE html>",
            "<html lang=\"ja\">",
            "<head>",
            "    <meta content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\" name=\"viewport\">",
            "    <meta charset=\"utf-8\">",
            "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css\">",
            "    <title>$1</title>",
            "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>",
            "<script>",
            "\\$( function(){",
            "",
            "    \\$(\"#btn\").on(\"click\", function(){",
            "        alert(\"OK\");",
            "    });",
            "",
            "});",
            "</script>",
            "</head>",
            "<body>",
            "<div id=\"gd\">",
            "    <h3 class=\"alert alert-primary\">",
            "        $1",
            "    </h3>",
            "    <div id=\"content\" class=\"m-4\">",
            "        <div>",
            "            <textarea name=\"text\" id=\"text\" style=\"width:400px;height:100px;\"></textarea>",
            "        </div>",
            "        <div>",
            "            <input type=\"button\" id=\"btn\" value=\"$2\" class=\"btn btn-primary\">",
            "        </div>",
            "    </div>",
            "</div>",
            "</body>",
            "</html>",
        ],
        "description": ""
    },
```

