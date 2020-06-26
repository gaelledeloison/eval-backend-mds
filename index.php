index.php

<form action="/my-handling-form-page" method="post">

</form>
<form action="/ma-page-de-traitement" method="post">
    <div>
        <label  name for="name"> GD Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
     <label numéro for="Num"> GD Numéro :</label>
        <input type="text" id="Numéro" name="user_name">
    </div>
    <div>
    <label adresse for="Adresse"> GD Adresse :</label>
        <input type="text" id="Adresse" name="user_name">
    </div>
    <div>
        <label for="mail"> GD e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="msg">GD Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
     <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
 
</form>