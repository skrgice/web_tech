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
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="titel" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-1 control-label">Titel:</label>

                        </div>


               </div>
            </div>
        </div>
    </div>
</div>
@endsection