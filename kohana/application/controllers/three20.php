<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Three20_Controller extends TimelineNode_Controller {

  const ALLOW_PRODUCTION = TRUE;

  const TIMELINE_ID = 'three20';
  const TIMELINE_NAME = 'Three20';

  public function __construct() {
    parent::__construct(self::TIMELINE_ID);
  }

  public function index() {
    if (!IN_PRODUCTION) {
      $profiler = new Profiler;
    }

    $content = new View('three20_content');

    $this->prepend_title('Three20');

    $this->template->description = 'Jeff adopted the Three20 framework in late 2010. Since then he\'s built Three20.info, Three20 Scope, and will soon be working with the Google Summer of Code students as a mentor for Three20.';
    $this->template->keywords = array(
      'three20',
      'iphone',
      'ipod',
      'ipad',
      'open source',
      'github',
      'verkoeyen',
    );

    $this->add_css_file('css/three20.css');

    $this->render_markdown_template($content);
  }

}
