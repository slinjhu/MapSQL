<?php
$lookup = $_REQUEST["lookup"];
$cmd = "SELECT fips, $lookup AS value FROM measure";

$db = new SQLite3('copewell.db');
if($rslt = $db->query($cmd)){
    echo "fips,value\n";
    while($row = $rslt->fetchArray()){
        $fips = $row['fips'];
        $value = $row['value'];
        if(is_numeric($value)){
            echo "$fips,$value\n";
        }
    }
}else{
    echo "Error in executing: $cmd";
}
$db->close();
?>