<?php



?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <title>GD画像処理</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$( function(){

    $("#btn").on("click", function(){
        var formData = new FormData();
        
        formData.append("param_01", $("#text").val() );
        formData.append("param_02", $("#color").val() );
        formData.append("param_03", $("#posx").val() );
        formData.append("param_04", $("#posy").val() );
        formData.append("param_05", $("#size").val() );

        $.ajax({
            url: "./gd-01.php",
            type: "POST",
            data: formData,
            processData: false,  // jQuery がデータを処理しないよう指定
            contentType: false   // jQuery が contentType を設定しないよう指定
        })
        .done(function( data, textStatus ){
            console.log( "status:" + textStatus );
            console.log( "data:" + JSON.stringify(data, null, "    ") );
        
            var utime = (new Date()).getTime();

            $("#img").prop("src","gd-image.png?_=" + utime );
        
        })
        .fail(function(jqXHR, textStatus, errorThrown ){
            console.log( "status:" + textStatus );
            console.log( "errorThrown:" + errorThrown );
        })
        .always(function() {
        
        })
        ;
    });

});
</script>
</head>
<body>
<div id="gd">
    <h3 class="alert alert-primary">
        GD画像処理
    </h3>
    <div id="content" class="m-4">
        <div>
            <textarea name="text" id="text" style="width:400px;height:100px;">こんにちは</textarea>
        </div>
        <div>
            <input type="button" id="btn" value="実行" class="btn btn-primary">

            <input type="color" id="color" class="ms-4">

            <input type="number" id="posx" value="10" style="width:60px;">
            <input type="number" id="posy" value="10" style="width:60px;">

            <input type="range" id="size" value="40" min="12" max="100" -style="width:60px;">
        </div>
        <div class="mt-4">
            <img id="img" src="gd-image.png">
        </div>
    </div>
</div>
</body>
</html>