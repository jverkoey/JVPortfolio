<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Wwdc_Controller extends TimelineNode_Controller {

  const ALLOW_PRODUCTION = TRUE;

  const TIMELINE_ID = 'wwdc';
  const TIMELINE_NAME = 'WWDC 2008';

  public function __construct() {
    parent::__construct(self::TIMELINE_ID);
  }

  public function index() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('wwdc_content');

    $this->add_css_file('css/wwdc.css');

    $this->prepend_title('WWDC 2008 Application Letter');

    $this->template->description = 'Jeff applied for and received the WWDC 2008 student scholarship. This is his application letter.';
    $this->template->keywords = array(
      'wwdc',
      'application',
      '2008',
      'california',
      'apple',
      'ios',
      'iphone',
      'verkoeyen',
    );

    $this->prepend_copyright('under a CC license.');
    $this->prepend_copyright('Image courtesy of <a href="http://www.flickr.com/photos/epitti/2563019924/">Flickr</a>');

    $this->render_markdown_template($content);
  }

}
