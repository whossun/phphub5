@extends('layouts.default')

@section('title')
{{ lang('Create New Account') }}_@parent
@stop

@section('content')
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">{{ lang('Create New Account') }}</h3>
        </div>
        <div class="panel-body">

            <form method="POST" action="{{ route('signup') }}" accept-charset="UTF-8">
                {{ csrf_field() }}
                <input name="github_id" type="hidden" value="{{ $githubUser['id'] }}">
                <div class="form-group">
                    <label class="control-label" for="name">{{ lang('Avatar') }}</label>
                    <div class="form-group">
                        <img src="{{ $githubUser['avatar_url'] }}" width="100%" />
                    </div>
                </div>

                <div class="form-group {{{ $errors->has('name') ? 'has-error' : '' }}}">
                    <label class="control-label" for="name">{{ lang('Username') }}</label>
                     <input class="form-control" name="name" type="text" value="{{ $githubUser['name'] ?: '' }}">
                    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group {{{ $errors->has('github_name') ? 'has-error' : '' }}}">
                    <label class="control-label" for="github_name">Github Name</label>
                    <input class="form-control" readonly="readonly" name="github_name" type="text" value="{{ isset($githubUser['github_name']) ? $githubUser['github_name'] : $githubUser['name'] }}">
                    {!! $errors->first('github_name', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group {{{ $errors->has('email') ? 'has-error' : '' }}}">
                    <label class="control-label" for="email">{{ lang('Email') }}</label>
                    <input class="form-control" name="email" type="text" value="{{ $githubUser['email'] ?: '' }}">
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>

                <input class="btn btn-lg btn-success btn-block" type="submit" value="{{ lang('Confirm') }}">
            </form>

        </div>
      </div>
    </div>
  </div>

@stop
