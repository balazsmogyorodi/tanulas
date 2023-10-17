@foreach ($lessons as $lesson){
         <form action = "/api/Lessons/{{$lesson->id}}" method="post">
            {{csrf_field()}}
        {{method_field('GET')}}
         <div class="form-group" >
            <input type="submit"value="{{$lesson->status}}">
         </div>
 </form>
 }@endforeach