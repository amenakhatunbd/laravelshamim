@extends('layouts.master')

@section('content')
    <div class="page-heading">
        <h1>Edit Division #{{ $division->id }}</h1>
    </div>
    <div class="page-body">

        @include('include.show_flash_error_message')

        <div class="row clearfix">

            <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Division</div>
                    <div class="panel-body p-b-25">

                        <form method="POST" action="{{ route('division.update', $division->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('page.division.form', ['submitButtonText' => 'Update'])

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
