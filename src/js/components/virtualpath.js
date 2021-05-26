import {truncate} from '../utils/utils'
const folderBlock = document.querySelector('.sl-c-folder-block')
const folderName = document.querySelectorAll('.sl-c-folder-name')
const folderMenuToggler = document.querySelectorAll('.sl-c-folder-menu--toggler')
const folderNameArrow = document.querySelectorAll('.sl-c-folder-name--arrow')

document.addEventListener("click", () => {
    folderMenuToggler.forEach(menu => {
        if (menu.parentElement.style.display === 'block') {
            menu.parentElement.removeAttribute('style')
        }
    })
});

folderName.forEach(folder => {
    const folderWidth = folder.offsetWidth;
    const padding = parseInt(folder.parentElement.parentElement.style.paddingLeft) || 0
    const total = padding + folderWidth
    const folderChildren = [...folder.childNodes[1].childNodes[3].childNodes]
    let folderName;
    for (let i = 0; i < folderChildren.length; i++) {
        if (folderChildren[i].className == "sl-c-folder-name--text"){
            folderName = folderChildren[i]
        }
    }
    let folderTextWidth = folderName.offsetWidth
    const initFolderTextLength = folderName.offsetWidth
    const folderTextLength = folderName.innerText.length
    if (total > 250) {
        let textToTruncate = folderTextLength - 1
        while (folderTextWidth > initFolderTextLength-76) {
            textToTruncate = textToTruncate - 2
            let folderTextTrunc = truncate(folderName.innerText, textToTruncate)
            folderName.innerText = folderTextTrunc
            folderTextWidth = folderName.offsetWidth
        }
    }
})

folderMenuToggler.forEach(toggler => {
    toggler.addEventListener("click", function(e) {
        let target = e.target
        if (target.parentElement.style.display === "block") {
            target.parentElement.removeAttribute('style')
        } else {
            target.parentElement.style.display = "block";
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