@include('base')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trip advisors </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 15px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref">

    <div class="content">
        <div class="title m-b-md">
            Users
        </div>
        <div class="col ">
            {{ Form::button(
            '<span class="glyphicon glyphicon-search"></span>',
            array(
            'class'=>'btn btn-warning',
            'type'=>'submit')

            )
            }}

        </div>
        <div>


            <section class="col col-2">
                {!! Form::label('id', 'ID', ['class' => 'label']) !!}
                <label class="input">
                    {!! Form::text('id', '', ['class' => 'form-control']) !!}
                </label>
            </section>

            <section class="col col-2">
                {!! Form::label('name', 'Name', ['class' => 'label']) !!}
                <label class="input">
                    {!! Form::text('name', '', ['class' => 'form-control']) !!}
                </label>
            </section>



            <section class="col col-2">
                {!! Form::label('email', 'Email', ['class' => 'label']) !!}
                <label class="input">
                    {!! Form::text('name', '', ['class' => 'form-control']) !!}
                </label>
            </section>






        </div>
        <div class="links">
        </div>
    </div>
</div>
<div class="sidenav">
    {!! Menu::get('navbar') !!}
</div>
</body>
</html>
