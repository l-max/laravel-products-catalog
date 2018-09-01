@extends('layouts.app')

@section('title', 'Список товаров')

@section('content')

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="https://tapdom.ru/index.php?route=common/home"><i class="glyphicon glyphicon-home"></i></a></li>
            <li><a href="https://tapdom.ru/index.php?route=product/category&amp;path=20">Тапочки</a></li>
            <li><a href="https://tapdom.ru/index.php?route=product/category&amp;path=20_61">Женские тапочки</a></li>
        </ul>
        <div class="row"><aside id="column-left" class="col-sm-3 hidden-xs">
                <div class="list-group">
                    <a href="https://tapdom.ru/index.php?route=product/category&amp;path=59" class="list-group-item">Косметички</a>
                    <a href="https://tapdom.ru/index.php?route=product/category&amp;path=20" class="list-group-item active">Тапочки</a>
                    <a href="https://tapdom.ru/index.php?route=product/category&amp;path=20_61" class="list-group-item active">&nbsp;&nbsp;&nbsp;- Женские тапочки</a>
                    <a href="https://tapdom.ru/index.php?route=product/category&amp;path=20_60" class="list-group-item">&nbsp;&nbsp;&nbsp;- Мужские тапочки</a>
                    <a href="https://tapdom.ru/index.php?route=product/category&amp;path=20_62" class="list-group-item">&nbsp;&nbsp;&nbsp;- Детские тапочки</a>
                </div>
            </aside>
            <div id="content" class="col-sm-9">      <h1>Женские тапочки</h1>
                <div class="row">
                    <div class="col-md-2 col-sm-6 hidden-xs">
                        <div class="btn-group btn-group-sm">
                            <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="" data-original-title="Список"><i class="glyphicon glyphicon-th-list"></i></button>
                            <button type="button" id="grid-view" class="btn btn-default active" data-toggle="tooltip" title="" data-original-title="Сетка"><i class="glyphicon glyphicon-th"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="form-group">
                            <a href="https://tapdom.ru/index.php?route=product/compare" id="compare-total" class="btn btn-link">Сравнение товаров (0)</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <div class="form-group input-group input-group-sm">
                            <label class="input-group-addon" for="input-sort">Сортировать:</label>
                            <select id="input-sort" class="form-control" onchange="location = this.value;">
                                <option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=p.sort_order&amp;order=ASC" selected="selected">По умолчанию</option>
                                <option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=pd.name&amp;order=ASC">По имени (A - Я)</option>
                                <option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=pd.name&amp;order=DESC">По имени (Я - A)</option>
                                <option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=p.price&amp;order=ASC">По цене (возрастанию)</option>
                                <option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=p.price&amp;order=DESC">По цене (убыванию)</option>
                                <option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=p.model&amp;order=ASC">По модели (A - Я)</option>
                                <option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=p.model&amp;order=DESC">По модели (Я - A)</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="form-group input-group input-group-sm">
                            <label class="input-group-addon" for="input-limit">Показывать:</label>
                            <select id="input-limit" class="form-control" onchange="location = this.value;">
                                <option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;limit=15" selected="selected">15</option>
                                <option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;limit=25">25</option>
                                <option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;limit=50">50</option>
                                <option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;limit=75">75</option>
                                <option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;limit=100">100</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-thumb">
                            <div class="image"><a href="https://tapdom.ru/index.php?route=product/product&amp;path=20_61&amp;product_id=50"><img src="./index_files/lb01-10101-17-228x228.jpg" alt="Lb01-10101-17" title="Lb01-10101-17" class="img-responsive"></a></div>
                            <div>
                                <div class="caption">
                                    <h4><a href="https://tapdom.ru/index.php?route=product/product&amp;path=20_61&amp;product_id=50">Lb01-10101-17</a></h4>
                                    <p>..</p>
                                    <p class="price">
                                        Размер: 36-37, 38-39, 40-41
                                        <span class="price-tax">Цвет: Бордовый, Синий</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-sm-6 text-left"></div>
                    <div class="col-sm-6 text-right">Показано с 1 по 7 из 7 (всего 1 страниц)</div>
                </div>
            </div>
        </div>
    </div>
@endsection