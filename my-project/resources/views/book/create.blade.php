<form role="form" method="POST" action="{{ route('book.store') }}" enctype="multipart/form-data">
    {{csrf_field()}}
    {{ dd(csrf_field())}}

    <label >Title</label>
    <input type="text" name="title">
    <label >Price</label>
    <input type="text" name="price">
    <button type="submit">Create</button>
</form>