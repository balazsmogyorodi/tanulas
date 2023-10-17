<form action="/api/Lessons" method="post"> 
    {{csrf_field()}} 
    <input type="text" name="status" placeholder="Státusz">
    <select name="subject_id" placeholder="Subject_id">
        @foreach ($subjects as $subject) <option
        value="{{$subject->subejct_id}}">{{$subject->name}}</option>
        @endforeach
        <select name="user_id" placeholder="User_id">
        @foreach ($users as $user)
        <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
    </select>
    <select name="status" placeholder="status"> <option value="1">Open</option> <option value="0">Closed</option>
        </select> <input type="submit" value="Ok"> </form>