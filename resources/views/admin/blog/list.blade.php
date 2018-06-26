@extends('admin.layouts._layout')

@section('breadcrumbs')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Список статей</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ url('/admin') }}">Админка</a>
            </li>
            <li class="breadcrumb-item active">Список статей</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive text-center">
                        @if($posts)
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Заголовок</th>
                                        <th>URL</th>
                                        <th>Дата публикации</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <th scope="row">{{ $post->id }}</th>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->slug }}</td>
                                            <td>{{ $post['created_at']->format('d.m.Y') }}</td>
                                            <td class="color-primary">
                                                <span class="pull-right">
                                                    <a href="{{ url('admin/posts/' . $post['id'] . '/edit') }}" class="btn btn-primary">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="#" data-object-id="{{ $post->id }}" data-object-alias="post" class="btn btn-danger obj_delete_btn">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            Нет результатов
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection