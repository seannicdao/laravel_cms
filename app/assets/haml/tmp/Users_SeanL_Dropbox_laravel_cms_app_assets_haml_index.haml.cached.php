<?php require_once app_path().'/views/page_preloader.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700,700italic,500italic,500,400italic,300italic,100italic,100,300" rel='stylesheet' type='text/css' />
        <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
        <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    </head>
 <body>
  <div <?php atts(array('id' => 'container')); ?>>
   @section('head')
            <ul <?php atts(array('class' => 'navigation')); ?>>
                <li><?php echo  $hello ; ?></li>
                <li>Tuotteet</li>
            </ul>
            <h2>Tuotteet</h2>
            <ul <?php atts(array('class' => 'products')); ?>>
                <?php foreach ($myArray as $text): ?>
                    <li>
                        <span><?php echo $text ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
  </div>
 </body>
</html>
