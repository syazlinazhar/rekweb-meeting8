    @extends('template.main')

    @section('title', 'About')

    @section('container')
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h1>Hello, {{$name}}!</h1>
                </div>
            </div>
         </div>
    @endsection

      