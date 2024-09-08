<?php
//PHP/Laravel 08 課題４artisanを使って、Admin/ProfileControllerを作成しましょう

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/*PHP/Laravel14 課題７ */
use App\Models\Plofile;

class ProfileController extends Controller
{
    //課題５ Admin/ProfileControllerに、以下のadd, create, edit, update それぞれのActionを追加してみましょう
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

        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $profile->image_path = basename($path);
        } else {
            $profile->image_path = null;
        }

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
