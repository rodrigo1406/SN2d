<!DOCTYPE html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html;charset=utf-8'>
<meta name='viewport' content='width=device-width,initial-scale=1'>
<meta property='og:title' content='SimNation'>
<meta property='og:description' content='Base de Dados Nacionais'>
<meta property='og:image' content='http://biodiversus.com.br/sn/SN.png'>
<meta property='og:url' content='http://biodiversus.com.br/sn/'>
<link rel=icon href='SN.png' type='image/png'>
<title>SimNation</title>
<style>
html,body {
	width:100%;
	height:100%;
	margin:0;
}
body {
	display:flex;
	overflow:hidden;
}
#bgCfg {
	background-color:#00000080;
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	justify-content:center;
	align-items:center;
	display:none;
}
#divCfg {
	box-sizing:border-box;
	background-color:#ffffff;
	width:90vmin;
	max-height:90vmin;
	border:3px solid red;
	padding:1em;
	display:flex;
	align-items:center;
	justify-content:space-between;
	flex-direction:column;
}
#divCfg h2,#divCfg div {
	margin:1em;
}
.divRng {
	display:flex;
	align-items:center;
}
.labRng {
	margin-right:1em;
}
#divCfg button {
	min-width:15vmin;
}
#divHint {
	position:absolute;
	cursor:default;
	text-align:right;
}
#dumHint {
	position:absolute;
	visibility:hidden;
}
#nav1 {
	background-color:#696969;
	/*width:25%;
	height:100%;*/
	flex:0 0 auto;
}
#spnPais {
	font-size:8px;
}
#txtPais {
	box-sizing:border-box;
	width:100%;
}
#divPaises {
	position:absolute;
	width:25vw;
}
#selPaises {
	width:100%;
}
#selPais {
	width:100%;
}
#selVar {
	width:100%;
}
#nav2 {
	background-color:#ffa500;
	flex:0 1 auto;
	display:flex;
	justify-content:flex-start;
	align-items:center;
}
#divBtnVeg {
	display:flex;
	align-items:center;
}
#divBtnGraf {
	display:flex;
	align-items:center;
}
.grp0,.grp1,.grp2 {					/* botões */
	outline:none;
}
.unpressed {
	border-top:solid lightgray;
	border-left:solid lightgray;
	border-bottom:solid darkgray;
	border-right:solid darkgray;
	border-width:1.5px;
}
.pressed {
	background-color:#80808040;
	border-top:solid darkgray;
	border-left:solid darkgray;
	border-bottom:solid lightgray;
	border-right:solid lightgray;
	border-width:1.5px;
}
.pressed img {
	padding-left:1px;
	padding-top:1px;
}
#divRaster {
	display:flex;
	margin:0;
}
#btnRaster {
	display:flex;
}
#aRaster {
	display:none;
}
#cnvVeg0 {
	display:none;
}
#pZoom {
	font-family:monospace;
	background-color:#F08000;
	text-align:center;
	max-width:50px;
	cursor:default;
}
main {
	flex:1 1 auto;
	overflow:hidden;
	background-color:gray;
}
h1 {
	margin:0;
	text-align:center;
}
#cnvMundo {
	order:1;
}
#imgMundo {
	display:none;
}
.oculto {
	display:none;
}
#divTabInfo {
	overflow-y:auto;
	width:100%;
	background-color:#ffffe0;
}
#spnTabInfo {
	display:block;
	box-sizing:border-box;
	/*word-break:break-all;*/
	font-family:monospace;
	padding:0.5em;
	width:100%;
}
#divMap {
	display:flex;
	flex-direction:column;
}
#divTxt {
	display:flex;
	flex-direction:column;
}
#divSelGraf {
	order:10;
	flex-direction:column;
}
/*#spnCoords {
	order:2;
}
#spnVeg {
	order:3;
}*/
#imgAlt,#imgTemp,#imgChuv,#imgDens {
	display:none;
}
/*### Cel ###*/
@media screen and (max-width: 599px) {
	body {
		flex-direction:column;
	}
	#nav1 {
		width:100%;
		/*height:25%;*/
		overflow:hidden;
	}
	#divMap {
		flex-direction:row;
	}
	#nav2 {
		width:100%;
		flex-direction:row;
	}
	.grp0,.grp1,.grp2 {					/* botões */
		width:20px;
		height:20px;
		margin:2px;
		padding:2px;
	}
	.grp0 img,.grp1 img,.grp2 img {
		width:20px;
		height:20px;
	}
	#divBtnVeg {
		flex-direction:row;
		height:100%;
	}
	#divBtnGraf {
		flex-direction:row;
		height:100%;
	}
	hr {
		height:80%;
		margin:0.25em;
	}
	#divRaster {
		flex-direction:column;
	}
	#btnRaster {
		flex-direction:row;
	}
	#pZoom {
		font-size:8px;
	}
	main {
		width:100%;
	}
	#cnvPais {
		order:2;
	}
	#spnPais {
		order:1;
	}
}
/*### PC ###*/
@media screen and (min-width: 600px) {
	body {
		flex-direction:row;
	}
	#nav1 {
		width:25%;
		height:100%;
		overflow:hidden;
	}
	#divMap {
		flex-direction:column;
	}
	#selVar {
		margin-top:1em;
	}
	#nav2 {
		height:100%;
		flex-direction:column;
	}
	.grp0,.grp1,.grp2 {					/* botões */
		width:32px;
		height:32px;
		margin:4px;
		padding:4px;
	}
	#divBtnVeg {
		flex-direction:column;
		width:100%;
	}
	#divBtnGraf {
		flex-direction:column;
		width:100%;
	}
	hr {
		width:80%;
		margin:0.5em;
	}
	#divRaster {
		flex-direction:row;
	}
	#btnRaster {
		flex-direction:column;
	}
	#pZoom {
		font-size:12px;
	}
	main {
		height:100%;
	}
	#divTxt {
		/*flex:0 1 auto;
		align-items:center;*/
	}
	#cnvPais {
		order:2;
		/*flex:0 1 auto;*/
		align-self:center;
	}
	#spnPais {
		order:1;
	}
}
<?php
$v = '';
if (!empty($_GET['v'])) {
	$v = $_GET['v']; // variável do gráfico
}
if ($v) {
	echo "#divSelGraf {
	display:flex;
}
#divGraf {
	display:block;
}
#cnvPais {
	display:none;
}\n";
} else {
	echo "#divSelGraf {
	display:none;
}
#divGraf {
	display:none;
}
#cnvPais {
	display:block;
}\n";
}
?>
#divGraf {
	background-color:#ffffe0;
}
</style>
<script>
/*
TO-DO
=====
X Zoom slider? (exigiria um limite no zoom)
. Desenhar os estados sobre o mapa
. Corrigir tamanho do gráfico quando redimensiona a janela
. Impedir que SELECT dos países suma pra direita de NAV1
. Escrever nomes das UFs
. Ver o que fazer se algum nome de UF apresentar aspas (')
. Habilitar/Desabilitar linhas e nomes de UFs (separadamente?)
. Atualizar posição do mapa quando redimensiona a janela
. Arrastar mapa no celular
. Permitir navegação pelo teclado (arrastar e dar zoom)
. Opção de começar o eixo Y do gráfico no 0
. Salvar a posição e zoom de cada país no Storage
. <hr> no modo celular deve virar vertical
. Tamanho dos nomes de UFs e espessura das linhas proporcional ao tamanho do país
. Adicionar rasters: relevo, pluviosidade, densidade populacional... como camadas de cinza sobrepostas ao mapa
. Vermelho no mapa, p.ex. Mongólia
. Rasters com transparência controlável
. Linhas das UFs sobre os rasters
. Texto "mangue" não está bom no fundo verde
. Desabilitar botões veg/graf se não tiver um país selecionado
. Mensagem "Carregando...", tanto para o mapa do país (?) quanto para os rasters -> (cursor de 'wait' só para os rasters, para o mapa do país o navegador já indica)
. Parar de mudar tamanho de nav1 conforme conteúdo (para não deixar main tremendo no modo celular)
. Redimensionar a janela no modo Gráfico corretamente
. Separar controles de vegetação e de gráfico, e exibir apenas os necessários a cada momento
. Salvar linhas/nomes de UFs no Storage
. Um botão pra linhas, outro pra nomes das UFs
. spnTabInfo não respeita padding de 1em ?!
. Recortar os países novamente, baseado no SHP ne_10m_admin_0_map_units (mais preciso)
. Atualizar as populações dos países
. Consertar EUA, Rússia e outros que ultrapassam o meridiano 180°
. Botão para exibir cidades
. Rasters ainda visíveis na tela do gráfico
. Inglaterra, Escócia, etc... sem linhas nem nomes de UFs?
. Nova Caledônia UFs não bate com vegetação
. Acrescentar dados de PIB, sovereign, ano de população e PIB
. Corrigir cores quando aumenta o zoom (downsampling - https://stackoverflow.com/questions/57263245/drawimage-keeps-colors-on-upscale-but-not-on-downscale)
. Mostrar nome da vegetação mesmo sobre a linha de UFs e mesmo com rasters ativos
. Clarear um pouco as áreas urbanas
. Clarear as linhas das UFs
. Mostrar a população das cidades
. Números seguirem o locale do computador
. Dar zoom direcionando para o lugar onde foi clicado
. Reduzir ícones no modo celular
. http://localhost/sn/index.php?p=LQI (nome chinês acima do nacional?), http://localhost/sn/index.php?p=MAC
. Apertar M com o mouse sobre o mapa -> abrir nova aba do Google Maps naquela coordenada
/ Continuar movimentos quando mouse/touch sair da área do elemento (mapa ok,mapinha,alphaRaster ok)
/ Digitar nome do país e procurar não só do início do nome (acrescentar também outros nomes, como Palestina - para Faixa de Gaza e Cisjordânia)
* Touch para alphaRaster
* Impedir que texto suma pra baixo da tela em monitores pequenos (ou 150% de zoom)
* Impôr um limite no quanto o mapa pode ser arrastado pra fora da tela
* Opção de escala logarítmica no eixo Y do gráfico?
* Adicionar dados de economia (importações/exportações, consumo/produção de energia, PIB, PIBpc, PIBppp...)
* Exibir apenas gráficos que tenham dados para aquele país
* Tela de preferências {usar ou não a rodinha do mouse; gerar URL da posição/configuração exata; tamanho das fontes; espessura das linhas;
	zoom a partir do qual mostra cidades (global/por país); }
* Régua:
		distância de [lat 0, lon -45] até [lat -20, lon -75]
		Equador = 40075.017km/360° = 111.31949167km/° *30 = 3339.58475 km (GE 3339.59)
		Pólos = 40007.863km/360° = 111.13295278km/° *20 = 2222.659056 km (GE 2212.35)
		Pitágoras = 4011.61 km
		Pitágoras GE = 4005.91 km
		GE diagonal = 3947.78 km
		https://www.movable-type.co.uk/scripts/latlong.html = 3951 km
		https://gps-coordinates.org/distance-between-coordinates.php = 3950.91 km
* Mostrar valor aproximado de altitude (+/- margem de erro), temperatura...
* Converter nomes chineses tradicionais para chinês simplificado
* R mudando cores da vegetação na borda da imagem ao recortar países (p.ex. NE de ALA, transição RUS1/RUS2)
* Cidades da GBR aparecendo (círculos) fora do mapa de vegetação
* Vai pro blob e volta, o nome do país desaparece de txtPais
* UFs da Inglaterra ilegíveis
* Dar zoom também pelo cnvPais
* Nomes de cidades muito pequenos, p.ex. Holanda http://localhost/sn/index.php?p=NLX, Cuba http://localhost/sn/index.php?p=CUB, Guiné Equatorial http://localhost/sn/index.php?p=GNQ
* Rodinha do mouse também dar zoom (sobre o lugar onde o mouse estiver)
*/
var ctxMundo,ctxPais,ctxGraf,ctxVeg,ctxVeg0,mundoW,mundoH,paisW,paisH,l10,paisN,paisC,paisW1,paisH1,lon0,lon1,lat0,lat1,hab=0,haby,area=0,pib=0,piby,pibpc,sov,imgVeg,zoom=1,
	arrastando=false,aproximando=false,vegX1=null,vegY1=null,rectV=null,rectA=null,rect1,lat,lon,x=0,y=0,xC,yC,vegW,vegH,grafW,grafH,coord='',cidade='',modo='0',
	fx,fy,fxG,fyG,UFlinhas,UFnomes,cidNomes,graf0,imgAlt=null,altW,altH,imgTemp=null,tempW,tempH,imgChuv=null,chuvW,chuvH,imgDens=null,densW,densH,ctxARaster,
	aRaster=0.5,antiM,aMovendo=false,rslH,rslW,rslLarg=30,rslComp=200,rslx0,rsly0,rslx1,rsly1,xP0,yP0,xPct,yPct,hint,dumHint;
function drawRectMundo() {
<?php
$p = '';
if (!empty($_GET['p'])) {
	$p = $_GET['p'];
}
$csv = file('p.csv');
$locale = localeconv();
function formata($n,$dec,$thsep='default') {
	if ($thsep == 'default') {
		$thsep = $locale['thousands_sep'];
	}
	return number_format($n,$dec,$locale['decimal_point'],$thsep);
}
foreach ($csv as $l) {
	$c = explode("\t",$l);
	if ($c[0] == $p) {
		echo "	lon0 = $c[10];\n";
		echo "	lon1 = $c[11];\n";
		echo "	lat0 = $c[12];\n";
		echo "	lat1 = ".str_replace("\n",'',$c[13]).";\n";
		echo "	hab = '".formata($c[4],0)."';\n";
		if ($c[5] == '0') {
			echo "	haby = '';\n";
		} else {
			echo "	haby = ' (".formata($c[5],0,'').")';\n";
		}
		if (log10($c[6]) >= 6) {
			echo "	pib = '".formata($c[6]/1000000,2)." trilhões';\n";
		} else
		if (log10($c[6]) >= 3) {
			echo "	pib = '".formata($c[6]/1000,2)." bilhões';\n";
		} else {
			echo "	pib = '".formata($c[6],2)." milhões';\n";
		}
		echo "	piby = '".formata($c[7],0,'')."';\n";
		echo "	pibpc = '".formata(1000000*$c[6]/$c[4],2)."';\n";
		$sov = $c[8];
		echo "	area = '".formata($c[9],1)."';\n";
		echo "	paisN = '$c[1]';\n";
		echo "	paisC = '$p';\n";
		echo "	document.title = '$c[1] | SimNation';\n";
		//echo "	document.title = '$c[1]@SN';\n";
		break;
	}
}
if ($sov != $p) {
	$mostrouSov = false;
	foreach ($csv as $l) {
		$c = explode("\t",$l);
		if ($c[0] == $sov) {
			echo "	sov = '$c[1]';\n";
			$mostrouSov = true;
			break;
		}
	}
	if (!$mostrouSov) {
		echo "	sov = '$sov';\n";
	}
} else {
	echo "	sov = '$sov';\n";
}
?>
	var x0 = mundoW*(lon0+180)/360;
	var x1 = mundoW*(lon1+180)/360;
	var y0 = mundoH * (1-((lat0+60)/150));
	var y1 = mundoH * (1-((lat1+60)/150));
	ctxMundo.fillStyle = '#ff000080';
	var lim = 20;
	if (Math.abs(x1-x0) < lim && y1-y0 < lim) {
		ctxMundo.beginPath();
		ctxMundo.arc((x0+x1)/2,(y0+y1)/2,lim,0,2*Math.PI);
		ctxMundo.fill();
	} else {
		if (x1 > x0) {
			ctxMundo.fillRect(x0,y0,x1-x0,y1-y0);
		} else {
			ctxMundo.fillRect(x0,y0,mundoW-x0,y1-y0);
			ctxMundo.fillRect(0,y0,x1,y1-y0);
		}
	}
}
<?php
if ($p) {
	$cidades = '';
	if (file_exists("cidades/$p.csv")) {
		$cidades = file("cidades/$p.csv");
	} else {
		if (file_exists("cidades/$sov.csv")) {
			$cidades = file("cidades/$sov.csv");
		}
	}
	if ($cidades) {
		$inclui5 = sizeof(explode("\t",$cidades[0])) > 5; // Se tiver o nome da UF...
		unset($cidades[0]);
		echo "var cidades = [";
		$i = 0;
		foreach ($cidades as $l) {
			if ($inclui5) {
				$cidade = explode("\t",$l)[0].'/'.explode("\t",$l)[5]; // ...acrescenta depois do nome da cidade (caso do Brasil)
				$cidade = str_replace("\n",'',$cidade);
			} else {
				$cidade = explode("\t",$l)[0];
			}
			$cidade = str_replace("'","\'",$cidade);
			if ($i < sizeof($cidades)-1) {
				echo "'$cidade',";
			} else {
				echo "'$cidade'];\n";
			}
			$i++;
		}
		echo "var cidlat = [";
		$i = 0;
		foreach ($cidades as $l) {
			$cidade = explode("\t",$l)[1];
			if ($i < sizeof($cidades)-1) {
				echo "$cidade,";
			} else {
				echo "$cidade];\n";
			}
			$i++;
		}
		echo "var cidlon = [";
		$i = 0;
		foreach ($cidades as $l) {
			$cidade = explode("\t",$l)[2];
			if ($i < sizeof($cidades)-1) {
				echo "$cidade,";
			} else {
				echo "$cidade];\n";
			}
			$i++;
		}
		echo "var cidpop = [";
		$i = 0;
		foreach ($cidades as $l) {
			$cidade = explode("\t",$l)[3];
			if ($i < sizeof($cidades)-1) {
				echo "$cidade,";
			} else {
				echo "$cidade];\n";
			}
			$i++;
		}
	}
	// Lê os shapefiles das UFs
	$shp = file_exists("UFs/$p.shp") ? fopen("UFs/$p.shp",'rb') : false;
	$dbf = file_exists("UFs/$p.dbf") ? fopen("UFs/$p.dbf",'rb') : false;
	if ($shp && $dbf) { // abriu os arquivos
		// SHP
		fread($shp,24); // pula o início do cabeçalho
		$shpFileSize = unpack('N',fread($shp,4))[1]*2; // 'N' = big endian 32 bits: 00 04 37 32 = 43732(16) = 276274*2 = 552548
		$shpVersion = unpack('V',fread($shp,4))[1]; // 'V' = little endian 32 bits: e8 03 00 00 = 3e8(16) = 1000
		$shpType = unpack('V',fread($shp,4))[1]; // 05 00 00 00 = 5(16) = 5
		fread($shp,64); // pula o restante do cabeçalho
		/*echo "var shpFSize = $shpFileSize;\n";
		echo "var shpVersion = $shpVersion;\n";
		echo "var shpType = $shpType;\n";*/
		// DBF
		fread($dbf,4); // pula o início do cabeçalho
		$dbfRecNo = unpack('V',fread($dbf,4))[1];
		fread($dbf,2); // pula o início do cabeçalho
		$dbfRecSize = unpack('v',fread($dbf,2))[1]; // 'v' = little endian 16 bits: 00d1 = d1(16) = 209
		/*echo "var dbfRecNo = $dbfRecNo;\n";
		echo "var dbfRecSize = $dbfRecSize;\n";*/
		fread($dbf,17); // pula mais alguns bytes
		$dbfLangID = ord(fread($dbf,1)); // código do idioma
		/*if ($dbfLangID == 0x57) {
			echo "//Idioma: 0x57 (ISO-8859-1)\n";
		} else {
			echo "//Idioma: $dbfLangID;\n";
		}*/
		fread($dbf,2); // pula o restante do cabeçalho
		$dbfRecPos = 0;
		$fieldLen = array();
		$fields = array();
		do {
			$field = rtrim(fread($dbf,11),"\0"); // nome do campo
			$fields[] = $field;
			$fTipo = fread($dbf,1); // tipo do campo (C, D, F, L, M ou N)
			fread($dbf,4); // pula 4 bytes
			$dbfFieldLen = ord(fread($dbf,1));
			$dbfRecPos += $dbfFieldLen;
			$fieldLen[] = $dbfFieldLen;
			$dbfFieldDec = ord(fread($dbf,1)); // decimal places
			fread($dbf,14); // pula o resto dos dados do campo
		} while ($dbfRecPos+1 < $dbfRecSize);
		fread($dbf,1); // fim dos campos (0x0D)
		if ($shpType == 5) {
			$UFnome = array();
			$UFlat = array();
			$UFlon = array();
			$UFzh = array();
			$UFbboxX0 = array();
			$UFbboxY0 = array();
			$UFbboxX1 = array();
			$UFbboxY1 = array();
			echo "var UFpts = [";
			while (ftell($shp) < $shpFileSize) {
				$regValid = fread($dbf,1); // primeiro byte de cada registro no DBF = ' ' registro válido ou '*' registro excluído
				$UFnome[] = str_replace("'","\'",trim(fread($dbf,$fieldLen[0])));
				$UFlat[] = trim(fread($dbf,$fieldLen[1]));
				$UFlon[] = trim(fread($dbf,$fieldLen[2]));
				$UFzh[] = trim(fread($dbf,$fieldLen[3]));
				$recNo = unpack('N',fread($shp,4))[1]; // 00 00 00 01 = 1(16) = 1
				$recLen = unpack('N',fread($shp,4))[1]; // 00 00 2f 30 = 2f30(16) = 12080
				$tipo = unpack('V',fread($shp,4))[1]; // 05 00 00 00 = 5(16) = 5
				if ($tipo == 5) {
					$UFbboxX0[] = unpack('e',fread($shp,8))[1]; // double (machine dependent size, little endian byte order)
					$UFbboxY0[] = unpack('e',fread($shp,8))[1];
					$UFbboxX1[] = unpack('e',fread($shp,8))[1];
					$UFbboxY1[] = unpack('e',fread($shp,8))[1];
					$nParts = unpack('V',fread($shp,4))[1];
					$nPts = unpack('V',fread($shp,4))[1];
					$parts = array();
					for ($i=0; $i<$nParts; $i++) {
						$parts[] = unpack('V',fread($shp,4))[1];
					}
					$ptsX = array();
					$ptsY = array();
					for ($i=0; $i<$nPts; $i++) {
						$ptsX[] = unpack('e',fread($shp,8))[1];
						$ptsY[] = unpack('e',fread($shp,8))[1];
					}
					$parte = 0;
					echo "["; // abre UF
					echo "["; // abre a primeira parte
					echo "[$ptsX[0],$ptsY[0]]"; // coloca logo o primeiro ponto pra não precisar conferir toda hora (if $i > 0 && array_search...)
					for ($i=1; $i<$nPts; $i++) {
						if (array_search($i,$parts)) {
							echo "],["; // fecha a parte anterior e abre uma nova
							echo "[$ptsX[$i],$ptsY[$i]]";
						} else {
							echo ",[$ptsX[$i],$ptsY[$i]]";
						}
					}
					echo "]"; // fecha a última parte
					if (sizeof($UFnome) < $dbfRecNo) {
						echo "],\n	"; // fecha UF
					} else {
						echo "]];\n"; // fecha UF e UFpts
					}
				}
			}
			echo "var UFnome = [";
			for ($i=0; $i<$dbfRecNo; $i++) {
				if ($i < $dbfRecNo-1) {
					echo "'$UFnome[$i]',";
				} else {
					echo "'$UFnome[$i]'];\n";
				}
			}
			echo "var UFlat = [";
			for ($i=0; $i<$dbfRecNo; $i++) {
				if ($i < $dbfRecNo-1) {
					echo (round($UFlat[$i]*10000)/10000).",";
				} else {
					echo (round($UFlat[$i]*10000)/10000)."];\n";
				}
			}
			echo "var UFlon = [";
			for ($i=0; $i<$dbfRecNo; $i++) {
				if ($i < $dbfRecNo-1) {
					echo (round($UFlon[$i]*10000)/10000).",";
				} else {
					echo (round($UFlon[$i]*10000)/10000)."];\n";
				}
			}
			echo "var UFzh = [";
			for ($i=0; $i<$dbfRecNo; $i++) {
				if ($i < $dbfRecNo-1) {
					echo "'$UFzh[$i]',";
				} else {
					echo "'$UFzh[$i]'];\n";
				}
			}
			echo "var UFbbox = [";
			for ($i=0; $i<$dbfRecNo; $i++) {
				if ($i < $dbfRecNo-1) {
					echo "[$UFbboxX0[$i],$UFbboxY0[$i],$UFbboxX1[$i],$UFbboxY1[$i]],";
				} else {
					echo "[$UFbboxX0[$i],$UFbboxY0[$i],$UFbboxX1[$i],$UFbboxY1[$i]]];\n";
				}
			}
		}
		fclose($shp);
		fclose($dbf);
	}
}
?>
function drawGraf() {
<?php
include('../../inc/db_geo.php');
if ($v) { // variável do gráfico
	$q = "select description from pg_description where objoid = '\"$v\"'::regclass and objsubid = 0";
	$res = pg_query($conn,$q);
	if ($res) {
		if ($row = pg_fetch_array($res,NULL,PGSQL_NUM)) {
			$info = str_replace("\n",'<br>',$row[0]);
			$info = str_replace("\r",'',$info);
			$info = str_replace("'","\'",$info);
			echo "	document.getElementById('spnTabInfo').innerHTML = '$info';\n";
		}
	}
	$q = "select \"$v\".* from \"$v\"
	left join cty on cty.c = \"$v\".c
	where cty.iso3 = '$p'";
	$res = pg_query($conn,$q);
	if ($res) {
		if ($row = pg_fetch_array($res,NULL,PGSQL_ASSOC)) {
			$anos = [];
			$vals = [];
			foreach ($row as $key => $value) {
				if ((strpos($key,'19') !== FALSE || strpos($key,'20') !== FALSE) && is_numeric($value)) {
					$anos[] = preg_replace("/[^0-9]/","",$key);
					$vals[] = $value;
				}
			}
			if (sizeof($anos) > 0) {
				echo "	var tabela = '$v';\n";
				echo "	var anos = [";
				foreach ($anos as $key => $ano) {
					if ($key == sizeof($anos)-1) {
						echo "$ano];\n";
					} else {
						echo "$ano,";
					}
				}
				echo "	var vals = [";
				foreach ($vals as $key => $val) {
					if ($key == sizeof($vals)-1) {
						echo "$val];\n";
					} else {
						echo "$val,";
					}
				}
				echo "	var minVal = ".min($vals).";\n";
				echo "	var maxVal = ".max($vals).";\n";
			}
		}
	}
}
?>
	if (typeof anos !== 'undefined' && anos.length > 1) {
		// tamanho do gráfico
		grafW = document.getElementById('main').offsetWidth;
		grafH = document.getElementById('main').offsetHeight;
		document.getElementById('cnvGraf').width = grafW;
		document.getElementById('cnvGraf').height = grafH;
		// eixo Y
		if (graf0 && minVal > 0) {
			minVal = 0;
		}
		var stepY;
		if (maxVal > minVal) {
			stepY = Math.pow(10,Math.floor(Math.log10(maxVal-minVal)));
		} else { // iguais
			stepY = Math.pow(10,Math.floor(Math.log10(maxVal))-1);
		}
		minVal = Math.floor(minVal/stepY)*stepY;
		maxVal = Math.ceil(maxVal/stepY)*stepY;
		var i,nstepY = Math.round((maxVal-minVal)/stepY);
		var adjY = 10;
		var adjX = 10;
		ctxGraf.font = '12px sans-serif';
		var margL = Math.max(ctxGraf.measureText(maxVal.toLocaleString()).width,
							 ctxGraf.measureText(minVal.toLocaleString()).width) + 2*adjY;
		var margR = ctxGraf.measureText('2000').width/2 + adjY;
		var margT = ctxGraf.measureText('M').width + 4*adjX;
		var margB = ctxGraf.measureText('M').width + 2*adjX;
		ctxGraf.textAlign = 'center';
		ctxGraf.textBaseline = 'middle';
		ctxGraf.font = '16px sans-serif';
		ctxGraf.fillText(tabela,grafW/2,margT/2);
		ctxGraf.font = '12px sans-serif';
		var plotW = grafW-margL-margR;
		var plotH = grafH-margT-margB;
		ctxGraf.lineWidth = 1;
		ctxGraf.strokeStyle = 'black';
		ctxGraf.strokeRect(margL,margT,plotW,plotH);
		ctxGraf.textAlign = 'right';
		ctxGraf.textBaseline = 'middle';
		ctxGraf.fillText(minVal.toLocaleString(),margL-adjY,grafH-margB);
		ctxGraf.fillText(maxVal.toLocaleString(),margL-adjY,margT);
		ctxGraf.strokeStyle = 'gray';
		for (i=1; i<nstepY; i++) {
			ctxGraf.beginPath();
			ctxGraf.moveTo(margL,margT+i*(plotH/nstepY));
			ctxGraf.lineTo(grafW-margR,margT+i*(plotH/nstepY));
			ctxGraf.stroke();
			ctxGraf.fillText((maxVal-i*stepY).toLocaleString(),margL-adjY,margT+i*(plotH/nstepY));
		}
		var stepX = 5; // ou 10, para acima de ?? anos
		var minAno = Math.floor(anos[0]/stepX)*stepX;
		var maxAno = Math.ceil(anos[anos.length-1]/stepX)*stepX;
		var nStepX = Math.round((maxAno-minAno)/stepX);
		ctxGraf.textAlign = 'center';
		ctxGraf.textBaseline = 'top';
		ctxGraf.fillText(minAno,margL,grafH-margB+adjX);
		ctxGraf.fillText(maxAno,grafW-margR,grafH-margB+adjX);
		for (i=1; i<nStepX; i++) {
			ctxGraf.beginPath();
			ctxGraf.moveTo(margL+i*(plotW/nStepX),margT);
			ctxGraf.lineTo(margL+i*(plotW/nStepX),grafH-margB);
			ctxGraf.stroke();
			ctxGraf.fillText(minAno+i*stepX,margL+i*(plotW/nStepX),grafH-margB+adjX);
		}
		ctxGraf.strokeStyle = 'black';
		ctxGraf.lineWidth = 3;
		ctxGraf.beginPath();
		ctxGraf.moveTo(margL + plotW*(anos[0]-minAno)/(maxAno-minAno),margT + plotH*(maxVal-vals[0])/(maxVal-minVal));
		for (i=1; i<vals.length; i++) {
			ctxGraf.lineTo(margL + plotW*(anos[i]-minAno)/(maxAno-minAno),margT + plotH*(maxVal-vals[i])/(maxVal-minVal));
		}
		ctxGraf.stroke();
	}
}
function mudaPais() {
	var f = document.getElementById('frmPais');
	f.submit();
}
function mudaVar() {
	var f = document.getElementById('frmVar');
	f.submit();
}
/*
1	Tree cover, broadleaved, evergreen
2	Tree cover, broadleaved. deciduous closed
3	Tree cover, broadleaved, deciduous, open
4	Tree cover needle-leaved, evergreen
5	Tree cover needleleaved, deciduous
6	Tree cover, mixed leaf type
7	Tree cover, regularly flooded, fresh water
8	Tree cover, regularly flooded saline water
9	Mosaic: Tree Cover / Other natural vegetation
10	Tree Cover, burnt
11	Shrub Cover, closed-open, evergreen
12	Shrub Cover, closed-open, deciduous
13	Herbaceous Cover, closed-open
14	Sparse herbaceous or sparse shrub cover
15	Regularly flooded shrub and/or herbaceous cover
16	Cultivated and managed areas
17	Mosaic: Cropland / Tree Cover / Other natural vegetation
18	Mosaic: Cropland / Shrub and/or grass cover
19	Bare Areas
20	Water Bodies
21	Snow and Ice
22	Artificial surfaces and associated areas
23	No Data
*/
var biomasN = ['Floresta ombrófila sempre verde','Floresta ombrófila decídua','Floresta temperada/mista','Floresta inundável (água doce)/várzea/igapó',
			'Floresta inundável (água salgada)/mangue','Árvores/outra vegetação natural','Cobertura arbustiva','Cobertura herbácea',
			'Cobertura arbustiva/herbácea esparsa','Cobertura arbustiva/herbácea inundável','Área cultivada','Cultivo/árvores/outra vegetação natural',
			'Cultivo/arbustos/gramíneas','Solo nu (areia/gelo/neve)','Água','Área urbana','Árvores queimadas'];
var biomasC = ['#79ff79','#caff4c','#6bc3c8','#46ac46',
			'#ba69c0','#c3834a','#ffc549','#ffddce',
			'#fff9a5','#c1c1ff','#ffffff','#ba875a',
			'#c4ba69','#d2d2d2','#69acff','#505050','#ff0000'];
function navega() {
	if (x < 0 || y < 0) {
		hint.style.visibility = 'hidden';
		return;
	}
	var xP = xC - zoom*vegW/2 + x*zoom; // coordenadas do mouse sobre a imagem do País, em pixels
	var yP = yC - zoom*vegH/2 + y*zoom;
	lat = Math.round((lat0 + (paisH-yP)*(lat1-lat0)/paisH)*100)/100;
	if (lon1 > lon0) { // país normal
		lon = Math.round((lon0 + xP*(lon1-lon0)/paisW)*100)/100;
	} else { // atravessa o anti-meridiano (180°)
		if (xP <= antiM) { // está no Hemisfério Oriental
			lon = Math.round((lon0 + xP*(180-lon0)/antiM)*100)/100;
		} else {
			lon = Math.round((-180 + (xP-antiM)*(lon1+180)/(paisW-antiM))*100)/100;
		}
	}
	var cor = ctxVeg0.getImageData(Math.floor(xP),Math.floor(yP),1,1);
	var cor1 = '#' + cor.data[0].toString(16).padStart(2,'0') + cor.data[1].toString(16).padStart(2,'0') + cor.data[2].toString(16).padStart(2,'0');
	coord = lat.toFixed(2).toLocaleString()+', '+lon.toFixed(2).toLocaleString();
	if (typeof cidlat != 'undefined') {
		var i,d,menorD=360,menorI;
		for (i=0; i<cidlat.length; i++) {
			d = Math.pow(Math.pow(lat-cidlat[i],2)+Math.pow(lon-cidlon[i],2),0.5);
			if (d < menorD) {
				menorD = d;
				menorI = i;
			}
		}
		cidade = '<br>' + cidades[menorI] + ' (' + cidpop[menorI].toLocaleString() + ' hab)';
	}
	if (cor1 == '#000000') {
		hint.style.visibility = 'hidden';
	} else {
		if (biomasC.indexOf(cor1) >= 0) {
			hint.innerHTML = coord + cidade + '<br>' + biomasN[biomasC.indexOf(cor1)];
		} else {
			hint.innerHTML = coord + cidade;
		}
		document.getElementById('dumHint').innerHTML = hint.innerHTML;
		hint.style.backgroundColor = cor1+'80';
		if (window.matchMedia('(min-width:600px)').matches) { // PC
			if (rectV.left+x > dumHint.offsetWidth+5) {
				hint.style.left = x+rectV.left-dumHint.offsetWidth-5+'px';
			} else {
				hint.style.left = 0;
			}
			if (y >= dumHint.offsetHeight+5) {
				hint.style.top = y-dumHint.offsetHeight-5+'px';
			} else {
				hint.style.top = y+5+'px';
			}
		} else { // Cel
			if (x < dumHint.offsetWidth/2) {
				hint.style.left = 0;
			} else
			if (x > vegW - dumHint.offsetWidth/2) {
				hint.style.left = vegW-dumHint.offsetWidth-1+'px';
			} else {
				hint.style.left = x-dumHint.offsetWidth/2+'px';
			}
			hint.style.top = y+rectV.top-dumHint.offsetHeight-5+'px';
		}
		hint.style.visibility = 'visible';
	}
}
function vegMouseDown(e,n) {
	rectV = document.getElementById('cnvVeg').getBoundingClientRect();
	if (n == 1) {
		x = e.clientX - rectV.left;
		y = e.clientY - rectV.top;
		if (e.buttons == 1) {
			arrastando = true;
		} else
		if (e.buttons == 2) {
			aproximando = true;
			xP0 = xC - zoom*vegW/2 + x*zoom; // coordenadas do mouse sobre a imagem do País, em pixels
			yP0 = yC - zoom*vegH/2 + y*zoom;
			xPct = x/rectV.width;
			yPct = y/rectV.height;
		}
	} else
	if (n == 2) {
		if (e.touches.length == 1) {
			x = e.touches[0].clientX - rectV.left;
			y = e.touches[0].clientY - rectV.top;
			arrastando = true;
			navega();
		} else
		if (e.touches.length > 1) {
			y = Math.pow(Math.pow(e.touches[0].clientX-e.touches[1].clientX,2) + Math.pow(e.touches[0].clientY-e.touches[1].clientY,2),0.5);
			arrastando = false;
			aproximando = true;
		}
	}
	e.preventDefault();
}
function vegMouseMove(e,n) {
	if (modo != 'v') { // 'g' gráfico, 'v' vegetação
		return;
	}
	rectV = document.getElementById('cnvVeg').getBoundingClientRect();
	var xAnt = x;
	var yAnt = y;
	if (n == 1) {
		x = e.clientX - rectV.left;
		y = e.clientY - rectV.top;
	} else
	if (n == 2 && e.touches.length == 1) {
		x = e.touches[0].clientX - rectV.left;
		y = e.touches[0].clientY - rectV.top;
	}
	if (arrastando) {
		hint.style.visibility = 'hidden';
		xC -= (x-xAnt)*zoom;
		yC -= (y-yAnt)*zoom;
		drawVeg();
	} else
	if (aproximando) {
		hint.style.visibility = 'hidden';
		if (n == 1) {
			if (y != yAnt) {
				if (y-yAnt > 0) { // aproximando
					zoom /= 1 + (y-yAnt)/100;
					var xP = xC - zoom*vegW/2 + xPct*rectV.width*zoom; // coordenadas do mouse sobre a imagem do País, em pixels
					var yP = yC - zoom*vegH/2 + yPct*rectV.height*zoom;
					xC -= xP-xP0;
					yC -= yP-yP0;
				} else { // afastando
					zoom *= 1 -(y-yAnt)/100;
					xP0 = xC - zoom*vegW/2 + x*zoom; // coordenadas do mouse sobre a imagem do País, em pixels
					yP0 = yC - zoom*vegH/2 + y*zoom;
					xPct = x/rectV.width;
					yPct = y/rectV.height;
				}
				document.getElementById('pZoom').innerHTML = (1/zoom).toPrecision(2);
				drawVeg();
			}
		} else
		if (n == 2) {
			yAnt = y;
			y = Math.pow(Math.pow(e.touches[0].clientX-e.touches[1].clientX,2) + Math.pow(e.touches[0].clientY-e.touches[1].clientY,2),0.5);
			if (y != yAnt) {
				if (y-yAnt > 0) {
					zoom /= 1 + (y-yAnt)/100;
				} else {
					zoom *= 1 -(y-yAnt)/100;
				}
				document.getElementById('pZoom').innerHTML = (1/zoom).toPrecision(2);
				drawVeg();
			}
		}
	} else { // navegando
		navega();
	}
	e.preventDefault();
}
function vegMouseUp(e,n) {
	arrastando = false;
	aproximando = false;
	e.preventDefault();
}
function vegWheel(e) {
	if (e.deltaY > 0) {
		zoom *= 1 + e.deltaY/10;
	} else {
		zoom /= 1 - e.deltaY/10;
	}
	document.getElementById('pZoom').innerHTML = (1/zoom).toPrecision(2);
	hint.style.visibility = 'hidden';
	drawVeg();
}
function veg1MouseDown(e) {
	rect1 = document.getElementById('cnvPais').getBoundingClientRect();
	vegX1 = (e.clientX-rect1.left)/paisW1;
	vegY1 = (e.clientY-rect1.top)/paisH1;
	xC = vegX1*paisW;
	yC = vegY1*paisH;
	drawVeg();
	e.preventDefault();
	/*if (window.matchMedia('(max-width:599px)').matches) {				// ### Cel ###
		document.getElementById('spnCoords').style.display = 'none';
		document.getElementById('nav1').style.height =
			document.getElementById('frmPais').offsetHeight +
			document.getElementById('cnvMundo').offsetHeight +
			document.getElementById('divTxt').offsetHeight + 'px';
	} else {
		document.getElementById('spnCoords').innerHTML = '';
		document.getElementById('spnVeg').innerHTML = '';
	}*/
}
function veg1MouseMove(e) {
	if (vegX1 != null && vegY1 != null) {
		vegX1 = (e.clientX-rect1.left)/paisW1;
		vegY1 = (e.clientY-rect1.top)/paisH1;
		xC = vegX1*paisW;
		yC = vegY1*paisH;
		drawVeg();
		e.preventDefault();
	}
}
function veg1MouseUp(e) {
	vegX1 = null;
	vegY1 = null;
}
var url,HttpReq,whichImg;
function update() {
	if (HttpReq.readyState == 4) {
		if (HttpReq.status == 200) {
			if (HttpReq.responseType == 'blob') {
				switch (whichImg) {
					case 'alt' :
						imgAlt = document.createElement('img');
						document.getElementById('main').appendChild(imgAlt);
						imgAlt.id = 'imgAlt';
						imgAlt.addEventListener('load', function() {
							altW = this.width;
							altH = this.height;
							drawVeg();
							});
						imgAlt.src = URL.createObjectURL(HttpReq.response);
						break;
					case 'temp' :
						imgTemp = document.createElement('img');
						document.getElementById('main').appendChild(imgTemp);
						imgTemp.id = 'imgTemp';
						imgTemp.addEventListener('load', function() {
							tempW = this.width;
							tempH = this.height;
							drawVeg();
							});
						imgTemp.src = URL.createObjectURL(HttpReq.response);
						break;
					case 'chuv' :
						imgChuv = document.createElement('img');
						document.getElementById('main').appendChild(imgChuv);
						imgChuv.id = 'imgChuv';
						imgChuv.addEventListener('load', function() {
							chuvW = this.width;
							chuvH = this.height;
							drawVeg();
							});
						imgChuv.src = URL.createObjectURL(HttpReq.response);
						break;
					case 'dens' :
						imgDens = document.createElement('img');
						document.getElementById('main').appendChild(imgDens);
						imgDens.id = 'imgDens';
						imgDens.addEventListener('load', function() {
							densW = this.width;
							densH = this.height;
							drawVeg();
							});
						imgDens.src = URL.createObjectURL(HttpReq.response);
						break;
				}
			} else {
				document.getElementById('divPaises').innerHTML = HttpReq.responseText;
			}
		} else {
			console.log('Erro: ' + HttpReq.statusText + ' ['+HttpReq.status+']');
		}
	}
}
function conecta(tipo) { // makes AJAX connection
	if (document.getElementById && window.XMLHttpRequest) { // If Browser supports DHTML, Firefox, etc.
		HttpReq = new XMLHttpRequest();
		HttpReq.onreadystatechange = update;
		HttpReq.open('GET',url,true);
		HttpReq.responseType = tipo; // 'blob' ou 'text'
		HttpReq.send(null);
	}
}
function getImg() {
	url = 'getImg.php?w='+whichImg+'&lon0='+lon0+'&lon1='+lon1+'&lat0='+lat0+'&lat1='+lat1;
	document.body.style.cursor = 'wait';
	conecta('blob');
}
function btnClick(who) {
	if (modo == '0') {
		return;
	}
	var i,btns;
	if (who.classList.contains('grp1')) { // vegetação/gráfico
		btns = document.getElementById('nav2').getElementsByTagName('div');
		for (i=0; i<btns.length; i++) {
			if (btns[i].classList.contains('grp1')) {
				btns[i].className = 'unpressed grp1';
			}
		}
		who.className = 'pressed grp1';
		switch (who.id) {
			case 'btnMap' :
				modo = 'v';
				document.getElementById('nav1').appendChild(document.getElementById('divSelGraf'));
				document.getElementById('cnvVeg').style.display = 'block';
				document.getElementById('cnvPais').style.display = 'block';
				document.getElementById('divSelGraf').style.display = 'none';
				document.getElementById('divGraf').style.display = 'none';
				document.getElementById('divBtnVeg').style.display = 'flex';
				document.getElementById('divBtnGraf').style.display = 'none';
				break;
			case 'btnGraf' :
				modo = 'g';
				document.getElementById('divMap').appendChild(document.getElementById('divSelGraf'));
				document.getElementById('cnvVeg').style.display = 'none';
				document.getElementById('cnvPais').style.display = 'none';
				document.getElementById('divSelGraf').style.display = 'flex';
				document.getElementById('divGraf').style.display = 'block';
				document.getElementById('divBtnVeg').style.display = 'none';
				document.getElementById('divBtnGraf').style.display = 'flex';
				break;
		}
	} else
	if (who.classList.contains('grp2')) { // altitude/temperatura/pluviosidade/densidade populacional
		if (who.classList.contains('unpressed')) {
			btns = document.getElementById('nav2').getElementsByTagName('div');
			for (i=0; i<btns.length; i++) {
				if (btns[i].classList.contains('grp2')) {
					btns[i].className = 'unpressed grp2';
				}
			}
			who.className = 'pressed grp2';
			switch (who.id) {
				case 'btnAlt' :
					if (imgAlt == null) { // ainda não baixou essa imagem
						whichImg = 'alt';
						getImg();
					}
					break;
				case 'btnTemp' :
					if (imgTemp == null) {
						whichImg = 'temp';
						getImg();
					}
					break;
				case 'btnChuv' :
					if (imgChuv == null) {
						whichImg = 'chuv';
						getImg();
					}
					break;
				case 'btnDens' :
					if (imgDens == null) {
						whichImg = 'dens';
						getImg();
					}
					break;
			}
		} else {
			who.className = 'unpressed grp2';
			document.getElementById('aRaster').style.display = 'none';
			drawVeg();
		}
	} else
	if (who.classList.contains('grp0')) { // UFlinhas/UFnomes/graf0
		if (who.classList.contains('unpressed')) {
			who.className = 'pressed grp0';
		} else
		if (who.classList.contains('pressed')) {
			who.className = 'unpressed grp0';
		}
		switch (who.id) {
			case 'btnUFlinhas' :
				UFlinhas = who.classList.contains('pressed');
				localStorage.setItem('SN-UFlinhas',UFlinhas);
				break;
			case 'btnUFnomes' :
				UFnomes = who.classList.contains('pressed');
				localStorage.setItem('SN-UFnomes',UFnomes);
				break;
			case 'btnCidNomes' :
				cidNomes = who.classList.contains('pressed');
				localStorage.setItem('SN-cidNomes',cidNomes);
				break;
			case 'btnGraf0' :
				graf0 = who.classList.contains('pressed');
				localStorage.setItem('SN-graf0',graf0);
				break;
			case 'btnCfg' :
				var lineW = 10;
				var fonteUF = 20;
				var fonteCid = 12;
				document.getElementById('labLineW').innerHTML = 'Espessura da linha (UFs): '+lineW+'px';
				document.getElementById('rngLineW').value = lineW;
				document.getElementById('labFonteUF').innerHTML = 'Tamanho da fonte (UFs): '+fonteUF+'px';
				document.getElementById('rngFonteUF').value = fonteUF;
				document.getElementById('labFonteCid').innerHTML = 'Tamanho da fonte (Cidades): '+fonteCid+'px';
				document.getElementById('rngFonteCid').value = fonteCid;
				document.getElementById('bgCfg').style.display = 'flex';
				break;
		}
		drawVeg();
	}
	bodyResize();
}
function zoomClick() {
	zoom = 1;
	document.getElementById('pZoom').innerHTML = 'Zoom';
	drawVeg();
}
var lon2,lat2,lon3,lat3;
function UFvisivel(bbox) {
	if (lon3 > lon2) { // tela não atravessa anti-meridiano
		return !(bbox[0] > lon3 || bbox[2] < lon2 || bbox[1] > lat3 || bbox[3] < lat2);
	} else { // atravessa o anti-meridiano (180°)
		return !(bbox[0] > lon3 && bbox[0] < 0 || bbox[2] < lon2 && bbox[2] > 0 || bbox[1] > lat3 || bbox[3] < lat2);
	}
}
var fxV,fyV;
function drawUFs() {
	var uf,part,pt,xUF,yUF;
	if (UFlinhas && typeof UFpts != 'undefined') {
		ctxPais.strokeStyle = '#000000';
		ctxPais.lineWidth = 0.25;
		ctxVeg.strokeStyle = '#404040';
		ctxVeg.lineWidth = (0.22*Math.log10(paisW*paisH) - 0.5)/zoom;
		for (uf=0; uf<UFpts.length; uf++) {
			for (part=0; part<UFpts[uf].length; part++) {
				ctxPais.beginPath();
				if (lon1 > lon0 || UFpts[uf][part][0][0] > 0) { // país não atravessa anti-meridiano OU ponto no Hemisfério Oriental
					xUF = (UFpts[uf][part][0][0]-lon0)*fx;
				} else {
					xUF = (UFpts[uf][part][0][0]-lon0+360)*fx;
				}
				yUF = (lat1-UFpts[uf][part][0][1])*fy;
				ctxPais.moveTo(xUF,yUF);
				for (pt=1; pt<UFpts[uf][part].length; pt++) {
					if (lon1 > lon0 || UFpts[uf][part][pt][0] > 0) { // país não atravessa anti-meridiano OU ponto no Hemisfério Oriental
						xUF = (UFpts[uf][part][pt][0]-lon0)*fx;
					} else {
						xUF = (UFpts[uf][part][pt][0]-lon0+360)*fx;
					}
					yUF = (lat1-UFpts[uf][part][pt][1])*fy;
					ctxPais.lineTo(xUF,yUF);
				}
				ctxPais.stroke();
			}
			if (UFvisivel(UFbbox[uf])) { // COLOCAR NO FOR UF!!
				for (part=0; part<UFpts[uf].length; part++) {
					ctxVeg.beginPath();
					if (lon3 > lon2 || UFpts[uf][part][0][0] > 0) { // tela não atravessa anti-meridiano OU ponto no Hemisfério Oriental
						xUF = (UFpts[uf][part][0][0]-lon2)*fxV;
					} else {
						xUF = (UFpts[uf][part][0][0]-lon2+360)*fxV;
					}
					yUF = (lat3-UFpts[uf][part][0][1])*fyV;
					ctxVeg.moveTo(xUF,yUF);
					for (pt=1; pt<UFpts[uf][part].length; pt++) {
						if (lon3 > lon2 || UFpts[uf][part][pt][0] > 0) { // tela não atravessa anti-meridiano OU ponto no Hemisfério Oriental
							xUF = (UFpts[uf][part][pt][0]-lon2)*fxV;
						} else {
							xUF = (UFpts[uf][part][pt][0]-lon2+360)*fxV;
						}
						yUF = (lat3-UFpts[uf][part][pt][1])*fyV;
						ctxVeg.lineTo(xUF,yUF);
					}
					ctxVeg.stroke();
				}
			}
		}
	}
	if (UFnomes && typeof UFnome != 'undefined') {
		var fontSize = 2.5*((0.2*l10 + 0.05)/zoom + (0.5*l10 + 1.5));
		ctxVeg.font = fontSize + 'px sans-serif';
		ctxVeg.textAlign = 'center';
		ctxVeg.textBaseline = 'middle';
		ctxVeg.fillStyle = '#000000';
		for (uf=0; uf<UFnome.length; uf++) {
			xUF = (UFlon[uf]-lon2)*fxV;
			yUF = (lat3-UFlat[uf])*fyV;
			ctxVeg.fillText(UFnome[uf],xUF,yUF - fontSize/2);
			ctxVeg.fillText(UFzh[uf],xUF,yUF + fontSize/2);
		}
	}
}
function drawVeg() {
	if (typeof imgVeg == 'undefined') {
		return;
	}
	ctxVeg.fillStyle = '#000000';
	ctxVeg.fillRect(0,0,vegW,vegH);
	ctxVeg.imageSmoothingEnabled = false;
	ctxVeg.drawImage(imgVeg,xC-vegW*zoom/2,yC-vegH*zoom/2,vegW*zoom,vegH*zoom,0,0,vegW,vegH);
	ctxPais.drawImage(imgVeg,0,0,paisW1,paisH1);
	var raster = false;
	if (imgAlt != null && document.getElementById('btnAlt').classList.contains('pressed')) {
		var fAlt = altW/paisW;
		var xAlt = xC*altW/paisW;
		var yAlt = yC*altH/paisH;
		ctxVeg.globalAlpha = aRaster;
		ctxVeg.drawImage(imgAlt,xAlt-fAlt*vegW*zoom/2,yAlt-fAlt*vegH*zoom/2,fAlt*vegW*zoom,fAlt*vegH*zoom,0,0,vegW,vegH);
		ctxVeg.globalAlpha = 1;
		raster = true;
	} else
	if (imgTemp != null && document.getElementById('btnTemp').classList.contains('pressed')) {
		var fTemp = tempW/paisW;
		var xTemp = xC*tempW/paisW;
		var yTemp = yC*tempH/paisH;
		ctxVeg.globalAlpha = aRaster;
		ctxVeg.drawImage(imgTemp,xTemp-fTemp*vegW*zoom/2,yTemp-fTemp*vegH*zoom/2,fTemp*vegW*zoom,fTemp*vegH*zoom,0,0,vegW,vegH);
		ctxVeg.globalAlpha = 1;
		raster = true;
	} else
	if (imgChuv != null && document.getElementById('btnChuv').classList.contains('pressed')) {
		var fChuv = chuvW/paisW;
		var xChuv = xC*chuvW/paisW;
		var yChuv = yC*chuvH/paisH;
		ctxVeg.globalAlpha = aRaster;
		ctxVeg.drawImage(imgChuv,xChuv-fChuv*vegW*zoom/2,yChuv-fChuv*vegH*zoom/2,fChuv*vegW*zoom,fChuv*vegH*zoom,0,0,vegW,vegH);
		ctxVeg.globalAlpha = 1;
		raster = true;
	} else
	if (imgDens != null && document.getElementById('btnDens').classList.contains('pressed')) {
		var fDens = densW/paisW;
		var xDens = xC*densW/paisW;
		var yDens = yC*densH/paisH;
		ctxVeg.globalAlpha = aRaster;
		ctxVeg.drawImage(imgDens,xDens-fDens*vegW*zoom/2,yDens-fDens*vegH*zoom/2,fDens*vegW*zoom,fDens*vegH*zoom,0,0,vegW,vegH);
		ctxVeg.globalAlpha = 1;
		raster = true;
	}
	if (raster) {
		document.body.style.cursor = 'default';
		drawARaster();
	}
	var x2 = xC - vegW*zoom/2;
	var x3 = xC + vegW*zoom/2;
	var y2 = yC + vegH*zoom/2;
	var y3 = yC - vegH*zoom/2;
	if (lon1 > lon0) { // país normal
		lon2 = lon0 + x2*fxG;
		lon3 = lon0 + x3*fxG;
	} else { // atravessa o anti-meridiano (180°)
		if (x2 <= antiM) { // está no Hemisfério Oriental
			lon2 = lon0+x2*fxG;
		} else {
			lon2 = -180 + (x2-antiM)*fxG;
		}
		if (x3 <= antiM) { // está no Hemisfério Oriental
			lon3 = lon0+x3*fxG;
		} else {
			lon3 = -180 + (x3-antiM)*fxG;
		}
	}
	lat2 = lat1 - y2*fyG;
	lat3 = lat1 - y3*fyG;
	if (lon3 < lon2) {
		fxV = vegW/(360+lon3-lon2);
	} else {
		fxV = vegW/(lon3-lon2);
	}
	fyV = vegH/(lat3-lat2);
	drawUFs();
	var x0 = paisW1*(xC-vegW*zoom/2)/paisW;
	var y0 = paisH1*(yC-vegH*zoom/2)/paisH;
	var w = paisW1*vegW*zoom/paisW;
	var h = paisH1*vegH*zoom/paisH;
	ctxPais.lineWidth = 1;
	ctxPais.strokeStyle = '#00000080';
	ctxPais.strokeRect(x0,y0,w,h);
	localStorage.setItem('SN-'+paisC,xC+'/'+yC+'|'+zoom);

	if (cidNomes && typeof cidlat != 'undefined' && zoom < 2) {
		var i,xCid,yCid;
		var fontSize = (0.2*l10 + 0.05)/zoom + (0.5*l10 + 1.5);
		ctxVeg.font = fontSize+'px sans-serif';
		ctxVeg.textAlign = 'center';
		ctxVeg.textBaseline = 'middle';
		ctxVeg.lineWidth = 1;
		for (i=0; i<cidlat.length; i++) {
			if (lon3 > lon2 || cidlon[i] > 0) {
				xCid = (cidlon[i]-lon2)*fxV;
			} else {
				xCid = (cidlon[i]-lon2+360)*fxV;
			}
			yCid = (lat3-cidlat[i])*fyV;
			ctxVeg.fillText(cidades[i],xCid,yCid);
			ctxVeg.beginPath();
			ctxVeg.arc(xCid,yCid,fontSize/1.5,0,Math.PI*2);
			ctxVeg.stroke();
		}
	}
}
function bodyResize() {
	if (hab || area) {
		if (sov != paisC) {
			document.getElementById('spnPais').innerHTML = '(Território - '+sov+')<br>'+hab+' hab.'+haby+' / '+area+' km²<br>PIB: US$ '+pib+' ('+piby+', '+pibpc+'&nbsp;pc)';
		} else {
			document.getElementById('spnPais').innerHTML = hab+' hab.'+haby+' / '+area+' km²<br>PIB: US$ '+pib+' ('+piby+', '+pibpc+'&nbsp;pc)';
		}
	}
	if (window.matchMedia('(max-width:599px)').matches) {				// ### Cel ###
		document.getElementById('divMap').appendChild(document.getElementById('cnvPais'));
		var mapasH;
		if (modo == 'v') {
			mapasH = document.getElementById('nav1').offsetWidth / (2.4 + paisW/paisH); // 2.4 = 360/150
			document.getElementById('cnvPais').style.height = mapasH+'px';
			document.getElementById('cnvPais').style.width = mapasH*paisW/paisH+'px';
			document.getElementById('cnvPais').style.borderLeft = '0.5px solid black';
			document.getElementById('spnPais').style.width = '100%';
		} else
		if (modo == 'g') {
			mapasH = document.getElementById('nav1').offsetWidth * 5/24; // 150/2 / 360
			//document.getElementById('divMap').style.height = mapasH+'px';
			document.getElementById('divSelGraf').style.width = 2.4*mapasH+'px';
			document.getElementById('spnPais').style.width = 2.4*mapasH+'px';
		} else {
			document.getElementsByTagName('h1')[0].style.display = 'block';
			document.getElementById('divMap').style.display = 'none';
			document.getElementById('nav2').style.display = 'none';
			document.getElementById('main').style.display = 'none';
		}
		document.getElementById('cnvMundo').style.height = mapasH+'px';
		document.getElementById('cnvMundo').style.width = 2.4*mapasH+'px';
		if (modo == 'v' || modo == 'g') {
			document.getElementById('nav1').style.height =
				document.getElementById('frmPais').offsetHeight +
				document.getElementById('cnvMundo').offsetHeight +
				document.getElementById('divTxt').offsetHeight + 'px';
			document.getElementById('divSelGraf').style.height =
				document.getElementById('divMap').offsetHeight +
				document.getElementById('divTxt').offsetHeight + 'px';
			// h1
			document.getElementsByTagName('h1')[0].style.display = 'none';
		}
		rslComp = document.getElementById('btnRaster').offsetWidth;
		rslLarg = 20;
	} else {															// ### PC ###
		document.getElementById('divTxt').appendChild(document.getElementById('cnvPais'));
		document.getElementsByTagName('h1')[0].style.display = 'block';
		document.getElementById('nav1').style.height = '100%';
		document.getElementById('cnvMundo').style.width = '25vw';
		document.getElementById('cnvMundo').style.height = '10.4167vw';
		document.getElementById('cnvPais').style.width = '25vw';
		document.getElementById('cnvPais').style.height = 25*paisH/paisW+'vw';
		document.getElementById('cnvPais').style.borderLeft = '0';
		document.getElementById('spnPais').style.width = '100%';
		document.getElementById('divSelGraf').style.width = '25vw';
		if (modo == '0') {
			document.getElementById('divMap').style.display = 'none';
			document.getElementById('divTxt').style.display = 'none';
			document.getElementById('nav2').style.display = 'none';
			document.getElementById('main').style.display = 'none';
		}
		rslComp = document.getElementById('btnRaster').offsetHeight;
		rslLarg = 30;
	}
	vegW = document.getElementById('main').offsetWidth;
	vegH = document.getElementById('main').offsetHeight;
	document.getElementById('cnvVeg').style.width = vegW + 'px';
	document.getElementById('cnvVeg').style.height = vegH + 'px';
	document.getElementById('cnvVeg').width = vegW;
	document.getElementById('cnvVeg').height = vegH;
	paisW1 = document.getElementById('cnvPais').offsetWidth;
	paisH1 = paisW1*paisH/paisW;
	if (lon1 > lon0) {
		fx = paisW1/(lon1-lon0);
	} else {
		fx = paisW1/(lon1-lon0+360);
	}
	fy = paisH1/(lat1-lat0);
	ctxPais = document.getElementById('cnvPais');
	ctxPais.width=paisW1;
	ctxPais.height=paisH1;
	ctxPais = ctxPais.getContext('2d');
	drawVeg();
	drawGraf();
}
function setARaster(rslx,rsly) {
	if (window.matchMedia('(max-width:599px)').matches) {	// Cel
		aRaster = rslx/(rslComp-2*rslLarg);
	} else {												// PC
		aRaster = 1 - rsly/(rslComp-2*rslLarg);
	}
	if (aRaster < 0) {
		aRaster = 0;
	} else
	if (aRaster > 1) {
		aRaster = 1;
	}
	drawVeg();
}
function aMouseDown(e) {
	rectA = document.getElementById('aRaster').getBoundingClientRect();
	if (e.buttons == 1) {
		var xR = e.clientX - rectA.left;
		var yR = e.clientY - rectA.top;
		if (xR >= rslx0 && xR <= rslx1 && yR >= rsly0 && yR <= rsly1) {
			aMovendo = true;
			setARaster(xR-rslx0,yR-rsly0);
		}
	}
}
function aMouseMove(e) {
	if (aMovendo) {
		//rectA = document.getElementById('aRaster').getBoundingClientRect();
		if (e.buttons == 1) {
			var xR = e.clientX - rectA.left;
			var yR = e.clientY - rectA.top;
			setARaster(xR-rslx0,yR-rsly0);
		}
	}
	e.preventDefault();
}
function aMouseUp(e) {
	aMovendo = false;
}
function docMouseMove(e) {
	if (aMovendo) {
		aMouseMove(e);
	} else
	if (document.getElementById('bgCfg').style.display != 'flex') {
		vegMouseMove(e,1);
	}
}
function docMouseUp(e) {
	if (aMovendo) {
		aMovendo = false;
	} else
	if (arrastando || aproximando) {
		vegMouseUp(e,1);
	}
}
/*function docMouseDown(e) {
	vegMouseDown(e,1);
}*/
function drawARaster() {
	ctxARaster = document.getElementById('aRaster');
	ctxARaster.style.display = 'block';
	if (window.matchMedia('(max-width:599px)').matches) {	// Cel
		rslW = rslComp;
		rslH = rslLarg;
		rslx0 = rslLarg;
		rslx1 = rslW-rslLarg;
		rsly0 = rslLarg/2-8;
		rsly1 = rslLarg/2+8;
	} else {												// PC
		rslW = rslLarg;
		rslH = rslComp;
		rslx0 = rslLarg/2-10;
		rslx1 = rslLarg/2+10;
		rsly0 = rslLarg;
		rsly1 = rslH-rslLarg;
	}
	ctxARaster.width = rslW;
	ctxARaster.height = rslH;
	ctxARaster = ctxARaster.getContext('2d');
	ctxARaster.fillStyle = '#808080';
	if (window.matchMedia('(max-width:599px)').matches) {	// Cel
		ctxARaster.drawImage(document.getElementById('imgOpaco'),rslW-17.5,2.5,15,15);
		ctxARaster.drawImage(document.getElementById('imgTransp'),2.5,2.5,15,15);
		ctxARaster.fillRect(rslx0,rslH/2-1,rslW-2*rslLarg,2); // sulco
		ctxARaster.fillStyle = '#404040';
		var xaR = rslx0 + aRaster*(rslx1-rslx0);
		ctxARaster.fillRect(xaR-2,rslH/2-8,4,16); // botão
	} else {												// PC
		ctxARaster.drawImage(document.getElementById('imgOpaco'),5,5,20,20);
		ctxARaster.drawImage(document.getElementById('imgTransp'),5,rslH-25,20,20);
		ctxARaster.fillRect(rslW/2-2,rslLarg,4,rslH-2*rslLarg); // sulco
		ctxARaster.fillStyle = '#404040';
		var yaR = rsly0 + (1-aRaster)*(rsly1-rsly0);
		ctxARaster.fillRect(rslW/2-10,yaR-4,20,8); // botão
	}
}
function bolStr(value) {
	return value != 'false';
}
function bodyLoad() {
	// modo de inicialização
<?php
	if ($v) {
		echo "	modo = 'g'; // gráficos\n";
	} else
	if ($p) {
		echo "	modo = 'v'; // vegetação\n";
	} else {
		echo "	modo = '0'; // vazio\n";
	}
?>
	hint = document.getElementById('divHint');
	dumHint = document.getElementById('dumHint');
	UFlinhas = bolStr(localStorage.getItem('SN-UFlinhas'));
	UFlinhas ? document.getElementById('btnUFlinhas').className = 'pressed grp0' : document.getElementById('btnUFlinhas').className = 'unpressed grp0';
	UFnomes = bolStr(localStorage.getItem('SN-UFnomes'));
	UFnomes ? document.getElementById('btnUFnomes').className = 'pressed grp0' : document.getElementById('btnUFnomes').className = 'unpressed grp0';
	cidNomes = bolStr(localStorage.getItem('SN-cidNomes'));
	cidNomes ? document.getElementById('btnCidNomes').className = 'pressed grp0' : document.getElementById('btnCidNomes').className = 'unpressed grp0';
	graf0 = bolStr(localStorage.getItem('SN-graf0'));
	graf0 ? document.getElementById('btnGraf0').className = 'pressed grp0' : document.getElementById('btnGraf0').className = 'unpressed grp0';
	// Mapa-Múndi
	var img = document.getElementById('imgMundo');
	mundoW = img.naturalWidth;
	mundoH = img.naturalHeight;
	ctxMundo = document.getElementById('cnvMundo');
	ctxMundo.width = mundoW;
	ctxMundo.height = mundoH;
	ctxMundo = ctxMundo.getContext('2d');
	ctxMundo.drawImage(img,0,0,mundoW,mundoH);
	drawRectMundo();
	// /Mapa-Múndi
	// Vegetação
	ctxVeg = document.getElementById('cnvVeg');
	ctxVeg = ctxVeg.getContext('2d');
	ctxGraf = document.getElementById('cnvGraf');
	ctxGraf = ctxGraf.getContext('2d');
	drawGraf();
	if (modo != '0') {
		document.getElementById('txtPais').value = paisN;
		imgVeg = document.getElementById('imgVeg');
		paisW = imgVeg.naturalWidth;
		paisH = imgVeg.naturalHeight;
		l10 = Math.log10(paisW*paisH);
		ctxVeg0 = document.getElementById('cnvVeg0');
		ctxVeg0.width = paisW;
		ctxVeg0.height = paisH;
		ctxVeg0 = ctxVeg0.getContext('2d');
		ctxVeg0.drawImage(imgVeg,0,0);
		if (lon1 < lon0) {
			antiM = paisW*(180-lon0)/(360+lon1-lon0); // número de pixels no Hemisfério Oriental
			fxG = (360+lon1-lon0)/paisW;
		} else {
			fxG = (lon1-lon0)/paisW;
		}
		fyG = (lat1-lat0)/paisH;
		//var lsi = localStorage.getItem('SN-'+document.getElementById('selPais').value); // LocalStorage Item
		var lsi = localStorage.getItem('SN-'+paisC); // LocalStorage Item
		if (lsi != null) {
			var p1 = lsi.indexOf('/');
			var p2 = lsi.indexOf('|');
			xC = parseFloat(lsi.substr(0,p1));
			yC = parseFloat(lsi.substr(p1+1,p2-p1-1));
			zoom = parseFloat(lsi.substr(p2+1));
			document.getElementById('pZoom').innerHTML = (1/zoom).toPrecision(2);
		} else {
			xC = paisW/2;
			yC = paisH/2;
		}
		//bodyResize();
		if (modo == 'v') {
			btnClick(document.getElementById('btnMap'));
		} else
		if (modo == 'g') {
			btnClick(document.getElementById('btnGraf'));
		}
	} else {
		bodyResize();
	}
}
var timerKeyMove=null,moveDown=false,moveLeft=false,moveUp=false,moveRight=false,zoomDown=false,zoomUp=false;
function docKeyMove(code) {
	var moveStep = 10*zoom;
	var zoomStep = 1.025;
	if (moveDown) {
		yC += moveStep;
	}
	if (moveLeft) {
		xC -= moveStep;
	}
	if (moveUp) {
		yC -= moveStep;
	}
	if (moveRight) {
		xC += moveStep;
	}
	if (zoomDown) {
		zoom /= zoomStep;
		document.getElementById('pZoom').innerHTML = (1/zoom).toPrecision(2);
	}
	if (zoomUp) {
		zoom *= zoomStep;
		document.getElementById('pZoom').innerHTML = (1/zoom).toPrecision(2);
	}
	drawVeg();
}
function docKeyDown(e) {
	if (e.code == 'KeyM') {
		var l = document.getElementById('linkMap');
		//l.href = 'https://www.google.com/maps/search/?api=1&query='+lat+','+lon+'&zoom=12';
		l.href = 'https://www.google.com/maps/@?api=1&map_action=map&center='+lat+','+lon+'&zoom=12&basemap=satellite';
		l.click();
	} else
	if (['ArrowDown','ArrowLeft','ArrowUp','ArrowRight','PageDown','PageUp'].indexOf(e.code) >= 0) {
		switch (e.code) {
			case 'ArrowDown' :
				moveDown = true;
				moveUp = false;
				break;
			case 'ArrowLeft' :
				moveLeft = true;
				moveRight = false;
				break;
			case 'ArrowUp' :
				moveUp = true;
				moveDown = false;
				break;
			case 'ArrowRight' :
				moveRight = true;
				moveLeft = false;
				break;
			case 'PageDown' :
				zoomDown = true;
				zoomUp = false;
				break;
			case 'PageUp' :
				zoomUp = true;
				zoomDown = false;
				break;
		}
		if (timerKeyMove == null) {
			docKeyMove();
			timerKeyMove = setInterval(docKeyMove,10);
		}
		e.preventDefault();
	}
}
function docKeyUp(e) {
	if (['ArrowDown','ArrowLeft','ArrowUp','ArrowRight','PageDown','PageUp'].indexOf(e.code) >= 0) {
		switch (e.code) {
			case 'ArrowDown' :
				moveDown = false;
				break;
			case 'ArrowLeft' :
				moveLeft = false;
				break;
			case 'ArrowUp' :
				moveUp = false;
				break;
			case 'ArrowRight' :
				moveRight = false;
				break;
			case 'PageDown' :
				zoomDown = false;
				break;
			case 'PageUp' :
				zoomUp = false;
				break;
		}
		if (!(moveDown || moveLeft || moveUp || moveRight || zoomDown || zoomUp)) {
			clearInterval(timerKeyMove);
			timerKeyMove = null;
		}
		e.preventDefault();
	}
}
document.addEventListener('keydown',docKeyDown);
document.addEventListener('keyup',docKeyUp);
document.addEventListener('mousemove',docMouseMove);
document.addEventListener('mouseup',docMouseUp);
//document.addEventListener('mousedown',docMouseDown);
function txtPaisInput(who) {
//	console.log('??');
	url = 'getPaises.php?txt='+who.value;
	conecta('text');
}
function txtPaisKeyDown(e) {
	if (e.code == 'ArrowDown' || e.code == 'ArrowUp') {
		var selP = document.getElementById('selPaises');
		e.stopPropagation();
		selP.focus();
		if (e.code == 'ArrowDown') {
			selP.selectedIndex = 0;
		} else
		if (e.code == 'ArrowUp') {
			selP.selectedIndex = selP.options.length-1;
		}
	} else
	if (e.code == 'Enter') {
		var selP = document.getElementById('selPaises');
		if (selP.options.length == 1) {
			selP.selectedIndex = 0;
		}
	}
}
function selPaisesClick() {
	var f = document.getElementById('frmPais');
	f.submit();
}
function selPaisesKeyDown(e) {
	if (e.code == 'ArrowDown' || e.code == 'ArrowUp') {
		e.stopPropagation();
	} else
	if (e.code == 'Enter') {
		var f = document.getElementById('frmPais');
		f.submit();
	}
}
function rngInput(who) {
	switch (who.id) {
		case 'rngLineW' :
			document.getElementById('labLineW').innerHTML = 'Espessura da linha (UFs): '+who.value+'px';
			break;
		case 'rngFonteUF' :
			document.getElementById('labFonteUF').innerHTML = 'Tamanho da fonte (UFs): '+who.value+'px';
			break;
		case 'rngFonteCid' :
			document.getElementById('labFonteCid').innerHTML = 'Tamanho da fonte (Cidades): '+who.value+'px';
			break;
	}
}
</script>
</head>
<body onload='bodyLoad()' onresize='bodyResize()'>
<!-- NAV1 -->
<nav id='nav1'>
<h1>SimNation</h1>
<form id='frmPais' autocomplete='off' method='get' action='index.php'>
	<input type='text' id='txtPais' oninput='txtPaisInput(this)' onfocus='txtPaisInput(this)' onkeydown='txtPaisKeyDown(event)' />
	<div id='divPaises'></div>
</form>
<div id='divMap'>
	<canvas id='cnvMundo'>Seu navegador não suporta a tag <i>canvas</i> do HTML5.</canvas>
</div>
<div id='divTxt'>
	<span id='spnPais'>&nbsp;</span>
	<canvas id='cnvPais' onmousedown='veg1MouseDown(event)' onmousemove='veg1MouseMove(event)' onmouseup='veg1MouseUp(event)'>Seu navegador não suporta a tag <i>canvas</i> do HTML5.</canvas>
	<!--span id='spnCoords'>&nbsp;</span>
	<span id='spnVeg'>&nbsp;</span-->
</div>
<div id='divSelGraf'>
	<form id='frmVar' autocomplete='off' method='get' action='index.php'>
<?php
$q = "select table_name from information_schema.tables where table_schema='public' and table_type='BASE TABLE' order by lower(table_name)";
$res = pg_query($conn,$q);
if ($res) {
echo "		<input type='hidden' name='p' value='$p' />
		<select id='selVar' name='v' onchange='mudaVar()'>
			<option>Escolha uma variável</option>\n";
	while ($row = pg_fetch_array($res,NULL,PGSQL_NUM)) {
		if (!in_array($row[0],['cty','lang'])) {
			if ($row[0] == $v) {
				echo "			<option value='$row[0]' selected='selected'>$row[0]</option>";
			} else {
				echo "			<option value='$row[0]'>$row[0]</option>";
			}
		}
	}
}
?>
		</select>
	</form>
	<div id='divTabInfo'>
		<span id='spnTabInfo'></span>
	</div>
</div>
<!--div id='divImgs'>
</div-->
<img id='imgMundo' src='mundo.png' />
</nav>
<!-- /NAV1 -->
<!-- NAV2 -->
<nav id='nav2'>
<?php
if ($v) {
	echo "	<div id='btnMap' tabindex='0' class='unpressed grp1' onclick='btnClick(this)' title='Vegetação'><img src='Earth.png' /></div>
	<div id='btnGraf' tabindex='0' class='pressed grp1' onclick='btnClick(this)' title='Gráficos'><img src='Graf.png' /></div>\n";
} else {
	echo "	<div id='btnMap' tabindex='0' class='pressed grp1' onclick='btnClick(this)' title='Vegetação'><img src='Earth.png' /></div>
	<div id='btnGraf' tabindex='0' class='unpressed grp1' onclick='btnClick(this)' title='Gráficos'><img src='Graf.png' /></div>\n";
}
?>
	<!--div id='btnCfg' tabindex='0' class='unpressed grp0' onclick='btnClick(this)' title='Configurações'><img src='cogs.png' /></div-->
	<div id='divBtnVeg'>
		<hr>
		<p id='pZoom' title='Para alterar o zoom, clique no mapa com o botão direito e arraste o mouse para cima e para baixo. Clique aqui para voltar ao zoom inicial.' onclick='zoomClick()'>Zoom</p>
		<hr>
		<div id='btnUFlinhas' tabindex='0' class='unpressed grp0' onclick='btnClick(this)' title='Linhas das UFs'><img src='UFlinhas.png' /></div>
		<div id='btnUFnomes' tabindex='0' class='unpressed grp0' onclick='btnClick(this)' title='Nomes das UFs'><img src='UFnomes.png' /></div>
		<div id='btnCidNomes' tabindex='0' class='unpressed grp0' onclick='btnClick(this)' title='Nomes das Cidades'><img src='cidNomes.png' /></div>
		<hr>
		<div id='divRaster'>
			<div id='btnRaster'>
				<div id='btnAlt' tabindex='0' class='unpressed grp2' onclick='btnClick(this)' title='Altitude'><img src='alt.png' /></div>
				<div id='btnTemp' tabindex='0' class='unpressed grp2' onclick='btnClick(this)' title='Temperatura'><img src='temp.png' /></div>
				<div id='btnChuv' tabindex='0' class='unpressed grp2' onclick='btnClick(this)' title='Pluviosidade'><img src='chuv.png' /></div>
				<div id='btnDens' tabindex='0' class='unpressed grp2' onclick='btnClick(this)' title='Densidade populacional'><img src='dens.png' /></div>
			</div>
			<canvas id='aRaster' onmousedown='aMouseDown(event)' onmousemove='aMouseMove(event)' onmouseup='aMouseUp(event)' >Seu navegador não suporta a tag <i>canvas</i> do HTML5.</canvas>
			<img class='oculto' id='imgTransp' src='transp.png' />
			<img class='oculto' id='imgOpaco' src='opaco.png' />
		</div>
	</div>
	<div id='divBtnGraf'>
		<hr>
		<div id='btnGraf0' tabindex='0' class='unpressed grp0' onclick='btnClick(this)' title='Eixo Y começa do zero'><img src='graf0.png' /></div>
	</div>
	<!--p id='pS'>S</p-->
</nav>
<!-- /NAV2 -->
<!-- MAIN -->
<main id='main'>
	<canvas id='cnvVeg' onmousedown='vegMouseDown(event,1)' onmousemove='vegMouseMove(event,1)' onmouseup='vegMouseUp(event,1)' onwheel='vegWheel(event)'
						ontouchstart='vegMouseDown(event,2)' ontouchmove='vegMouseMove(event,2)' ontouchend='vegMouseUp(event,2)' oncontextmenu='return false'>Seu navegador não suporta a tag <i>canvas</i> do HTML5.</canvas>
	<canvas id='cnvVeg0'>Seu navegador não suporta a tag <i>canvas</i> do HTML5.</canvas>
	<a href='' target='_blank' id='linkMap'></a>
<?php
	if ($p) {
		echo "	<img id='imgVeg' class='oculto' src='paises/$p.png' />\n";
	}
/* Tela de preferências {usar ou não a rodinha do mouse; gerar URL da posição/configuração exata; tamanho das fontes; espessura das linhas;
	zoom a partir do qual mostra cidades (global/por país); }*/
?>
	<div id='divGraf'>
		<canvas id='cnvGraf'>Seu navegador não suporta a tag <i>canvas</i> do HTML5.</canvas>
	</div>
</main>
<!-- /MAIN -->
</body>
<div id='divHint'></div>
<div id='dumHint'></div>
<div id='bgCfg'>
	<div id='divCfg'>
		<h2>Configurações</h2>
		<div>
			<input type='checkbox' id='chkWheel' checked /><label for='chkWheel'>Usar a rodinha do mouse para zoom</label>
		</div>
		<div class='divRng'>
			<label id='labLineW' class='labRng' for='rngLineW'></label><input type='range' id='rngLineW' min='10' max='99' value='12' step='1' oninput='rngInput(this)' />
		</div>
		<div class='divRng'>
			<label id='labFonteUF' class='labRng' for='rngFonteUF'></label><input type='range' id='rngFonteUF' min='10' max='99' value='20' step='1' oninput='rngInput(this)' />
		</div>
		<div class='divRng'>
			<label id='labFonteCid' class='labRng' for='rngFonteCid'></label><input type='range' id='rngFonteCid' min='10' max='99' value='12' step='1' oninput='rngInput(this)' />
		</div>
		<div>
			<button>OK</button>
			<button>Cancelar</button>
		</div>
	</div>
</div>
</html>
