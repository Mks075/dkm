<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Backend\LogoLeftModel;
use Auth;


class LogoLeftController extends Controller
{
    public function LogoLeftView(){
        $data['countLogo'] = LogoLeftModel::count();
        
        $data['allData'] = LogoLeftModel::all();
        return view('Backend.LogoLeft.LogoLeftViewPage',$data);
    }
    public function LogoLeftAdd(){
        return view('Backend.LogoLeft.LogoLeftAddPage');
    }
    public function LogoLeftStore(Request $req){
        $data = new LogoLeftModel();
        $data->created_at = date('Y-m-d H:i:s');
        if ($req->file('image')) {
            $file = $req->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('img'),$fileName);
            $data['imageLeft'] = $fileName;
        }
        $data->save();
        return redirect()->route('logoLeft.view');
    }

    public function userUpdate(Request $req , $id){
        $data = User::find($id);
        $data->image = $req->image;
        if ($req->file('image')) {
            $file = $req->file('image');
            @unlink(public_path('img'.$data->image));
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
