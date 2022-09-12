<div>
    @include('livewire.create')
    @include('livewire.edit')
    <section style="padding-top: 60px;">
        <style>
            nav svg {
                max-height: 20px;
            }
        </style>
        <div class="container">
            <h1 class="text-center">Student Information</h1>
            <div class="row">
                @if (session()->has('message'))
                    <div class="alert alert-success">{{session()->get('message')}}</div>
                @endif
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>All Students
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createstudent">
                                            Add New Student
                                        </button>
                                    </h3>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" placeholder="Search....." wire:model="searchTerm"/>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Acions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($students)
                                        @foreach ($students as $student )
                                        <tr>
                                            <td>{{$student->firstname}}</td>
                                            <td>{{$student->lastname}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->phone}}</td>
                                            <td>
                                                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editstudent" wire:click.prevent="edit({{$student->id}})">Edit</button>
                                                <button type="button" class="btn btn-danger" wire:click.prevent="delete({{$student->id}})">Delete</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                    <p>No students yet!</p>
                                    @endif
                                </tbody>
                            </table>
                            {{$students->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
