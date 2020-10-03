<?php
$time=strtotime("March,1970");
$year=idate("Y",$time);
$mount=idate("m",$time);
workDay($year,$mount);
function workDay($year,$mount){
    
    switch($mount){
        case ($mount=1||3||5||7||8||10||12):
            $workDay=31-7*2;
        break;
        case $mount=2:
            if($year%4==0&&$year%100!=0||$year%400==0){
                $workDay=29-7*2;
            }
            else{
                $workDay=28-7*2;
            }
        break;
        case ($mount=4||6||9||11):
            $workDay=30-7*2;
        break;    
    }
    echo $workDay;
}
?>