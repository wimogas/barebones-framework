const dropdownToggler = document.querySelectorAll('.dropdown-trigger');
const dropdownMenu = document.querySelectorAll('.dropdown');

const animateDropdownMenuOut = (menu) => {
    menu.classList.remove("animate-menu-in")
    menu.classList.add("animate-menu-out")
    setTimeout(() => {
        menu.style.display = 'none'
        menu.classList.remove("animate-menu-out")
    }, 300)
}

const animateDropdownMenuIn = (menu) => {
    menu.classList.add("animate-menu-in")
}

document.addEventListener("click", () => {
    dropdownMenu.forEach(menu => {
        if (menu.style.display === 'flex') {
            animateDropdownMenuOut(menu)
        }
    })
});

dropdownMenu.forEach(menu => {
    menu.addEventListener("click", (e) => {
        e.stopPropagation()
    })
})

dropdownToggler.forEach(dropdown => {
    dropdown.addEventListener("click", function(e) {
        e.stopPropagation(); 
        e.preventDefault();
        let target = e.target;
        let parent = target.parentElement;
        let toggler;
        if( target.dataset.dropdown_trigger) {
            toggler = target.dataset.dropdown_trigger;
        } else if (parent.dataset.dropdown_trigger) {
            toggler = parent.dataset.dropdown_trigger;
        }
        dropdownMenu.forEach(menu => {
            if (menu.dataset.dropdown_name === toggler) {
                if (menu.style.display === 'flex') {
                    animateDropdownMenuOut(menu)
                } else {
                    menu.style.display = 'flex';
                    animateDropdownMenuIn(menu)
                }
            } else {
                animateDropdownMenuOut(menu)
            }
        })
    });
});