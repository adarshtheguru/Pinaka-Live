$(document).ready(function(){

    // if (window.innerWidth > 992){
      const lenis = new Lenis({
    	duration: 1,
    	easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // https://www.desmos.com/calculator/brs54l4xou
    	direction: 'vertical', // vertical, horizontal
    	gestureDirection: 'vertical', // vertical, horizontal, both
    	smooth: true,
    	mouseMultiplier: 2,
    	smoothTouch: true,
    	touchMultiplier: 2,
    	infinite: false,
      })

      //get scroll value
      lenis.on('scroll', ({ scroll, limit, velocity, direction, progress }) => {
    	// console.log({ scroll, limit, velocity, direction, progress })
      })

      function raf(time) {
    	lenis.raf(time);
    	// ScrollTrigger.update();
    	requestAnimationFrame(raf);
      }
    // }

      requestAnimationFrame(raf);
    gsap.registerPlugin(ScrollTrigger);
    ScrollTrigger.config({autoRefreshEvents: "DOMContentLoadeds,load"});
    ScrollTrigger.defaults({ scroller: document.body });
	

    gsap.to(".parallax-slide", {
        scrollTrigger: {
          scrub: true
        },
        x: (i, target) => ScrollTrigger.maxScroll(window) * target.dataset.speed,
        ease: "none"
      });

      const line = document.querySelector('.st0');

      if (line) {
          const length = line.getTotalLength();

          // Setup stroke-dasharray & stroke-dashoffset
          line.style.strokeDasharray = length;
          line.style.strokeDashoffset = length;

          gsap.to(line, {
              strokeDashoffset: 0,
              ease: "none",
              scrollTrigger: {
                  trigger: ".specialize-slide",
                  start: "75% center", // when element hits the center of viewport
                  end: "+=500",        // adjust how long the scroll animation lasts
                  scrub: true,         // smooth scrubbing
                  markers: false       // remove in production
              }
          });
      }

        const line2 = document.querySelector('.st2');

        if (line2) {
            const length2 = line2.getTotalLength();

            // Setup stroke-dasharray & stroke-dashoffset
            line2.style.strokeDasharray = length2;
            line2.style.strokeDashoffset = length2;

            gsap.to(line2, {
                strokeDashoffset: 0,
                ease: "none",
                scrollTrigger: {
                    trigger: ".scroll_card",
                    start: "center center", // when element hits the center of viewport
                    end: "+=300",           // adjust how long the scroll animation lasts
                    scrub: true,            // smooth scrubbing
                    markers: false          // remove in production
                }
            });
        }


        
});