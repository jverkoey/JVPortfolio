<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Timeline_Controller extends MarkdownTemplate_Controller {

  const ALLOW_PRODUCTION = TRUE;

  static public $TIMELINE = array(
    'three20info',
    'uwdata',
    'torys'
  );

  public function index() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('timeline_content');

    $this->add_css_file('css/timeline.css');

    $events = array(
      array(
        'title' => 'UWData.ca',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 1, 15, 2010),
        'end_date' => mktime(0, 0, 0, 1, 19, 2010),
        'class' => 'website',
        'id' => 'uwdata'
      ),
      array(
        'title' => 'Torys',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 2, 1, 2010),
        'end_date' => mktime(0, 0, 0, 2, 28, 2010),
        'class' => 'iphone',
        'id' => 'torys'
      ),
      array(
        'title' => 'Highwind',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 5, 14, 2009),
        'end_date' => mktime(0, 0, 0, 6, 22, 2009),
        'class' => 'iphone'
      ),
      array(
        'title' => 'Strips',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 6, 19, 2009),
        'end_date' => mktime(0, 0, 0, 10, 27, 2009),
        'class' => 'iphone'
      ),
      array(
        'title' => 'Three20.info',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 11, 24, 2009),
        'end_date' => time(),
        'class' => 'website'
      ),
      array(
        'title' => 'Breeze',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 2, 21, 2010),
        'end_date' => mktime(0, 0, 0, 3, 8, 2010),
        'class' => 'open-source'
      ),

// Birthdays
      array(
        'title' => 'Born',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 8, 18, 1987)
      ),

// Internships
      array(
        'title' => 'Sony Media Software',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 5, 1, 2006),
        'end_date' => mktime(0, 0, 0, 8, 25, 2006),
        'class' => 'internship'
      ),
      array(
        'title' => 'Sony Creative Software',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 1, 1, 2007),
        'end_date' => mktime(0, 0, 0, 4, 20, 2007),
        'class' => 'internship'
      ),
      array(
        'title' => 'Sony Creative Software',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 9, 3, 2007),
        'end_date' => mktime(0, 0, 0, 12, 14, 2007),
        'class' => 'internship'
      ),
      array(
        'title' => 'Google',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 5, 5, 2008),
        'end_date' => mktime(0, 0, 0, 8, 22, 2008),
        'class' => 'internship'
      ),
      array(
        'title' => 'Facebook',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 1, 5, 2009),
        'end_date' => mktime(0, 0, 0, 4, 25, 2008),
        'class' => 'internship'
      ),
      array(
        'title' => 'Facebook',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 9, 7, 2009),
        'end_date' => mktime(0, 0, 0, 12, 19, 2008),
        'class' => 'internship'
      ),

      array(
        'title' => 'Today',
        'type' => 'point',
        'date' => time()
      ),

// University
      array(
        'title' => 'Anticipated Undergrad Graduation Date',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 8, 30, 2010)
      ),
      array(
        'title' => 'University of Waterloo, Term 4A',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 1, 4, 2010)
      ),
      array(
        'title' => 'University of Waterloo',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 5, 4, 2009)
      ),
      array(
        'title' => 'University of Waterloo, Term 3A',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 1, 7, 2008)
      ),
      array(
        'title' => 'University of Waterloo, Term 3B',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 1, 2008)
      ),
      array(
        'title' => 'University of Waterloo, Term 2B',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 5, 7, 2007)
      ),
      array(
        'title' => 'University of Waterloo, Term 1B',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 1, 5, 2006)
      ),
      array(
        'title' => 'University of Waterloo, Term 2A',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 4, 2006)
      ),
      array(
        'title' => 'University of Waterloo, Term 1A',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 5, 2005)
      ),

// High school
      array(
        'title' => 'Entered Grade 12',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 6, 2004)
      ),
      array(
        'title' => 'Entered Grade 11',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 1, 2003)
      ),
      array(
        'title' => 'Entered Grade 10',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 2, 2002)
      ),
      array(
        'title' => 'Entered High School, Grade 9',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 3, 2001)
      ),

// Middle school
      array(
        'title' => 'Entered Grade 8',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 4, 2000)
      ),
      array(
        'title' => 'Entered Grade 7',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 6, 1999)
      ),
      array(
        'title' => 'Entered Middle School, Grade 6',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 7, 1998)
      ),

// Elementary school
      array(
        'title' => 'Entered Grade 5',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 1, 1997)
      ),
      array(
        'title' => 'Entered Grade 4',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 2, 1996)
      ),
      array(
        'title' => 'Entered Grade 3',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 4, 1995)
      ),
      array(
        'title' => 'Entered Grade 2',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 5, 1994)
      ),
      array(
        'title' => 'Entered Grade 1',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 6, 1993)
      ),
      array(
        'title' => 'Entered Kindergarten',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 7, 1992)
      )
    );

    $dates = array();
    foreach ($events as $event) {
      $dates []= $event['date'];
    }

    array_multisort($dates, SORT_ASC, $events);

    $timeline = array();

    foreach ($events as $event) {
      if ($event['type'] == 'point') {
        $year = date('Y', $event['date']);
        if (!isset($timeline[$year])) {
          $timeline[$year] = array();
        }
        $timeline[$year] []= $event;
      } else if ($event['type'] == 'timespan') {
        $year = date('Y', $event['date']);
        $end_date = $event['end_date'];
        $end_year = date('Y', $end_date);
        $current_year = intval($year);
        do {
          if ($end_year > $current_year) {
            $event['end_date'] = mktime(0, 0, 0, 12, 31, $current_year);
          } else {
            $event['end_date'] = $end_date;
          }
          if (!isset($timeline[$current_year])) {
            $timeline[$current_year] = array();
          }
          $timeline[$current_year] []= $event;
          $current_year++;
          $event['date'] = mktime(0, 0, 0, 1, 1, $current_year);
        } while ($current_year <= $end_year);
      }
    }

    $content->timeline = $timeline;

    $this->render_markdown_template($content);
  }

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
  <div class="title"><a href="/timeline#$id">Jeff Verkoeyen's Timeline</a></div>
</div> <!-- #navbar -->
NAVBAR;
  }

}
