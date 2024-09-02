{{--PHP/Laravel 11 課題4 【応用】 プロフィール作成画面用に、resources/views/admin/profile/create.blade.php ファイルを作成し、3. で作成した profile.blade.phpファイルを読み込み、また プロフィールのページであることがわかるように titleとcontentを編集しましょう（ヒント: resources/views/admin/news/create.blade.php を参考にします）--}}
<!DOCTYPE html> 

@extends('layouts.profile')

@section('title', 'プロフィールタイトル')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィールタイトル</h2>
            </div>
        </div>
    </div>
@endsection




