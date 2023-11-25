<div>
    Home View
</div>

@foreach($users as $user)
    <h3>This is user {{$user['fname']}} {{$user['lname']}}</h3>
@endforeach
