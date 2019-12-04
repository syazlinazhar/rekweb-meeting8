 @extends('template.main')

    @section('title', 'Register Mahasiswa')

    @section('container')
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Details Students</h1>

                    <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">{{ $student->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $student->matric }}</h6>
                            <p class="card-text">{{ $student->email }}</p>
                            <p class="card-text">{{ $student->course }}</p>

                            <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>

                            <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="/students" class="card-link">Back</a>
                          </div>
                        </div>


                </div>
            </div>
         </div>
    @endsection