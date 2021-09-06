const alertTriggers = document.querySelectorAll('.alert-trigger');
const alerts = document.querySelectorAll('.alert');
let closeAlerts = []

const launchCloseAlerts = () => {
    closeAlerts.forEach(closeAlert => {
        closeAlert.addEventListener("click", (e) => {
            e.preventDefault();
            const alert = closeAlert.closest(".alert")
            if (alert.classList.contains("dismissable")) {
                alert.classList.remove("alert-fade-in")
                alert.classList.add("alert-fade-out")
            }
        })
    })
}


alerts.forEach((alert, i) => {
    if (alert.classList.contains("dismissable")) {
        const closeAlert = `
        <a class="alert-close" href="#">
            <i class="icon medium filter-white ml-5">
                <img src="./assets/icons/close.svg" />
            </i>
        </a>
        `
        const closeDiv = document.createElement('div')
        closeDiv.className = 'alert-close-container'
        closeDiv.innerHTML = closeAlert
        alerts[i].appendChild(closeDiv)
        closeAlerts.push(alert)
        launchCloseAlerts()
    }
})



alertTriggers.forEach(alertTrigger => {
    alertTrigger.addEventListener("click", (e) => {
        e.preventDefault();
        alerts.forEach(alert => {
            if (alert.dataset.alert_name === alertTrigger.dataset.alert_trigger) {
                if (!alert.classList.contains("alert-fade-in")) {
                    alert.classList.remove("alert-fade-out")
                    alert.classList.add("alert-fade-in")
                    setTimeout(() => {
                        alert.classList.remove("alert-fade-in")
                        alert.classList.add("alert-fade-out")
                    }, 3000)
                }
            }
        })
    })
})

