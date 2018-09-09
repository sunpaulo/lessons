@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание новости @endslot
            @slot('parent') Главная @endslot
            @slot('active') Новости @endslot
        @endcomponent

        <hr>

        <form action="{{ route('admin.article.store') }}" method="post" class="form-horizontal">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.articles.partials.form')

            <input type="hidden" name="creator_id" value="{{ Auth::id() }}">
        </form>

    </div>
@endsection