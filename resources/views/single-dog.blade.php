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
          <li>
            <component-dog

            :id = "'{{ $dog -> id}}'"
            :name = "'{{ $dog -> name}}'"
            :age = "'{{ $dog -> age}}'"
            :owner = "'{{ $dog -> owner}}'"
            :description = "'{{ $dog -> description}}'"

            ></component-dog>
          </li>
      </ul>


    </div>






  </body>
</html>
