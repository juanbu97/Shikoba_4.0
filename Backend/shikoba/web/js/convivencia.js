/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ),josema, maze.
 * @File: convivencia.js
 * @Created: 2017
 * @Updated: 2019
 * @Description: Script de control del js de Shikoba.
 *
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */
$(document).ready(function () {

    moment.locale('es');

    $.fn.dataTable.ext.buttons.reload = {
        text: '<i class="material-icons">autorenew</i>',
        titleAttr: 'Recargar',
        action: function (e, dt, node, config) {
            window.location.href = window.location.href
        }
    };

    const SANCION_TYPE_HORAS = 5;
    const HORAS_CLASE = {
        '1': '08:15 - 09:15',
        '2': '09:15 - 10:15',
        '3': '10:15 - 11-15',
        '4': '11:40 - 12:40',
        '5': '12:40 - 13:40',
        '6': '13:40 - 14:40'
    };


    //CHOSEN
    $('.chosen-select').chosen();

    //DATEPICKER
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
    $('.datepicker').datepicker();


    //PARTE FORM, CONDUCTAS MOSTRAR Y OCULTAR
    $.each($('.selectForm input'), function (key, value) {
        if ($(value).prop('checked') == true) {
            ocultarCheckbox();
            return false;
        }
    });

    function ocultarCheckbox() {
        $.each($('.selectForm input'), function (key, value) {
            if ($(value).prop('checked') == false) {
                $(value).next('label').hide();
                $(value).hide();
            }
        });

        $('.selectForm')
            .after('<div id="divAbrir" class="col s12 center" style="margin-bottom: 1%"><input type="button" class="btn z-depth-3 blue darken-4 waves-effect waves-light checkAbrir" value="+"></div>');

    }

    $('body').on('click', '.checkAbrir', function () {
        $.each($('.selectForm input'), function (key, value) {
            if ($(value).prop('checked') == false) {
                $(value).next('label').show(250);
                $(value).show(250);
            }
        });

        $('.checkAbrir').removeClass('checkAbrir').addClass('checkCerrar').val('-');
    })
        .on('click', '.checkCerrar', function () {
            $.each($('.selectForm input[type=checkbox]'), function (key, value) {
                if ($(value).prop('checked') == false) {
                    $(value).next('label').hide(250);
                    $(value).hide(250);
                }
            });

            $('.checkCerrar').removeClass('checkCerrar').addClass('checkAbrir').val('+');
        }).on('click', '.checkNewSancion', function () {
        // Funcionalidad boton añadir Sanción HoraAC
        $(this).before(contenedorNewHoraSancion());
    })

    //PARTE FORM BÚSQUEDA AVANZADA
        .on('click', '.busquedaMas', function () {
            $('#cursos').show(300).css('display', 'flex');
            $(this).removeClass('busquedaMas').addClass('busquedaMenos');
        })
        .on('click', '.busquedaMenos', function () {
            $('#cursos').hide(300);
            $(this).removeClass('busquedaMenos').addClass('busquedaMas');
        });

    // SANCIONES, SI TIPO ES HORAS O JORNADA MOSTRAR NUEVOS INPUTS

    $('#sancion_form_idTipo').on('change', function () {
        $('#checkEditSancion').hide();
        if ($(this).val() == SANCION_TYPE_HORAS) {
            $('.contenedorFlexEdit').css('visibility', 'visible');
            let buttonAdd = '<div class="col s12 center"><input type="button" class="btn z-depth-1 blue darken-3 waves-effect waves-light checkNewSancion" value="+"></div>';
            contenedorNewHoraSancion(buttonAdd);
        } else {
            $('.contenedorFlex').hide();
            $('.contenedorFlexEdit').remove();
        }
    });

    /**
     * Función que añade el contenedor HoraAC con los inputs
     * @param text HTML que se puede añadir al final del contenedor
     */
    function contenedorNewHoraSancion(text = '') {
        let fecha = new Date();
        var options = {
            day: "numeric", month: "2-digit", year: "numeric"
        };
        fecha = fecha.toLocaleString('es-Es', options);
        let input = '<div class="row contenedorFlexEdit">' +
            '<div class="col s6 input-field">' +
            '<input type="text" class="datepicker" id="dat" placeholder="." name="fechaHora[]" contenteditable="false" value="' + fecha + '">' +
            '<label for="dat" class="active">Fecha hora sanción</label>' +
            '</div>' +
            '<div class="col s6 input-field" id="horasAC">' +
            '<select name="horaAc[]">';
        for (let key in HORAS_CLASE) {
            input += '<option value="' + key + '">' + HORAS_CLASE[key] + '</option>';
        }
        input += '</select><label>Hora</label>';
        input += '</div></div>';
        $('#sancion_form_idTipo').after(input);
        $('.contenedorFlexEdit')
            .append(text);
        $('.datepicker').datepicker();
        $('#horasAC > select').material_select();
        $('.caret').css("display", "none");
    }

    //ICHECK
    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-blue checkbus',
        radioClass: 'iradio_square-blue',
    });


    // Hamburguer Nav
    $("#hamburguer").on('click', function () {
        $("nav").toggle();
        $("#navLeft").toggle();
    });

    // Tooltipster
    $('.tooltip').tooltipster({
        theme: 'tooltipster-light'
    });

    // Pantalla Confirmación
    $('a.confirm').confirm({
        theme: 'supervan',
        content: "¿Está seguro de realizar esta acción?",
        buttons: {
            Aceptar: function () {
                location.href = this.$target.attr('href');
            },
            Cancelar: function () {

            }
        },
        columnClass: 'confirmdialog'
    });

    $('#contenedorUpload').on('change', 'input:file', function () {
        if ($(this).val()) {
            $('#contenedorUpload input:submit').removeAttr('disabled');
        }
    });

    $('#botonImportar').on('click', function () {
        $('#contenedorUpload .loader').css({opacity: 0, visibility: "visible"}).animate({opacity: 1}, 500)
    })


    // DataTables
    // Este plugin está deprecated, se adapta a la funcionalidad de Shikoba pero requiere actualización.
    jQuery.extend(jQuery.fn.dataTableExt.oSort, {
        "date-eu-pre": function (date) {
            date = date.replace(" ", "");

            if (!date) {
                return 0;
            }

            var year;
            var month;
            var day;
            var eu_date = date.split(/[\.\-\/]/);

            /*year (optional)*/
            if (eu_date[2]) {
                year = eu_date[2];
            } else {
                year = 0;
            }

            /*year (optional)*/
            if (eu_date[1]) {
                month = eu_date[1];
            } else {
                month = 0;
            }

            /*year (optional)*/
            if (eu_date[0]) {
                day = eu_date[0];
            } else {
                day = 0;
            }

            /* /!*month*!/
             var month = 0;
             month = eu_date[1];
             if (month.length === 1) {
                 month = 0 + month;
             }

             /!*day*!/
             var day = eu_date[0];
             if (day.length === 1) {
                 day = 0 + day;
             }*/

            return (year + month + day) * 1;
        },

        "date-eu-asc": function (a, b) {
            return ((a < b) ? -1 : ((a > b) ? 1 : 0));
        },

        "date-eu-desc": function (a, b) {
            return ((a < b) ? 1 : ((a > b) ? -1 : 0));
        }
    });

    /**
     * Función genérica para los datatables.
     */
    $('.tableData').DataTable({
        //css para cambiar el estilo al cargar la tabla
        "drawCallback": function (settings) {
            $(".dt-button").addClass("btn btn-floating blue darken-3");
            $("#DataTables_Table_0_wrapper>div:first-child").addClass("col s12 m4 center");
            $(".dt-button").removeClass("dt-button");
            //botones de exortar en tablas
            $("#DataTables_Table_0_wrapper>.dt-buttons").after("<div id='nuevo' class='col s12 m4 l3'></div>");
            $('.dt-buttons').css("margin-right", "2%");
            //el label aparece dos veces por lo que borro uno cada vez que se añade
            $("#DataTables_Table_0_wrapper>div>.remo").remove();
            $("#DataTables_Table_0_wrapper>div>.buttons-pdf").before("<label style='margin-right: 3%;' class='remo'>Exportar</label>");
            $('.dt-buttons').removeClass("dt-buttons");
            if ($(window).width() > "600" && $(window).width() < "990") {
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right offset-m8");
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                //esta condicion sirve para la ventana de partes
                if ($("#parte").length > 0) {
                    $("#DataTables_Table_0_wrapper>div.offset-m8").before("<div id='botonnuevo' class='col m3 left'></div>");
                    $("#DataTables_Table_0_wrapper>div.offset-m8").addClass("offset-m4");
                    $("#DataTables_Table_0_wrapper>div.offset-m8").removeClass("offset-m8");
                    $("#parte").appendTo("#botonnuevo");
                }

            }
            if ($(window).width() > "991") {
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right l3");
                $("#DataTables_Table_0_wrapper>div:first-child").css("text-align", "left");
                $("#DataTables_Table_0_wrapper>div:first-child").css("margin-top", "2%");
                $("#nuevo").addClass("center");
                //esta condicion sirve para la ventana de partes
                if ($("#parte").length > 0) {
                    $("#botonbus button").css("left", "-5%");
                    $("#nuevo").addClass("l4");
                    $("#nuevo").removeClass("l3");

                }

            }
            $("#aqui").appendTo("#nuevo");
            $("#aqui2").appendTo("#nuevo");
            $(".paginate_button.current").addClass("btn  blue darken-4 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button").addClass("btn  blue darken-2 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button.current").removeClass("paginate_button current");
            $(".paginate_button").removeClass("paginate_button");
            //muestro los select de las tablas
            $("#DataTables_Table_0_length select").css("display", "flex");
        },
        "lengthMenu": [[5, 10, 20, 30, -1], [5, 10, 20, 30, "Todos"]],
        language: {
            search: "Busca en la tabla ",
            paginate: {
                first: "Primero",
                previous: "<i class='material-icons pagi'>chevron_left</i>",
                next: "<i class='material-icons pagi'>chevron_right</i>",
                last: "Último"
            },
            lengthMenu: "Mostrar _MENU_",
            emptyTable: "No hay registros en la tabla",
            info: "Mostrando _END_ registros de _TOTAL_ en total",
            infoEmpty: "No hay resultados",
            infoFiltered: "(filtrado de _MAX_ en total)",
            zeroRecords: "No se encuentra ningun registro",
        },
        //botones para exportacion
        dom: 'Bfrt<"prefooter"lip>',
        buttons: [
            {
                extend: 'pdfHtml5',
                text: '<i class="material-icons">picture_as_pdf</i>',
                titleAttr: 'PDF',
                filename: 'Informes Shikoba: ' + $('.tableData').closest('body').find('h3').text(),
                orientation: 'portrait',
                title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                    + ($('.tableData').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                    + ($('.tableData').closest('body').find('h3').text().substr(1, $('.tableData').text().length)) + '.',
                pageSize: 'A3',
                customize: function (doc) {
                    let customDoc = doc;
                    customizeHeader(customDoc, $('.tableData'))
                },
                exportOptions: {
                    columns: "thead th:not(.noExport)",
                    search: 'applied',
                    order: 'applied'
                },
                footer: true},
            {
                extend: 'excelHtml5',
                text: '<i class="excel"></i>',
                titleAttr: 'Excel',
                filename: 'Informes Shikoba: ' + $('.tableData').closest('body').find('h3').text(),
                title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                    + ($('.tableData').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                    + ($('.tableData').closest('body').find('h3').text().substr(1, $('.tableData').text().length)) + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }},
            {
                extend: 'csvHtml5',
                text: '<i class="csv"></i>',
                titleAttr: 'CSV',
                filename: 'Informes Shikoba: ' + $('.tableData').closest('body').find('h3').text(),
                title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                    + ($('.tableData').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                    + ($('.tableData').closest('body').find('h3').text().substr(1, $('.tableData').text().length)) + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }},
            {
                extend: 'print',
                text: '<i class="material-icons">print</i>',
                titleAttr: 'Imprimir',
                filename: 'Informes Shikoba: ' + $('.tableData').closest('body').find('h3').text(),
                title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                    + ($('.tableData').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                    + ($('.tableData').closest('body').find('h3').text().substr(1, $('.tableData').text().length)) + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }},

            'reload'
        ]
    });

    let tableDataCarnets = $('.tableDataCarnets').DataTable({
        //css para cambiar el estilo al cargar la tabla
        "drawCallback": function (settings) {
            $(".dt-button").addClass("btn btn-floating blue darken-3");
            $("#DataTables_Table_0_wrapper>div:first-child").addClass("col s12 m4 center");
            $(".dt-button").removeClass("dt-button");
            //botones de exortar en tablas
            $("#DataTables_Table_0_wrapper>.dt-buttons").after("<div id='nuevo' class='col s12 m4 l3'></div>");
            $('.dt-buttons').css("margin-right", "2%");
            //el label aparece dos veces por lo que borro uno cada vez que se añade
            $("#DataTables_Table_0_wrapper>div>.remo").remove();
            $("#DataTables_Table_0_wrapper>div>.buttons-pdf").before("<label style='margin-right: 3%;' class='remo'>Exportar</label>");
            $('.dt-buttons').removeClass("dt-buttons");
            if ($(window).width() > "600" && $(window).width() < "990") {
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right offset-m8");
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");

            }
            if ($(window).width() > "991") {
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right l3");
                $("#DataTables_Table_0_wrapper>div:first-child").css("text-align", "left");
                $("#DataTables_Table_0_wrapper>div:first-child").css("margin-top", "2%");
                $("#DataTables_Table_0_filter").css("text-align", "center");

                $("#nuevo").addClass("center");

            }
            $("#aqui").appendTo("#nuevo");
            $("#aqui2").appendTo("#nuevo");

            $(".paginate_button.current").addClass("btn  blue darken-4 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button").addClass("btn  blue darken-2 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button.current").removeClass("paginate_button current");
            $(".paginate_button").removeClass("paginate_button");
            //muestro los select de las tablas
            $("#DataTables_Table_0_length select").css("display", "block");
            $("#carnetFilterPuntos").material_select();


        },
        "lengthMenu": [[5, 10, 20, 30, -1], [5, 10, 20, 30, "Todos"]],
        language: {
            search: "Busca en la tabla ",
            paginate: {
                first: "Primero",
                previous: "<i class='material-icons pagi'>chevron_left</i>",
                next: "<i class='material-icons pagi'>chevron_right</i>",
                last: "Último"
            },
            lengthMenu: "Mostrar _MENU_",
            emptyTable: "No hay registros en la tabla",
            info: "Mostrando _END_ registros de _TOTAL_ en total",
            infoEmpty: "No hay resultados",
            infoFiltered: "(filtrado de _MAX_ en total)",
            zeroRecords: "No se encuentra ningun registro",
        },
        //botones para exportacion
        dom: 'Bfrt<"prefooter"lip>',
        buttons:
            [
                {
                    extend: 'pdfHtml5',
                    text: '<i class="material-icons">picture_as_pdf</i>',
                    titleAttr: 'PDF',
                    filename: 'Informes Shikoba: ' + $('.tableDataCarnets').closest('body').find('h3').text(),
                    orientation: 'portrait',
                    title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                        + ($('.tableDataCarnets').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                        + ($('.tableDataCarnets').closest('body').find('h3').text().substr(1, $('.tableDataCarnets').text().length)) + '.',
                    pageSize: 'A3',
                    customize: function (doc) {
                        let customDoc = doc
                        customizeHeader(customDoc, $('.tableDataCarnets'))
                    },
                    exportOptions: {
                        columns: "thead th:not(.noExport)",
                        search: 'applied',
                        order: 'applied'
                    },
                    footer: true},
                {
                    extend: 'excelHtml5',
                    text: '<i class="excel"></i>',
                    titleAttr: 'Excel',
                    filename: 'Informes Shikoba: ' + $('.tableDataCarnets').closest('body').find('h3').text(),
                    title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                        + ($('.tableDataCarnets').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                        + ($('.tableDataCarnets').closest('body').find('h3').text().substr(1, $('.tableDataCarnets').text().length)) + '.',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }},
                {
                    extend: 'csvHtml5',
                    text: '<i class="csv"></i>',
                    titleAttr: 'CSV',
                    filename: 'Informes Shikoba: ' + $('.tableDataCarnets').closest('body').find('h3').text(),
                    title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                        + ($('.tableDataCarnets').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                        + ($('.tableDataCarnets').closest('body').find('h3').text().substr(1, $('.tableDataCarnets').text().length)) + '.',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }},
                {
                    extend: 'print',
                    text: '<i class="material-icons">print</i>',
                    titleAttr: 'Imprimir',
                    filename: 'Informes Shikoba: ' + $('.tableDataCarnets').closest('body').find('h3').text(),
                    title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                        + ($('.tableDataCarnets').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                        + ($('.tableDataCarnets').closest('body').find('h3').text().substr(1, $('.tableDataCarnets').text().length)) + '.',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }}
            ]
    });

    /**
     * Función para los datatables de sanciones.
     */
    let tableDataMedidas = $('.tableDataMedidas').DataTable({
        "aoColumnDefs": [
            {
                "targets": [1, 3, 4],
                "sType": "date-eu",
                "render": function (data) {
                    return data;
                }}
        ],
        "drawCallback": function (settings) {
            $(".dt-button").addClass("btn btn-floating blue darken-3");
            $("#DataTables_Table_0_wrapper>div:first-child").addClass("col s12 m4 center");
            $(".dt-button").removeClass("dt-button");
            //botones de exortar en tablas
            $("#DataTables_Table_0_wrapper>.dt-buttons").after("<div id='nuevo' class='col s12 m4 l3'></div>");
            $('.dt-buttons').css("margin-right", "2%");
            //el label aparece dos veces por lo que borro uno cada vez que se añade
            $("#DataTables_Table_0_wrapper>div>.remo").remove();
            $("#DataTables_Table_0_wrapper>div>.buttons-pdf").before("<label style='margin-right: 3%;' class='remo'>Exportar</label>");
            $('.dt-buttons').removeClass("dt-buttons");
            if ($(window).width() > "600" && $(window).width() < "990") {
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right offset-m8");
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                //esta condicion sirve para la ventana de partes
                if ($("#parte").length > 0) {
                    $("#DataTables_Table_0_wrapper>div.offset-m8").before("<div id='botonnuevo' class='col m3 left'></div>");
                    $("#DataTables_Table_0_wrapper>div.offset-m8").addClass("offset-m4");
                    $("#DataTables_Table_0_wrapper>div.offset-m8").removeClass("offset-m8");
                    $("#parte").appendTo("#botonnuevo");
                }

            }
            if ($(window).width() > "991") {
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right l3");
                $("#DataTables_Table_0_wrapper>div:first-child").css("text-align", "left");
                $("#DataTables_Table_0_wrapper>div:first-child").css("margin-top", "2%");
                $("#nuevo").addClass("center");
                //esta condicion sirve para la ventana de partes
                if ($("#parte").length > 0) {
                    $("#botonbus button").css("left", "-5%");
                    $("#nuevo").addClass("l4");
                    $("#nuevo").removeClass("l3");

                }

            }
            $("#aqui").appendTo("#nuevo");
            $("#aqui2").appendTo("#nuevo");
            $(".paginate_button.current").addClass("btn  blue darken-4 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button").addClass("btn  blue darken-2 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button.current").removeClass("paginate_button current");
            $(".paginate_button").removeClass("paginate_button");
            //muestro los select de las tablas
            $("#DataTables_Table_0_length select").css("display", "flex");
        },
        "lengthMenu": [[5, 10, 20, 30, -1], [5, 10, 20, 30, "Todos"]],
        language: {
            search: "Busca en la tabla ",
            paginate: {
                first: "Primero",
                previous: "<i class='material-icons pagi'>chevron_left</i>",
                next: "<i class='material-icons pagi'>chevron_right</i>",
                last: "Último"
            },
            lengthMenu: "Mostrar _MENU_",
            emptyTable: "No hay registros en la tabla",
            info: "Mostrando _END_ registros de _TOTAL_ en total",
            infoEmpty: "No hay resultados",
            infoFiltered: "(filtrado de _MAX_ en total)",
            zeroRecords: "No se encuentra ningun registro",
        },
        //botones para exportacion
        dom: 'Bfrt<"prefooter"lip>',
        buttons: [
            {
                extend: 'pdfHtml5',
                text: '<i class="material-icons">picture_as_pdf</i>',
                titleAttr: 'PDF',
                filename: 'Informes Shikoba: ' + $('.tableDataMedidas').closest('body').find('h3').text(),
                orientation: 'portrait',
                title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                    + ($('.tableDataMedidas').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                    + ($('.tableDataMedidas').closest('body').find('h3').text().substr(1, $('.tableDataMedidas').text().length)) + '.',
                pageSize: 'A3',
                customize: function (doc) {
                    let customDoc = doc
                    customizeHeader(customDoc, $('.tableDataMedidas'))
                },
                exportOptions: {
                    columns: "thead th:not(.noExport)",
                    search: 'applied',
                    order: 'applied'
                },
                footer: true},
            {
                extend: 'excelHtml5',
                text: '<i class="excel"></i>',
                titleAttr: 'Excel',
                filename: 'Informes Shikoba: ' + $('.tableDataMedidas').closest('body').find('h3').text(),
                title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                    + ($('.tableDataMedidas').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                    + ($('.tableDataMedidas').closest('body').find('h3').text().substr(1, $('.tableDataMedidas').text().length)) + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }},
            {
                extend: 'csvHtml5',
                text: '<i class="csv"></i>',
                titleAttr: 'CSV',
                filename: 'Informes Shikoba: ' + $('.tableDataMedidas').closest('body').find('h3').text(),
                title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                    + ($('.tableDataMedidas').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                    + ($('.tableDataMedidas').closest('body').find('h3').text().substr(1, $('.tableDataMedidas').text().length)) + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }},
            {
                extend: 'print',
                text: '<i class="material-icons">print</i>',
                titleAttr: 'Imprimir',
                filename: 'Informes Shikoba: ' + $('.tableDataMedidas').closest('body').find('h3').text(),
                title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                    + ($('.tableDataMedidas').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                    + ($('.tableDataMedidas').closest('body').find('h3').text().substr(1, $('.tableDataMedidas').text().length)) + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }},
        ],
    });

    /**
     * Función  para los datatables de partes.
     */
    let tableDataPartes = $('.tableDataPartes').DataTable({
        "aoColumnDefs": [
            {
                "targets": [1],
                "sType": "date-eu",
                "render": function (data) {
                    return data;}}
        ],
        "drawCallback": function (settings) {
            $(".dt-button").addClass("btn btn-floating blue darken-3");
            $("#DataTables_Table_0_wrapper>div:first-child").addClass("col s12 m4 center");
            $(".dt-button").removeClass("dt-button");
            //botones de exortar en tablas
            $("#DataTables_Table_0_wrapper>.dt-buttons").after("<div id='nuevo' class='col s12 m4 l3'></div>");
            $('.dt-buttons').css("margin-right", "2%");
            //el label aparece dos veces por lo que borro uno cada vez que se añade
            $("#DataTables_Table_0_wrapper>div>.remo").remove();
            $("#DataTables_Table_0_wrapper>div>.buttons-pdf").before("<label style='margin-right: 3%;' class='remo'>Exportar</label>");
            $('.dt-buttons').removeClass("dt-buttons");
            if ($(window).width() > "600" && $(window).width() < "990") {
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right offset-m8");
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                //esta condicion sirve para la ventana de partes
                if ($("#parte").length > 0) {
                    $("#DataTables_Table_0_wrapper>div.offset-m8").before("<div id='botonnuevo' class='col m3 left'></div>");
                    $("#DataTables_Table_0_wrapper>div.offset-m8").addClass("offset-m4");
                    $("#DataTables_Table_0_wrapper>div.offset-m8").removeClass("offset-m8");
                    $("#parte").appendTo("#botonnuevo");
                }

            }
            if ($(window).width() > "991") {
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right l3");
                $("#DataTables_Table_0_wrapper>div:first-child").css("text-align", "left");
                $("#DataTables_Table_0_wrapper>div:first-child").css("margin-top", "2%");
                $("#nuevo").addClass("center");
                //esta condicion sirve para la ventana de partes
                if ($("#parte").length > 0) {
                    $("#botonbus button").css("left", "-5%");
                    $("#nuevo").addClass("l4");
                    $("#nuevo").removeClass("l3");

                }

            }
            $("#aqui").appendTo("#nuevo");
            $("#aqui2").appendTo("#nuevo");
            $(".paginate_button.current").addClass("btn  blue darken-4 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button").addClass("btn  blue darken-2 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button.current").removeClass("paginate_button current");
            $(".paginate_button").removeClass("paginate_button");
            //muestro los select de las tablas
            $("#DataTables_Table_0_length select").css("display", "flex");
        },
        "lengthMenu": [[5, 10, 20, 30, -1], [5, 10, 20, 30, "Todos"]],
        language: {
            search: "Busca en la tabla ",
            paginate: {
                first: "Primero",
                previous: "<i class='material-icons pagi'>chevron_left</i>",
                next: "<i class='material-icons pagi'>chevron_right</i>",
                last: "Último"
            },
            lengthMenu: "Mostrar _MENU_",
            emptyTable: "No hay registros en la tabla",
            info: "Mostrando _END_ registros de _TOTAL_ en total",
            infoEmpty: "No hay resultados",
            infoFiltered: "(filtrado de _MAX_ en total)",
            zeroRecords: "No se encuentra ningun registro",
        },
        //botones para exportacion
        dom: 'Bfrt<"prefooter"lip>',
        buttons: [
            {

                extend: 'pdfHtml5',
                text: '<i class="material-icons">picture_as_pdf</i>',
                filename: 'Informes Shikoba: ' + $('.tableDataPartes').closest('body').find('h3').text(),
                titleAttr: 'PDF',
                orientation: 'portrait',
                title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                    + ($('.tableDataPartes').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                    + ($('.tableDataPartes').closest('body').find('h3').text().substr(1, $('.tableDataPartes').text().length)) + '.',
                pageSize: 'A3',
                customize: function (doc) {
                    let customDoc = doc
                    customizeHeader(customDoc, $('.tableDataPartes'))
                },
                exportOptions: {
                    columns: "thead th:not(.noExport)",
                    search: 'applied',
                    order: 'applied'
                },
                footer: true},
            {
                extend: 'excelHtml5',
                text: '<i class="excel"></i>',
                filename: 'Informes Shikoba: ' + $('.tableDataPartes').closest('body').find('h3').text(),
                titleAttr: 'Excel',
                title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                    + ($('.tableDataPartes').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                    + ($('.tableDataPartes').closest('body').find('h3').text().substr(1, $('.tableDataPartes').text().length)) + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }},
            {
                moment: moment().format('YYYY'),
                extend: 'csvHtml5',
                text: '<i class="csv"></i>',
                filename: 'Informes Shikoba: ' + $('.tableDataPartes').closest('body').find('h3').text(),
                titleAttr: 'CSV',
                title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                    + ($('.tableDataPartes').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                    + ($('.tableDataPartes').closest('body').find('h3').text().substr(1, $('.tableDataPartes').text().length)) + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }},
            {

                extend: 'print',
                text: '<i class="material-icons">print</i>',
                filename: 'Informes Shikoba: ' + $('.tableDataPartes').closest('body').find('h3').text(),
                titleAttr: 'Imprimir',
                title: 'Curso: ' + getPastYear() + '/' + getCurrentYear() + '. -  '
                    + ($('.tableDataPartes').closest('body').find('h3').text().substr(0, 1).toUpperCase())
                    + ($('.tableDataPartes').closest('body').find('h3').text().substr(1, $('.tableDataPartes').text().length)) + '.',
                exportOptions: {
                    columns: "thead th:not(.noExport)"
                }},
        ],
    });

    /**
     * Función genérica para los datatables del diario.
     */
    let tableDataDiario = $('.tableDataDiario').DataTable({
        "aoColumnDefs": [
            {
                "targets": [1],
                "sType": "date-eu",
                "render": function (data) {
                    return data;
                }}
        ],
        //css para cambiar el estilo al cargar la tabla
        "drawCallback": function (settings) {
            $("#DataTables_Table_0_wrapper>div:first-child").addClass("col s12 m4 center");
            $("#DataTables_Table_0_wrapper>.dt-buttons").after("<div id='nuevo' class='col s12 m4 l3'></div>");
            if ($(window).width() > "600" && $(window).width() < "990") {
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right offset-m8");
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");

            }
            if ($(window).width() > "991") {
                $("#DataTables_Table_0_wrapper>div:first-child").removeClass("center");
                $("#DataTables_Table_0_wrapper>div:first-child").addClass("right l3");
                $("#DataTables_Table_0_wrapper>div:first-child").css("text-align", "left");
                $("#DataTables_Table_0_wrapper>div:first-child").css("margin-top", "2%");
                $("#DataTables_Table_0_filter").css("text-align", "center");
            }

            $(".paginate_button.current").addClass("btn  blue darken-4 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button").addClass("btn  blue darken-2 waves-effect waves-light z-depth-3 pagi");
            $(".paginate_button.current").removeClass("paginate_button current");
            $(".paginate_button").removeClass("paginate_button");
            //muestro los select de las tablas
            $("#DataTables_Table_0_length select").css("display", "block");
            $("#carnetFilterPuntos").material_select();


        },
        "lengthMenu": [[5, 10, 15, 20, -1], [5, 10, 15, 20, "Todos"]],
        language: {
            paginate: {
                first: "Primero",
                previous: "<i class='material-icons pagi'>chevron_left</i>",
                next: "<i class='material-icons pagi'>chevron_right</i>",
                last: "Último"
            },
            lengthMenu: "Mostrar _MENU_",
            info: "Mostrando _END_ registros de _TOTAL_ en total",
            infoFiltered: "(filtrado de _MAX_ en total)",
        },
        //botones para exportacion
        dom: 'Btr<"prefooter"lip>',
    });
    tableDataDiario.buttons().destroy();
    paint(tableDataCarnets);
    paint(tableDataPartes);
    paint(tableDataMedidas);
});

/**
 * let paint some objects in datatables
 */
let paint = function () {
    //styles for the buttons over the tables.
    $('.dataTables_wrapper input').addClass("marginBottom");
    $('.dataTables_filter').css("text-align", "center");
    $('.dt-buttons').addClass("right col s4 m6 l2 altur");
    $('.dt-buttons').css("margin-top", "2%");
    if ($(window).width() < "991") {
        $('.altur').css("height", $('#DataTables_Table_0_filter').height());
    }
};

/**
 * Let the customization of header, footer, and other features in pdfhtml5's export
 * @param customDoc doc where the customization is applied
 * @param classs selector jQuery where the class works, a class.
 */
let customizeHeader = function (customDoc, classs) {
    customDoc.defaultStyle.alignment = 'center';
    customDoc.content[1].table.widths =
        Array(customDoc.content[1].table.body[0].length + 1).join('*').split('');

    //Prepare header and footer

    //Current date
    let now = moment().format('dddd, DD [de] MMMM [de] YYYY, [a las] HH:mm:ss');

    //A base64 image for the logo
    let logo = 'data:image/jpg;base64,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Y7IofnTUzHNvBCuJfKp0MHAYQZYFZzgc2JiabkhChYt2sXinjGMXF6tHwGNIxGOSDjbh2NOtyoFFobcb7yqsVgvYinGDfzHVOzH7BEL7FH332ofZyQvJZNrSkhnIs0dCtCZNhCAcGjjBiEAoWhI4sxXU9m9KkLMBMjICbmgDHo4Uizj0rAE2FCvAqkLgEmpC45IvEYyJhm8xFTDy4fogeaVICXmJyELBrN3JWQBcMtcMu7HMWvt7FNMfIm0WzNTiUB1G9MiL1Oy2ESId88GhnKgCrgQNDsDO+pgTr24WmrsNGrfFJWY0HEaWpAipzMZyTwRT7DTsFYqIIaO+PriuF7dhH0WvsecNmIB2/wBYsYlBsBNAmEtixjU2N5so2LczhrSB35sVaRTZv26QcvMC3qlWa/VqcjjN6hJSSBZG9tioO3AYiVzHXshEi9kGViiMtOyFi18HZbgJ3NuwTAwUg0a4xljoXshE+rMJmoic2fYGVmAjWgjjnzxvUbx5hYwtE43xx7Mkc2BqSjb4KJngMW3O272R119zsqGWB2BoOM9St6y8HMWrKEBVyMtqr5Hya7uW03W7ISWxGTJIiWaItWZJmoic+fbCSkkgytrbVMUFrFCRasWdxG5XSM6cSNg5sGd+y4GYMakIz/uNRuIJQutrba15xmq/UCuMv4f8Bf/aAAwDAQACAAMAAAAQ8888888888888888888888888888888888888888888888888888888888888888888888888888pNNNNNNNNNNNNNNNNNN9888888888888r99999999995B6y99999888888888888r9999999999198u09999888888888888r999999999ue999z3999888888888888r9999999999/999v0999888888888888r9999999998o999zf999888888888888r9999999999Z+99B9999888888888888r9999999999eL89GtJ89885a88888888r99999999999k99994R986+3oyy88888r9999999999xdl9999R983m+88+cOmy8r999999999vd7v8AfffZPfOX/PPPPPPPmrPffffffffQfefffff3ffO/PPPPPPPPPC8/fffffffvZvPfffePPfBvPPPPPPPPPK/TNffffdIX/fffffcfffP/ADzzzzzzzzyv3z7333HV33333333333zfzzzzzzzzzyr313/AN/c99999999o99981888888888SJ999Ck0xzxz19999T9998X8888888885C999NVP999999999y999rf8APPPA/PPPPoffff2/fffffffffTXPfeHvPPLnvvPPBivfffW9/ffffffffftfffHvPPE7dfPPHyfeqtwAABnffeRaAAAHfeVvPPH/ABzzzz0Ci7333333391/3333333wnfErbx7zzzWoj33vX333z3T33333333y8z/z7xfzz5SOL3237776P/z33333333zzzzzzzjzzxSC6Lb33330O0/j3333333zzzzzzzxXzxYP06kDDDDCL2/8/LDDDf3zzzzzzzzzzzj4888EAg0MgooYc8ckwxXzzzzzzzzzzxkwJBWaPwWqr/Ga5xprolbzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz/xAAoEQEAAgIBBAICAgMBAQAAAAABABEhMUEQIDBhUXGRoYGxYMHw0eH/2gAIAQMBAT8Q/wAMdS0tLS0tLS0tLS0tLS0tLS0tLQ8unjaYlHEa7II67TXl08ebeiDhi5QfYNeXTxKi4duwZjsNeXTxG122kNdTXl08SWVFS7GQ7Bry6eOosEddch2GvLp40O4Bc06LdsRxLTMGyyGurqIPw+fDp5Br20Ki2Q10SNQbgurBaT2J7u7TxrbRAqNMduChrpYDKlmO1+iejMJXnHTTxULgoi1By9uTYa6C1BQ8CXLQq458X6ei0d2tw10yfGIZgsPAWi4Qt5nBxBy7VSgoqGumT8ekS8MFdOu4NpenUA78gdDXTb7ePToglMardidG4Blz4c16DXTn9+Mth62FkqX0WoOXwvFHMCiuhrpo/fiblucvR8OcsdUtezMhHmCja9KvxK/Ep8dw2+pryLLBMqHDoe/fx7gJ3tutXfYeECLCV5Q1HU09uVXaOWxeCnzqa0VU/l7EuZ7eMYuKy+hqbJr7Q2+e15wKAayHHN3NLgv77aktWfELUFFdDU3TX2Yh8QWJFY7FBpQpo5aOXPF1N9Y0/fRQ3LNHaFdh+OZb47QHKGoLEjvs5p04uw2J1wrAG79QCCrVzvLFqV4TwDXS31z2xLpc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fKsLIlNyhEbIm5YCaG3/AOFuwYrhc2IFwWU1dinKdTrVxmkXRJv2Mw/YcGI3LqRawX7IOfYsMnERhEhEERKe9Ej/AAx/3Fq+tQsmZAcLXMVuBgcLwBgA2EIJ7LeVc5z5FxLXlGSIIoAc0K3B2Bg9+zBMPo3IEJyLpSufFAuSkSYbSNJFgDDOqgSLi22akpkXZKoCwqWqhMwRXEgoyRJawiYS4blS+B0JgQISsrSJgAWHtcRhEuIJCVMzbpIgyBYALaXll/8AAX//2SAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg';

    // A documentation reference can be found at
    // https://github.com/bpampuch/pdfmake#getting-started

    // Set page margins [left,top,right,bottom] or [horizontal,vertical]
    // or one number for equal spread
    // It's important to create enough space at the top for a header !!!
    customDoc.pageMargins = [20, 120, 20, 40];

    // Set the font size fot the entire document
    customDoc.defaultStyle.fontSize = 12;

    // Set the fontsize for the table header
    customDoc.styles.tableHeader.fontSize = 12;

    // Create a header object with 3 columns
    // Left side: Logo
    // Middle: brandname
    // Right side: A document title

    customDoc['header'] = (function () {
        return {
            columns: [
                {
                    image: logo,
                    fit: [100, 100],
                    pageBreak: 'after',
                    opacity: 0.7},
                {
                    alignment: 'left',
                    italics: true,
                    text: 'Informe Shikoba: ',
                    fontSize: 24,
                    fit: [50, 50],
                    margin: [0, 25, 0, 0],},
                {
                    alignment: 'middle',
                    italics: true,
                    text: classs.closest('body').find('h3').text(),
                    fontSize: 24,
                    fit: [300, 300],
                    margin: [-80, 25, 0, 0]},
                /* {
                     alignment: 'right',
                     fontSize: 14,
                     text: '',
                     margin: [25, 30]
                 }*/
            ],
            margin: 20
        }
    });

    // Create a footer object with 2 columns
    // Left side: report creation date
    // Right side: current page and total pages
    customDoc['footer'] = (function (page, pages) {
        return {
            margin: [50, 0, 50, 0],
            //left, top, right, bottom
            columns: [
                {
                    alignment: 'left',
                    text: ['Creado el ', {text: now}],
                    margin: [0, 10, 0, 10]},
                {
                    alignment: 'right',
                    text: ['Página ', {text: page.toString()}, ' de ', {text: pages.toString()}],
                    margin: [0, 10, 0, 10]},
            ]
        }
    });
};

/**
 * Let get the past year from a moment date.
 * @return a moment date
 */
let getPastYear = function () {
    let dateFrom = moment().format('YYYY');
    return moment(dateFrom, 'YYYY').subtract(1, 'year').endOf('year').format('YYYY');
};

/**
 * Let get the current year from a moment date.
 * @return a moment date
 */
let getCurrentYear = function () {
    return moment().format('YYYY');
};
