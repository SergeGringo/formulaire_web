<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobil.css">
    <title>Formulaire</title>
</head>
<body>
    <div class="contact">
        <div class="trait"></div>
        <h1>Contactez-moi</h1>
      </div>
    <form action="form.php" method="post">
   

        <div class="conteneur_form">
          <div class="forme_1">
            <label for="Prenom">Prénoms</label>
            <input type="text" name="Prenom" placeholder="Votre prénom" required>
          </div>
          
          <div class="forme_2">
            <label for="nom">Nom</label>
            <input type="text" name="nom" placeholder="votre nom" required>
          </div>
        </div>
        <div class="conteneur_form1">
          <div class="forme_3">
            <label for="mail">E-mail * </label>
            <input type="email" name="mail" placeholder="rentrer votre adresse E-mail" required>
          </div>

          <div class="forme_4">
            <label for="telephone">Téléphone</label>
            <input type="number" name="telephone" placeholder="votre de numéro de téléphone" required>
          </div>
        </div>
        <div class="zone_de_texte">
        <label for="message">Message</label>
        <textarea name="message" id="message" placeholder="veuillez laisser un message" required></textarea>
            <p class="those_informations">* Ces informations sont réquises.</p>
            <button type="submit">Envoyer</button>
            <p  class="contact_us">Votre message à bien été envoyé. Merci de m'avoir contacté :)</p>
        </div> 
    </form>
    
</body>
</html>