<label for="published">Статус</label>
<select name="published" id="published" class="form-control">
    @if (isset($article->id))
        <option value="0" @if ($article->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($article->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости"
   value="{{ $article->title or "" }}" required>

<label for="">Slug (Уникальное значение)</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация"
   value="{{ $article->slug or "" }}" readonly="">

<label for="categories">Родительская категория</label>
<select name="categories[]" multiple="" id="categories" class="form-control">
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="description_short">Краткое описание</label>
<textarea name="description_short" id="description_short" >
    {{ $article->description_short or "" }}
</textarea>

<label for="description">Полное описание</label>
<textarea name="description" id="description">
    {{ $article->description or "" }}
</textarea>

<hr>

<label for="">Мета заголовок</label>
<input type="text" class="form-control" name="meta_title" placeholder="Мета заголовок" value="{{ $article->meta_title or ""  }}">

<label for="">Мета описание</label>
<input type="text" class="form-control" name="meta_description" placeholder="Мета описание" value="{{ $article->meta_description or "" }}">

<label for="">Ключевые слова</label>
<input type="text" class="form-control" name="meta_keywords" placeholder="Ключевые слова, через запятую" value="{{ $article->meta_keywords or "" }}">

<hr>

<input type="submit" value="Сохранить" class="btn btn-primary">