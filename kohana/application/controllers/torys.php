<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Torys_Controller extends TimelineNode_Controller {

  const ALLOW_PRODUCTION = TRUE;

  const TIMELINE_ID = 'torys';
  const TIMELINE_NAME = 'Torys LLP';

  public function __construct() {
    parent::__construct(self::TIMELINE_ID);
  }

  public function index() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('torys_content');

    $this->prepend_title('Torys LLP on the iPhone');

    $this->template->description = 'The Torys LLP app is the first iPhone app developed specifically for a major law firm in Canada.';
    $this->template->keywords = array(
      'torys',
      'llp',
      'lawyer',
      'law firm',
      'iphone',
      'ipod',
      'ipad',
      'verkoeyen',
    );

    $this->add_css_file('css/torys.css');

    $this->prepend_copyright('under a CC license.');
    $this->prepend_copyright('Background courtesy of <a href="http://www.flickr.com/photos/sinkdd/3151637571/">Flickr</a>');

    $this->render_markdown_template($content);
  }

}
