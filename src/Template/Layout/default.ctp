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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $this->fetch('title') ?></title>
  <?= $this->Html->meta('icon') ?>
  <?= $this->fetch('meta') ?>
  <?= $this->Html->css([
    'https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono',
    'https://api.mapbox.com/mapbox-gl-js/v0.36.0/mapbox-gl.css',
    'base.css',
    'cake.css',
    'main.css',
  ]) ?>
</head>
<body>

  <div class="container clearfix">
    <div class="sidebar">
      <div class="heading">
        <h1><?= $this->fetch('title') ?></h1>
      </div>
      <?= $this->Flash->render() ?>
      <?php /* * ?>
      <?= $this->fetch('content') ?>
      <?php /* */ ?>
      <div class="listings-container">
        <ul class="listings" id="listings"></ul>
      </div>
    </div>
    <div class="map" id="map"></div>
  </div>

  <?= $this->Html->script([
    'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',
    'https://api.mapbox.com/mapbox-gl-js/v0.36.0/mapbox-gl.js',
  ]) ?>
  <?= $this->Html->scriptBlock("mapboxgl.accessToken = '$mapBoxAccessToken'") ?>
  <?= $this->Html->script('main.js') ?>

</body>
</html>
