<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function insert(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $image = $request->file('image')->getClientOriginalName();



       $request->image->move(public_path('image'), $image);
$stu = new student();
$stu -> name = $name;
$stu -> email = $email;
$stu -> image = $image;
$stu -> save();
return redirect('/');
    }

    function show( ){
        $sdata  = student::all();
        return view('insertRead', ['data' => $sdata]);
    }



    function update(Request $request){
        $id = $request->get('id');
     $editname = $request->get('editname');
        $editemail = $request->get('editemail');
        if($request->get('edit') == 'Edit'){
            return view('updatestd',['eid'=>$id,'editname'=>$editname, 'editemail'=>$editemail]);
        }else{
            $std = student::find($id);
            $std->delete();
        }
       return redirect('/');
    }

    // function Edit(Request $request){
    //     $ID = $request->get('id');
    //     $Name = $request->get("updatename");
    //     $Email = $request->get("updateemail");
    //     $Image = $request->get("updateimage");
    //     $stu =  student::find($ID);
    //     $stu -> name = $Name;
    //     $stu -> email = $Email;
    //     $stu -> image = $Image;
    //     $stu -> save();
    //     return redirect('/');
    // }


    function Edit(Request $request) {

        $ID = $request->get('id');
        $Name = $request->get("updatename");
        $Email = $request->get("updateemail");
        $Image = $request->get("updateimage");

        $stu = student::find($ID);

        if ($stu !== null) {
            $stu->name = $Name;
            $stu->email = $Email;
            $stu->image = $Image;
            $stu->save();
            return redirect('/');
        } else {
            // handle error when student record with specified ID is not found
            return redirect()->back()->with('error', 'Student record not found.');
        }
    }

}
