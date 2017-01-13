@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Anzeige aufgeben</div>
                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/insert_ad') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-lg-1 control-label">Titel:</label>
                                <div class="col-lg-10" style="padding-left: 50px">
                                    <input type="text" class="form-control" name="titel" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-1 control-label">Kategorie:</label>
                                <div class="col-lg-10" style="padding-left: 50px">
                                    <select class="col-lg-4 control-label" name="category">
                                        <option selected disabled>Kategorie?</option>
                                        <option>Immobilien</option>
                                        <option>Auto</option>
                                        <option>Bücher</option>
                                        <option>Marktplatz</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-1 control-label">Preis:</label>
                                <div class="col-lg-10" style="padding-left: 50px">
                                    <input type="text" class="form-control" name="price" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-1 control-label" class="text-left">Bundesland:</label>
                                <div class="col-lg-10" style="padding-left: 50px">
                                    <select class="col-lg-4 control-label" name="state">
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
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-1 control-label">PLZ:</label>
                                <div class="col-lg-10" style="padding-left: 50px">
                                    <input type="text" class="form-control" name="zip" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-1 control-label">Adresse:</label>
                                <div class="col-lg-10" style="padding-left: 50px">
                                    <input type="text" class="form-control" name="address" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-1 control-label">Nummer:</label>
                                <div class="col-lg-10" style="padding-left: 50px">
                                    <input type="text" class="form-control" name="number" value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-1 control-label">Email:</label>
                                <div class="col-lg-10" style="padding-left: 50px">
                                    <input type="text" class="form-control" name="email"
                                           value="{{ Auth::user()->email }}" readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-1 control-label">Name:</label>
                                <div class="col-lg-10" style="padding-left: 50px">
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}"
                                           readonly="readonly">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-1 control-label">Beschreibung:</label>
                                <div class="col-lg-10" style="padding-left: 50px">
                                <textarea rows="4" cols="91" name="description">
                                </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-1 control-label">Bild hochladen:</label>
                                <div class="col-lg-10" style="padding-left: 50px">

                                    <input type="file" name="file"/>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-1 control-label"></label>
                                <div class="col-lg-10" style="padding-left: 50px">
                                    <input type="submit" class="btn btn-default" value="Aufgeben"></input>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection