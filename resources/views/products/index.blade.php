@extends('layouts.app')
@php
    /** @var \App\Category $category */
    /** @var \App\Category[] $categories */
@endphp

@section('title', $category->name)

@section('content')

    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/"><i class="glyphicon glyphicon-home"></i></a></li>
            @if ($category->parent_id)
                @foreach ($categories as $c)
                    @if ($c->id === $category->parent_id)
                        <li><a href="/products/{{ $c->id }}">{{ $c->name }}</a></li>
                    @endif
                @endforeach
                <li><a href="/products/{{ $category->id }}">{{ $category->name }}</a></li>
            @else
                <li><a href="/products/{{ $category->id }}">{{ $category->name }}</a></li>
            @endif
        </ul>
        <div class="row"><aside id="column-left" class="col-sm-3 hidden-xs">
                <div class="list-group">
                    @foreach ($categories as $c)
                        <a href="/products/{{ $c->id }}"
                           class="list-group-item @if ($c->id === $category->id || $c->id === $category->parent_id) active @endif">
                            @if($c->parent_id) &nbsp;- @endif
                                {{ $c->name }}
                        </a>
                    @endforeach
                </div>
            </aside>
            <div id="content" class="col-sm-9">
                <h1 style="margin-bottom: 30px;">{{ $category->name }}</h1>
                <div class="row">
                    {{--<div class="col-md-2 col-sm-6 hidden-xs">--}}
                        {{--<div class="btn-group btn-group-sm">--}}
                            {{--<button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="" data-original-title="Список"><i class="glyphicon glyphicon-th-list"></i></button>--}}
                            {{--<button type="button" id="grid-view" class="btn btn-default active" data-toggle="tooltip" title="" data-original-title="Сетка"><i class="glyphicon glyphicon-th"></i></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4 col-xs-6">--}}
                        {{--<div class="form-group input-group input-group-sm">--}}
                            {{--<label class="input-group-addon" for="input-sort">Сортировать:</label>--}}
                            {{--<select id="input-sort" class="form-control" onchange="location = this.value;">--}}
                                {{--<option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=p.sort_order&amp;order=ASC" selected="selected">По умолчанию</option>--}}
                                {{--<option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=pd.name&amp;order=ASC">По имени (A - Я)</option>--}}
                                {{--<option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=pd.name&amp;order=DESC">По имени (Я - A)</option>--}}
                                {{--<option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=p.price&amp;order=ASC">По цене (возрастанию)</option>--}}
                                {{--<option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=p.price&amp;order=DESC">По цене (убыванию)</option>--}}
                                {{--<option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=p.model&amp;order=ASC">По модели (A - Я)</option>--}}
                                {{--<option value="https://tapdom.ru/index.php?route=product/category&amp;path=20_61&amp;sort=p.model&amp;order=DESC">По модели (Я - A)</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-xs-6">--}}
                        {{--<div class="form-group input-group input-group-sm">--}}
                            {{--<label class="input-group-addon" for="input-limit">Показывать:</label>--}}
                            {{--<select id="input-limit" class="form-control" onchange="window.location = window.location.href + this.value;">--}}
                                {{--<option value="?limit=15" @if ($limit === 15) selected="selected" @endif>15</option>--}}
                                {{--<option value="?limit=25" @if ($limit === 25) selected="selected" @endif>25</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="product-thumb">
                                <div class="image">
                                    <a href="#">
                                        <img src="{{ $product->image }}" alt="{{ $product->name }}" title="{{ $product->name }}" class="img-responsive"></a></div>
                                <div>
                                    <div class="caption">
                                        <h4><a href="#">{{ $product->name }}</a></h4>
                                        <p>..</p>
                                        <p class="price">
                                            Размер: 36-37, 38-39, 40-41
                                            <span class="price-tax">Цвет: Бордовый, Синий</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>
                <div class="row">
                    <div class="col-sm-6 text-left"></div>
                    <div class="col-sm-6 text-right">{{ $products->links() }}</div>
                </div>
        </div>
    </div>
@endsection