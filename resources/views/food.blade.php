@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="row">
        <div class="col-sm-6 search-block">
            <div class="jumbotron">
                <h2>Добро пожаловать!</h2>
                <p>Данный сайт содержит список продуктов, который можно удобно <a href="#foodFilter">фильтровать</a> в зависимсти от Ваших нужд и предпочтений.</p>
                <p>Используйте этот сайт, чтобы организовать свое питание правильно!</p>

                <p>
                    <a class="btn btn-lg btn-primary" href="#food" role="button">Перейти к списку &gt;</a>
                </p>
            </div>
        </div>
        <div class="col-sm-6 reminder">
            <div id="interesting" class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Это интересно!</h3>
                </div>
                <div class="panel-body">
                    <style>
                        .carousel-control {
                            color: #d6e9c6;
                        }
                        .carousel-control:hover {
                            color: #dff0d8;
                        }
                        .carousel-indicators .active {
                            background-color: #dff0d8;
                        }
                        .carousel-indicators li {
                            border: 1px solid #3c763d;
                        }
                        .form-control.input-slim {
                            width: 70px;
                            text-align: center;
                        }
                    </style>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox" style="height: 330px">
                            <div class="item active"  style="width: 70%; margin: auto">
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
                            <div class="item"  style="width: 70%; margin: auto">
                                <h3>Питание перед тренировкой</h3>
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
                            <div class="item"  style="width: 70%; margin: auto">
                                <h3>Питание после тренировки</h3>
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
                            <div class="item"  style="width: 70%; margin: auto">
                                <h3>Питание после тренировки</h3>
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

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="background-image: none">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="background-image: none">
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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                Параметры фильтра
                                <a data-toggle="collapse" href="#sortPanel" style="float:right">Скрыть/Показать</a>
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
                                                    <option><?=$category->name?></option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="giSearch" class="col-sm-3 control-label" title="Гликемический индекс">ГИ</label>

                                        <div class="col-sm-9">
                                            <div class="form-inline">
                                                <input class="form-control input-sm input-slim" id="giSearch" name="gi[from]" placeholder="с" type="text">
                                                <span>-</span>
                                                <input class="form-control input-sm input-slim" name="gi[to]" placeholder="по" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="proteinSearch" class="col-sm-3 control-label">Белки</label>

                                        <div class="col-sm-9">
                                            <div class="form-inline">
                                                <input class="form-control input-sm input-slim" id="proteinSearch" name="protein[from]" placeholder="с" type="text">
                                                <span>-</span>
                                                <input class="form-control input-sm input-slim" name="protein[to]" placeholder="по" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fatsSearch" class="col-sm-3 control-label">Жиры</label>

                                        <div class="col-sm-9">
                                            <div class="form-inline">
                                                <input class="form-control input-sm input-slim" id="fatsSearch" name="fats[from]" placeholder="с" type="text">
                                                <span>-</span>
                                                <input class="form-control input-sm input-slim" name="fats[to]" placeholder="по" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="carbsSearch" class="col-sm-3 control-label">Углеводы</label>

                                        <div class="col-sm-9">
                                            <div class="form-inline">
                                                <input class="form-control input-sm input-slim" id="carbsSearch" name="carbs[from]" placeholder="с" type="text">
                                                <span>-</span>
                                                <input class="form-control input-sm input-slim" name="carbs[to]" placeholder="по" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="energySearch" class="col-sm-3 control-label">Ккал</label>

                                        <div class="col-sm-9">
                                            <div class="form-inline">
                                                <input class="form-control input-sm input-slim" id="energySearch" name="energy[from]" placeholder="с" type="text">
                                                <span>-</span>
                                                <input class="form-control input-sm input-slim" name="energy[to]" placeholder="по" type="text">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="markSearch" class="col-sm-3 control-label">Оценка</label>

                                        <div class="col-sm-9">
                                            <div class="form-inline">
                                                <input class="form-control input-sm input-slim" id="markSearch" name="mark[from]" placeholder="с" type="text">
                                                <span>-</span>
                                                <input class="form-control input-sm input-slim" name="mark[to]" placeholder="по" type="text">
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
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="input-group" style="margin: auto">
                                    <input type="submit" class="btn btn-sm btn-primary" value="Отсортировать" />
                                    <input type="reset" class="btn btn-sm btn-default" value="Очистить" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="alert alert-warning">
                Пищевая ценность расчитана на 100 г съедобной части продукта.
            </div>

            <table id="food" class="table table-striped">
                <thead>
                <tr>
                    <th id="column_name" class="js-sort sort-up">Наименоване продукта</th>
                    <th id="column_category" class="js-sort">Категория</th>
                    <th id="column_gi" class="js-sort" title="Гликемический индекс">ГИ</th>
                    <th id="column_protein" class="js-sort">Белки</th>
                    <th id="column_fats" class="js-sort">Жиры</th>
                    <th id="column_carbs" class="js-sort">Углеводы</th>
                    <th id="column_energy" class="js-sort">Ккал</th>
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
@endsection
