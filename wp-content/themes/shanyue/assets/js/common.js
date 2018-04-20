/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/common.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/common.js":
/*!*****************************!*\
  !*** ./assets/js/common.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

var commons = {
    navbarToggle: function navbarToggle() {
        document.querySelector('#site-navigation button.toggle').addEventListener('click', function () {
            if (document.querySelector('#primary-menu').classList.contains('opened')) {
                document.querySelector('#primary-menu').classList.remove('opened');
            } else {
                document.querySelector('#primary-menu').classList.add('opened');
            }
        });
    },
    windowScroll: function windowScroll() {
        window.addEventListener('scroll', function () {
            if (document.documentElement.scrollTop >= 40) {
                document.querySelector('#masthead').classList.add('scroll-down');
                document.querySelector('#content').classList.add('scroll-down');
            } else {
                document.querySelector('#masthead').classList.remove('scroll-down');
                document.querySelector('#content').classList.remove('scroll-down');
            }
        });
    }
};
document.addEventListener('DOMContentLoaded', function () {
    commons.navbarToggle();
    commons.windowScroll();
});

/***/ })

/******/ });
//# sourceMappingURL=common.js.map