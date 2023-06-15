@php /** @var \App\Models\BlogCategory $item */ @endphp
@if($item->exists)
    <form method="POST" action="{{ route('blog.admin.categories.update', $item->id) }}">
    @method('PATCH')
@else
    <form method="POST" action="{{ route('blog.admin.categories.store') }}">
@endif
    @csrf
    @if($errors->any())
        <p style="color: red">{{ $errors->first() }}</p>
    @endif
    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif
    <div class="cols">
        <div class="col">
            @include('blog.admin.categories.includes.item_edit_main_col')
        </div>
        <div class="col">
            @include('blog.admin.categories.includes.item_edit_add_col')
        </div>
    </div>
</form>

<style>
    .cols {
        display: flex;
    }
    .col {
        margin-right: 20px;
    }
</style>
