$(document).ready(function(){
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
            },
            mark: {
                from: $form.find('input[name="mark[from]"]').val(),
                to: $form.find('input[name="mark[to]"]').val()
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
                energy: parseFloat(data[6]) || 0,
                mark: parseFloat(data[7]) || 0
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
        responsive: true
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
            },
            mark: {
                from: $form.find('input[name="mark[from]"]').val(),
                to: $form.find('input[name="mark[to]"]').val()
            }
        };

        foodTable.draw();

        return false;
    });

    var $filterPanel = $('#filterCollapse');
    $filterPanel.on('show.bs.collapse', function(){
        $(this).find('.js-toggle-panel').toggleClass('glyphicon-minus glyphicon-plus');
    });
    $filterPanel.on('hide.bs.collapse', function(){
        $(this).find('.js-toggle-panel').toggleClass('glyphicon-minus glyphicon-plus');
    });
});