@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">

        @component('admin.components.breadcrumb')
            @slot('title') Создание категории @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <hr>

            <form action="{{ route('admin.category.store') }}" method="post" class="form-horizontal">
                {{ csrf_field() }}

                {{-- Form include --}}

                @include('admin.categories.partials.form')

                <input type="hidden" name="creator_id" value="{{ Auth::id() }}">
            </form>

    </div>
@endsection