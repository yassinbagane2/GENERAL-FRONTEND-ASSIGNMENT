import './bootstrap'
import 'flowbite'

// animations:
const myLogo = new SplitType('#logo')
gsap.to('.char', {
    y: 0,
    stagger: 0.1,
    delay: 0.2,
    duration: 0.1,
})
gsap.to('#left-rev-art', {
    opacity: 1,
    delay: 1,
    duration: 2,
})
gsap.to(
    '#heading1',
    {
        opacity: 1,
        delay: 1,
        duration: 2,
    },
    1
)
gsap.to(
    '#line',
    {
        opacity: 1,
        delay: 1,
        duration: 2,
    },
    1.4
)
gsap.to(
    '#paragraph',
    {
        opacity: 1,
        delay: 1,
        duration: 2,
    },
    1.6
)
gsap.to(
    '#sales_price',
    {
        opacity: 1,
        delay: 1,
        duration: 2,
    },
    1.8
)
gsap.to(
    '#buy_btn',
    {
        opacity: 1,
        delay: 1,
        duration: 2,
    },
    2
)
gsap.to(
    '#default-carousel',
    {
        opacity: 1,
        delay: 1,
        duration: 2,
    },
    2.4
)

gsap.to('.animiate-bounce', {
    y: 30,
    duration: 1.6,
    repeat: -1,
    yoyo: true,
})

gsap.registerPlugin(ScrollTrigger)

gsap.to('#heading2', {
    opacity: 1,
    y: 0,
    transition: 'ease-in',
    delay: 0.8,
    scrollTrigger: '#heading2',
})
gsap.to('#paragraph2', {
    opacity: 1,
    y: 0,
    transition: 'ease-in',
    delay: 1,
    scrollTrigger: '#paragraph2',
})
