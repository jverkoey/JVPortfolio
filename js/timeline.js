var Timeline = {

  init: function () {
    this.container = $('timeline_wrapper');
    new Fx.Scroll(this.container).toElement($('latest'));
    var scroll = new Scroller('timeline_wrapper', {area: 75, velocity: 3});
    scroll.start();
    
    this.container.addEvent('scroll', function(e) {
      var position = this.container.getScroll();
      var ss = this.container.getScrollSize();
      if (position.x < 75) {
        $('left_nav').fade('out');
      } else {
        $('left_nav').fade('in');
      }
      if (position.x + this.container.getWidth() > ss.x - 75) {
        $('right_nav').fade('out');
      } else {
        $('right_nav').fade('in');
      }
    }.bind(this));
  }

};

window.addEvent('domready', Timeline.init.bind(Timeline));
