<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700,700italic,500italic,500,400italic,300italic,100italic,100,300" rel='stylesheet' type='text/css' />
        @section('head')
            <link href="<?php echo url('/css/reset.css'); ?>" rel="stylesheet" type='text/css' />
            <link href="<?php echo url('/css/foundation.min.css'); ?>" rel="stylesheet" type='text/css' />
            <link href="<?php echo url('/css/style.css'); ?>" rel="stylesheet" type='text/css' />
        @show
    </head>
 <body>
  <div <?php atts(array('id' => 'wrap')); ?>>
            <div <?php atts(array('id' => 'header')); ?>></div>
            <div <?php atts(array('id' => 'main_container')); ?>>
                <ul <?php atts(array('class' => 'navigation')); ?>>
                    <li>Nothing</li>
                    <li>Tuotteet</li>
                </ul>
                <h2>Tuotteet</h2>
                <ul <?php atts(array('class' => 'products')); ?>>
                    <?php foreach (array("Just Some", "And More") as $text): ?>
                        <li>
                            <span><?php echo $text ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div <?php atts(array('id' => 'footer')); ?>></div>
  </div>
 </body>
</html>
