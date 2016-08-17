<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Главная</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.dataTables.min.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Питание</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Главная</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container theme-showcase" role="main">

    <div class="page-header">
        <h1>Главная</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 search-block">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Параметры сортировки:</h3>
                </div>
                <div class="panel-body">
                    <form id="searchFood" class="form-horizontal">
                        <div class="form-group">
                            <label for="nameSearch" class="col-sm-3 control-label">Наименование</label>

                            <div class="col-sm-9">
                                <input class="form-control input-sm" id="nameSearch" name="name" placeholder="" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="categorySearch" class="col-sm-3 control-label">Категория</label>

                            <div class="col-sm-9">
                                <select id="categorySearch" class="form-control input-sm" name="category">
                                    <option value="" selected=""></option>
                                    @foreach($categories as $category)
                                        <option><?=$category->name?></option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="giSearch" class="col-sm-3 control-label" title="Гликемический индекс">ГИ</label>

                            <div class="col-sm-9">
                                <div class="form-inline">
                                    <input class="form-control input-sm" id="giSearch" name="gi[from]" placeholder="с" type="text">
                                    <span>-</span>
                                    <input class="form-control input-sm" name="gi[to]" placeholder="по" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="proteinSearch" class="col-sm-3 control-label">Белки</label>

                            <div class="col-sm-9">
                                <div class="form-inline">
                                    <input class="form-control input-sm" id="proteinSearch" name="protein[from]" placeholder="с" type="text">
                                    <span>-</span>
                                    <input class="form-control input-sm" name="protein[to]" placeholder="по" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fatsSearch" class="col-sm-3 control-label">Жиры</label>

                            <div class="col-sm-9">
                                <div class="form-inline">
                                    <input class="form-control input-sm" id="fatsSearch" name="fats[from]" placeholder="с" type="text">
                                    <span>-</span>
                                    <input class="form-control input-sm" name="fats[to]" placeholder="по" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="carbsSearch" class="col-sm-3 control-label">Углеводы</label>

                            <div class="col-sm-9">
                                <div class="form-inline">
                                    <input class="form-control input-sm" id="carbsSearch" name="carbs[from]" placeholder="с" type="text">
                                    <span>-</span>
                                    <input class="form-control input-sm" name="carbs[to]" placeholder="по" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="energySearch" class="col-sm-3 control-label">Ккал</label>

                            <div class="col-sm-9">
                                <div class="form-inline">
                                    <input class="form-control input-sm" id="energySearch" name="energy[from]" placeholder="с" type="text">
                                    <span>-</span>
                                    <input class="form-control input-sm" name="energy[to]" placeholder="по" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="markSearch" class="col-sm-3 control-label">Оценка</label>

                            <div class="col-sm-9">
                                <div class="form-inline">
                                    <input class="form-control input-sm" id="markSearch" name="mark[from]" placeholder="с" type="text">
                                    <span>-</span>
                                    <input class="form-control input-sm" name="mark[to]" placeholder="по" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <input type="submit" class="btn btn-sm btn-primary" value="Отсортировать" />
                                <input type="reset" class="btn btn-sm btn-default" value="Очистить" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6 reminder">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Памятка перед тренировкой</h3>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>Белки:</td>
                            <td>20 - 30 гг</td>
                        </tr>
                        <tr>
                            <td>Жиры:</td>
                            <td>0 - 2 гг</td>
                        </tr>
                        <tr>
                            <td>Углеводы:</td>
                            <td>40 - 70 гг</td>
                        </tr>
                        <tr>
                            <td>Калории:</td>
                            <td>300 ккал</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Таблица пищевой ценности продуктов</h3>
        </div>
        <div class="panel-body">
            <table id="food" class="table table-striped">
                <thead>
                <tr>
                    <th id="column_name" class="js-sort sort-up">Наименоване продукта</th>
                    <th id="column_category" class="js-sort">Категория</th>
                    <th id="column_gi" class="js-sort" title="Гликемический индекс">ГИ</th>
                    <th id="column_protein" class="js-sort" title="Пищевая ценность продуктов (на 100г)">Белки</th>
                    <th id="column_fats" class="js-sort" title="Пищевая ценность продуктов (на 100г)">Жиры</th>
                    <th id="column_carbs" class="js-sort" title="Пищевая ценность продуктов (на 100г)">Углеводы</th>
                    <th id="column_energy" class="js-sort" title="Пищевая ценность продуктов (на 100г)">Ккал</th>
                    <th id="column_mark" class="js-sort">Оценка<!--<a href="http://hudeemkrasivo.ru/gl_index">hudeemkrasivo.ru</a>--></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($foodList as $foodItem)
                    <tr>
                        <td><?=$foodItem->name?></td>
                        <td><?=$foodItem->category->name?></td>
                        <td><?=$foodItem->gi?></td>
                        <td><?=$foodItem->protein?></td>
                        <td><?=$foodItem->fats?></td>
                        <td><?=$foodItem->carbs?></td>
                        <td><?=$foodItem->energy?></td>
                        <td><?=$foodItem->mark?></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div><!-- /.container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function(){
        var $form = $('#searchFood'),
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

        $('form#searchFood').on('submit', function(){
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
    });
</script>
</body>
</html>
