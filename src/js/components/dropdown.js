import { animateDropdownMenu, animateDropdownMenuOut } from '../utils/animations'

const dropdownToggler = document.querySelectorAll('.sl-js-dropdown');
const dropdownMenu = document.querySelectorAll('.sl-c-dropdown-menu');

document.addEventListener("click", () => {
    dropdownMenu.forEach(menu => {
        if (menu.style.display === 'flex') {
            animateDropdownMenuOut(menu)
        }
    })
});

dropdownMenu.forEach(menu => {
    menu.addEventListener("click", function(e) {
        e.stopPropagation(); 
    });
});

dropdownToggler.forEach(dropdown => {
    dropdown.addEventListener("click", function(e) {
        e.stopPropagation(); 
        let target = e.target;
        let targetWidth = target.offsetWidth;
        let toggler;
        if( e.target.dataset.dropdown_name) {
            target = e.target;
            toggler = target.dataset.dropdown_name;
        }
        dropdownMenu.forEach(menu => {
            if (menu.dataset.dropdown_parent === toggler) {
                if (menu.style.display === 'flex') {
                    animateDropdownMenuOut(menu)
                } else {
                    menu.style.display = 'flex';
                    if (dropdown.dataset.dropdown_align === "center") {
                        const menuWidth = menu.offsetWidth;
                        menu.style.transform = `translateX(-${(menuWidth - targetWidth) / 2}px)`;
                    }
                    animateDropdownMenu(menu)
                }
            } else {
                animateDropdownMenuOut(menu)
            }
        })
    });
});