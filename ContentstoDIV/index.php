<html>
<head>

</head>
<script type="text/javascript">
function load(thediv, thefile) {
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById(thediv).innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open('GET', thefile, true);
	xmlhttp.send();
}
</script>
<body>

<input type="submit" onclick="load('anotherdiv', 'include.inc.php');">

<div id="anotherdiv"></div>

</body>

</html>