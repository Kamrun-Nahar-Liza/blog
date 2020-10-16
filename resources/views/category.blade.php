@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          @if(count($errors) > 0)
              @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
              @endforeach
          @endif

          @if(session('response'))
              <div class="alert alert-success">{{session('response')}}</div>
          @endif
            <div class="panel panel-default">
                <div class="panel-heading">categories</div>


                  <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/addCategory') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Enter a Category</label>

                            <div class="col-md-6">
                                <input id="category" type="category" class="form-control" name="category" value="{{ old('category') }}" required autofocus>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                  Add Category
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
