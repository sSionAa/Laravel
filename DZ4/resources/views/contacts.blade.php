<!doctype html>
<html>
  <head>
   111
  </head>
  <body>
@extends('layouts.default')

@section('content')

   Hello {{ $email }}
    @if ($email == null) Адрес электронной почты не указан
    @else  Вы вошли в систему.
    @endif

@stop

  </body>
</html>