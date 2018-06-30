@include('base')

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
            Add new Destination
        </div>

        <div>
            {!! Form::open(['url' => '/store', 'class' => 'smart-form', 'id' => 'storeId']) !!}


<!--            <section class="col col-2">-->
<!--                {!! Form::label('id', 'ID', ['class' => 'label']) !!}-->
<!--                <label class="input" id="id" name="id">-->
<!--                    {!! Form::text('id', '', ['class' => 'form-control', 'name' => 'id', 'id' => 'id']) !!}-->
<!--                </label>-->
<!--            </section>-->


            <section class="col col-2">
                {!! Form::label('name', 'Country', ['class' => 'label']) !!}
                <label class="input">
                    {!! Form::text('name', '', ['class' => 'form-control']) !!}
                </label>
            </section>

            <section class="col col-2">
                {!! Form::label('email', 'City', ['class' => 'label']) !!}
                <label class="input">
                    {!! Form::text('email', '', ['class' => 'form-control']) !!}
                </label>
            </section>


            <section class="col col-2">
                {!! Form::label('password', 'What did you like?', ['class' => 'label']) !!}
                <label class="input">
                    {!! Form::text('password', '', ['class' => 'form-control']) !!}
                </label>
            </section>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add destination</button>
            </div>

            {!! Form::close() !!}

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
