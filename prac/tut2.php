<?php
	
	$handle = fopen ("file1.txt","r");
    fscanf($handle,"%d",$n);  // get first line 6
    $arr_temp = fgets($handle); // gets second line? 
    $arr = explode(" ",$arr_temp);

    print_r($arr);


?>