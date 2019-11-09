@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Job
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('jobs.show_fields')
                    <a href="{!! route('jobs.index') !!}" 
                    class="btn btn-danger"> 
                    <i class="glyphicon glyphicon-hand-up"></i> 
                    Apply for this job </a>

                    <p>
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
                            <div class="addthis_inline_share_toolbox"></div>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
