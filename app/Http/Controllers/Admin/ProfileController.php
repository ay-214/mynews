<?php
//PHP/Laravel 08 課題４artisanを使って、Admin/ProfileControllerを作成しましょう

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/*PHP/Laravel14 課題７ */
use App\Models\Profile;

class ProfileController extends Controller
{
    //viewを追記
    public function add()
    {
        return view('admin.profile.create');
    }
    
    //createを追記
    /*PHP/Laravel14 課題７続き */
    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);
        $profile = new Profile;
        $form = $request->all();

        unset($form['_token']);
        unset($form['image']);

        $profile->fill($form);
        $profile->save();
        
        return redirect('admin/profile/create');
    }

    //editを追記
    public function edit()
    {
        return view('admin.profile.edit');
    }
    
    //updateを追記
    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
