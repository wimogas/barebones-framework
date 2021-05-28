import {truncate} from '../utils/utils'
const folderBlock = $('.sl-c-folder-block')
const folderName = $('.sl-c-folder-name')
const folderMenu = $('.sl-c-folder-menu')
const folderMenuToggler = $('.sl-c-folder-menu--toggler')
const folderNameArrow = document.querySelectorAll('.sl-c-folder-name--arrow')
const treePanelToggler = $('.sl-js-tree-panel--toggler')

$(document).on("click", () => {
    $(folderMenuToggler).each((i,menu) => {
        const folderMenu = $(menu).closest('.sl-c-folder-menu')
        if ($(folderMenu).css("display") === 'block') {
            $(folderMenu).removeAttr("style")
        }
    })
});

$(folderName).each((i, folder) => {
    const folderBlockWidth = parseInt($(folderBlock).outerWidth())
    const folderMenuWidth = parseInt($(folderMenu).outerWidth())
    const folderBlockPadding = parseInt($(folder).closest('.sl-c-folder-block').css("paddingLeft"))
    const availableWidth = folderBlockWidth - folderMenuWidth - folderBlockPadding;
    let folderWidth = $(folder).width();
    let folderText = $(folder).find('.sl-c-folder-name--text');
    let folderTextLength = $(folderText).text().length;
    if (folderBlockWidth > 35) {
        while (folderWidth > availableWidth) {
            let textToTruncate = folderTextLength - 5;
            let folderTextTrunc = truncate(folderText.text(), textToTruncate);
            $(folderText).text(folderTextTrunc);
            folderTextLength = $(folderText).text().length;
            folderWidth = $(folder).width(); 
        }
    }
})

$(folderMenuToggler).each((i,toggler) => {
    $(toggler).on("click", function(e) {
        let target = e.target
        if (target.parentElement.parentElement.parentElement.style.display === "block") {
            target.parentElement.parentElement.parentElement.removeAttribute('style')
        } else {
            target.parentElement.parentElement.parentElement.style.display = "block";
        }
    })
})

folderNameArrow.forEach(arrow => {
    arrow.addEventListener("click", function(e) {
        let target = e.target;
        if (target.style.transform === "rotate(90deg)") {
            target.style.transform = "rotate(0deg)"
        } else {
            target.style.transform = "rotate(90deg)"
        }
    })
})

function animateTreePanelDown() {
    $('.sl-c-tree-panel ').delay(200).animate({
        width: "32px"
    }, 300)
    $('.sl-c-tree-panel ').children().animate({
        opacity: 0
    }, 200)
    $(treePanelToggler).delay(200).animate({
        marginLeft: "33px"
    }, 300)
}

function animateTreePanelUp() {
    $('.sl-c-tree-panel ').animate({
        width: "300px"
    }, 300)
    $('.sl-c-tree-panel ').children().delay(200).animate({
        opacity: 1
    }, 200)
    $(treePanelToggler).animate({
        marginLeft: "300px"
    }, 300)
}

$(treePanelToggler).on("click", () => {
    let treePanelWidth = parseInt($('.sl-c-tree-panel ').width())
    if (treePanelWidth > 32) {
        animateTreePanelDown()  
    } else {
        animateTreePanelUp()
    }
})

let acceptChange = true;

$(window).on("resize", () => {
    const windowWidth = parseInt($(window).outerWidth())
    let treePanelWidth = parseInt($('.sl-c-tree-panel').outerWidth())
    if (windowWidth <= 500 && treePanelWidth >= 32 && acceptChange) {
        acceptChange = false;
        animateTreePanelDown()
    } else if (windowWidth >= 501 && treePanelWidth <= 32 && !acceptChange){
        acceptChange = true;
        animateTreePanelUp()
    }
})