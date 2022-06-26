<div class="alert alert-dark">
    Preguntas 9
</div>
<p class="font-weight-bolder">Por favor llene las siguientes preguntas</p>
<form method="post" action="<?php echo site_url('survey/process'); ?>">
<div class="form-text">
    <label class="form-text-label" for="choice1">
        Correo del participante
    </label>
    <input class="form-text-input" type="email" name="input_email_respondent" id="input_choice1" value="" pattern="[a-zA-Z0-9!#$%&'*_+-]([\.]?[a-zA-Z0-9!#$%&'*_+-])+@[a-zA-Z0-9]([^@&%$\/()=?¿!.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?">
</div>
<div class="form-text">
    <label class="form-text-label" for="choice2">
        Edad
    </label>
    <select class="form-text-input" name="select_age_respondent" id="select_choice2" value="">
        <option value="1">18-25</option>
        <option value="2">26-33</option>
        <option value="3">34-40</option>
        <option value="4">40+</option>
    </select>
</div>
<div class="form-text">
    <label class="form-text-label" for="choice3">
        Sexo
    </label>
    <select class="form-text-input" name="select_genere_respondent" id="select_choice3" value="">
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>
</div>
<div class="form-text">
    <label class="form-text-label" for="choice4">
        Red Social favorita
    </label>
    <select class="form-text-input" name="select_social_network_respondent" id="select_choice4" value="">
        <option value="FB">Facebook</option>
        <option value="WA">WhatsApp</option>
        <option value="TW">Twitter</option>
        <option value="IG">Instagram</option>
        <option value="TT">Tiktok</option>
    </select>
</div>
<div class="form-text">
    <p>Tiempo Promedio en horas al día en las siguientes Redes Sociales:</p>    
    <label class="form-text-label" for="choice5">
        Facebook
    </label>
    <input class="form-text-input" type="number" name="input_email_respondent" id="input_choice5" value="" min="0" max="24">
    <label class="form-text-label" for="choice6">
        WhatsApp
    </label>
    <input class="form-text-input" type="number" name="input_email_respondent" id="input_choice6" value="" min="0" max="24">
    <label class="form-text-label" for="choice7">
        Twitter
    </label>
    <input class="form-text-input" type="number" name="input_email_respondent" id="input_choice7" value="" min="0" max="24">
    <label class="form-text-label" for="choice8">
        Instagram
    </label>
    <input class="form-text-input" type="number" name="input_email_respondent" id="input_choice8" value="" min="0" max="24">
    <label class="form-text-label" for="choice9">
        Tiktok
    </label>
    <input class="form-text-input" type="number" name="input_email_respondent" id="input_choice9" value="" min="0" max="24">
</div>
<input type="submit" value="Enviar" class="btn btn-primary mt-3">
</form>