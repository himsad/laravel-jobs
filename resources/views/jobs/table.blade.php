<div class="table-responsive">
    <table class="table" id="jobs-table">
        <thead>
            <tr>
           
                <th>Title</th>
              

                <th>Work Type</th>
            
                <th>Status</th>
              
               
                <th colspan="3">    </th>
            </tr>
        </thead>
        <tbody>
        @foreach($jobs as $job)
            <tr>
               
            <td>
                <a href="{!! route('jobs.show', [$job->id]) !!}" class="lead text-bold">
            
                    {!! $job->title !!}
                    </a>


                <br />
                <a href="/user/{!! $job->user['id'] !!}" class="text-muted small">  {!! $job->user['name'] !!}</a>
                        
                        <a href="/organisations/{!! $job->organisation['id'] !!}" class="text-muted">
                           | {!! $job->organisation['name'] !!}</a>   

                        <a href="/countries/{!! $job->country_id !!}" class="text-muted small">| {!! $job->country['name'] !!} </a>

            </td>

        
 
            <td>{!! $job->work_type !!} | {!! $job->job_type !!}</td>
         
            <td>{!! $job->status !!}</td>
       
            
                <td>
                    {!! Form::open(['route' => ['jobs.destroy', $job->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        
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
