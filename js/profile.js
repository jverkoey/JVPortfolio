var Profile = {

  init: function () {
    window.addEvent('scroll', function(e) {
      var position = window.getScroll();
      var ss = window.getScrollSize();
      if (position.y > 0) {
        $('navbar').fade('out');
      } else {
        $('navbar').fade('in');
      }
    }.bind(this));
  }

};

window.addEvent('domready', Profile.init.bind(Profile));
