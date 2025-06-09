<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function index()
    {
        $Users = User::all();
        confirmDelete('Delete User!', 'Are you sure you want to delete this user?');
        return view('Dashboard.Users.index')->with(['Users' => $Users]);
    }
    public function Add()
    {
        return view('Dashboard.Users.Add');

    }
    public function Create(Request $request)
    {
        $request->validate([
            'FirstName' => 'required|string',
            'LastName' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string',
            'CartNumber' => 'nullable|numeric',
            'Role' => 'required|string|in:Admin,User',
        ]);

        User::create([
            'FirstName' => $request->FirstName,
            'LastName' => $request->LastName,
            'email' => $request->email,
            'password' => \Hash::make($request->password),
            'Role' => $request->Role,
            'Charge' => 0,
            'CartNumber' => $request->CartNumber,
        ]);

        Alert::success('User created successfully');


        return redirect()->route('Dashboard.Users.index');

    }

    public function Delete(int $ID)
    {
        $User = User::find($ID);
        $User->delete();
        Alert::success('User Deleted successfully');
        return redirect()->route('Dashboard.Users.index');

    }


    public function Setting()
    {
        return view('Dashboard.Users.Profile.index');
    }

    public function Update(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'TelegramUserID' => 'nullable|integer',
            'WalletAddress' => 'nullable|string|regex:/^(0x)?(?i:[0-9a-f]){40}$/|unique:users,WalletAddress,' . \Auth::id(),
            'PlatoID' => 'nullable|string',
            'password' => 'nullable|string',
            'Image' => 'nullable|file',

        ]);
        $User = \Auth::user();

        if($request->hasFile('Image')){
            $ProfileImage = $this->UploadImage($request->Image , 'Users/Profile');
        }else{
            $ProfileImage = $User->Image;
        }

        $User->update([
            'name' => $request->name,
            'TelegramUserID' => $request->TelegramUserID,
            'WalletAddress' => $request->WalletAddress,
            'PlatoID' => $request->PlatoID,
            'Image' => $ProfileImage,
        ]);

        if($request->has('password')){
            $password = \Hash::make($request->password);
            $User->update([
                'password' => $password,
            ]);
        }


        Alert::success('Profile updated successfully');


        return redirect()->route('Dashboard.Profile.Setting');
    }

}
