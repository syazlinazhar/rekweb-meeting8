 @extends('template.main')

    @section('title', 'Register Mahasiswa')

    @section('container')
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Register Students</h1>

                    <a href="/students/create" class="btn btn-primary my-3">Add Data Students</a>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <ul class="list-group">
                            @foreach( $students as $student )
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $student->name}}
                            
                            <a href="/students/{{ $student->id }}" class="badge badge-info">details</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
         </div>
    @endsection

      