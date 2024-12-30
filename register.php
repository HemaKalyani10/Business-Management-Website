<?php include("head.html")
?>
<body>
<div class="register">

<form action="connect.php" method="post">

<br><br>
<h1>Register Form</h1>
<label for="username">USERNAME</label>
<input type="text" size="30" name="n" placeholder="enter your name" required />
<br><br>
<label for="age">AGE</label>
<input type="number" size="3" name="a" />
<br><br>
<label for="dob">DOB</label>
<input type="date" name="d" />
<br><br>
<label for="gender">GENDER</label>
<input type="radio" value="male" name="g" />MALE
<input type="radio" value="female" name="g" />FEMALE
<input type="radio" value="others" name="g" />OTHERS
<br><br>
<label for="email">EMAIL</label>
<input type="email" size="40" name="e">
<br><br>
<label for="password">PASSWORD</label>
<input type="password" maxlength="8" min="4" name="p">
<br><br>
<label for="dept">Photography Type</label>
<select name="s">
<option value="Wedding">Wedding</option>
<option value="Birthday">Birthday</option>
<option value="Maternity">Maternity</option>
<option value="Outdoor">Outdoor</option>
<option value="ECE">Baby photoshoot</option>
</select>
<br><br>
<input type="submit" value="Register">
<input type="reset" value="Cancel">

<br><br>

</form>


</div>


</body>
<?php include("foot.html")
?>
