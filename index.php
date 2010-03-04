<?php
define('SYSPATH', './');

include SYSPATH.'header.php';
?>
  <meta name="keywords" content="verkoeyen software design developer engineer iphone web game resume" /> 
  <meta name="description" content="Jeff Verkoeyen is a software designer with a penchant for passion and an open mind." /> 
  <title>Jeff Verkoeyen's Humble Abode</title> 
  <link rel="stylesheet" type="text/css" href="/css/reset.css" />
  <link rel="stylesheet" type="text/css" href="/css/common.css" />
  <link rel="stylesheet" type="text/css" href="/css/home.css" />
  <link rel="stylesheet" type="text/css" href="/css/shadowbox.css" media="screen" />

  <script type="text/javascript" src="/js/mootools-1.2.4-core.js"></script>
  <script type="text/javascript" src="/js/mootools-1.2.4.4-more.js"></script>
  <script type="text/javascript" src="/js/timeline.js"></script>
</head> 
<body>

<div id="page-wrapper">
<div id="page">

<div id="content">

<div id="intro">

<div class="fixedwidth">
<h1 title="hi">Hey there</h1>
<h2 class="right" title="how's your day?">how's it going?</h2>
</div> <!-- .fixedwidth -->

<div class="hbar">
<div class="fixedwidth">
<h3 class="center">If you've got a moment, perhaps you'd like to peruse my portfolio.</h3>
</div> <!-- .fixedwidth -->
</div> <!-- .hbar -->

<div class="fixedwidth">
<h4 class="center">If that doesn't interest you, maybe you'll
  <a href="http://www.youtube.com/v/0Bmhjf0rKe8&amp;hl=en&amp;fs=1&amp;rel=0&amp;autoplay=1" rel="shadowbox;width=405;height=340;player=swf" title="Surprise!">enjoy
  this YouTube video</a> instead.</h4>
</div> <!-- .fixedwidth -->

</div> <!-- #intro -->

</div> <!-- #content -->

<div id="timeline_wrapper">
<div id="timeline" style="width: 2000px">

  <div id="left_nav"></div>
  <div id="right_nav"></div>

  <div class="entry" id="tag_uwdata">
    <div class="content">
      <ul class="top_align">
        <li><span>January 2010</span></li>
        <li><span>Website</span></li>
        <li><span>Side project</span></li>
        <li><a href="/uwdata">More Details</a></li>
      </ul>
      <div class="permalink"><a href="#uwdata">Permalink</a></div>
      <div class="center" style="width:575px;margin-top:90px"><a href="/uwdata"><img src="/gfx/uwdata.png" width="575" height="291" /></a></div>
    </div>
    <div class="floor"></div>
  </div>

  <div class="entry latest" id="tag_torys">
    <div class="content">
      <ul>
        <li><span>February 2010</span></li>
        <li><span>iPhone App</span></li>
        <li><span>Contract work</span></li>
        <li><a href="#torysgallery" onclick="return torysGallery();">Screenshots</a></li>
        <li><a href="/torys">More Details</a></li>
        <li><a href="http://itunes.apple.com/ca/app/torys-llp/id358286179?mt=8" class="image"><img src="/gfx/appstore.png" /</a></li>
        <li><span>©2010 by Torys LLP.</span></li>
        <li><span>All rights reserved.</span></li>
      </ul>
      <div class="permalink"><a href="#torys">Permalink</a></div>
      <div class="center" style="width:235px"><img src="/gfx/torys.png" width="235" height="411" /></div>
    </div>
    <div class="floor"></div>

  </div>

</div> <!-- #timeline -->  
</div> <!-- #timeline_wrapper -->

<script type="text/javascript" src="/js/shadowbox.js"></script>
<script type="text/javascript" src="/js/galleries.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>

<?php
define('COPYRIGHT','Background courtesy of <a href="http://www.flickr.com/photos/stignygaard/3654106828/">Flickr</a><br/> under a CC license.<br/>');
include SYSPATH.'footer.php';
?>