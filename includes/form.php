<form name="guest" action="addcomment.php" method="post">
	<div class="form-group">
		<p>Name: <input type="text" name="name" placeholder="Name" /></p>
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