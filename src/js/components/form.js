const inputToCheck = document.querySelectorAll('input[data-validation="required"]');
const selectorToCheck = document.querySelectorAll('select[data-validation="required"]');
const formToCheck = document.querySelectorAll('form');
const activityToCheck = document.querySelectorAll('select[name="particular_or_professional"]')
const submitButton = document.querySelectorAll('button[type="submit"]');
const professionalBlock = document.querySelectorAll(".free-trial-hero-form-professional-block")

formToCheck.forEach(form => {
    activityToCheck.forEach(activity => {
        if (activity.parentElement.parentElement.id === form.id) {
            activity.addEventListener("change", () => {
                if (activity.value === "Professional") {
                    professionalBlock.forEach(block => {
                        if (block.parentElement.id === form.id) {
                            block.classList.remove("hide");
                        }
                    })
                } else {
                    professionalBlock.forEach(block => {
                        if (block.parentElement.id === form.id) {
                            block.classList.add("hide");
                        }
                    })
                }
            })
        }
    })
    submitButton.forEach(button => {
        if (button.parentElement.id === form.id) {
            button.addEventListener("click", (e) => {
                e.preventDefault()
                let errors = 0;
                inputToCheck.forEach(input => {
                    if (input.parentElement.parentElement.id === form.id && input.type != "checkbox") {
                        if (input.value === "") {
                            errors += 1
                            input.classList.add("border-error");
                        } else {
                            if (input.classList.contains("border-error")) {
                                input.classList.remove("border-error");
                            }
                        }
                    }
                    if (input.type === "checkbox" && input.parentElement.parentElement.id === form.id) {
                        if(input.checked === false) {
                            errors += 1;
                            input.parentElement.classList.add("border-error", "p-3");
                        } else {
                            if (input.parentElement.classList.contains("border-error")) {
                                input.parentElement.classList.remove("border-error", "p-3");
                            }
                        }
                    }
                })
                selectorToCheck.forEach(selector => {
                    if (selector.parentElement.parentElement.id === form.id) {
                        if (selector.value === ""){
                            errors += 1
                            selector.classList.add("border-error")
                        } else {
                            if (selector.classList.contains("border-error")) {
                                selector.classList.remove("border-error")
                            }
                        }
                    }
                })
                professionalBlock.forEach(block => {
                    if (block.parentElement.id === form.id) {
                        if (!block.classList.contains("hide")) {
                            inputToCheck.forEach(input => {
                                let parent = input.parentElement.parentElement.parentElement
                                if (parent.id === form.id) {
                                    if (input.value === "") {
                                        errors += 1
                                        input.classList.add("border-error");
                                    } else {
                                        if (input.classList.contains("border-error")) {
                                            input.classList.remove("border-error");
                                        }
                                    }
                                }
                            })
                            selectorToCheck.forEach(selector => {
                                let parent = selector.parentElement.parentElement.parentElement
                                if (parent.id === form.id) {
                                    if (selector.value === ""){
                                        errors += 1
                                        selector.classList.add("border-error")
                                    } else {
                                        if (selector.classList.contains("border-error")) {
                                            selector.classList.remove("border-error")
                                        }
                                    }
                                }
                            })
                        }
                    }
                })
                if (errors === 0) {
                    console.log("go")
                } else {
                    console.log(errors)
                }
            })
        }
    })
})