@extends('template')

  @section('content')
  <hr>
    <h4>Contact Us</h4>
    <hr>
    <h1>Contact Infos</h1>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <span class="bold">Address: </span>Some Address here<br>
    <span class="bold">Mail: </span>mail@domain.com<br>
    <span class="bold">Phone: </span>09266832623
    <hr>
    <h1>Ask Us</h1>
    <hr>
    {{ Form::open(['url'=>'about', 'id'=>'test']) }}
    <div class="row">
      <div class="six column">
        {{ Form::label('Name', 'Name: ') }}
        {{ Form::text('name', null, array('class'=>'u-full-width')) }}
      </div>

    </div>
    <div class="row">
       <div class="six column">
        {{ Form::label('Name', 'Email: ') }}
        {{ Form::text('name', null, array('class'=>'u-full-width')) }}
      </div>

    </div>
    <div class="row">
      <div class="six column">
        {{ Form::label('Name', 'Subject: ') }}
        {{ Form::text('name', null, array('class'=>'u-full-width')) }}
      </div>

    </div>
    <div class="row">
      <div class="six column">
        {{ Form::label('Name', 'Your Message: ') }}
        {{ Form::textarea('name', null, array('class'=>'u-full-width')) }}
      </div>
    </div>
    <div class="row">
    <div class="six column">
      {{ Form::submit('Submit', array('class'=>'button-primary')) }}
    </div>

    </div>
    {{ Form::close() }}
  @stop
