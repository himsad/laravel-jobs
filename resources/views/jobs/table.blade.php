<div class="table-condensed">

    <table class="table table-hover" id="jobs-table">
        <thead>
            <tr>
           
                <th></th>
              


                @if(Auth::check())
             

                     <th colspan="3"></th>
               
                @endif
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
                <span class="small text-muted">
                    <i class="glyphicon glyphicon-map-marker"></i>
                    {!! $job->work_type !!} | {!! $job->job_type !!}</span>


                <br />
                <i class="glyphicon glyphicon-th text-muted"></i>
                
                @if(Auth::check()  && (Auth::user()->id == $job->user_id || Auth::user()->id == Auth::user()->role_id < 3 ))

                <a href="/user/{!! $job->user['id'] !!}" class="text-muted small"> 
                     {!! $job->user['name'] !!}</a>
                     |
                @endif

                        <a href="/organisations/{!! $job->organisation['id'] !!}" class="text-muted small">
                           | {!! $job->organisation['name'] !!}</a>   

                        <a href="/countries/{!! $job->country_id !!}" class="text-muted small">| {!! $job->country['name'] !!} </a>

            </td>

        
 


            @if(Auth::check()  && (Auth::user()->id == $job->user_id || Auth::user()->id == Auth::user()->role_id < 3 ))
         
            
       
            
                <td>


                    <span class="small text-muted">{!! $job->status !!}</span>
                    
                    
                    <div class='btn-group'>
                        
                        <a href="{!! route('jobs.edit', [$job->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', 
                        ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 
                        'onclick' => "return confirm('Are you sure you want delete job listing?')"]) !!}
                    </div>
                    {!! Form::close() !!}

                   
                </td>
                 @endif
            </tr>
        @endforeach

        </tbody>
    </table>
</div>
