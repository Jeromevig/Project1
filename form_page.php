<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include ("header.php") ?>

<div class="form">
	<form action="/ma-page-de-traitement" method="post">
	    <div>
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="user_name">
	    </div>
	    <div>
		<label for="prenom">Prénom :</label>
		<input type="text" id="nom" name="user_name">
	    </div>
	    <div>
		<label for="courriel">Courriel :</label>
		<input type="email" id="courriel" name="user_email">
	    </div>
	    <div>
		<label for="message">Message :</label>
		<textarea id="message" name="user_message"></textarea>
	    </div>
	    <div class="button">
		<button type="submit">Envoyer votre message</button>
	    </div>
	</form>





</div>

<?php include("footer.php") ?>

</body>
</html>
