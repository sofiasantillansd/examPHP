import { gsap } from "./node_modules/gsap/index.js";
import { ScrollTrigger } from "./node_modules/gsap/all.js";

gsap.registerPlugin(ScrollTrigger);

// Setup
const scroller = document.querySelector('.scroller');

const bodyScrollBar = Scrollbar.init(scroller, { damping: 0.1, delegateTo: document});

ScrollTrigger.scrollerProxy(".scroller", {
    scrollTop(value) {
        if (arguments.length) {
            bodyScrollBar.scrollTop = value;
        }
        return bodyScrollBar.scrollTop;
    }
});

bodyScrollBar.addListener(ScrollTrigger.update);

ScrollTrigger.defaults({ scroller: scroller });


// The actual animations and ScrollTriggers
gsap.to('section.grey .text', {
    rotation: 360,
    scrollTrigger: {
        trigger: "section.grey",
        start: "top top",
        end: () => "+=" + innerHeight,
        pin: true,
        scrub: true,
    }
});

gsap.to("section.red .horoscope", {
    x: -500,
    opacity: 1,
    delay: 1.5,
    duration: 1,
    y:-10,
    scrollTrigger: {
        trigger: "section.red",
        start: "top top",
        end: () => "+=" + innerHeight,
        pin: true,
        scrub: true,
    },
});


