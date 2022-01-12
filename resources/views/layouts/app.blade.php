<html>

<head>
    <title>Locadora @yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>

        .row {
          display: flex;
        }

        .col1 {
          flex: 30%;
          padding: 10px;
        }

        .col2 {
          flex: 70%;
          padding: 10px;
        }

        .menu ul
        {
          margin: 0px;
          padding: 0px;
          list-style-type: none;
        }

        .menu li
        {
          list-style: none;
        }

        .menu a
        {
          display: block;
          width: 200px;
          height: 20px;
          color: black;
          background-color: #FFFFFF;
          text-decoration: none;
          text-align: center;
          margin: 5px;
          font-size: 18px;
        }

        .menu a:hover
        {
          background-color: #b9bcd0;
          color: #0000ff;
          font-weight: bold;
        }

        .menu .active
        {
          background-color: #c0d4f3;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }

    </style>

</head>

<body>
    @section('sidebar')

    @show

    <div class="container">

        @yield('content')
    </div>
</body>

</html>
