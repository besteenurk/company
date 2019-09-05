
@yield('opt')
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <form method="post">
        {{ csrf_field() }}
        <div>
            <h2>SURVEY QUESTIONS</h2>
            <ul class="nav nav-tabs">
                <li><a href="#home">Coktan secmeli</a></li>
                <li><a href="#menu1">Acık uclu</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-25">
                            <label>Aylık kotanızın ne kadar olması size yeterlidir?</label>
                        </div>
                        <div class="col-75">
                            <input type="radio" name="one" value="12"> 12
                            <input type="radio" name="one" value="14"> 14
                            <input type="radio" name="one" value="17"> 17
                            <input type="radio" name="one" value="120"> 20
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Devam edecek misiniz?</label>
                        </div>
                        <div class="col-75">
                            <input type="radio" name="two" value="yes"> Yes
                            <input type="radio" name="two" value="no"> No

                        </div>
                    </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <div class="row">
                        <div class="col-25">
                            <label>Aylık kotanızı neye göre belirlediniz?</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="three">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Kotanız yeterli değilse nedenlerini belirtiniz.</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="four">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (isset($options)) {
            echo $options;
        } else {
            echo '';
        } ?>

        <div class="row">
            <input type="submit" value="Submit">
        </div>

        <script>
            $(document).ready(function () {
                $(".nav-tabs a").click(function () {
                    $(this).tab('show');
                });
            });
        </script>

    </form>

</div>



</body>
</html>

