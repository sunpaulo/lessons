@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование новости @endslot
            @slot('parent') Главная @endslot
            @slot('active') Новости @endslot
        @endcomponent

        <hr>

        <form action="{{ route('admin.article.update', $article) }}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            {{ method_field('put') }}

            {{-- Form include --}}
            @include('admin.articles.partials.form')

            <input type="hidden" name="moderator" value="{{ Auth::id() }}">
        </form>

    </div>
@endsection