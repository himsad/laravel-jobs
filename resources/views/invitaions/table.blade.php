<div class="table-responsive">
    <table class="table" id="invitaions-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Sender Contact</th>
        <th>Receiver User Id</th>
        <th>Organisation Id</th>
        <th>Job Id</th>
        <th>Interview Status</th>
        <th>Date Of Interview</th>
        <th>Invitation Note</th>
        <th>Employer Interview Note</th>
        <th>Jobseeker Post Interview Review</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($invitaions as $invitaion)
            <tr>
                <td>{!! $invitaion->user_id !!}</td>
            <td>{!! $invitaion->sender_contact !!}</td>
            <td>{!! $invitaion->receiver_user_id !!}</td>
            <td>{!! $invitaion->organisation_id !!}</td>
            <td>{!! $invitaion->job_id !!}</td>
            <td>{!! $invitaion->interview_status !!}</td>
            <td>{!! $invitaion->date_of_interview !!}</td>
            <td>{!! $invitaion->invitation_note !!}</td>
            <td>{!! $invitaion->employer_interview_note !!}</td>
            <td>{!! $invitaion->jobseeker_post_interview_review !!}</td>
                <td>
                    {!! Form::open(['route' => ['invitaions.destroy', $invitaion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('invitaions.show', [$invitaion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('invitaions.edit', [$invitaion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
