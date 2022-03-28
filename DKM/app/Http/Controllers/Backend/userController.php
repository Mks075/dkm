<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class userController extends Controller
{
    public function userView(){
        // $data['countLogo'] = userModel::count();
        
        $data['allData'] = User::all();
        return view('Backend.user.userViewPage',$data);
        // dd('ok');
    }
    public function userAdd(){
        return view('Backend.user.userAddPage');
    }
    public function userStore(Request $req){
        $this->validate($req,[
            'userType'=>'required',
            'name'=>'required',
            'email'=>'required|unique:users,email',
            'Pass1'=>'required',
        ]);
        $data = new User();
        $data->userType = $req->userType;
        $data->name = $req->name;
        $data->email = $req->email;
        // $data->password = bcsqrt($req->Pass1);
        $data->password = bcrypt($req->Pass1);
        $data->save();
        return redirect()->route('user.view');
    }
    public function userEdit(Request $req ,$id){
        $editData = User::find($id);
        if ($req->file('image')) {
            $file = $req->file('image');
            @unlink(public_path('img'.$data->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('img'),$fileName);
            $data['image'] = $fileName;
        }
        return view('Backend.user.userEditPage',compact('editData'))->with('success','Data Inserted Successfully');
    }
    public function userUpdate(Request $req , $id){
        $data = User::find($id);
        $data->userType = $req->userType;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->mobile = $req->mobile;
        $data->address = $req->address;
        $data->gender = $req->gender;
        $data->image = $req->image;
        if ($req->file('image')) {
            $file = $req->file('image');
            @unlink(public_path('upload_img'.$data->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload_img'),$fileName);
            $data['image'] = $fileName;
        }
        $data->status = Auth::user()->id;
        $data->updated_at = date('Y-m-d H:i:s');
        $data->save();
        return redirect()->route('user.view')->with('success','Data Updated successfully');
    }
    public function userDelete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('user.view')->with('success','Data Deletd Successfully');
    }
}
