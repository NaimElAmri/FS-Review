<article class="hreview open special">
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Sign Up</title>
		<meta charset="UTF-8">
	</head>

	<body>
	<div class="row">
	<form action="/user/doCreate" method="post" class="col-6">
		<div class="form-group">
		  <label for="fname">Vorname</label>
	  	<input id="fname" name="fname" type="text" class="form-control">
		</div>
		<div class="form-group">
		  <label for="lname">Nachname</label>
	  	<input id="lname" name="lname" type="text" class="form-control">
		</div>
		<div class="form-group">
		  <label for="email">Mail</label>
	  	<input id="email" name="email" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label" for="password">Passwort</label>
			<input id="password" name="password" type="password" class="form-control">
		</div>
		<div class="form-group">
			<a id="signup" href="../user/login">Du hast doch ein Konto? Logge dich hier ein!</a>
		</div>
		<button type="submit" name="send" class="btn btn-primary">Absenden</button>
	</form>
</div>
	</body>

	</html>
</article>