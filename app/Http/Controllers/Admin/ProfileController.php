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
        \Debugbar::info("確認したい変数など");
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
    public function edit(Request $request)
    {
        $profile = Profile::find($request->id);
        if (empty($profile)) {
            abort(404);
        }
        return view('admin.profile.edit', ['profile_form' => $profile]);
    }
    
    //updateを追記
    //PHP/Laravel 16 課題１
    public function update(Request $request)
    {
        $this->validate($request, Profile::$rules);
        $profile = Profile::find($request->id);
        $profile_form = $request->all();
        unset($profile_form['_token']);

        $profile->fill($profile_form)->save();

        return redirect('admin/profile/edit?id=' . $request->id);
    }

    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $profile = profile::find($request->id);

        // 削除する
        $profile->delete();

        return redirect('admin/profile/');
    }
}