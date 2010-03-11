<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Timeline_Controller extends MarkdownTemplate_Controller {

  const ALLOW_PRODUCTION = FALSE;

  static public $TIMELINE = array(
    'three20info',
    'uwdata',
    'torys'
  );

  static private function id_to_class_name($name) {
    return strtoupper($name[0]).substr($name, 1).'_Controller';
  }

  static public function generate_navbar($id) {
    $index = array_search($id, Timeline_Controller::$TIMELINE);
    if ($index > 0) {
      $left_id = Timeline_Controller::$TIMELINE[$index - 1];
      $left_class = Timeline_Controller::id_to_class_name($left_id);
      $left_name = $left_class::TIMELINE_NAME;
      $left_url = '/'.$left_id;
      $left_elm = '<a href="'.$left_url.'">&larr; '.$left_name.'</a>';
    } else {
      $left_name = 'Nothing older yet...';
      $left_elm = '<span class="fakelink">'.$left_name.'</a>';
    }

    if ($index < count(Timeline_Controller::$TIMELINE) - 1) {
      $right_id = Timeline_Controller::$TIMELINE[$index + 1];
      $right_class = Timeline_Controller::id_to_class_name($right_id);
      $right_name = $right_class::TIMELINE_NAME;
      $right_url = '/'.$right_id;
      $right_elm = '<a href="'.$right_url.'">'.$right_name.' &rarr;</a>';
    } else {
      $right_name = 'Nothing newer yet...';
      $right_elm = '<span class="fakelink">'.$right_name.'</a>';
    }

    return <<<NAVBAR
<div id="navbar">
  <div class="previous">$left_elm</div>
  <div class="next">$right_elm</div>
  <div class="title"><a href="/#$id">Jeff Verkoeyen's Portfolio</a></div>
</div> <!-- #navbar -->
NAVBAR;
  }

}
