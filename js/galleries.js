function img(path, title) {
  var options = {
      continuous:     true,
      counterType:    "skip"
  };

  return {
      player:     "img",
      title:      title,
      content:    path,
      options:    options
  };

}

function torysGallery() {
  Shadowbox.open([
    img('/gfx/torys/Twitter.png', 'Twitter feed'),
    img('/gfx/torys/Directory.png', 'Directory listing'),
    img('/gfx/torys/Profile.png', 'Employee profiles'),
    img('/gfx/torys/Video.png', 'YouTube videos'),
    img('/gfx/torys/Publication.png', 'In-app publications')
  ]);
  return false;
}
