const dropdown_toggler = document.querySelectorAll('.sl-js-dropdown');
const dropdown_menu = document.querySelectorAll('.sl-c-dropdown-menu');

document.addEventListener("click", () => {
    dropdown_menu.forEach(menu => {
        menu.style.display = 'none';
    })
});

dropdown_menu.forEach(menu => {
    menu.addEventListener("click", function(e) {
        e.stopPropagation(); 
    });
});

dropdown_toggler.forEach(dropdown => {
    dropdown.addEventListener("click", function(e) {
        e.stopPropagation(); 
        const target = e.target;
        const targetWidth = target.offsetWidth;
        let toggler;
        if (target.dataset.dropdown_name) {
            toggler = target.dataset.dropdown_name;
        } else if (target.parentElement.dataset.dropdown_name){
            toggler = target.parentElement.dataset.dropdown_name;
        }
        dropdown_menu.forEach(menu => {
           
            if (menu.dataset.dropdown_parent === toggler) {
                if (menu.style.display === 'flex') {
                    menu.style.display = 'none';
                } else {
                    menu.style.display = 'flex';
                    if (dropdown.dataset.variant === "center") {
                        const menuWidth = menu.offsetWidth;
                        menu.style.transform = `translateX(-${(menuWidth - targetWidth) / 2}px)`;
                    }
                }
            } else {
                menu.style.display = 'none';
            }
        })
    });
});