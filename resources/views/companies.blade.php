<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function () {
            $(".nav-tabs a").click(function () {
                $(this).tab('show');
            });
        });
    </script>

</head>
<body>
<div class="container">
    <br>
    <h2>COMPANIES</h2>
    <form method="get">
        <table class="table table-striped">
            {{csrf_field()}}

            <tr>
                <td>Company</td>
                <td>Survey</td>
            </tr>
            @foreach($data as $datas)
                <tr>
                    <td>
                        <p>{{$datas->c}}</p>
                    </td>
                    <td>
                        <p>{{$datas->s}}</p>

                    </td>
                </tr>
            @endforeach
        </table>
    </form>

            <ul class="nav nav-tabs">
                <button><a href="#home">ADD NEW SURVEY</a></button>
            </ul>

    <form  method="post">
        {{ csrf_field() }}
        <div>
            <div id="home" class="tab-pane fade">
                <div class="row">
                    <form method="post" action="/surveys">
                        @foreach($data as $data)

                           <button>
                               <a href="/surveys" role="button">{{$data->c}}</a>
                           </button>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </form>
</div>
<?php if (isset($companies)) {
    echo $companies;
} else {
    echo '';
} ?>




