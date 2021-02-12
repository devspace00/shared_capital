<h1>Update Member</h1>

<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['client_id']}}">
    <input type="text" name="fName" value="{{$data['fName']}}"> <br> <br>
    <input type="text" name="mName" value="{{$data['mName']}}"> <br> <br>
    <input type="text" name="lName" value="{{$data['lName']}}"> <br> <br>
    <input type="text" name="email" value="{{$data['email']}}"> <br> <br>
    <input type="text" name="username" value="{{$data['username']}}"> <br> <br>
    <input type="text" name="address" value="{{$data['address']}}"> <br> <br>
    <input type="text" name="gender" value="{{$data['gender']}}"> <br> <br>
    <input type="text" name="age" value="{{$data['age']}}"> <br> <br>
    <button type="submit">Update</button>
</form>