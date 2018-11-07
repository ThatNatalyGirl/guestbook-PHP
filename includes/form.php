<form name="guest" action="thanks.php" method="post">
	<div class="form-group">
		<p>First Name: <input type="text" name="firstName" placeholder="First Name" /></p>
	</div>	
	<div class="form-group">
		<p>Last Name: <input type="text" name="lastName" placeholder="Last Name" /></p>
	</div>	
	<div class="form-group">
		<p>Phone Number: <input type="tel" name="phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/></p>
	</div>
	<div class="form-group">
		<p>Email: <input type="text" name="email" placeholder="Email"/></p>
	</div>
	<div class="form-group">	
		<textarea name="message" placeholder="Enter your message here!"></textarea>
	</div>	
	<button type="submit" >Submit</button>
</form>

<!-- //all forms have an action and a method
//we want it to be post bc we are changing the database -->
<!-- form-group is this how he likes it and is best business practice per his experience -->