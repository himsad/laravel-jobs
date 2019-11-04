<div class="table-responsive">
    <table class="table" id="jobs-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Title</th>
        <th>Skills Required</th>
        <th>Description</th>
        <th>Work Type</th>
        <th>Job Type</th>
        <th>Status</th>
        <th>Organisation Id</th>
        <th>Country Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($jobs as $job)
            <tr>
                <td>{!! $job->user_id !!}</td>
            <td>{!! $job->title !!}</td>
            <td>{!! $job->skills_required !!}</td>
            <td>{!! $job->description !!}</td>
            <td>{!! $job->work_type !!}</td>
            <td>{!! $job->job_type !!}</td>
            <td>{!! $job->status !!}</td>
            <td>{!! $job->organisation_id !!}</td>
            <td>{!! $job->country_id !!}</td>
                <td>
                    {!! Form::open(['route' => ['jobs.destroy', $job->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('jobs.show', [$job->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('jobs.edit', [$job->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
