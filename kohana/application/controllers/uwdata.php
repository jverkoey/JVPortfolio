<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Uwdata_Controller extends TimelineNode_Controller {

  const ALLOW_PRODUCTION = TRUE;

  const TIMELINE_ID = 'uwdata';
  const TIMELINE_NAME = 'UWData.ca';

  public function __construct() {
    parent::__construct(self::TIMELINE_ID);
  }

  public function index() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('uwdata_content');

    $this->add_css_file('css/uwdata.css');

    $this->prepend_title('UWData.ca');

    $this->template->description = 'UWData.ca is the first ever centralization of the University of Waterloo\'s data sets under a single API.';
    $this->template->keywords = array(
      'waterloo',
      'university',
      'data',
      'open',
      'verkoeyen',
      'courses',
      'faculties',
      'ontario'
    );

    $this->prepend_copyright('under a CC license.');
    $this->prepend_copyright('Background courtesy of <a href="http://www.flickr.com/photos/josephpetepickle/2533672285/">Flickr</a>');

    $this->render_markdown_template($content);
  }

}
