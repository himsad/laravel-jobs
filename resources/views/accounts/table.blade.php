<div class="table-responsive">
    <table class="table" id="accounts-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Code</th>
        <th>Currency</th>
        <th>Phone Ext</th>
        <th>Flag</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($accounts as $account)
            <tr>
                <td>{!! $account->name !!}</td>
            <td>{!! $account->code !!}</td>
            <td>{!! $account->currency !!}</td>
            <td>{!! $account->phone_ext !!}</td>
            <td>{!! $account->flag !!}</td>
                <td>
                    {!! Form::open(['route' => ['accounts.destroy', $account->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('accounts.show', [$account->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('accounts.edit', [$account->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
