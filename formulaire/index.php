<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
    <div class="image">
      <img src="./img/formulaire-1024x1024.png" alt="form" />
    </div>
    <div class="form" id="form">
      <form method="post" action="traitement.php" style="border: 1px solid black">
        <label for="gender">Genre</label>
        <input type="radio" value="homme" name="gender" /> Homme
        <input type="radio" value="femme" name="gender" /> Femme<br />
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" /><br />
        <label for="firstname">Prénom:</label>
        <input type="text" id="firstname" name="firstname" /><br />
        <label for="date">Date de naissance:</label>
        <input type="date" id="date" name="date" /><br />
        <label for="adress">Adresse:</label>
        <input type="text" id="adress" name="adress" /><br />
        <label for="codepostal">Code Postal:</label>
        <input type="text" id="codepostal" name="codepostal" /><br />
        <label for="town">Ville:</label>
        <input type="text" id="town" name="town" /><br />
        <label for="country">Pays:</label>
        <select name="country" id="">
          <br />
          <option value="France">France</option>
          <option value="Allemagne">Allemagne</option>
          <option value="Espagne">Espagne</option>
          <option value="Belgique">Belgique</option>
          <option value="Etats unis">Etat unis</option></select
        ><br />
        <label for="mail">Email:</label>
        <input
          type="email"
          id="mail"
          name="mail"
          pattern="^[a-zA-Z0-9.-]+@(gmail.com)|(hotmail.fr)|(outlook.com)$"
          autocomplete="off"
        /><br />
        <label for="tel">Téléphone:</label>
        <input
          type="tel"
          id="tel"
          name="tel"
          pattern="^((0|\+33|32)[1-9]( *[0-9]{2}){4})|((\+1)?( *[0-9]{3}){2}[0-9]{4})$"
          autocomplete="off"
        /><br />
        <label for="pass">Mot de passe:</label>
        <input type="password" id="pass" name="pass" autocomplete="off" /><br />
        <div class="submit">
          <input id="submit" type="submit" value="valider" />
        </div>
      </form>
    </div>
    <script src="./js/index.js"></script>
  </body>
</html>
