<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\passwordRequest;
use App\Http\Requests\ProfileRequest;
use App\Models\dashboard\auth\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;
use RealRashid\SweetAlert\Facades\Alert;

class AdminProfileController extends Controller
{
  public function editprofile()
  {
    $data = auth('admin')->user();
    return view('dashboard.profile.index', get_defined_vars());
  }
  public function updateprofile(ProfileRequest $request)
  {
    try {
      DB::beginTransaction(); // بداية الترانزكشن
      $admin = Admin::findOrFail(auth('admin')->user()->id);
     $admin->update($request->validated());
      DB::commit(); // حفظ التعديلات فعليًا
      Alert::toast('تم الحفظ بنجاح', 'success'); // 👈 توست ناجح
      return redirect()->back();
    } catch (\Throwable $th) {
      DB::rollBack(); // تراجع عن أي تغيير
      Alert::toast('لم يتم الحفظ  ', 'error'); // 👈 توست ناجح
      return redirect()->back();
    }
  }
  public function updatepassword(PasswordRequest $request)
  {
    try {
      DB::beginTransaction(); // بداية الترانزكشن
      $admin = Admin::findOrFail(auth('admin')->user()->id);
      $admin->update([
            'password' => Hash::make($request->password),
        ]); 
      DB::commit(); // حفظ التعديلات فعليًا
      Alert::toast('تم نعديل كلمة المرور بنجاح', 'success'); // 👈 توست ناجح
      return redirect()->back();
    } catch (\Throwable $th) {
      DB::rollBack(); // تراجع عن أي تغيير
      Alert::toast('لم يتم الحفظ  ', 'error'); // 👈 توست ناجح
      return redirect()->back();
    }
  }
}
