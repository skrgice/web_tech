@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-offset-0">
                <div class="panel panel-default">

                    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
                          action="{{ url('/index') }}">
                        <div class="panel-heading">Anzeigen</div>
                        <hr>
                        <div class="panel-heading">Suchen nach


                            <input type="search" name="text" placeholder="Was suchen Sie?">
                            <select name="category">
                                <option selected disabled>Kategorie?</option>
                                <option>Immobilien</option>
                                <option>Auto</option>
                                <option>Bücher</option>
                                <option>Marktplatz</option>
                            </select>
                            <select name="state">
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
                            <input type="submit" action='{{url('/index')}}' name="suche" value="Suche">
                            {{csrf_field()}}
                        </div>
                        <hr>

                    @foreach($ads as $ad)
                        <!-- Project One -->
                        <div class="row">
                            <div class="col-md-7">
                                <a href="#">
                                    <img class="img-responsive" src="uploads/ad/{{ $ad->image }}" alt="">
                                </a>
                            </div>
                            <div class="col-md-5">
                                <h3>{{$ad->titel}}</h3>
                                <h4>Preis: {{$ad->price}} €</h4>
                                <h4>Kategorie: {{$ad->category}}</h4>
                                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>--}}
                                <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                            </div>
                        </div>
                        <!-- /.row -->

                        <hr>
                    @endforeach



                        <div>




                        </div>


                    </form>


                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
