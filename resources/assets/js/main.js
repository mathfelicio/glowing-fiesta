/**
 * @description token de acesso para requisições ajax com o laravel
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/**
 * @description inicializa ferramentas do materialize para renderização nas telas
 */
$(document).ready(function () {
    $('select').material_select();

    /**
     * @description insere timeout nas mensagens de alerta para aplicar o efeito fadeout na mesma
     */
    setTimeout(function () {
        $('.alert-container')
            .removeClass('fadeInDown')
            .addClass('fadeOutRight');
    }, 10000);

    /**
     * @description inicializa componente modal do materialize
     */
    $('.modal').modal();

    /**
     * @description inicializa componente datepicker do materialize e traduz
     */
    $('.datepicker').pickadate({
        monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        weekdaysFull: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabádo'],
        weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
        labelMonthNext: 'Próximo mês',
        labelMonthPrev: 'Mês anterior',
        labelMonthSelect: 'Selecione um mês',
        labelYearSelect: 'Selecione um ano',
        format: 'yyyy/mm/dd',
        selectMonths: true,
        selectYears: 100,
        today: 'Hoje',
        clear: 'Limpar',
        close: 'Ok',
        closeOnSelect: false
    });
});
