<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class TimelineNode_Controller extends MarkdownTemplate_Controller {

  const ALLOW_PRODUCTION = FALSE;

  public function __construct($id) {
    parent::__construct();

    $this->template->navbar_html = Timeline_Controller::generate_navbar($id);

    $this->add_css_file('css/timelinenode.css');
  }

}
