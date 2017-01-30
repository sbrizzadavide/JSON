<html>
<head>
	<title>JSON-AJAX-PHP</title>
	<script src="ajax.js"></script>
</head>
<body onload="reload()">
	<h1>JSON-AJAX-PHP</h1>
	
	<p id="test">Select</p>
		
	<form>
	<select id="student" name="student" onchange="myFun(option.value, this.value)">
	</select>
	<select name="option" onchange="myFun(this.value, student.value)">
		<option id="hide" value="">Select</option>
		<option value="0">Name</option>
		<option value="1">Surname</option>
		<option value="2">Class</option>
	</select>
	</form>	
	
</body>
</html>
