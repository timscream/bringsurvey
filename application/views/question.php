<div class="alert alert-dark">
    Preguntas 9
</div>
<p class="font-weight-bolder">Por favor responda las siguientes preguntas</p>
<form method="post" action="<?php echo site_url('survey/add'); ?>">
<div class="form-text">
    <label class="form-text-label" for="choice1">
        Correo electrónico
    </label>
    <input required class="form-text-input" type="email" name="input_email_respondent" id="input_choice1" value="" pattern="[a-zA-Z0-9!#$%&'*_+-]([\.]?[a-zA-Z0-9!#$%&'*_+-])+@[a-zA-Z0-9]([^@&%$\/()=?¿!.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?">
</div>
<div class="form-text">
    <label class="form-text-label" for="choice2">
        Edad
    </label>
    <select required class="form-text-input" name="select_age_respondent" id="select_choice2" value="">
        <option value=""></option>     
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
    <select required class="form-text-input" name="select_genere_respondent" id="select_choice3" value="">
        <option value=""></option>    
        <option value="1">Masculino</option>
        <option value="2">Femenino</option>
    </select>
</div>
<div class="form-text">
    <label class="form-text-label" for="choice4">
        Red Social favorita
    </label>
    <select required class="form-text-input" name="select_social_network_respondent" id="select_choice4" value="">
        <option value=""></option>
        <?php foreach($social_networks as $key => $value){ ?>

            <option value="<?php echo $value->internalid; ?>">
                <?php echo $value->name_social_network; ?>
            </option>
        
        <?php } ?>
    </select>
</div>
<div class="form-text">
    <p>Tiempo Promedio en horas al día en las siguientes Redes Sociales:</p>    
    <label class="form-text-label" for="choice5">
        Facebook
    </label>
    <input required class="form-text-input" type="number" name="input_avg_fb" id="input_choice5" value="" min="0" max="24">
    <label class="form-text-label" for="choice6">
        WhatsApp
    </label>
    <input required class="form-text-input" type="number" name="input_avg_wa" id="input_choice6" value="" min="0" max="24">
    <label class="form-text-label" for="choice7">
        Twitter
    </label>
    <input required class="form-text-input" type="number" name="input_avg_tw" id="input_choice7" value="" min="0" max="24">
    <label class="form-text-label" for="choice8">
        Instagram
    </label>
    <input required class="form-text-input" type="number" name="input_avg_ig" id="input_choice8" value="" min="0" max="24">
    <label class="form-text-label" for="choice9">
        Tiktok
    </label>
    <input required class="form-text-input" type="number" name="input_avg_tt" id="input_choice9" value="" min="0" max="24">
</div>
<input type="submit" value="Enviar" class="btn btn-primary mt-3">
<br>
<a href="<?php echo site_url('index.php'); ?>" class="btn btn-outline-primary">Ir al Inicio</a>