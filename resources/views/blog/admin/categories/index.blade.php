<div style="margin-bottom: 20px">
    <a href="{{ route('blog.admin.categories.create') }}">Добавить</a>
</div>

<table>
    <tr>
        <th>#</th>
        <th>Категория</th>
        <th>Родитель</th>
    </tr>
    @foreach($paginator as $item)
        @php /** @var \App\Models\BlogCategory $item */ @endphp
        <tr>
            <td>{{ $item->id }}</td>
            <td>
                <a href="{{ route('blog.admin.categories.edit', $item->id) }}">
                    {{ $item->title }}
                </a>
            </td>
            <td @if(in_array($item->parent_id, [0, 1])) style="color: #ccc" @endif>
                {{ $item->parent_id }}
            </td>
        </tr>
    @endforeach
</table>

@if($paginator->total() > $paginator->count())
<div style="margin-top: 20px">
    {{ $paginator->links() }}
</div>
@endif

<style>
    td {
        padding: 15px;
    }
</style>
