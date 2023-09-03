<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDataModel;

class userDataController extends Controller
{

public function index(){
    // return view('form');
    $userDeatils=UserDataModel::all();

    return response()->json($userDeatils);
}

public function store(Request $request){

        $user=new UserDataModel;
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->phone=$request['phone'];
        $user->address=$request['address'];
        $user->password=$request['password'];
        $user->gender=$request['gender'];

        $user->save();
        // return redirect('/api/user');
        return response()->json([
            "message"=>"Account Succesfully Cretaed"
        ],201);

      


}

// public function show(){
//     $userDeatils=UserDataModel::all();
//     $data=compact('userDeatils');

//     return view('dashboard')->with($data);
// }
public function show($id){
    $user=UserDataModel::find($id);
    if(!is_null($user)){
        return response()->json($user);
    }
    else{
        return response()->json([
         "message"=>"Account Not Found"
        ],404);
    }
}


public function destroy($id){
    $user=UserDataModel::find($id);

    if(!is_null($user)){
        $user->delete();
        return response()->json([
            "message"=>"records deleted.."
        ],202);
    }
    else{
        return response()->json([
            "message"=>"Account Not Found"
           ],404);
    }
    
}

// public function edit($id){
//     $user=UserDataModel::find($id);

//     if(is_null($user)){
//         return redirect('/api/user');
//     }
//     else{
//         $data=compact('user');
//         return view('form')->with($data);
//     }
// }

// after edit data save in database by using update method
public function update($id,Request $request){
    $user=UserDataModel::find($id);

    if(!is_null($user)){
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->phone=$request['phone'];
        $user->address=$request['address'];
        $user->password=$request['password'];
        $user->gender=$request['gender'];

        $user->update();

        return response()->json([
            "message"=>"Account Updated Succesfully..."
           ],202);
    }else{
        return response()->json([
            "message"=>"Account Not Found"
           ],404);
    }
       
}

}
