<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<div id="legend">
  <div class="fixedwidth">
  <ul>
    <li class="legend">Legend:</li>
    <li class="game">Games</li>
    <li class="open-source">Libraries/Open Source</li>
    <li class="iphone">Mobile</li>
    <li class="internship">Paid Internships</li>
    <li class="website">Websites</li>
  </ul>
  </div>
</div>

<div class="fixedwidth">

<div id="preamble">
<p>This is Jeff Verkoeyen's personal timeline. It outlines projects, internships, and life events
  that might be of interest to a potential employer or client. If you'd like to contract Jeff
  Verkoeyen, this is also a good way to become familiar with his most recent projects.</p>
<p>Check out the newest page added to Jeff's portfolio:
  <a href="/wwdc">WWDC 2008 application letter</a></p>
</div>

<div id="timeline">
  <div class="header"><h1>Jeff's Timeline</h1></div>
<?
function perc_in_year($date) {
  return date('z', $date) / 365;
}

  $curr_year = date('Y');
  $curr_month = date('n');
  for ($year = $curr_year; $year >= 1987; --$year) {
?>    
<? if (isset($timeline[$year])) { ?>
  <div class="year">
    <h1><?= $year?></h1>
    <div class="events">
    <ul>
<?    foreach ($timeline[$year] as $event) {
        if ($event['type'] == 'point') {
          $date = $event['date'];
          $perc = perc_in_year($date);
?>
        <li style="margin-left: <?= $perc * 100 ?>%">
<? if (isset($event['id'])) { ?>
            <a id="<?= $event['id'] ?>" href="/<?= $event['id'] ?>">
<? } else if (isset($event['link'])) { ?>
            <a href="<?= $event['link'] ?>">
<? } ?>
          <?= $event['title'] ?>
<? if (isset($event['id']) || isset($event['link'])) { ?>
            </a>
<? } ?>
          <div class="timestamp"><?= date('l \t\h\e jS \of F', $date)?></div>
        </li>
<?      }
      } ?>
    </ul>
    <div class="timespans">
<?    foreach ($timeline[$year] as $event) {
        if ($event['type'] == 'timespan') {
          $date = $event['date'];
          $perc = perc_in_year($date);
          $end_date = $event['end_date'];
          $end_perc = perc_in_year($end_date);
          $class = isset($event['class']) ? ' '.$event['class'] : '';
          if ($end_perc - $perc < 0.05) {
            $class .= ' short_event';
          }
?>
        <div class="timespan<?= $class ?>" style="margin-left: <?= $perc * 100 ?>%;width: <?= ($end_perc - $perc) * 100 ?>%">
          <div class="content">
<? if (isset($event['id'])) { ?>
            <a id="<?= $event['id'] ?>" href="/<?= $event['id'] ?>">
<? } else if (isset($event['link'])) { ?>
            <a href="<?= $event['link'] ?>">
<? } ?>
            <?= $event['title'] ?>
<? if (isset($event['id']) || isset($event['link'])) { ?>
            </a>
<? } ?>
            <div class="info">
              <div class="timestamp">
                <?= date('l \t\h\e jS \of F', $date)?> to<br/>
                <?= date('l \t\h\e jS \of F', $end_date)?></div>
            </div>
          </div>
        </div>
<?      }
      } ?>
    </div>
    </div>
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
<? } ?>
</div> <!-- #timeline -->
</div> <!-- .fixedwidth -->
