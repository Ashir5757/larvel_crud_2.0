@extends('welcome')
@section('content')

<div class="col-md-4 m-auto border p-2">
    <form action="updatedata" method="get">
        <div class="mb-3">
          <label for="exampleInputname" class="form-label">Name</label>
          <input type="text" class="form-control" name="updatename" value="{{ $editname }}" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email </label>
          <input type="email" name="updateemail" value="{{ $editemail }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3 ">
            <label class="form-check-label" for="image">Image</label>
            <input type="file"  name="updateimage" id="image"class="form-control">
        </div>
        <input type="hidden" name=" id" value="{{ $eid }}">
        <button type="submit" class="btn btn-outline-success" >upadte</button>
      </form>

</div>

@endsection
