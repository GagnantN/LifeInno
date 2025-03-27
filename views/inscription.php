<div class="inscription">
    <a href="index.php?page=accueil"><img src="assets/images/logo.png" class="logoInscription" alt="Photo du Site Direction Accueil" ></a>
        <form class="formInscrip" method="POST">
            <label class="labelInscription">NOM<input class="inscrNom" type="text" name="nom" placeholder="Nom"></label>
            <label class="labelInscription">PRENOM<input class="inscrPrenom" type="text" name="prenom" placeholder="Prénom"></label>
            <label class="labelInscription">ADESSE<input class="inscrAdr" type="text" name="adresse" placeholder="Adresse"></label>
            <label class="labelInscription">ADRESSE POSTAL<input class="inscrAdrP" type="text" name="adresse_postal" placeholder="Adresse Postal" required></label>
            <label class="labelInscription">E-MAIL<input class="inscrMail" type="email" name="mail" placeholder="Email (obligatoire)" required></label>
            <label class="labelInscription">MOT DE PASSE<input class="inscrPass" type="password" name="password" placeholder="Mot de passe (obligatoire)" required></label>
            <button class="buttonInscription" type="submit">INSCRIPTION</button>
        </form>
    </div>