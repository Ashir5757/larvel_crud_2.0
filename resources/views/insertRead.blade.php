@extends('welcome')
@section('content')

<center>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-danger fw-bolder rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Student</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="insertData" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <input type="text"  name="name" id="name" placeholder="Enter your name " class="form-control">
                </div>
                <div class="mb-3">
                    <input type="email"  name="email" id="email" placeholder="Enter your Email "class="form-control">
                </div>
                <div class="mb-3">
                    <input type="file"  name="image" id="image"class="form-control">
                </div>
                <div class="mb-3">          <button type="submit" class="btn btn-outline-danger fw-bolder" >Add Record</button>
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
  </div>
</center>


<div class=" row row-cols-1 row-cols-md-2 g-3 justify-content-center my-5 " style="position = reletive">
    @foreach ($data as $card )

<div class="card m-5" style="width: 18rem;">
    <form action="updateform" method="get">
    <img src="image/{{ $card['image'] }}" class="card-img-top" alt="..." width="200px " height="250px">
    <div class="card-body">
        <p class="card-title"><strong>ID :</strong> <input type="hidden" name="id" value="{{ $card['id'] }}"> {{ $card['id'] }}  </p>
            <p class="card-title"><strong>Name :</strong><input type="hidden" name="editname" value="{{ $card['name'] }}">{{ $card['name'] }}</p>
                <p class="card-text"> <strong>Email :</strong><input type="hidden" name="editemail" value="{{ $card['email'] }}">{{ $card['email'] }} </p>
<div ><input type="submit" value="Edit" name="edit" class="btn btn-outline-primary mx-3"><input type="submit" name="delete" value="Delete" class="btn btn-outline-danger"></div>
            </div>
        </div>
</form>
@endforeach
</div>
@endsection

