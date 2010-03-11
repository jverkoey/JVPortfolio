<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<div class="fixedwidth">
<div id="timeline">
  <div class="header"><h1>Timeline</h1></div>
<?
  $curr_year = date('Y');
  $curr_month = date('n');
  for ($year = $curr_year; $year >= 1987; --$year) {
?>
  <div class="year">
    <h1><?= $year?></h1>
    <div class="months">
  <? for ($month = 1; $month <= 12; ++$month) { ?>
      <div class="month<?= ($year == $curr_year && $month > $curr_month) ? ' future_month' : ''?>">
        <?= date("M", mktime(0, 0, 0, $month, 1, 2000)) ?>
      </div>
  <? } ?>
      <div class="clearfix"></div>
    </div>
  </div>
<? } ?>
</div> <!-- #timeline -->
</div> <!-- .fixedwidth -->
