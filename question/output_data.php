<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <table border="1">
            <tr><th>"お名前"</th><th>"Email"</th><th>"血液型"</th></tr>
        
        <?php
                $file = fopen("data/data.csv","r");
                while(!feof($file)){
                    $array = fgetcsv($file);
                    echo("<tr><th>".$array[0]."</th><th>".$array[1]."</th><th>".$array[2]."</th></tr><br>");
                }
        ?>

        </table>
    </body>
</html>