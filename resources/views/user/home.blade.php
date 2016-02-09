<html>
<body>
@foreach($users as $user)
    <a href="{{action('mycontroller@show',[$user->id])}}">{{$user->name}}</a><br>
    @endforeach

</body>
</html>