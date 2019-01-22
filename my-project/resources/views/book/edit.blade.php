<form role="form" method="POST" action="{{ route('book.update',$book->id) }}" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <label >Title</label>
    <input type="text" name="title" value="{{$book->title}}">
    <label >Price</label>
    <input type="text" name="price" value="{{$book->price}}">
    <button type="submit">Update</button>
</form>