// const swup = new Swup()
// const options = {
//     animateHistoryBrowsing: false,
//     animationSelector: '[class*="transition-"]',
//     containers: ["#swup"],
//     cache: true,
//     linkSelector:
//       'a[href^="' +
//       window.location.origin +
//       '"]:not([data-no-swup]), a[href^="/"]:not([data-no-swup]), a[href^="#"]:not([data-no-swup])',
//     skipPopStateHandling: function(event) {
//       if (event.state && event.state.source == "swup") {
//         return false;
//       }
//       return true;
//     }
//   };
const state = {
	animations: ['fade', 'slide', 'slideUp', 'zoom', 'flipX', 'flipY'],
	view: 'slide'
}

const slide = Vue.component('slide', {
  template: '#swup',
	methods: {
		enter(el, done) {
			const tl = new TimelineMax({
				onComplete: done
			})
			
			tl.set(el, {
				x: window.innerWidth * 1.5,
				scale: 0.8,
				transformOrigin: '50% 50%'
			})
			
			tl.to(el, 0.5, {
				x: 0,
				ease: Power4.easeOut
			});
			
			tl.to(el, 1, {
				scale: 1,
				ease: Power4.easeOut
			});
		},
		leave(el, done) {
			TweenMax.fromTo(el, 1, {
				autoAlpha: 1
			}, {
				autoAlpha: 0,
				ease: Power4.easeOut,
				onComplete: done
			});
		}	
	}
})
