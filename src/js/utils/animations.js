import { default as anime } from '../../../node_modules/animejs/lib/anime.es.js';

const baseDuration = 200

export const animateDropdownMenu = (menu) => {
    anime({
        targets: menu,
        opacity: {
            value: [0, 1],
            duration: baseDuration,
            easing: 'linear'
        },
        translateY: {
            value: [-10, 10],
            duration: baseDuration,
            easing: 'linear'
        }
    })
}

export const animateDropdownMenuOut = (menu) => {
    anime({
        targets: menu,
        opacity: {
            value: [1, 0],
            duration: baseDuration,
            easing: 'linear'
        },
        translateY: {
            value: [10, -10],
            duration: baseDuration,
            easing: 'linear'
        },
    });
    setTimeout(() => {
        menu.style.display = 'none';
    }, baseDuration*2);
}
