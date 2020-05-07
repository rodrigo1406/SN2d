<?php
if (isset($_GET['txt'])) {
	$txt = $_GET['txt'];
	$csv = file('p.csv');
	echo "<select id='selPaises' name='p' size='12' onkeydown='selPaisesKeyDown(event)' onclick='selPaisesClick()'>\n";
	$i = 0;
	setlocale(LC_ALL,'en_US.utf8');
	foreach ($csv as $l) {
		if ($i == 0) {
			$i++;
		} else {
			$c = explode("\t",$l);
			// $txt == '' -> deve listar todos os países

			// $c[8] != '' -> não é uma das denominações sem shapefile (com shapefile só para as partes, como Palestina -> Cisjordânia + Gaza:
			// WEB	Cisjordânia	West Bank	約旦河西岸地區	2747943	2017	21220	2014	PSE
			// GAZ	Faixa de Gaza	Gaza Strip	加沙地带	1795183	2017	0.77	2016	PSE
			// PSE	Palestina	Palestine	巴勒斯坦					

			//$txt <- 'pal'
			if (($c[8] != '') && ($txt == '' || stripos(iconv('UTF-8','ASCII//TRANSLIT',$c[1]),iconv('UTF-8','ASCII//TRANSLIT',$txt)) !== false)) {
				// não entra em WEB, GAZ nem PSE
				if ($c[8] == $c[0]) {
					echo "	<option value='$c[0]'>$c[1]</option>\n";
				} else {
					foreach($csv as $l1) {
						$c1 = explode("\t",$l1);
						if ($c1[0] == $c[8]) {
							echo "	<option value='$c[0]'>$c[1] ($c1[1])</option>\n";
							break;
						}
					}
				}
			} else
			if ($c[8] != '') { // entra em WEB e GAZ, não em PSE
				if ($c[8] != $c[0]) {
					foreach($csv as $l1) {
						$c1 = explode("\t",$l1);
						// $c1[0] <- PSE, $c[8] <- GAZ
						if ($c1[0] == $c[8] && stripos(iconv('UTF-8','ASCII//TRANSLIT',$c1[1]),iconv('UTF-8','ASCII//TRANSLIT',$txt)) !== false) {
							echo "	<option value='$c[0]'>$c[1] ($c1[1])</option>\n";
							break;
						}
					}
				}
			}
		}
	}
	echo "</select>\n";
}
