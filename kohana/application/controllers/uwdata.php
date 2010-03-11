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

  public function index() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('uwdata_content');

    $this->add_css_file('css/uwdata.css');

    $this->prepend_copyright('under a CC license.');
    $this->prepend_copyright('Background courtesy of <a href="http://www.flickr.com/photos/josephpetepickle/2533672285/">Flickr</a>');

    $this->render_markdown_template($content);
  }

}
