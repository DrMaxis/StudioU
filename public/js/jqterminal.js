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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/jqterminal.js":
/*!************************************!*\
  !*** ./resources/js/jqterminal.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

(function () {
  var Terminal;
  var currentTime = new Date();

  Terminal =
  /*#__PURE__*/
  function () {
    function Terminal() {
      _classCallCheck(this, Terminal);

      this._init_terminal("terminal");
    }

    _createClass(Terminal, [{
      key: "_init_terminal",
      value: function _init_terminal(name) {
        var $terminal;
        $terminal = $("#".concat(name));
        return $terminal.terminal({
          hack: function hack(who) {
            if (who === "me") {
              return $terminal.echo(document.cookie);
            } else {
              return $terminal.echo("unknown user");
            }
          },
          add_effect: function add_effect(effect) {
            var term;

            if (effect === "glitch") {
              $("span", $terminal).each(function (idx, el) {
                var $el, content;
                $el = $(el);
                content = $el.text();
                $el.attr("data-text", content);
                return $el.addClass("effect-glitch");
              });
            } else {
              $terminal.addClass("effect-".concat(effect));
            }

            return term = false;
          },
          remove_effect: function remove_effect(effect) {
            var term;

            if (effect === "glitch") {
              $("span", $terminal).each(function (idx, el) {
                var $el;
                $el = $(el);
                $el.attr("data-text", "");
                return $el.removeClass("effect-glitch");
              });
            } else {
              $terminal.removeClass("effect-".concat(effect));
            }

            return term = false;
          },
          goto_page: function goto_page(page) {
            var term;

            if (page === "projects") {
              window.location.href = "http://stackoverflow.com";
            } else if (page === "contact") {
              window.location.href = "https://google.com";
            } else if (page === "github") {
              window.location.href = "https://github.io";
            } else if (page === "resume") {
              window.location.href = "https://xencolor.com";
            } else {
              return $terminal.echo("unknown page");
            }
          }
        }, {
          greetings: 'Logged in as Nathan Antwi, Welcome. ' + currentTime,
          prompt: "@lotus~> ",
          name: "".concat(name)
        });
      }
    }]);

    return Terminal;
  }();

  $(function () {
    return new Terminal();
  });
}).call(this); //# sourceURL=coffeescript

/***/ }),

/***/ 1:
/*!******************************************!*\
  !*** multi ./resources/js/jqterminal.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\StudioU\resources\js\jqterminal.js */"./resources/js/jqterminal.js");


/***/ })

/******/ });