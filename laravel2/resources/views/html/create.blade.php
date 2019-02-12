<form role="form" method="POST" action="{{ route('trangchu.store') }}" enctype="multipart/form-data">
    {{csrf_field()}}
    {{-- {{ dd(csrf_field())}} --}}
    <input type="hidden" name="_token" method="pull">
    <label >ten</label>
    <input type="text" name="name">
    <label >Email</label>
    <input type="text" name="email">
    <label >SDT</label>
    <input type="text" name="sdt">
    <button type="submit">Create</button>
</form>
 trang them nguoi dung