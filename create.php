
<?php
$curdir = '';
$urli = $_GET['url'];
$i = '<meta HTTP-EQUIV="REFRESH" content="0; ';
$j = 'url='. $urli .'">';
$name1 = uniqid('', '');
$s1 = 'https://jaurl.ml/' . $name1;
$pname1 = $name1 . '/index.php';
if(empty($_GET['url'])){
	 echo"<br>";
	 echo"No link was Shortned";
}
else{
if (empty($_GET ['pass'])){
	$k = $i.$j;
}
else{
	$k = '<style>
p{
	color : white;
}
#lin {
	text-decoration : none;
	color : white;
	background-color : lightgreen;
	border-radius : 10px;
	font-size : 25px;
	padding : 16px 14px;
}
</style>
<title>JA-URL BEST URL SHORTNER</title>
<body style="background-color : black;">
<center>
<h1 style="color : #FF7A7A; font-size : 30px;">JA URL SHORTNER</h1>
<br>
<form action="index.php" method="post">
<input type="password" placeholder="Enter Password" required="true" style="border-radius : 30px; border :solid 0px green ; padding : 16px 14px; width:80%;" name="pass"></input>
<br>
<br>
<input type="submit" style="border-radius : 30px; font-size: 30px; background-color : #FF7A7A; color: white; border :solid 0px green ; width:80%;" value="submit">
</form>
</body>
<?php
$link = "'.$urli.'";
if ($_POST["pass"] == '.$_GET ["pass"].'){
	echo "<br>";
	echo "<a href='.$urli.' id=lin>Get link</a>";
}
else{
	echo "<br>";
	echo "<p>Enter correct password. </p>";
}
?>';
}
if (empty($_GET ['cn'])){
	$name = uniqid('', '');
	$pname = $name . '/index.php';
	$s = 'https://jaurl.ml/' . $name;
}
else{
$name = $_GET ['cn'];
	$pname = $name . '/index.php';
	$s = 'https://jaurl.ml/' . $name;
}
if(mkdir($curdir .$name , 0777)){
    echo "<br>";
	echo " Your Link Was Shortned sucessfully:";
	echo "<br>";
	echo '<input type="text" style="width: 90%; height: 40px; border: solid 0px green; border-radius : 30px; border : solid 0px green;" id="myinp" value='.$s.'>';
    echo "<br>";
    echo "<br>";
	echo '<input type="button" value="Copy" id="btncopy" style="height: 40px; width : 90%; border:solid 0px green; border-radius:30px; color : white; background-color : #FF7A7A; font-size : 30px;">';
	echo "<br>";
	echo "<br>";
	echo '<a href="'.$s.'" style="text-decoration: none; background-color:white; color: #FF7A7A; padding:11px 12px; border-radius : 10px;">Open Link In New Tab</a>';
	$fp = fopen($pname,'w');
fwrite($fp, $k);
fclose($fp);
}
elseif(mkdir($curdir .$name1 , 0777)){
    echo "<br>";
	echo "Your custum Url alias were not available, so we made a random one.";
	echo "<br>";
	echo "Your Link Was Shortned sucessfully:";
	echo "<br>";
	echo '<input type="text" style="width: 90%; height: 40px; border-radius : 30px; border: solid 0px green;" id="myinp" value='.$s1.'>';
    echo "<br>";
    echo "<br>";
	echo '<input type="button" value="Copy" id="btncopy" style="height: 40px; width : 90%; border : solid 0px green; border-radius: 30px; color : white; background-color : #FF7A7A; font-size : 30px;">';
	echo "<br>";
	echo "<br>";
	echo '<a href="'.$s1.'" style="color:#FF7A7A; text-decoration: none; background-color: white; padding:11px 12px; border-radius : 10px;">Open Link In New Tab</a>';
	$fp = fopen($pname1,'w');
fwrite($fp, $k);
fclose($fp);
 }
}
?>
<script type="text/javascript">
const myinp = document.getElementById("myinp");
const btncopy = document.getElementById("btncopy");
btncopy.onclick = function (){
	myinp.select();
	document.execCommand("Copy");
	alert("Url Was copied to Clipboard");
};
</script>
<br>
<br>
<br>