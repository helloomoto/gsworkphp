<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>jog</title>
        <script src="js/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="css/sample.css">
        <link rel="stylesheet" href="css/reset.css">
    </head>
    <body>
        <div>リロードで位置を取得</div>

    </body>
    <script>
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(
                function(pos){
                    var lat  = pos.coords.latitude;
                    var lng  = pos.coords.longitude;
                    console.log(lat);
                    $.getJSON(
                        "jog_insert.php",
                        {lat:lat,lng:lng}

                        }
                    );
                },
                function(pos){
                    window.alert("位置情報が取得できなかったため、おおよその距離で表示します ");
                }
            );
        }else{
            window.alert("本ブラウザーではGeolocationが使えません");
        }
    </script>

</html>
