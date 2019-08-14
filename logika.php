
<?php
/*cetak gol
 total cetak gol >= 10 'mendali emas' & = 20 "mendapatkan bonus 100jt"
 total cetak gol <= 8 'mendali perak' & = 9 "mendapatkan bonus 80jt"
 total cetak gol >= 4 'mendali perunggu' & = 5 "menpatkan bonus 50jt"
 total cetak gol < 4 'mendali emas ngambang' & "tidak mendapatkan bonus"
*/ 

 //if
$gol = 20;

if ($gol >= 10) {
	echo "mendali emas , dengan total cetak gol : " .$gol;
}elseif ($gol >= 8) {
	echo "mendali perak , dengan total cetak gol : " .$gol;
}elseif ($gol >= 4) {
	echo "mendali perunggu , dengan total cetak gol : " .$gol;
}else{
     echo "mendali emas ngambang , dengan total cetak gol : " .$gol;	
}

switch ($gol) {
	case '20':
		echo "menpatkan bonus 100 jt";
		break;
	case '9':
		echo "mendapatkan bonus 80 jt";
		break;
	case '5':
		echo "mendapatkan bonus 50 jt";
			break;	
	default:
		echo "tidak mendapatkan apa apa";
		break;
}


?>