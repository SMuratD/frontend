<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<table border="1">';
    $i=1;
    while ($i<=5){
        echo "<tr>";
        $j=1;
        while ($j<=3){
            echo "<td> row-$i col-$j </td>";
            $j++;
        }
        echo "</tr>";
        $i++;
    }
    echo "</table>";
    ?>    
</body>
</html>