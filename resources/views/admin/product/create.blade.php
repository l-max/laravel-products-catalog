@extends('layouts.admin')

@section('title', 'Создать товар')

@section('content')

    <div class="panel-body">
    @include('common.errors')

        <form action="{{ url('admin/products') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="item-art" class="col-sm-3 control-label">Артикул</label>
                <div class="col-sm-6">
                    <input type="text" name="art" id="item-art" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="item-name" class="col-sm-3 control-label">Название</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="item-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="item-description" class="col-sm-3 control-label">Описание</label>
                <div class="col-sm-6">
                    <textarea rows="10" cols="45" name="description" id="item-description" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="item-category" class="col-sm-3 control-label">Категория</label>
                <div class="col-sm-6">
                    <select name="category" id="item-category" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="item-image" class="col-sm-3 control-label">Фото</label>
                <div class="col-sm-6">
                    <input type="file" name="image" id="item-image" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Создать
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection