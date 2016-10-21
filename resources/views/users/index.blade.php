{{--@section('main')--}}
<?php echo('hello'); ?>
    {{--<h1>All Users</h1>--}}
    {{--@foreach ($users as $user)--}}
        {{--<tr>--}}
            {{--<td>{{ $user->username }}</td>--}}
            {{--<td>{{ $user->password }}</td>--}}
            {{--<td>{{ $user->email }}</td>--}}
            {{--<td>{{ $user->phone }}</td>--}}
            {{--<td>{{ $user->name }}</td>--}}
        {{--</tr>--}}
        {{--@endforeach--}}
    {{--<p>{{ link_to_route('users.create', 'Add new user') }}</p>--}}

    {{--@if ($users->count())--}}
        {{--<table class="table table-striped table-bordered">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>Username</th>--}}
                {{--<th>Password</th>--}}
                {{--<th>Email</th>--}}
                {{--<th>Phone</th>--}}
                {{--<th>Name</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}

            {{--<tbody>--}}

                    {{--<td>{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}</td>--}}
                    {{--<td>--}}
                        {{--{{ Form::open(array('method'--}}
              {{--=> 'DELETE', 'route' => array('users.destroy', $user->id))) }}--}}
                        {{--{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}--}}
                        {{--{{ Form::close() }}--}}
                    {{--</td>--}}


            {{--</tbody>--}}

        {{--</table>--}}
    {{--@else--}}
        {{--There are no users--}}
    {{--@endif--}}

{{--@stop--}}