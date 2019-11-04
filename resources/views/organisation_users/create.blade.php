@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Organisation User
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'organisationUsers.store']) !!}

                        @include('organisation_users.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
