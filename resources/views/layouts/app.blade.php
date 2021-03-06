<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TaskList</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
         @include('commons.navbar')
        
        <div class ="container">
            <div class="row">
                <div class="col-xs-12"></div>
                <div class="col-sm-offset-2 md-8"></div>
                <div class="col-lg-offset-3 lg-6"></div>
            </div>
            @include('commons.error_messages')
            
            @yield('content')
    </body>
</html>