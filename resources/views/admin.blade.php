@extends('layouts.app')

@section('content')
Добро пожаловать в админку, {{ Auth::user()->login }}
@endsection