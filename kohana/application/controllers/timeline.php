<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Timeline_Controller extends MarkdownTemplate_Controller {

  const ALLOW_PRODUCTION = TRUE;

  static public $TIMELINE = array(
    'wwdc',
    'three20',
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
        'title' => 'Today',
        'type' => 'point',
        'date' => time()
      ),
      
      array(
        'title' => 'Launched Digiseza',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 5, 11, 2012),
        'class' => 'website',
        'link' => 'http://digiseza.com'
      ),
      array(
        'title' => 'Began learning electronics',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 3, 16, 2012)
      ),
      array(
        'title' => 'Moved to San Francisco',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 10, 01, 2011)
      ),
      array(
        'title' => 'My mother unexpectedly passed away at age 42',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 5, 6, 2010),
        'class' => 'point'
      ),
      array(
        'title' => 'RoboCafe on the Mac App Store',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 1, 6, 2011),
        'class' => 'game',
        'link' => 'http://itunes.apple.com/ca/app/robo-cafe/id402345127?mt=12'
      ),
      array(
        'title' => '7Cubed on ABC News',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 02, 21, 2011),
        'class' => 'website',
        'link' => 'http://abcnews.go.com/WNT/video/conversation-quick-cite-creators-cubed-12965830'
      ),
      array(
        'title' => 'Quick Cite on Life Hacker',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 02, 23, 2011),
        'class' => 'website',
        'link' => 'http://ca.lifehacker.com/5768127/let-your-smartphone-write-bibliographies-for-you'
      ),
      array(
        'title' => 'Quick Cite on PC Magazine',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 02, 15, 2011),
        'class' => 'website',
        'link' => 'http://www.pcmag.com/article2/0,2817,2380547,00.asp'
      ),
      array(
        'title' => 'Quick Cite on Fast Company',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 02, 15, 2011),
        'class' => 'website',
        'link' => 'http://www.fastcompany.com/1727803/barcode-to-bibliography-app-makes-college-ridiculously-easy'
      ),
      array(
        'title' => 'Quick Cite on Hack College',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 02, 10, 2011),
        'class' => 'website',
        'link' => 'http://www.hackcollege.com/blog/2011/2/10/turn-barcodes-into-bibliographies-with-quick-cite.html'
      ),
      array(
        'title' => '7Cubed',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 11, 20, 2010),
        'end_date' => mktime(0, 0, 0, 11, 27, 2010),
        'class' => 'website',
        'link' => 'http://7cubedproject.com/'
      ),
      array(
        'title' => 'Boxorando',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 11, 13, 2010),
        'end_date' => mktime(0, 0, 0, 01, 13, 2011),
        'class' => 'website',
      ),
      array(
        'title' => 'Launched Modular Three20',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 5, 3, 2010)
      ),
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
        'title' => 'Nimbus Lead',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 6, 7, 2011),
        'end_date' => time(),
        'class' => 'open-source',
        'link' => 'http://github.com/jverkoey/nimbus'
      ),
      array(
        'title' => 'Three20 Lead',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 11, 24, 2009),
        'end_date' => mktime(0, 0, 0, 7, 1, 2011),
        'class' => 'open-source',
        'id' => 'three20'
      ),
      array(
        'title' => 'Breeze',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 2, 21, 2010),
        'end_date' => mktime(0, 0, 0, 3, 8, 2010),
        'class' => 'open-source',
        'link' => 'http://github.com/jverkoey/BreezeJSEngine'
      ),
      array(
        'title' => 'BrainStorm Games',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 1, 22, 2008),
        'end_date' => mktime(0, 0, 0, 4, 5, 2008),
        'class' => 'website',
        'link' => 'http://brainstormgames.org'
      ),
      array(
        'title' => 'Astro and Ted\'s Space Adventure',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 1, 22, 2008),
        'end_date' => mktime(0, 0, 0, 4, 5, 2008),
        'class' => 'game',
        'link' => 'http://brainstormgames.org/blog/?page_id=28#TedAndAstro'
      ),
      array(
        'title' => 'RoboCafe for OS X',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 5, 22, 2008),
        'end_date' => mktime(0, 0, 0, 8, 5, 2008),
        'class' => 'game'
      ),
      array(
        'title' => 'RoboCafe',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 1, 3, 2004),
        'end_date' => mktime(0, 0, 0, 1, 5, 2004),
        'class' => 'game',
        'link' => 'http://gdguys.com/robocafe.php'
      ),
      array(
        'title' => 'Adventures and Outlaws',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 6, 25, 2004),
        'end_date' => mktime(0, 0, 0, 6, 28, 2004),
        'class' => 'game',
        'link' => 'http://gdguys.com/advout.php'
      ),
      array(
        'title' => 'Roidian: Final Hour',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 12, 17, 2004),
        'end_date' => mktime(0, 0, 0, 12, 20, 2004),
        'class' => 'game',
        'link' => 'http://gdguys.com/roidian.php'
      ),
      array(
        'title' => 'Hath Sinned',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 7, 29, 2005),
        'end_date' => mktime(0, 0, 0, 8, 1, 2005),
        'class' => 'game',
        'link' => 'http://gdguys.com/hathsinned.php'
      ),
      array(
        'title' => 'Hunger Strike!',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 3, 24, 2006),
        'end_date' => mktime(0, 0, 0, 3, 27, 2004),
        'class' => 'game',
        'link' => 'http://gdguys.com/hungerstrike.php'
      ),
      array(
        'title' => 'RagTime Racing!',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 7, 14, 2006),
        'end_date' => mktime(0, 0, 0, 7, 17, 2004),
        'class' => 'game',
        'link' => 'http://gdguys.com/ragtime.php'
      ),
      array(
        'title' => 'The Complex',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 11, 17, 2006),
        'end_date' => mktime(0, 0, 0, 11, 20, 2004),
        'class' => 'game',
        'link' => 'http://gdguys.com/thecomplex.php'
      ),
      array(
        'title' => 'snaapi',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 3, 1, 2009),
        'end_date' => mktime(0, 0, 0, 3, 30, 2009),
        'class' => 'website',
        'link' => 'http://snaapi.com/'
      ),
      array(
        'title' => 'cartografur',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 1, 19, 2009),
        'end_date' => mktime(0, 0, 0, 3, 31, 2009),
        'class' => 'website',
        'link' => 'http://cartografur.com/'
      ),
      array(
        'title' => 'Course Aspect',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 12, 20, 2008),
        'end_date' => mktime(0, 0, 0, 1, 6, 2009),
        'class' => 'website',
        'link' => 'http://courseaspect.com/'
      ),
      array(
        'title' => 'TIProject',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 10, 23, 2002),
        'end_date' => mktime(0, 0, 0, 8, 30, 2004),
        'class' => 'website'
      ),
      array(
        'title' => 'Escape From the Funky Factory',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 2, 5, 2003),
        'end_date' => mktime(0, 0, 0, 6, 30, 2003),
        'class' => 'game'
      ),

      array(
        'title' => 'TI83+ for Christmas',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 12, 25, 2000)
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

// Work
      array(
        'title' => 'Facebook',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 6, 10, 2010),
        'end_date' => mktime(0, 0, 0, 8, 16, 2011),
        'class' => 'internship'
      ),
      array(
        'title' => 'Google',
        'type' => 'timespan',
        'date' => mktime(0, 0, 0, 9, 19, 2011),
		'end_date' => time(),
        'class' => 'internship'
      ),


// Conferences
      array(
        'title' => 'Speaker at F8 2010',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 4, 21, 2010)
      ),
      array(
        'title' => 'WWDC 2008',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 6, 9, 2008),
        'id' => 'wwdc'
      ),
      array(
        'title' => 'Booth attendee at F8 2008',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 7, 23, 2008)
      ),
      array(
        'title' => 'National Youth Leadership Forum',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 6, 5, 2003)
      ),

// University      
      array(
        'title' => 'Graduated Bachelor of Honours Computer Science with Co-op',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 6, 17, 2011)
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
        'title' => 'VeloCity resident',
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

      array(
        'title' => 'Began learning HTML',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 6, 1, 2001)
      ),
      array(
        'title' => 'Began learning C++',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 3, 1, 2002)
      ),

// Middle school
      array(
        'title' => 'Entered Grade 8',
        'type' => 'point',
        'date' => mktime(0, 0, 0, 9, 4, 2000)
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
      $left_name = constant($left_class.'::'.'TIMELINE_NAME');
      $left_url = '/'.$left_id;
      $left_elm = '<a href="'.$left_url.'">&larr; '.$left_name.'</a>';
    } else {
      $left_name = 'Nothing older yet...';
      $left_elm = '<span class="fakelink">'.$left_name.'</a>';
    }

    if ($index < count(Timeline_Controller::$TIMELINE) - 1) {
      $right_id = Timeline_Controller::$TIMELINE[$index + 1];
      $right_class = Timeline_Controller::id_to_class_name($right_id);
      $right_name = constant($right_class.'::'.'TIMELINE_NAME');
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
  <div class="title"><a href="/timeline">Jeff Verkoeyen's Timeline</a></div>
</div> <!-- #navbar -->
NAVBAR;
  }

}
