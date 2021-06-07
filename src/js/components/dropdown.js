const dropdownToggler = document.querySelectorAll('.sl-js-dropdown');
const dropdownMenu = document.querySelectorAll('.sl-c-dropdown-menu');

const animateDropdownMenuOut = (menu) => {
    $(menu).animate({
        opacity: 0,
        transform: "translateY(-10px)"
    }, 200)
    setTimeout(() => {
        menu.style.display = 'none'
    }, 300)
}

const animateDropdownMenuIn = (menu) => {
    $(menu).animate({
        opacity: 1,
        transform: "translateY(10px)"
    }, 200)
}

document.addEventListener("click", () => {
    dropdownMenu.forEach(menu => {
        if (menu.style.display === 'flex') {
            animateDropdownMenuOut(menu)
        }
    })
});

dropdownToggler.forEach(dropdown => {
    dropdown.addEventListener("click", function(e) {
        e.stopPropagation(); 
        let target = e.target;
        let targetWidth = target.offsetWidth;
        let toggler;
        if( target.dataset.dropdown_name) {
            toggler = target.dataset.dropdown_name;
        } else if (target.parentElement.parentElement.dataset.dropdown_name) {
            toggler = target.parentElement.parentElement.dataset.dropdown_name;
        }
        dropdownMenu.forEach(menu => {
            if (menu.dataset.dropdown_parent === toggler) {
                if (menu.style.display === 'flex') {
                    animateDropdownMenuOut(menu)
                } else {
                    menu.style.display = 'flex';
                    if (menu.classList.contains("center")) {
                        const menuWidth = menu.offsetWidth;
                        menu.style.transform = `translateX(-${(menuWidth - targetWidth) / 2}px)`;
                    }
                    animateDropdownMenuIn(menu)
                }
            } else {
                animateDropdownMenuOut(menu)
            }
        })
    });
});