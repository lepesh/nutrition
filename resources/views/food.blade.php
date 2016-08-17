@extends('layouts.app')

@section('title', 'Главная')

@section('content')
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
@endsection
