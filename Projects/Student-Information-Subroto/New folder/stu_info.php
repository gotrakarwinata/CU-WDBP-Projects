
<?php
include("confiq.php");

?>



<!DOCKTYPE html><head> 
<title> </title>
<style type="text/css">

body{
	background:url(image/new6.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

#p
{
	width:100%;
	height:100px;
	
	
	top:0px;
	position: absolute;
	left:500px;
}
#form
{
	width:100%;
	height:210px;
	
	
	top:80px;
	position: absolute;
	left:500px;
	text-align:center;

}












</style>



</head>
<body style= background-color: bgcolor="#23E4BE">


<div  id="p">
<p style="color: #A81726"><h2><b> Student Account </b></h2><p>
</div>
<div id="form" >
<form id="signupform" name="signupform" method="post" action="s_insert.php";>
<table  width="600" border="0" cellspacing="0" cellpading="2">


<tr>

<td><b> Id </b></td>
<td><input name="stu_id" id="name" type="text"><td>

</tr>
<tr>

<td><b>First name</b></td>
<td><input name="first_name" id="name" type="text"><td>

</tr>
<tr>


<tr>

<td><b> Mid name </b></td>
<td><input name="mid_name" id="name" type="text"><td>

</tr>

<tr>

<td> <b>Last name </b></td>
<td><input name="last_name" id="name" type="text"><td>

</tr>


<tr>

<td> <b>Email </b></td>
<td><input name="email" id="name" type="text"><td>

</tr>

<tr>

<td> <b>Phone num </b></td>
<td><input name="phone_num" id="name" type="text"><td>

</tr>
<tr>
<td><b> Address</b> </td>
<td><textarea name="address" cols="22" rows="3" id="name"></textarea>
<td>
</tr>

<tr>

<td> <b>Gender </b></td>
<td><select input name="gender" id="name" type="text">
<option value="">Male</option>
	<option value="">Female</option><td>

</tr>



</table>
 <button id="signupbtn" input type="submit"><b>Create Account</b></button>

</form>



</body>
</html>




