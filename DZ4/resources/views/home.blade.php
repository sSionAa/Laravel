<!doctype html>
<html>
  <head>
   111
  </head>
  <body>
@extends('layouts.default')

@section('content')
    
   Hello {{ $age }}
    @if ($age > 18) Вы вошли в систему.
    @else  Вы не вошли в систему. Ваш возраст не соттветствует требованиям.
    @endif
    
@stop

  </body>
</html>