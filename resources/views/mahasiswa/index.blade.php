 @extends('template.main')

    @section('title', 'Register Mahasiswa')

    @section('container')
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h1>Register Mahasiswa</h1>
                    <tr>
                    <table class="table">
                    <thead class="thead-dark">
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Matric</th>
                      <th scope="col">Email</th>
                      <th scope="col">Course</th> 
                      <th scope="col">Action</th>    
                    </tr>   
                    </thead>
                    <tbody>
                        @foreach( $mahasiswa as $mhs )
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $mhs->name }}</td>
                            <td>{{ $mhs->matric }}</td>
                            <td>{{ $mhs->email }}</td>
                            <td>{{ $mhs->course }}</td>
                            <td>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
         </div>
    @endsection

      