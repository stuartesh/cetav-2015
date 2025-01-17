<?php
/**
 * @file
 * Template for a 3 column panel layout.
 *
 * This template provides a carreras for CETAV panel display layout.
 */
?>
<div class="panel-display panel-cetav-carreras">
  <?php if ($content['wide']): ?>
    <div class="panel-container panel-wide">
      <?php print $content['wide']; ?>
    </div>
  <?php endif ?>
  <div class="center-wrapper">
    <div class="panel-container panel-left-column">
      <?php print $content['left']; ?>
    </div>
    <div class="panel-container panel-right-column">
      <?php print $content['right']; ?>
    </div>
  </div>
  <?php if ($content['wide_second']): ?>
    <div class="panel-container panel-wide">
      <?php print $content['wide_second']; ?>
    </div>
  <?php endif ?>
  <div class="center-wrapper">
    <div class="panel-container panel-left-column">
      <?php print $content['left_second']; ?>
    </div>
    <div class="panel-container panel-right-column">
      <?php print $content['right_second']; ?>
    </div>
  </div>
 <?php if ($content['wide_third']): ?>
    <div class="panel-container panel-wide">
      <?php print $content['wide_third']; ?>
    </div>
  <?php endif ?>
</div>
