@extends('layouts.app')

@section('title', 'Гликемический индекс, пищевая и энергетическая ценность продуктов. Калькулятор пищевой ценности.')

@section('content')
    <div id="calculator-wrap">
        <div class="panel panel-warning panel-extended">
            <div class="panel-heading" data-toggle="collapse" href="#calcPanel">
                <div class="panel-title">
                    <span class="badge progress-bar-danger notification-badge js-items-quantity">0</span>
                    <img src="img/calculator.png" />
                    <div class="panel-heading-control">
                        <a href="javascript:void(0)"><span class="glyphicon glyphicon-minus js-toggle-panel"></span></a>
                        <a href="javascript:void(0)"><span class="glyphicon glyphicon-remove js-close-calc"></span></a>
                    </div>
                </div>
            </div>
            <div id="calcPanel" class="panel-collapse collapse in">
                <div class="panel-body calc-container">
                    <table id="calculator" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <td></td>
                            <td><img src="img/protein-50.png" alt="Белки" data-toggle="tooltip" data-placement="top" title="Белки" /></td>
                            <td><img src="img/fats-512.png" alt="Жиры" data-toggle="tooltip" data-placement="top" title="Жиры" /></td>
                            <td><img src="img/carbohydrates-50.png" alt="Углеводы" data-toggle="tooltip" data-placement="top" title="Углеводы" /></td>
                            <td><img src="img/energy-50.png" alt="Ккал" data-toggle="tooltip" data-placement="top" title="Ккал" /></td>
                            <td><img src="img/weight-50.png" alt="Вес, г" data-toggle="tooltip" data-placement="top" title="Вес, г" /></td>
                        </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                        <tr class="bg-warning">
                            <td>Итого:</td>
                            <td class="protein-total">0</td>
                            <td class="fats-total">0</td>
                            <td class="carbs-total">0</td>
                            <td class="energy-total">0</td>
                            <td class="weight-total">0</td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 search-block">
            <div class="jumbotron">
                <p>Сайт содержит список продуктов, который можно удобно <a href="#foodFilter">фильтровать</a>
                    в зависимсти от Ваших нужд и предпочтений, а так же предоставляет <a href="#calcInfo">калькулятор</a>, позволяющий
                    рассчитывать пищевые показатели продуктов в зависимости от веса.</p>

                <p>Используйте этот сайт, чтобы организовать свое питание правильно!</p>

                <p><a class="btn btn-lg btn-primary" href="#food" role="button">Перейти к списку &gt;</a></p>
            </div>
        </div>
        <div class="col-sm-6 reminder">
            <div id="interesting" class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Это интересно!</h3>
                </div>
                <div class="panel-body interesting">
                    <div id="interestingCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#interestingCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#interestingCarousel" data-slide-to="1"></li>
                            <li data-target="#interestingCarousel" data-slide-to="2"></li>
                            <li data-target="#interestingCarousel" data-slide-to="3"></li>
                            <li data-target="#interestingCarousel" data-slide-to="4"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <h3>Гликемический индекс</h3>
                                <table class="table">
                                    <tr>
                                        <td>до 49</td>
                                        <td>низкий</td>
                                    </tr>
                                    <tr>
                                        <td>от 50 до 69</td>
                                        <td>средний</td>
                                    </tr>
                                    <tr>
                                        <td>от 70</td>
                                        <td>высокий</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item">
                                <h3>Питание перед тренировкой</h3>
                                <table class="table">
                                    <tr>
                                        <td>Белки:</td>
                                        <td>20 - 30 гг</td>
                                    </tr>
                                    <tr>
                                        <td>Жиры:</td>
                                        <td class="text-nowrap">0 - 2 гг&nbsp;<span class="glyphicon glyphicon-question-sign text-success" data-toggle="tooltip" data-placement="left" title="Жирную пищу потреблять не рекомендуется, так как жиры тормозят усвоение белков и углеводов"></span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Гликемический индекс до 49">Медленные углеводы</a>:</td>
                                        <td>40 - 60 гг</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item">
                                <h3>Питание перед тренировкой для похудения</h3>
                                <table class="table">
                                    <tr>
                                        <td>Белки:</td>
                                        <td>10 - 15 гг</td>
                                    </tr>
                                    <tr>
                                        <td>Жиры:</td>
                                        <td class="text-nowrap">0 гг&nbsp;<span class="glyphicon glyphicon-question-sign text-success" data-toggle="tooltip" data-placement="left" title="Жирную пищу потреблять не рекомендуется, так как жиры тормозят усвоение белков и углеводов"></span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Гликемический индекс до 49">Медленные углеводы</a>:</td>
                                        <td>15 - 20 гг</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item">
                                <h3>Питание после тренировки</h3>
                                <table class="table">
                                    <tr>
                                        <td>Белки:</td>
                                        <td>20 - 30 гг</td>
                                    </tr>
                                    <tr>
                                        <td>Жиры:</td>
                                        <td class="text-nowrap">0 - 3 гг&nbsp;<span class="glyphicon glyphicon-question-sign text-success" data-toggle="tooltip" data-placement="left" title="Жирную пищу потреблять не рекомендуется, так как жиры тормозят усвоение белков и углеводов"></span></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Гликемический индекс от 70">Быстрые углеводы</a>:</td>
                                        <td>60 - 100 гг</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="item">
                                <h3>Питание после тренировки для похудения</h3>
                                <table class="table">
                                    <tr>
                                        <td>Белки:</td>
                                        <td>20 - 30 гг</td>
                                    </tr>
                                    <tr>
                                        <td>Жиры:</td>
                                        <td class="text-nowrap">0 гг&nbsp;<span class="glyphicon glyphicon-question-sign text-success" data-toggle="tooltip" data-placement="left" title="Жирную пищу потреблять не рекомендуется, так как жиры тормозят усвоение белков и углеводов"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Углеводы:</td>
                                        <td>0 гг</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#interestingCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#interestingCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">Таблица пищевой ценности продуктов</h3>
        </div>
        <div class="panel-body">
            <form id="foodFilter" class="form-horizontal">
                <div class="panel-group">
                    <div class="panel panel-default panel-extended">
                        <div class="panel-heading cursor-pointer" data-toggle="collapse" href="#sortPanel">
                            <h4 class="panel-title">
                                Параметры фильтра
                                <span class="glyphicon glyphicon-minus blue pull-right text-primary js-toggle-panel"></span>
                            </h4>
                        </div>
                        <div id="sortPanel" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nameSearch" class="col-sm-3 control-label">Название</label>

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
                                                    <option>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="giSearch" class="col-sm-3 control-label">
                                            ГИ&nbsp;<span class="glyphicon glyphicon-question-sign text-success" data-toggle="tooltip" data-placement="right" title="Гликемический индекс"></span>
                                        </label>

                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input class="form-control input-sm input-slim" id="giSearch" name="gi[from]" placeholder="с" type="text">
                                                <div class="inputs-separator">-</div>
                                                <input class="form-control input-sm input-slim" name="gi[to]" placeholder="по" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="proteinSearch" class="col-sm-3 control-label">Белки</label>

                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input class="form-control input-sm input-slim" id="proteinSearch" name="protein[from]" placeholder="с" type="text">
                                                <div class="inputs-separator">-</div>
                                                <input class="form-control input-sm input-slim" name="protein[to]" placeholder="по" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fatsSearch" class="col-sm-3 control-label">Жиры</label>

                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input class="form-control input-sm input-slim" id="fatsSearch" name="fats[from]" placeholder="с" type="text">
                                                <div class="inputs-separator">-</div>
                                                <input class="form-control input-sm input-slim" name="fats[to]" placeholder="по" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="carbsSearch" class="col-sm-3 control-label">Углеводы</label>

                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input class="form-control input-sm input-slim" id="carbsSearch" name="carbs[from]" placeholder="с" type="text">
                                                <div class="inputs-separator">-</div>
                                                <input class="form-control input-sm input-slim" name="carbs[to]" placeholder="по" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="energySearch" class="col-sm-3 control-label">Ккал</label>

                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <input class="form-control input-sm input-slim" id="energySearch" name="energy[from]" placeholder="с" type="text">
                                                <div class="inputs-separator">-</div>
                                                <input class="form-control input-sm input-slim" name="energy[to]" placeholder="по" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="well">
                                        <p>
                                            Организуйте параметры фильтра согласно Вашим потребностям.<br>
                                            Так же Вы сможете найти полезную информацию в блоке "<a href="#interesting">Это интересно!</a>".
                                        </p>
                                    </div>
                                    <div class="well">
                                        <p>
                                            Если Вам не удалось найти нужный продукт напишите нам об этом используя
                                            форму <a href="/feedback">обратной связи</a> и мы обязательно его добавим!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="input-group margin-auto">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Отсортировать" />
                                    <input type="reset" class="btn btn-sm btn-default" value="Очистить" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div id="calcInfo" class="alert alert-info">
                <img src="img/calculator.png" /> Чтобы воспользоваться пищевым калькулятором нажмите на значок <img class="calc-add" src="img/calculator-add.png" alt="calc" /> слева от наименования продукта.
            </div>

            <div class="alert alert-info">
                Пищевая ценность расчитана на 100 г съедобной части продукта.
            </div>

            <table id="food" class="table table-striped">
                <thead>
                <tr>
                    <th></th>
                    <th>Наименоване продукта</th>
                    <th>Категория</th>
                    <th>
                        ГИ&nbsp;<span class="glyphicon glyphicon-question-sign text-success" data-toggle="tooltip" data-placement="top" title="Гликемический индекс"></span>
                    </th>
                    <td>Белки <img src="img/protein-50.png" alt="Белки" height="25" width="25" /></td>
                    <td>Жиры <img src="img/fats-512.png" alt="Жиры" height="25" width="25" /></td>
                    <td>Углеводы <img src="img/carbohydrates-50.png" alt="Углеводы" height="25" width="25" /></td>
                    <td>Ккал <img src="img/energy-50.png" alt="Ккал" height="25" width="25" /></td>
                </tr>
                </thead>
                <tbody>
                @foreach ($foodList as $foodItem)
                    <tr>
                        <td></td>
                        <td><img class="cursor-pointer calc-add js-add-item" src="img/calculator-add.png" alt="calc" />&nbsp;{{ $foodItem->name }}</td>
                        <td>{{ $foodItem->category->name }}</td>
                        <td>{{ $foodItem->gi }}</td>
                        <td>{{ $foodItem->protein }}</td>
                        <td>{{ $foodItem->fats }}</td>
                        <td>{{ $foodItem->carbs }}</td>
                        <td>{{ $foodItem->energy }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
