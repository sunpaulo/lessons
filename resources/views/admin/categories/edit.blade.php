@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Редактирование категории @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <hr>

        <form action="{{ route('admin.category.update', $category) }}" method="post" class="form-horizontal">
            {{ csrf_field() }}
            {{ method_field('put') }}

            {{-- Form include --}}
            @include('admin.categories.partials.form')
            <input type="hidden" name="moderator_id" value="{{ Auth::id() }}">
        </form>

    </div>
@endsection