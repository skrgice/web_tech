@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Anzeigen</div>
                <div class="panel-heading">Suchen nach
                <input type="search" name="text" placeholder="Was suchen Sie?">
                    <select name="category" >
                        <option selected disabled>Kategorie?</option>
                        <option>Immobilien</option>
                        <option>Auto</option>
                        <option>Bücher</option>
                        <option>Marktplatz</option>
                    </select>
                    <select name="state" >
                        <option selected disabled>Bundesland?</option>
                        <option>Kärnten</option>
                        <option>Tirol</option>
                        <option>Wien</option>
                        <option>Burgerland</option>
                        <option>Niederösterreich</option>
                        <option>Oberösterreic</option>
                        <option>Voralberg</option>
                        <option>Steiermarkt</option>
                    </select>
                    <input type="submit" name="suche" value="Suche">

                </div>
                <div class="panel-body">




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
