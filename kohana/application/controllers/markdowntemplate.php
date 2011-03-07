<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package    Markdown
 * @author     Jeff Verkoeyen
 * @copyright  (c) 2010 Jeff Verkoeyen
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 */
class MarkdownTemplate_Controller extends Template_Controller {

  const ALLOW_PRODUCTION = FALSE;

  // Set the name of the template to use
  public $template = 'template';
  public $auto_render = FALSE;

  public function __construct() {
    parent::__construct();

    $this->session = Session::instance();

    $this->template->js_foot_files = array();
    $this->template->js_head_files = array(
      'js/mootools-1.2.4-core.js',
      'js/mootools-1.2.4.4-more.js'
    );
    $this->template->js_head_scripts = array();
    $this->template->css_files = array();
    $this->template->title = array('JeffVerkoeyen.com');
    $this->template->keywords = array(
      'software',
      'design',
      'developer',
      'engineer',
      'verkoeyen',
      'iphone',
      'web',
      'game',
      'resume'
    );
    $this->template->description = 'Jeff Verkoeyen is a software designer with a penchant for passion and an open mind for innovation.';
    $this->template->copyright = array(
      'All other content, unless otherwise noted,',
      '© 2003-2011 Jeff Verkoeyen.',
      'All Rights Reserved.'
    );
  }

  protected function add_js_foot_file($file) {
    $this->template->js_foot_files []= $file;
  }

  protected function add_js_head_file($file) {
    $this->template->js_head_files []= $file;
  }

  protected function add_js_head_script($script) {
    $this->template->js_head_scripts []= $script;
  }

  protected function add_css_file($file) {
    $this->template->css_files []= $file;
  }

  protected function prepend_title($text) {
    array_unshift($this->template->title, $text);
  }

  protected function prepend_copyright($text) {
    array_unshift($this->template->copyright, $text);
  }

  protected function render_markdown_template($content) {
    require Kohana::find_file('vendor', 'Markdown');
    $content->title = current($this->template->title)."\n";
    $this->template->templateModifiedTime = filemtime($content->kohana_filename);

    $content->static_root = IN_PRODUCTION ? 'https://s3.amazonaws.com/jeffverkoeyen' : '';
    $this->template->static_root = $content->static_root;
    
    $this->template->content = $content->render(FALSE, 'Markdown');

    $this->template->title = implode(' | ', $this->template->title);
    $this->template->render(TRUE);
  }

}