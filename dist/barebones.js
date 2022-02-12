/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/components/alert.js":
/*!************************************!*\
  !*** ./src/js/components/alert.js ***!
  \************************************/
/***/ (() => {

eval("const alertTriggers = document.querySelectorAll('.alert-trigger');\nconst alerts = document.querySelectorAll('.alert');\nlet closeAlerts = [];\n\nconst launchCloseAlerts = () => {\n  closeAlerts.forEach(closeAlert => {\n    closeAlert.addEventListener(\"click\", e => {\n      e.preventDefault();\n      const alert = closeAlert.closest(\".alert\");\n\n      if (alert.classList.contains(\"dismissable\")) {\n        alert.classList.remove(\"alert-fade-in\");\n        alert.classList.add(\"alert-fade-out\");\n      }\n    });\n  });\n};\n\nalerts.forEach((alert, i) => {\n  if (alert.classList.contains(\"dismissable\")) {\n    const closeAlert = `\n        <a class=\"alert-close\" href=\"#\">\n            <i class=\"icon ${alert.classList.contains(\"white\") ? \"primary\" : \"white\"} ri-close-line\"></i>\n        </a>\n        `;\n    const closeDiv = document.createElement('div');\n    closeDiv.className = 'alert-close-container';\n    closeDiv.innerHTML = closeAlert;\n    alerts[i].appendChild(closeDiv);\n    closeAlerts.push(alert);\n    launchCloseAlerts();\n  }\n});\nalertTriggers.forEach(alertTrigger => {\n  alertTrigger.addEventListener(\"click\", e => {\n    e.preventDefault();\n    alerts.forEach(alert => {\n      if (alert.dataset.alert_name === alertTrigger.dataset.alert_trigger) {\n        if (!alert.classList.contains(\"alert-fade-in\")) {\n          alert.classList.remove(\"alert-fade-out\");\n          alert.classList.add(\"alert-fade-in\");\n          setTimeout(() => {\n            alert.classList.remove(\"alert-fade-in\");\n            alert.classList.add(\"alert-fade-out\");\n          }, 3000);\n        }\n      }\n    });\n  });\n});\n\n//# sourceURL=webpack://boilerplate-framework/./src/js/components/alert.js?");

/***/ }),

/***/ "./src/js/components/dropdown.js":
/*!***************************************!*\
  !*** ./src/js/components/dropdown.js ***!
  \***************************************/
/***/ (() => {

eval("const dropdownToggler = document.querySelectorAll('.dropdown-trigger');\nconst dropdownMenu = document.querySelectorAll('.dropdown');\n\nconst animateDropdownMenuOut = menu => {\n  menu.classList.remove(\"animate-menu-in\");\n  menu.classList.add(\"animate-menu-out\");\n  setTimeout(() => {\n    menu.style.display = 'none';\n    menu.classList.remove(\"animate-menu-out\");\n  }, 300);\n};\n\nconst animateDropdownMenuIn = menu => {\n  menu.classList.add(\"animate-menu-in\");\n};\n\ndocument.addEventListener(\"click\", () => {\n  dropdownMenu.forEach(menu => {\n    if (menu.style.display === 'flex') {\n      animateDropdownMenuOut(menu);\n    }\n  });\n});\ndropdownMenu.forEach(menu => {\n  menu.addEventListener(\"click\", e => {\n    e.stopPropagation();\n  });\n});\ndropdownToggler.forEach(dropdown => {\n  dropdown.addEventListener(\"click\", function (e) {\n    e.stopPropagation();\n    e.preventDefault();\n    let target = e.target;\n    let parent = target.parentElement;\n    let toggler;\n\n    if (target.dataset.dropdown_trigger) {\n      toggler = target.dataset.dropdown_trigger;\n    } else if (parent.dataset.dropdown_trigger) {\n      toggler = parent.dataset.dropdown_trigger;\n    }\n\n    dropdownMenu.forEach(menu => {\n      if (menu.dataset.dropdown_name === toggler) {\n        if (menu.style.display === 'flex') {\n          animateDropdownMenuOut(menu);\n        } else {\n          menu.style.display = 'flex';\n          animateDropdownMenuIn(menu);\n        }\n      } else {\n        animateDropdownMenuOut(menu);\n      }\n    });\n  });\n});\n\n//# sourceURL=webpack://boilerplate-framework/./src/js/components/dropdown.js?");

/***/ }),

/***/ "./src/js/components/toast.js":
/*!************************************!*\
  !*** ./src/js/components/toast.js ***!
  \************************************/
/***/ (() => {

eval("const toastTriggers = document.querySelectorAll('.toast-trigger');\nconst toasts = document.querySelectorAll('.toast');\nlet closeToasts = [];\n\nconst launchCloseToasts = () => {\n  closeToasts.forEach(closeToast => {\n    closeToast.addEventListener(\"click\", e => {\n      e.preventDefault();\n      const toast = closeToast.closest(\".toast\");\n\n      if (toast.classList.contains(\"dismissable\")) {\n        toast.classList.remove(\"toast-fade-in\");\n        toast.classList.add(\"toast-fade-out\");\n      }\n    });\n  });\n};\n\ntoasts.forEach((toast, i) => {\n  if (toast.classList.contains(\"dismissable\")) {\n    const closeToast = `\n        <a class=\"toast-close\" href=\"#\">\n            <i class=\"icon ${toast.classList.contains(\"white\") ? \"primary\" : \"white\"} ml-4 ri-close-line\"></i>\n        </a>\n        `;\n    const closeDiv = document.createElement('div');\n    closeDiv.className = 'toast-close-container';\n    closeDiv.innerHTML = closeToast;\n    toasts[i].appendChild(closeDiv);\n    closeToasts.push(toast);\n    launchCloseToasts();\n  }\n});\ntoastTriggers.forEach(toastTrigger => {\n  toastTrigger.addEventListener(\"click\", e => {\n    e.preventDefault();\n    toasts.forEach(toast => {\n      if (toast.dataset.toast_name === toastTrigger.dataset.toast_trigger) {\n        if (!toast.classList.contains(\"toast-fade-in\")) {\n          toast.classList.remove(\"toast-fade-out\");\n          toast.classList.add(\"toast-fade-in\");\n          setTimeout(() => {\n            toast.classList.remove(\"toast-fade-in\");\n            toast.classList.add(\"toast-fade-out\");\n          }, 3000);\n        }\n      }\n    });\n  });\n});\n\n//# sourceURL=webpack://boilerplate-framework/./src/js/components/toast.js?");

/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_styles_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../scss/styles.scss */ \"./src/scss/styles.scss\");\n//STYLES \n // COMPONENTS\n\n__webpack_require__(/*! ./components/dropdown.js */ \"./src/js/components/dropdown.js\");\n\n__webpack_require__(/*! ./components/toast.js */ \"./src/js/components/toast.js\");\n\n__webpack_require__(/*! ./components/alert.js */ \"./src/js/components/alert.js\");\n\n//# sourceURL=webpack://boilerplate-framework/./src/js/main.js?");

/***/ }),

/***/ "./src/scss/styles.scss":
/*!******************************!*\
  !*** ./src/scss/styles.scss ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://boilerplate-framework/./src/scss/styles.scss?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/main.js");
/******/ 	
/******/ })()
;