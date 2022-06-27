<h2> Resultados de la Encuesta: </h2>
<ul>
    <li><strong>Encuestas completadas</strong> <?php echo $count_surveys_completed; ?> </li>
    <li><strong>Tiempo promedio en horas por Red Social:</strong></li>
    <li><strong>Facebook:</strong> <?php echo sprintf("%.2f", $get_avg_social_network->avg_fb); ?> </li>
    <li><strong>Whatsapp:</strong> <?php echo sprintf("%.2f", $get_avg_social_network->avg_wa); ?> </li>
    <li><strong>Twitter:</strong> <?php echo sprintf("%.2f", $get_avg_social_network->avg_tw); ?> </li>
    <li><strong>Instagram:</strong> <?php echo sprintf("%.2f", $get_avg_social_network->avg_ig); ?> </li>
    <li><strong>TikTok:</strong> <?php echo sprintf("%.2f", $get_avg_social_network->avg_tt); ?> </li>
    <li><strong>Red Social Favorita: </strong> <?php if($get_favorite_social_network){ echo $get_favorite_social_network->name_social_network;} ?> </li>
    <li><strong>Red Social Menos Querida: </strong> <?php if($get_less_dear_social_network){ echo $get_less_dear_social_network->less_dear_social_network;} ?> </li>
    <li><strong>Red Social mas usada por Rango de Edad:</strong></li>
    <?php foreach ($get_most_used_social_network_by_age_range as $key => $value) { ?>
        
        <li><strong><?php echo $value['name_social_network']; ?></strong> <?php echo ' - Total: ' . $value['total'] . ' - Edades entre: ' . $value['age_range']; ?></li>
        
    <?php } ?>
    <a href="<?php echo site_url('index.php'); ?>" class="btn btn-outline-primary">Ir al Inicio</a>
</ul>