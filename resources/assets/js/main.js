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
jQuery.extend( jQuery.fn.pickadate.defaults, {
    monthsFull: [ 'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro' ],
    monthsShort: [ 'jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez' ],
    weekdaysFull: [ 'domingo', 'segunda-feira', 'terça-feira', 'quarta-feira', 'quinta-feira', 'sexta-feira', 'sábado' ],
    weekdaysShort: [ 'dom', 'seg', 'ter', 'qua', 'qui', 'sex', 'sab' ],
    today: 'hoje',
    clear: 'limpar',
    close: 'fechar',
    format: 'dd/mm/yyyy',
    formatSubmit: 'yyyy/mm/dd'
});

jQuery.extend( jQuery.fn.pickatime.defaults, {
    clear: 'limpar'
});

/**
 * @description inicializa ferramentas do materialize para renderização nas telas
 */
$(document).ready(function () {
    /**
     * @description inicializa componente tooltip do materialize
     */
    $('.tooltip').tooltip({delay: 50});

    /**
     * @description inicializa select para a utilização em forms
     */
    $('.input-field').find('select').material_select();

    /**
     * @description insere timeout nas mensagens de alerta para aplicar o efeito fadeout na mesma
     */
    setTimeout(function () {
        $('.alert-container')
            .removeClass('fadeInDown')
            .addClass('fadeOutRight');
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
