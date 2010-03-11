<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="keywords" content="<?= html::specialchars(implode(' ', $keywords)) ?>" />
  <meta name="description" content="<?= html::specialchars($description) ?>" />
  <title><?php echo html::specialchars($title) ?></title>
<?
  echo extrahtml::stylesheet(array(
    'css/reset',
    'css/common.css'
  ), null, FALSE);
  echo extrahtml::stylesheet($css_files, null, FALSE);
  echo extrahtml::script($js_head_files, FALSE);
  echo extrahtml::inlinescript($js_head_scripts);
?>
</head>
<body>
<div id="page-wrapper">
<div id="page">

<div id="content">

<?= isset($navbar_html) ? $navbar_html : '' ?>

<?php echo $content ?>

</div> <!-- #content -->

<div id="page-spacer"></div>

<div id="page-footer"></div>
</div> <!-- #page -->
</div> <!-- #page-wrapper -->

<div id="footer">

<div class="personal">
  This is Jeff Verkoeyen's personal portfolio.<br/>
  If you're not a fan of graphic-heavy pages, <a href="http://resume.jeffverkoeyen.com/">here's his textual resume</a>.<br/>
  Designed and created using CSS3 and <a href="http://mootools.net/">Mootools</a>.
</div>

<div class="column">
  <h1>Social</h1>
  <ul>
    <li><a href="http://facebook.com/JeffVerkoeyen">Facebook</a></li>
    <li><a href="http://twitter.com/featherless">Twitter</a></li>
    <li><a href="mailto:jverkoey@gmail.com">Email</a></li>
    <li><a href="http://github.com/jverkoey">GitHub</a></li>
    <li><a href="http://delicious.com/jverkoey">Delicious</a></li>
  </ul>
</div>

<div class="column">
  <h1>Sites</h1>
  <ul>
    <li><a href="http://Three20.info/">Three20.info</a></li>
    <li><a href="/uwdata">uwdata.ca</a></li>
    <li><a href="http://snaapi.com/">snaapi.com</a></li>
    <li><a href="http://cartografur.com/">cartografur.com</a></li>
    <li><a href="http://grocerus.com/">grocerus.com</a></li>
    <li><a href="http://CourseAspect.com/">CourseAspect.com</a></li>
    <li><a href="http://BrainStormGames.org/">BrainStormGames.org</a></li>
    <li><a href="http://GDGuys.com/">GDGuys.com</a></li>
    <li><a href="http://JeffVerkoeyen.com/">JeffVerkoeyen.com</a></li>
  </ul>
</div>

<div class="column">
  <h1>iPhone Apps</h1>
  <h2>2010</h2>
  <ul>
    <li><a href="/torys"
      title="Contract work for EightyTwenty Group"
      class="extratips">Torys LLP</a></li>
  </ul>
  <h2>2009</h2>
  <ul>
    <li><a href="http://itunes.apple.com/ca/app/facebook/id284882215?mt=8"
      title="Worked on Three20 and the Facebook iPhone app while interning at Facebook"
      class="extratips">Facebook</a></li>
    <li><a href="http://itunes.apple.com/ca/app/highwind-ffxi-maps/id321056990?mt=8"
      title="A bundle of FFXI game maps in a free iPhone app"
      class="extratips">Highwind</a></li>
    <li><a href="http://itunes.apple.com/ca/app/strips-free/id327940718?mt=8"
      title="For more information, read the Strips Post Mortem"
      class="extratips">Strips</a></li>
  </ul>
</div>

<div class="column">
  <h1>Games</h1>
  <h2>2006</h2>
  <ul>
    <li><a href="http://gdguys.com/thecomplex.php">The Complex</a></li>
    <li><a href="http://gdguys.com/ragtime.php">RagTime Racing!</a></li>
    <li><a href="http://gdguys.com/hungerstrike.php">Hunger Strike!</a></li>
  </ul>
  <h2>2005</h2>
  <ul>
    <li><a href="http://gdguys.com/hathsinned.php">Hath Sinned</a></li>
  </ul>
  <h2>2004</h2>
  <ul>
    <li><a href="http://gdguys.com/roidian.php">Roidian: Final Hour</a></li>
    <li><a href="http://gdguys.com/advout.php">Adventures and Outlaws</a></li>
    <li><a href="http://gdguys.com/robocafe.php">Robocafe</a></li>
  </ul>
</div>

<div class="column">
  <h1>Press</h1>
  <h2>2010</h2>
  <ul>
    <li><a href="http://techcrunch.com/2010/01/06/facebook-iphone-push-notifications/"
      title="Coverage of the <i>Facebook for iPhone</i> Contact Sync feature"
      class="extratips">Tech Crunch</a></li>
  </ul>
  <h2>2008</h2>
  <ul>
    <li><a href="http://www.nationalpost.com/related/topics/story.html?id=777821"
      title="Interview conducted while living at VeloCity in its pilot term"
      class="extratips">National Post</a></li>
  </ul>
</div>

<div class="column rightcolumn">
  <?= extrahtml::linebreak($copyright) ?>
</div>
</div>

<?
echo extrahtml::script($js_foot_files, FALSE);

if (IN_PRODUCTION) {
  echo extrahtml::inlinescript('
  try {
  var pageTracker = _gat._getTracker("'.Kohana::config('core.google_analytics_key').'");
  pageTracker._setDomainName(".jeffverkoeyen.com");
  pageTracker._trackPageview();
  } catch(err) {}');
}
?>

</body>
</html>