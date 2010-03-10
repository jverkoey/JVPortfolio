<?php

function idx($array, $key, $default = null) {
  return isset($array[$key]) ? $array[$key] : $default;
}

function html_link($text, $url) {
  return '<a href="'.$url.'">'.$text.'</a>';
}

function navbar_fakelink($text) {
  return '<span class="fakelink">'.$text.'</span>';
}

function navbar($options) {
  $left_nav = idx($options, 'left_nav', 'Nothing older yet...');
  $left_url = idx($options, 'left_url');
  $right_nav = idx($options, 'right_nav', 'Nothing newer yet...');
  $right_url = idx($options, 'right_url');
  $project_id = idx($options, 'project_id');

  if ($left_url) {
    $left_nav = html_link($left_nav, $left_url);
  } else {
    $left_nav = navbar_fakelink($left_nav);
  }

  if ($right_url) {
    $right_nav = html_link($right_nav, $right_url);
  } else {
    $right_nav = navbar_fakelink($right_nav);
  }

  return <<<NAVBAR
<div id="navbar">
  <div class="previous">$left_nav</div>
  <div class="next">$right_nav</div>
  <div class="title"><a href="/#$project_id">Jeff Verkoeyen's Portfolio</a></div>
</div> <!-- #navbar -->
NAVBAR;
}
