@php
    /** @var \App\Models\BlogCategory $item */
@endphp
<p><b>Основные данные</b></p>

<p style="margin-bottom: 5px">Заголовок</p>
<div style="margin-bottom: 5px;">
    <input type="text" name="title" value="{{ $item->title }}" required>
</div>
<p style="margin-bottom: 5px">Идентификатор</p>
<div style="margin-bottom: 5px;">
    <input type="text" name="slug" value="{{ $item->slug }}">
</div>
<p style="margin-bottom: 5px">Родитель</p>
<div style="margin-bottom: 5px;">
    <select name="parent_id">
        @foreach($categoryList as $categoryOption)
            <option value="{{ $categoryOption->id }}" @if($categoryOption->id == $item->parent_id) selected  @endif>
                {{ $categoryOption->id_title }}
            </option>
        @endforeach
    </select>
</div>
<p style="margin-bottom: 5px">Описание</p>
<textarea name="description">{{ old('description', $item->description) }}</textarea>
