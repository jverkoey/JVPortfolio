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
  This is part of Jeff Verkoeyen's personal portfolio.<br/>
  Designed and created using CSS3 and <a href="http://mootools.net/">Mootools</a>.<br/>
  If you're not a fan of graphic-heavy pages, <a href="http://resume.jeffverkoeyen.com/">here's his textual resume</a>.
</div>

<div class="column">
  <h1>Social</h1>
  <ul>
    <li><a href="http://facebook.com/JeffVerkoeyen">Facebook</a></li>
    <li><a href="http://twitter.com/featherless">Twitter</a></li>
    <li><a href="mailto:jverkoey@gmail.com">Email</a></li>
    <li><a href="http://github.com/jverkoey">GitHub</a></li>
  </ul>
</div>

<div class="column">
  <h1>Sites</h1>
  <ul>
    <li><a href="http://digiseza.com/">digiseza.com</a></li>
    <li><a href="http://nimbuskit.info/">nimbuskit.info</a></li>
    <li><a href="http://Three20.info/">Three20.info</a></li>
    <li><a href="http://quickcite.it/">quickcite.it</a></li>
    <li><a href="http://uwchat.ca/">uwchat.ca</a></li>
    <li><a href="http://boxorando.com/">boxorando.com</a></li>
    <li><a href="/uwdata">uwdata.ca</a></li>
    <li><a href="http://snaapi.com/">snaapi.com</a></li>
    <li><a href="http://cartografur.com/">cartografur.com</a></li>
    <li><a href="http://grocerus.com/">grocerus.com</a></li>
    <li><a href="http://CourseAspect.com/">CourseAspect.com</a></li>
    <li><a href="http://brainstormgames.jeffverkoeyen.com/">BrainStormGames</a></li>
    <li><a href="http://GDGuys.com/">GDGuys.com</a></li>
    <li><a href="http://JeffVerkoeyen.com/">JeffVerkoeyen.com</a></li>
  </ul>
</div>

<div class="column">
  <h1>iOS Apps</h1>
  <h2>2010</h2>
  <ul>
    <li><a href="http://itunes.apple.com/ca/app/facebook/id284882215?mt=8"
      title="Worked on the initial version of the Facebook iPad app"
      class="extratips">Facebook iPad</a></li>
  </ul>
  <h2>2010</h2>
  <ul>
    <li><a href="http://quickcite.it/"
      title="7Cubed Project #1"
      class="extratips">QuickCite</a></li>
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
  <h2>2011</h2>
  <ul>
    <li><a href="http://ca.lifehacker.com/5768127/let-your-smartphone-write-bibliographies-for-you"
      title="Quick Cite coverage"
      class="extratips">Life Hacker</a></li>
    <li><a href="http://abcnews.go.com/WNT/video/conversation-quick-cite-creators-cubed-12965830"
      title="7Cubed coverage"
      class="extratips">ABC News</a></li>
  </ul>
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
  echo extrahtml::inlinescript("
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8961075-1']);
  _gaq.push(['_setDomainName', '.jeffverkoeyen.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
");
}
?>

</body>
</html>
