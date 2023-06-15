@php
    /** @var \App\Models\BlogCategory $item */
@endphp
<div>
    <input type="submit" value="Сохранить">
</div>
@if($item->exists)
<div>
    <p><b>ID: {{ $item->id }}</b></p>
</div>
<div>
    <p>Создано</p>
    <input type="text" value="{{ $item->created_at }}" disabled>
</div>
<div>
    <p>Изменено</p>
    <input type="text" value="{{ $item->updated_at }}" disabled>
</div>
<div>
    <p>Удалено</p>
    <input type="text" value="{{ $item->deleted_at }}" disabled>
</div>
@endif
