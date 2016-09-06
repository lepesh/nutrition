$(document).ready(function(){

    $('[data-toggle="tooltip"]').tooltip();

    var $form = $('#foodFilter'),
        searchFields = {
            name: $form.find('input[name=name]').val(),
            category: $form.find('select[name=category] option:selected').text(),
            gi: {
                from: $form.find('input[name="gi[from]"]').val(),
                to: $form.find('input[name="gi[to]"]').val()
            },
            protein: {
                from: $form.find('input[name="protein[from]"]').val(),
                to: $form.find('input[name="protein[to]"]').val()
            },
            fats: {
                from: $form.find('input[name="fats[from]"]').val(),
                to: $form.find('input[name="fats[to]"]').val()
            },
            carbs: {
                from: $form.find('input[name="carbs[from]"]').val(),
                to: $form.find('input[name="carbs[to]"]').val()
            },
            energy: {
                from: $form.find('input[name="energy[from]"]').val(),
                to: $form.find('input[name="energy[to]"]').val()
            }
        };

    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            var rowSearchDataset = {
                name: data[0].toLowerCase(),
                category: data[1].toLowerCase(),
                gi: parseFloat(data[2]) || 0,
                protein: parseFloat(data[3]) || 0,
                fats: parseFloat(data[4]) || 0,
                carbs: parseFloat(data[5]) || 0,
                energy: parseFloat(data[6]) || 0
            };

            for (var field in rowSearchDataset) {
                switch (typeof searchFields[field]) {
                    case 'string':
                        if (!searchFields[field]) continue;
                        if (rowSearchDataset[field].indexOf(searchFields[field].toLowerCase()) === -1) {
                            return false;
                        }
                        break;
                    case 'object':
                        var valueFrom = parseFloat(searchFields[field].from),
                            valueTo = parseFloat(searchFields[field].to);
                        if (valueFrom == '' && valueTo == '') continue;
                        if (valueFrom != '' && valueFrom > rowSearchDataset[field]) {
                            return false;
                        } else if (valueTo != '' && valueTo < rowSearchDataset[field]) {
                            return false;
                        }
                        break;
                }

            }

            return true;
        }
    );

    var foodTable = $('#food').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Russian.json"
        },
        responsive: true,
        lengthMenu: [10, 20, 50, 100],
        iDisplayLength: 20
    });

    $('form#foodFilter').on('submit', function(){
        var $form = $(this);

        searchFields = {
            name: $form.find('input[name=name]').val(),
            category: $form.find('select[name=category] option:selected').text(),
            gi: {
                from: $form.find('input[name="gi[from]"]').val(),
                to: $form.find('input[name="gi[to]"]').val()
            },
            protein: {
                from: $form.find('input[name="protein[from]"]').val(),
                to: $form.find('input[name="protein[to]"]').val()
            },
            fats: {
                from: $form.find('input[name="fats[from]"]').val(),
                to: $form.find('input[name="fats[to]"]').val()
            },
            carbs: {
                from: $form.find('input[name="carbs[from]"]').val(),
                to: $form.find('input[name="carbs[to]"]').val()
            },
            energy: {
                from: $form.find('input[name="energy[from]"]').val(),
                to: $form.find('input[name="energy[to]"]').val()
            }
        };

        foodTable.draw();

        return false;
    });

    var $panelExtended = $('.panel-extended');
    $panelExtended.on('show.bs.collapse', function(){
        $(this).find('.js-toggle-panel').toggleClass('glyphicon-minus glyphicon-plus');
    });
    $panelExtended.on('hide.bs.collapse', function(){
        $(this).find('.js-toggle-panel').toggleClass('glyphicon-minus glyphicon-plus');
    });

    $('#contact_form').bootstrapValidator({
            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                name: {
                    validators: {
                        stringLength: {
                            min: 2
                        },
                        notEmpty: {
                            message: 'Пожалуйста, укажите Ваше имя'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Пожалуйста, укажите Ваш e-mail'
                        },
                        emailAddress: {
                            message: 'Пожалуйста, укажите верный e-mail адрес'
                        }
                    }
                },
                message: {
                    validators: {
                        stringLength: {
                            min: 10,
                            max: 3000,
                            message:'Пожалуйста, введите не менее 10 и не более 3000 символов'
                        },
                        notEmpty: {
                            message: 'Поле сообщения не может быть пустым'
                        }
                    }
                }
            }
        });

    $('.js-add-item').on('click', function(event){
        event.stopPropagation();
        var $button = $(this),
            $row = $button.parents('tr'),
            data = foodTable.row($row).data(),
            name = $button.parent().text().trim(),
            protein = data[3],
            fats = data[4],
            carbs = data[5],
            energy = data[6],
            $tbody = $('#calculator').find('tbody'),
            $calcWrap = $('#calculator-wrap'),
            $newRow = $(
                '<tr>' +
                    '<td>'+name+'</td>' +
                    '<td class="nutritional protein-cell" data-original="'+protein+'">'+protein+'</td>' +
                    '<td class="nutritional carbs-cell" data-original="'+fats+'">'+fats+'</td>' +
                    '<td class="nutritional fats-cell" data-original="'+carbs+'">'+carbs+'</td>' +
                    '<td class="nutritional energy-cell" data-original="'+energy+'">'+energy+'</td>' +
                    '<td><input class="calc-input weight-cell" type="text" value="100" maxlength="5"></td>' +
                    '<td><a class="remove-calc-item" href="javascript:void(0)"><span class="glyphicon glyphicon-trash"></span></a></td>' +
                '</tr>'
            );

        $tbody.append($newRow);

        $newRow.find('.calc-input').on('keyup change', function(){
            var $button = $(this),
                weight = $(this).val(),
                $row = $button.parents('tr'),
                $nutritionals = $row.find('.nutritional');

            $nutritionals.each(function(){
                var origin = $(this).data('original'),
                    result = origin / 100 * weight;

                $(this).text(roundToDecimals(result, 1));
            });
            countNutritionals();
        });

        $newRow.find('.calc-input').on('keydown', function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                    // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                    // Allow: Ctrl+C
                (e.keyCode == 67 && e.ctrlKey === true) ||
                    // Allow: Ctrl+X
                (e.keyCode == 88 && e.ctrlKey === true) ||
                    // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

        $newRow.find('.remove-calc-item').on('click', function(){
            $(this).parents('tr').addClass('alert-danger').fadeOut(500, function(){
                $(this).remove();
                countNutritionals();
                if ($tbody.find('tr').length == 0) {
                    $calcWrap.removeClass('shown');
                }
            });
        });

        if (!$calcWrap.hasClass('shown')) {
            $calcWrap.addClass('shown');
            if (findBootstrapEnvironment() == 'xs') {
                $('#calcPanel').collapse('hide');
            }
        }

        countNutritionals();
    });

    $('.js-close-calc').on('click', function(event){
        event.stopPropagation();
        $('#calculator tbody').empty();
        $('#calculator-wrap').removeClass('shown');
    });

    function countNutritionals(){
        var $table = $('#calculator'),
            countable = {
                'protein' : 0,
                'fats' : 0,
                'carbs': 0,
                'energy': 0,
                'weight': 0
            };

        for (var name in countable) {
            var $cells = $table.find('.'+name+'-cell');
            $cells.each(function(){
                var cellValue = (name == 'weight') ? $(this).val() : $(this).text();

                countable[name] += parseFloat(cellValue);
            });
            $table.find('.'+name+'-total').text(roundToDecimals(countable[name], 1));
        }
    }

    function roundToDecimals(value, digits){
        var decimals = Math.pow(10, digits);
        return Math.round(value * decimals) / decimals;
    }


});

function findBootstrapEnvironment() {
    var envs = ['xs', 'sm', 'md', 'lg'];

    var $el = $('<div>');
    $el.appendTo($('body'));

    for (var i = envs.length - 1; i >= 0; i--) {
        var env = envs[i];

        $el.addClass('hidden-'+env);
        if ($el.is(':hidden')) {
            $el.remove();
            return env;
        }
    }
}