
<div class="media">
        <div class="media-left">
            <span class="glyphicon glyphicon-folder-close text-muted"></span>
        </div>
        <div class="media-body">
        <h4 class="media-heading">{!! $job->title !!} </h4>
        <p class="text-muted"> #{!! $job->id !!} | status: {!! $job->status !!} 
            | {!! $job->work_type !!} | {!! $job->job_type !!}
        </p>
          <p>

            <a href="/users/{!! $job->user['id'] !!}">{!! $job->user['name'] !!} </a> |

              
            | <a href="/organisations/{!! $job->organisation['id'] !!}">
                    {!! $job->organisation['name'] !!}</a>

                | <a href="/countries/{!! $job->country['id'] !!}">
                    {!! $job->country['name'] !!}
                  </a>
            </p>

          <p>{!! $job->skills_required !!} 
               </p>

        </div>
</div>

<div class="media">
        
        <div class="media-body">
          <h4 class="media-heading">Job Description</h4>
          <p class="text-muted">
               Created: {!! $job->created_at->format('D d M m Y') !!}
                </br>
                @if(!empty($job->updated_at))
                
                Last Update: {!! $job->updated_at->format('D d M m Y') !!}
                @endif
          </p>
          <p> {!! $job->description !!} </p> 
          
         
         
        </div>
      </div>



