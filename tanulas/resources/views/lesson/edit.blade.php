<form action="/api/Lessons/{{$lesson->lesson_id}}" method="post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <input type="text" name="status" placeholder="Status">
    <select name="kod_nev" placeholder="Kód neve">
    @foreach ($lessons as $lesson){
          <option value="{{$subject->id}}"
          {{$user->id == $lesson->subject_id ? 'selected': ''}}
          >{{$subject->name}}</option>
        }@endforeach
    </select>
    @foreach ($lessons as $lesson){
          <option value="{{$user->id}}"
          {{$user->id == $lesson->user_id ? 'selected': ''}}
          >{{$user->name}}</option>
        }@endforeach
    </select>
    <select name="satus" placeholder="Status">
        <option value=1
        <?php echo $lesson->status == 1 ? 'selected' : '' ?>>
        Open</option>
        <option value=0
        <?php echo $lesson->status == 0 ? 'selected' : '' ?>>
        Closed</option>
    </select>
    <input type="submit" value="ok">
</form>