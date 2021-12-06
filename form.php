<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="/thanks.php"  method="post">
    <div>
      <label  for="firstname">Prénom :</label>
      <input  type="text"  id="firstname"  name="firstname">
    </div>
    <div>
      <label  for="lastname">Nom :</label>
      <input  type="text"  id="lastname"  name="lastname">
    </div>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div>
    <div>
      <label  for="mobile">Téléphone Mobile :</label>
        <input  type="number"  id="mobile"  name="mobile">
    </div>
    <label for="subject">Choisissez un sujet:</label>

    <select name="subject" id="subject">
        <option value="">--Please choose an option--</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
        <option value="hamster">Hamster</option>
        <option value="parrot">Parrot</option>
        <option value="spider">Spider</option>
        <option value="goldfish">Goldfish</option>
    </select>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
<?php var_dump($_POST); ?>
</body>
</html>
