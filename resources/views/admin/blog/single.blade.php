@extends('admin.layouts._layout')

@push('custom_styles')
    <link rel="stylesheet" href="/admin/css/lib/summernote/summernote-bs4.css" />
@endpush

@push('custom_scripts')
    <script src="/admin/js/lib/summernote/summernote-bs4.js"></script>
    <script src="/admin/js/lib/summernote/lang/summernote-ru-RU.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 300,
                lang: 'ru-RU'
            });
        });
    </script>
@endpush

@section('breadcrumbs')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Создание статьи</h3> </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Админка</a></li>
            <li class="breadcrumb-item active">Создание статьи</li>
        </ol>
    </div>
</div>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="basic-form">
                <form method="POST" action="{{ url('articles/save') }}">
                    <div class="form-group">
                        <label for="slug" class="control-label">URL новости</label>
                        <input type="text" class="form-control input-default" id="slug" name="slug" placeholder="Введите url новости">
                    </div>
                    
                    <div class="form-group">
                        <label for="title" class="control-label">Заголовок новости</label>
                        <input type="text" class="form-control input-default" id="title" name="title" placeholder="Введите заголовок новости">
                    </div>
                    
                    <div class="form-group">
                        <label for="description" class="control-label">Текст новости</label>
                        <textarea class="summernote form-control" id="description" name="description" rows="15" placeholder="Введите текст статьи"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="preview" class="control-label">Превью новости</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="preview">
                            <label class="custom-file-label" for="preview">Выбрать</label>
                        </div>
                    </div>
                    
                    <input type="submit" class="btn btn-info float-lg-right" value="Сохранить">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection