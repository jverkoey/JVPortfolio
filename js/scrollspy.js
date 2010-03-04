/*
---
description:     ScrollSpy

authors:
  - David Walsh (http://davidwalsh.name)

license:
  - MIT-style license

requires:
  core/1.2.1:   '*'

provides:
  - ScrollSpy
...
*/
var ScrollSpy = new Class({

	/* implements */
	Implements: [Options,Events],

	/* options */
	options: {
		min: 0,
		mode: 'vertical',
		max: 0,
		container: window,
		onEnter: $empty,
		onLeave: $empty,
		onScroll: $empty,
		onTick: $empty
	},

	/* initialization */
	initialize: function(options) {
		/* set options */
		this.setOptions(options);
		this.container = document.id(this.options.container);
		this.enters = this.leaves = 0;
		this.max = this.options.max;
	
		/* fix max */
		if(this.max == 0) { 
			var ss = this.container.getScrollSize();
			this.max = this.options.mode == 'vertical' ? ss.y : ss.x;
		}
		/* make it happen */
		this.addListener();
	},

	/* a method that does whatever you want */
	addListener: function() {
		/* state trackers */
		this.inside = false;
		this.container.addEvent('scroll',function(e) {
			/* if it has reached the level */
			var position = this.container.getScroll();
			var xy = position[this.options.mode == 'vertical' ? 'y' : 'x'];
			/* if we reach the minimum and are still below the max... */
			if(xy >= this.options.min && xy <= this.max) {
					/* trigger Enter event if necessary */
					if(!this.inside) {
						/* record as inside */
						this.inside = true;
						this.enters++;
						/* fire enter event */
						this.fireEvent('enter',[position,this.enters,e]);
					}
					/* trigger the "tick", always */
					this.fireEvent('tick',[position,this.inside,this.enters,this.leaves,e]);
			}
			else {
				/* trigger leave */
				if(this.inside)  {
					this.inside = false;
					this.leaves++;
					this.fireEvent('leave',[position,this.leaves,e]);
				}
			}
			/* fire scroll event */
			this.fireEvent('scroll',[position,this.inside,this.enters,this.leaves,e]);
		}.bind(this));
	}
});
