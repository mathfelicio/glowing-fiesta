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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 9);
/******/ })
/************************************************************************/
/******/ ({

/***/ 10:
/***/ (function(module, exports) {

/**
 * @description token de acesso para requisições ajax com o laravel
 */
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

/**
 * @description mostra o loader durante uma requisição ajax
 */
$(document).ajaxStart(function () {
  $(".container-loader").fadeIn();
});

/**
 * @description esconde o loader ao terminar uma requisição ajax
 */
$(document).ajaxStop(function () {
  $(".container-loader").fadeOut();
});

/**
 * @description
 */
jQuery.extend(jQuery.fn.pickadate.defaults, {
  monthsFull: ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'],
  monthsShort: ['jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'],
  weekdaysFull: ['domingo', 'segunda-feira', 'terça-feira', 'quarta-feira', 'quinta-feira', 'sexta-feira', 'sábado'],
  weekdaysShort: ['dom', 'seg', 'ter', 'qua', 'qui', 'sex', 'sab'],
  today: 'hoje',
  clear: 'limpar',
  close: 'fechar',
  format: 'dd/mm/yyyy',
  formatSubmit: 'yyyy/mm/dd'
});

jQuery.extend(jQuery.fn.pickatime.defaults, {
  clear: 'limpar'
});

/**
 * @description inicializa ferramentas do materialize para renderização nas telas
 */
$(document).ready(function () {
  /**
   * @description inicializa componente tooltip do materialize
   */
  $('.tooltip').tooltip({ delay: 50 });

  /**
   * @description inicializa select para a utilização em forms
   */
  $('.input-field').find('select').material_select();

  /**
   * @description insere timeout nas mensagens de alerta para aplicar o efeito fadeout na mesma
   */
  setTimeout(function () {
    $('.alert-container').removeClass('fadeInDown').addClass('fadeOutRight');
  }, 10000);

  /**
   * @description inicializa sidenav para a visualização em menu responsivo
   */
  $('.button-collapse').sideNav({
    draggable: true
  });

  /**
   * @description inicializa componente collapse do materialize
   */
  $('.collapsible').collapsible();

  /**
   * @description inicializa componente modal do materialize
   */
  $('.modal').modal();
});

/***/ }),

/***/ 9:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(10);


/***/ })

/******/ });