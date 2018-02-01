<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Our Student Management Database</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  </head>
  <body>

    <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="/">Home</a></li>
              <li><a href="#">Create</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <div class="container">



        <table class="table table-reponsive table-hover">
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Registration</th>
            <th>Department Name</th>
            <th>Info</th>
          </tr>

          @foreach ($students as $student)
          <tr>
            <td>#</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->registration_id }}</td>
            <td>{{ $student->department_name }}</td>
            <td>{{ $student->info }}</td>
          </tr>
          @endforeach

        </table>
      </div>

    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>
