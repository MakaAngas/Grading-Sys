<?php
	$q = $_POST['quiz'];
	$a = $_POST['activity'];
	$e = $_POST['exam'];
	$ig = $q+$a+$e;

	if ($q>=21 && $q<0) {
		echo "input 0-20 only";
	}
	else {
		
		if ($ig==100) {
			echo "pass";
		}
		else if ($ig>=98.40 && $ig<=99.99) {
			echo "pass";
		}
		else if ($ig>=96.80 && $ig<=98.39) {
			echo "pass";
		}
		else if ($ig>=95.21 && $ig<=96.79) {
			echo "pass";
		}
		else if ($ig>=93.60 && $ig<=95.19) {
			echo "pass";
		}
		else if ($ig>=90.40 && $ig<=91.99) {
			echo "pass";
		}
		else if ($ig>=88.80 && $ig<=90.39) {
			echo "pass";
		}
		else if ($ig>=87.20 && $ig<=88.79) {
			echo "pass";
		}
		else if ($ig>=85.60 && $ig<=87.19) {
			echo "pass";
		}
		else if ($ig>=84.00 && $ig<=85.59) {
			echo "pass";
		}
		else if ($ig>=82.40 && $ig<=83.99) {
			echo "pass";
		}
		else if ($ig>=80.80 && $ig<=82.39) {
			echo "pass";
		}
		else if ($ig>=78.20 && $ig<=80.79) {
			echo "pass";
		}
		else if ($ig>=77.60 && $ig<=79.19) {
			echo "pass";
		}
		else if ($ig>=76.00 && $ig<=77.59) {
			echo "pass";
		}
		else if ($ig>=74.40 && $ig<=75.99) {
			echo "pass";
		}
		else if ($ig>=72.80 && $ig<=74.38) {
			echo "pass";
		}
		else if ($ig>=71.20 && $ig<=72.79) {
			echo "pass";
		}
		else if ($ig>=69.61 && $ig<=71.19) {
			echo "pass";
		}
		else if ($ig>=68.00 && $ig<=69.59) {
			echo "pass";
		}
		else if ($ig>=66.40 && $ig<=67.98) {
			echo "fail";
		}
		else if ($ig>=64.81 && $ig<=66.39) {
			echo "fail";
		}
		else if ($ig>=63.21 && $ig<=64.79) {
			echo "fail";
		}
		else if ($ig>=61.60 && $ig<=63.19) {
			echo "fail";
		}
		else if ($ig>=60.01 && $ig<=61.59) {
			echo "fail";
		}
		else if ($ig>=56.00 && $ig<=59.99) {
			echo "fail";
		}
		else if ($ig>=52.01 && $ig<=55.99) {
			echo "fail";
		}
		else if ($ig>=48.00 && $ig<=63.19) {
			echo "fail";
		}
		else if ($ig>=44.00 && $ig<=47.99) {
			echo "fail";
		}
		else if ($ig>=40.01 && $ig<=43.99) {
			echo "fail";
		}
		else if ($ig>=36.00 && $ig<=39.99) {
			echo "fail";
		}
		else if ($ig>=32.00 && $ig<=35.99) {
			echo "fail";
		}
		else if ($ig>=28.00 && $ig<=31.99) {
			echo "fail";
		}
		else if ($ig>=24.00 && $ig<=27.99) {
			echo "fail";
		}
		else if ($ig>=20.00 && $ig<=23.99) {
			echo "fail";
		}
		else if ($ig>=16.00 && $ig<=19.99) {
			echo "fail";
		}
		else if ($ig>=12.00 && $ig<=15.99) {
			echo "fail";
		}
		else if ($ig>=8.00 && $ig<=11.99) {
			echo "fail";
		}
		else if ($ig>=4.00 && $ig<=7.99) {
			echo "fail";
		}
		else if ($ig>=0 && $ig<=3.99) {
			echo "fail";
		}
		else {
			echo "Limit Reach";
		}
	}
?>