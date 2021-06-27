<form action="newshow.php" method="post">
<h4>New User details :</h4>

<label for="uname">Username:</label> 
<input type="text" name="uname" id="uname" required>
<br><br>

<label for="name">Name:</label> 
<input type="text" name="name" id="name" placeholder="Enter the your name" required>
<br><br>

<label for="mobile">Mobile No.:</label> 
<input type="tel" name="mobile" id="mobile" placeholder="Enter your mobile no." pattern="[0-9]{10}" required>
<br><br>

<label for="email">E-mail:</label>
<input type="email" name="email" id="email" placeholder="Enter your e-mail" required>
<br><br>

<label for="fname">Father's Name:</label> 
<input type="text" name="fname" id="fname" placeholder="Enter your father's name" required>
<br><br>

<label for="fmobile">Father's Mobile No.:</label> 
<input type="tel" name="fmobile" id="fmobile" placeholder="Enter your mobile no." pattern="[0-9]{10}" required>
<br><br>

<label for="address">Address</label>
<textarea name="address" id="address" placeholder="Enter your address" cols="10" rows="5" required>
</textarea>
<br><br>

<input type="submit" value="submit" name="submit">
</form>
