<form action="thanks.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="lastname" name="user_lastname">
    </div>
    <div>
        <label for="name">Prénom :</label>
        <input type="text" id="firstname" name="user_firstname">
    </div>
    <div>
        <label for="email">Courriel :</label>
        <input type="email" id="email" name="user_email">
    </div>
    <div>
        <label for="name">Téléphone :</label>
        <input type="tel" id="phone" name="user_phone">
    </div>
    <div>
        <label for="name">Sujet :</label>
        <select id="topic" name="user_topic">
            <option value="">Choisir un sujet</option>
            <option value="nourriture">Nourriture</option>
            <option value="alimentation">Alimentation</option>
            <option value="sport">Sport</option>
            <option value="peinture">Peinture</option>
            <option value="danse">Danse</option>
            <option value="chant">Chant</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>

<?php
var_dump($_POST);
echo  $_POST['user_name'];
?>