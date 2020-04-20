@extends('layouts.app')

@section('content')
<div class="card shadow mb-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Mange Members</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col text-center">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Roles</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <th class="text-nowrap">{{$user->name}}</th>
                                    <th class="text-nowrap">{{$user->email}}</th>
                                    <th class="text-nowrap">
                                        {{implode(', ',$user->roles()->get()->pluck('name')->toArray())}}
                                    </th>
                                    <th class="text-nowrap">
                                        <div class="row ">
                                            <div class="col-6 text-right">
                                                @can('edit-users')
                                                <a href="{{route('admin.manager.edit',$user->id)}}" type="button"
                                                    class="btn  btn-warning">Edit</a>
                                                @endcan
                                            </div>
                                            <div class="col-6 text-lift">
                                                @can('delete-users')
                                                <form action="{{route('admin.manager.destroy',$user)}}" method="POST">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type=" submit" class="btn btn-danger">Delete</button>
                                                </form>
                                                @endcan
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
