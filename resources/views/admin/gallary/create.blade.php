<form action="{{url('admin/gallary/store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label class="form-label" for="customFile" >Default file input example</label>
     <input type="file" class="form-control" name='image' id="customFile" /> 

     <button type="submit"  > Upload </button>
</form>