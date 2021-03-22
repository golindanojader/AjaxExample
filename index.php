	


<!doctype html>
<html>
<head>
<script type="text/javascript" src="jquery-3.0.0.min.js"></script>
</head>
<body>
<form id="loginform" method="post">
<div>
Username:
<input type="text" name="username" id="username" />
Password:
<input type="password" name="password" id="password" />

<input type="submit" name="loginBtn" id="loginBtn" value="Login" />
</div>
</form>


<script type="text/javascript">
	
$(document).ready(function() {

	
$('#loginform').submit(function(e) {

	e.preventDefault();
$.ajax({
type: "POST",
url: 'login.php',
data: $(this).serialize(),
success: function(response)
{
var jsonData = JSON.parse(response);
// user is logged in successfully in the back-end
// let's redirect
if (jsonData.success == "1"){

window.location.href =  "benvenido.php";

}
else
{
alert('Invalid Credentials!');
}
}
});
});
});
</script>
</body>
</html>