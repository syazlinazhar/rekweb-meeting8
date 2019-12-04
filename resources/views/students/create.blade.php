 @extends('template.main')

    @section('title', 'Form Add Data Mahasiswa')

    @section('container')
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h1 class="mt-3">Form Add Data Students</h1>

                        <form method="post" action="/students">
                            @csrf
                          <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Name" name="name" value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="matric">Matric</label>
                            <input type="text" class="form-control @error('matric') is-invalid @enderror" id="matric" placeholder="Enter Matric Number" name="matric" value="{{ old('matric') }}">
                            @error('matric')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{ old('email') }}">
                          </div>
                          <div class="form-group">
                            <label for="course">Course</label>
                            <input type="text" class="form-control" id="course" placeholder="Enter Course" name="course" value="{{ old('course') }}">
                          </div>
                          <button type="submit" class="btn btn-primary">Add Data!</button>
                        </form>
                </div>
            </div>
         </div>
    @endsection