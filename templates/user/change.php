<article class="hreview open special">
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Ändern</title>
		<meta charset="UTF-8">
	</head>

	<body>
	<div class="row">
	<form action="/user/dochange" method="post" class="col-6">
		<div class="form-group">
		  	<label for="fname">Vorname</label>
	  		<input id="fname" value="<?= $user->firstName?>" name="fname" type="text" class="form-control">
		  	<input id="id" value="<?= $user->id?>" name="id" type="hidden">
		</div>
		<div class="form-group">
		  	<label for="lname">Nachname</label>
	  		<input id="lname" value="<?= $user->lastName?>" name="lname" type="text" class="form-control">
		</div>
		<div class="form-group">
			<label class="control-label" for="password">Passwort</label>
			<input id="password" name="password" type="password" class="form-control">
		</div>
		<button type="submit" name="send" class="btn btn-primary">Absenden</button>
	</form>
</div>
	</body>

	</html>
</article>