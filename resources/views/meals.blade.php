<!DOCTYPE html>
<html>
<head>
    <br>
    <title>Jela - prva aplikacija </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Lista svih jela na meniju :</h1>
    <div class="row">
        <div class="col-md-6">
            Filter:
            <a href="/?kategorija=meso"> Meso </a>
            <a href="/?kategorija=riba"> Riba </a>
            <a href="/?kategorija=desert"> Desert </a>
            <a href="/?kategorija=juha"> Juha </a>
            <a href="/">RESET</a>
        </div>
        <div class="col-md-6 text-right">
            Sortiraj:
            <a href="/?sort=asc"> A-Z </a>
            <a href="/?sort=desc">  Z-A </a>
        </div>
    </div>



    <hr>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th style="width: 200px"> Naziv</th>
            <th>Opis</th>
            <th style="width:100px">Kategorija</th>
        </tr>
        </thead>
        <tbody>
        @foreach($meals as $meal)
        <tr>
            <td>{{$meal->naziv }}</td>
            <td>{{$meal->opis }}</td>
            <td>{{$meal->kategorija}}</td>
        </tr>
            @endforeach
        </tbody>

    </table>
        {{$meals->links()}}
</div>
</body>