<?php
	$uts = $_REQUEST['uts'];
	$uas = $_REQUEST['uas'];
	$nilai = ($uts + $uas)/2;
    echo "Nilai anda adalah $nilai , nilai huruf anda adalah ";
	if($nilai>60){
		$nilaihuruf = "A";
	}
	elseif($nilai>50){
		$nilaihuruf = "C-";
	}
	elseif($nilai>40){
		$nilaihuruf = "D";
	}
	else{
		$nilaihuruf = "E";
	}
	echo $nilaihuruf;
?>
<br>
<a href="nilai.htm">Klik disini untuk input nilai lagi</a>