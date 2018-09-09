@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Список Новостей @endslot
            @slot('parent') Главная @endslot
            @slot('active') Новости @endslot
        @endcomponent

        <hr>

        <a href="{{ route('admin.article.create') }}" class="btn btn-primary pull-right">
            <i class="fa fa-plus-square-o"></i> Создать новость</a>
        <table class="table table-striped">
            <thead>
            <th>Наименование</th>
            <th>Публикация</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->published }}</td>
                    <td class="text-right">
                        <form action="{{ route('admin.article.destroy', $article) }}" onsubmit="if(confirm('Удалить?')) { return true }else{ return false }" method="post">
                            {{ method_field('delete') }}
                            {{ csrf_field() }}

                            <a href="{{ route('admin.article.edit', $article) }}" class="btn btn-default">Изменить</a>

                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">
                        <h2>Данные отсутствуют</h2>
                    </td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{ $articles->links() }}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection