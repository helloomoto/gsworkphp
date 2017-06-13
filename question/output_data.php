<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
echo '<table border="1">\n';
echo "<tr><th>name</th><th>email</th><th>b_type</th></tr>\n";
$filename = "data/data.csv";
$lines = file($filename);
foreach($lines as $key => $line){
    explode(",",$line);
    echo "<tr><td>{$line[0]}</td><td>{$line[1]}</td><td>{$line[2]}</td><tr>\n";
}
?>
<table border="1">
    <tr>
        <th>name</th>
        <th>email</th>
        <th>b_type</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
</body>
</html>