@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Testing Download PDF</div>

                <div class="panel-body">
                    <a href={{route('test')}} class="btn btn-sm btn-primary">Download PDf</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
