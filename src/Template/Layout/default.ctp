<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$this->assign('title', 'The Long Island List:  Coffee Places');
?>
<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <title><?= $this->fetch('title') ?></title>
  <?= $this->Html->meta('icon') ?>
  <?= $this->fetch('meta') ?>
  <meta name="format-detection" content="telephone=no">
  <?= $this->Html->css([
    'https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono',
    'https://api.tiles.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.css',
    'base.css',
    'cake.css',
    'main.css',
  ]) ?>
</head>
<body>

  <!--[if lt IE 11]>
    <p class="browser-upgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <noscript>
    <h1>To use with full functionality, please enable JavaScript.</h1>
  </noscript>

  <main>
    <div class="locations-list">
      <div class="heading">
        <h1><?= $this->fetch('title') ?></h1>
      </div>
      <div class="listings-wrapper">
        <ul class="listings" id="listings"></ul>
      </div>
    </div>
    <?= $this->Flash->render() ?>
    <div class="map" id="map"></div>
  </main>

  <?= $this->Html->script([
    'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',
    'https://api.tiles.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.js',
  ]) ?>
  <?= $this->Html->scriptBlock("mapboxgl.accessToken = '$mapBoxAccessToken'") ?>
  <?= $this->Html->script('main.js') ?>

</body>
</html>
