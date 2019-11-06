<div class="media">
        <div class="media-left">
            <span class="glyphicon glyphicon-folder-close"></span>
        </div>
        <div class="media-body">
          <h4 class="media-heading">{!! $job->title !!}</h4>
          <p> #{!! $job->id !!} </p>
          <p>{!! $job->skills_required !!} | </p>

        </div>
</div>

<!-- Work Type Field -->
<div class="form-group">
    {!! Form::label('work_type', 'Work Type:') !!}
    <p></p>
</div>

<!-- Job Type Field -->
<div class="form-group">
    {!! Form::label('job_type', 'Job Type:') !!}
    <p>{!! $job->job_type !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $job->status !!}</p>
</div>



<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>
    <a href="/users/{!! $job->user['id'] !!}">{!! $job->user['name'] !!} </a>

    </p>
</div>



<!-- Skills Required Field -->
<div class="form-group">
    {!! Form::label('skills_required', 'Skills Required:') !!}
   
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $job->description !!}</p>
</div>


<!-- Organisation Id Field -->
<div class="form-group">
    {!! Form::label('organisation_id', 'Organisation Id:') !!}
    <p>
        <a href="/organisations/{!! $job->organisation['id'] !!}">{!! $job->organisation['name'] !!} </a>
    </p>
</div>

<!-- Country Id Field -->
<div class="form-group">
    {!! Form::label('country_id', 'Country Id:') !!}
    <p>
        <a href="/countries/{!! $job->country['id'] !!}">{!! $job->country['name'] !!} </a>
    </p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $job->deleted_at !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $job->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $job->updated_at !!}</p>
</div>

