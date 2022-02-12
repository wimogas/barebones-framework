const toastTriggers = document.querySelectorAll('.toast-trigger');
const toasts = document.querySelectorAll('.toast');
let closeToasts = []

const launchCloseToasts = () => {
    closeToasts.forEach(closeToast => {
        closeToast.addEventListener("click", (e) => {
            e.preventDefault();
            const toast = closeToast.closest(".toast")
            if (toast.classList.contains("dismissable")) {
                toast.classList.remove("toast-fade-in")
                toast.classList.add("toast-fade-out")
            }
        })
    })
}


toasts.forEach((toast, i) => {
    if (toast.classList.contains("dismissable")) {
        const closeToast = `
        <a class="toast-close" href="#">
            <i class="icon ${toast.classList.contains("white") ? "primary" : "white"} ml-4 ri-close-line"></i>
        </a>
        `
        const closeDiv = document.createElement('div')
        closeDiv.className = 'toast-close-container'
        closeDiv.innerHTML = closeToast
        toasts[i].appendChild(closeDiv)
        closeToasts.push(toast)
        launchCloseToasts()
    }
})

toastTriggers.forEach(toastTrigger => {
    toastTrigger.addEventListener("click", (e) => {
        e.preventDefault();
        toasts.forEach(toast => {
            if (toast.dataset.toast_name === toastTrigger.dataset.toast_trigger) {
                if (!toast.classList.contains("toast-fade-in")) {
                    toast.classList.remove("toast-fade-out")
                    toast.classList.add("toast-fade-in")
                    setTimeout(() => {
                        toast.classList.remove("toast-fade-in")
                        toast.classList.add("toast-fade-out")
                    }, 3000)
                }
            }
        })
    })
})

