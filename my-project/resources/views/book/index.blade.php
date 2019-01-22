    @foreach($books as $item)
        <h1>Title: {{ $item->title}}</h1>
        <h1>Price: {{ $item->price}}</h1>
        <a href="{{ route('book.edit',$item->id) }}">Edit</a>
        <form action="{{ route('book.destroy',$item->id) }}" 
                          method="POST">
                          {{csrf_field()}}
                          {{method_field('DELETE')}}
                          <button type="submit">
                          Delete</button>
                        </form>
    @endforeach