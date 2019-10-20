<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
  </head>
  <body>

    @include('vue')

    <div id="app">
      <ul>
        @foreach ($dogs as $dog)
          <li>
            <component-dog

            :id = "'{{ $dog -> id}}'"
            :name = "'{{ $dog -> name}}'"

            ></component-dog>
          </li>
        @endforeach
      </ul>


    </div>






  </body>
</html>
