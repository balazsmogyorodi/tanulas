<?php

namespace App\Http\Controllers;

use App\Models\Lessons;
use App\Models\Subjects;
use App\Models\User;
use Illuminate\Http\Request;
use SplSubject;

class LessonsController extends Controller
{
    public function index(){
        $lessons = response()->json(Lessons::all());
        return $lessons;
    }
    public function show($id){
        $lessons = response()->json(Lessons::find($id));
        return $lessons;
    }
    public function destroy($id){
       Lessons::find($id)->delete();
    }
    public function store(Request $request){
        $lessson = new Lessons();
        $lessson->status = $request->status;
        $lessson->subject_id = $request->subject_id;
        $lessson->user_id = $request->user_id;
        $lessson->save();
    }
    
    public function update(Request $request, $id){
        $lessson = Lessons::find($id);
        $lessson->status = $request->status;
        $lessson->subject_id = $request->subject_id;
        $lessson->user_id = $request->user_id;
        $lessson->save();
    }
    
    public function newView(){
       $users = User::all();
       $subjects = Subjects::all();
       return view('lesson.new', ['users' => $users], ['subjects' => $subjects]);
    }
    
    public function editView($id){
        $user = User::all();
        $lesson = Lessons::find($id);
        return view('lesson.edit', ['users' => $user, 'lesson' =>$lesson]);
     }
    
     public function listView(){
        $lessons = Lessons::all();
        return view('lesson.list', ['lessons' => $lessons]);
     }
}
