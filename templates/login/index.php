<article class="hreview open special">
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Login</title>
		<meta charset="UTF-8">
	</head>

	<body>
	<div class="row">
		<form action="/user/doCreate" method="post" class="col-6">
			<div class="form-group">
			  <label for="email">Mail</label>
	  		<input id="email" name="email" type="text" class="form-control">
			</div>
			<div class="form-group">
				<label class="control-label" for="password">Passwort</label>
				<input id="password" name="password" type="password" class="form-control">
			</div>
			<div class="form-group">
				<a id="signup">You dont have an Account? Create one here!</a>
			</div>
			<button type="submit" name="send" class="btn btn-primary">Einloggen</button>
		</form>
	</div>
	</body>

	</html>
</article>