@extends('layouts.app')

@section('content')
<div class="card shadow mb-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit user</div>

                <div class="card-body">
                    <form action="{{route('admin.manager.update',$user)}}" method="POST">
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Roles</label>
                            <div class="col-md-6">
                                @csrf
                                {{method_field('PUT')}}
                                @foreach($roles as $role)
                                <div class="form-check">
                                    <input type="checkbox" name="roles[]" value="{{$role->id}}"
                                        @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                    <label>{{$role->name}}</label>
                                </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
