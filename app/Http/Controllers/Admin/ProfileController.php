<?php
//PHP/Laravel 08 課題４artisanを使って、Admin/ProfileControllerを作成しましょう

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //課題５ Admin/ProfileControllerに、以下のadd, create, edit, update それぞれのActionを追加してみましょう
    //viewを追記
    public function add()
    {
        return view('admin.profile.create');
    }
    
    //createを追記
    public function create()
    {
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
