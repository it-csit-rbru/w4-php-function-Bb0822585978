<?php
$url_array=array(
    array("http://stu2.rbru.ac.th/~s6015261004","Chaichana Kongin"),
    array("http://stu2.rbru.ac.th/~s6015261018","Kim"),
    array("http://stu2.rbru.ac.th/~s6015261019","Ning"),
    array("http://stu2.rbru.ac.th/~s6015261022","Benz")
);
function create_link ($u,$t){
    return "<a href=\"$u\">$t</a>";
}
function create_table($t){
    echo '<table border="2">';
    for($i=0;$i<sizeof($t);$i++){
        echo '<tr>';
        for($j=0;$j<sizeof($t[$i]);$j++){
            echo '<td>'.$t[$i][$j].'</td>';
        }
        echo'</td>';
    }
    echo'</table>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $url ="http://stu2.rbru.ac.th/~s6015261004";
        $txt ="Click Here";
        echo '<a href="'.$url.'">'.$txt.'</a>';
        echo "<a href=\"$url\">$txt</a>";
    ?>
    <a href="<?php echo $url; ?>"><?php echo $txt;?></a>
    <?php
    echo create_link($url,$txt);
    echo $url_array[3][0]." ".$url_array[3][1];
    ?>
    <ol>
    <?php
        for($i=0;$i<sizeof($url_array);$i++){
    ?>
        <li><?php echo create_link($url_array[$i][0],$url_array[$i][1]); ?></li>
    <?php
        }
        create_table($url_array);
    ?>
    </ol>
</body>
</html>