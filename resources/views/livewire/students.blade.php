<div>
   
   <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
            {{session('message')}}
            </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>All Students
                    
                    @include('livewire.create')
                    <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
                    Add Student
                    </button>

                    
                    </h3>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->firstname}}</td>
                    <td>{{$student->lastname}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                </tr>
                @endforeach
                </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </div>
   </section>
</div>
