

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Skills Required Field -->
<div class="form-group col-sm-6">
    {!! Form::label('skills_required', 'Skills Required:') !!}
    {!! Form::text('skills_required', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
        <label for="organisation">My Organisations</label>
        <select class="form-control" id="organisation" name="organisation_id">
          <option value="{{ $job->organisation['id'] }}">{{ $job->organisation['name'] }}</option>
            @foreach($organisations as $organisation)

          <option value="{{ $organisation->id }}">{{ $organisation->name }}</option>
            @endforeach
        </select>
      </div>




<div class="form-group col-sm-6">
        <label for="country">Countries</label >
        <select class="form-control" id="organisation" name="country_id">
        
          <option value="{{ $job->country['id'] }}">{{ $job->country['name'] }}</option>
            @foreach($countries as $country)

          <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
      </div>


<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Work Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('work_type', 'Work Type:') !!}
    {!! Form::text('work_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Job Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('job_type', 'Job Type:') !!}
    {!! Form::text('job_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobs.index') !!}" class="btn btn-default">Cancel</a>
</div>
