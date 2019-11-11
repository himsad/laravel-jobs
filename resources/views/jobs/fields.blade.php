

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


<div class="form-group col-sm-6">
  <label for="work_type">Work type</label>
  <select class="form-control" id="work_type" name="work_type">
    <option value="{{ $job->work_type }}">{{ $job->work_type }}</option>
    <option value="full time"> remote </option>
    <option value="part time"> onsite </option>
    <option value="remote and onsite"> remote and onsite </option>
    
  </select>
</div>


<div class="form-group col-sm-6">
  <label for="job_type">Job type</label>
  <select class="form-control" id="job_type" name="job_type">
    <option value="{{ $job->job_type }}">{{ $job->job_type }}</option>
    <option value="full time">full time</option>
    <option value="part time">part time</option>
    
  </select>
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
  <label for="status">Status</label>
  <select class="form-control" id="status" name="status">
    <option value="{{ $job->status }}">{{ $job->status }}</option>
    <option value="active "> Active </option>
    <option value="paused"> Paused </option>
  
    
  </select>
</div>



<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobs.index') !!}" class="btn btn-default">Cancel</a>
</div>
