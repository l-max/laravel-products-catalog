@extends('layouts.admin')

@section('title', 'Список товаров')

@section('content')
    <div class="container">
        <div class="float-right">
            <form action="/admin/products/create">
                <button class="btn btn-success" title="Добавить товар">+</button>
            </form>
        </div>
    </div>

    <div class="container">
        <div>
            @if (count($products) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Товары</h1>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped products-list-table">
                            <thead>
                            <th>Id</th>
                            <th>Артикул</th>
                            <th>Название</th>
                            <th>Описание</th>
                            <th>Категория</th>
                            <th>Изменен</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                            </thead>
                            <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="table-text"><div>{{ $product->id }}</div></td>
                                    <td class="table-text"><div>{{ $product->art }}</div></td>
                                    <td class="table-text"><div>{{ $product->name }}</div></td>
                                    <td class="table-text"><div>{{ $product->description }}</div></td>
                                    <td class="table-text"><div>{{ $product->category_id }}</div></td>
                                    <td class="table-text"><div>{{ $product->updated_at }}</div></td>

                                    <td>
                                        <form action="{{ url('admin/products/' . $product->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}

                                            <button type="submit" id="delete-item-{{ $product->id }}" class="btn btn-danger"
                                                    onclick="return confirm('Вы действительно хотите удалить элемент?');">
                                                <i class="fa fa-btn fa-trash"></i>Удалить
                                            </button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ url('admin/products/edit/' . $product->id) }}">
                                            <button type="submit" class="btn btn-info">
                                                <i class="fa fa-btn fa-edit"></i>Изменить
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection