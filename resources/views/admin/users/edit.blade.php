@extends('layouts.backend')
@section('content')
    <form method="post" action="{{action('AdminUsersController@update',$user->id)}}" enctype="multipart/form-data" accept-charset="UTF-8">
        {!! csrf_field() !!}
        <input type="hidden" name="_method" value="PUT"/>
        @if(count($errors)>0)
            <div class="alert danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ old('name',$user->name)  }}" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ old('email',$user->email) }}" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="active">Activate him?</label>
            <input type="checkbox" name="is_active" value="1" {{ old('is_active',$user->is_active)?"checked":"" }} />
        </div>

        <div class="form-group">
            <label for="role_id">Role:</label>
            <select class="form-control" name="role_id" id="role_id">
                @foreach($roles as $role_key=>$role)

                    <option value="{{$role_key}}"
                    @if(count($errors)>0)
                        {{old('role_key',$user->role_id)==$role_key?"selected":""}}

                            @else
                        {{$user->role_id==$role_key?"selected":""}}
                            @endif
                    >

                        {{$role}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control"
                       name="password_confirmation">
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-6">
                <input type="submit" name="submit" class="btn btn-primary" value="submit"/>
            </div>

            <div class="col-md-6">
                <a class="btn btn-default" href="{{action('AdminUsersController@index')}}">Cancel</a>
            </div>

        </div>


    </form>

@stop
