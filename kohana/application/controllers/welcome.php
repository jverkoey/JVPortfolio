<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class Welcome_Controller extends MarkdownTemplate_Controller {

  const ALLOW_PRODUCTION = TRUE;

  public function index() {
    url::redirect('/timeline');
  }

} // End Welcome Controller