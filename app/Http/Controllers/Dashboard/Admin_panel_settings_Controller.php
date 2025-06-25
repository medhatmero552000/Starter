<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\shippingRequest;
use App\Models\Dashboard\Admin_panel_setting;
use App\Models\Dashboard\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class Admin_panel_settings_Controller extends Controller
{
   public function index()
   {
      return view('dashboard.index');
   }

   public function editshipping($type)
   {

      switch ($type) {
         case 'free':
            $data = Setting::where('key', 'free_shipping_label')->first();
            break;
         case 'local':
            $data = Setting::where('key', 'local_shipping_label')->first();
            break;
         case 'outer':
            $data = Setting::where('key', 'outer_shipping_label')->first();
            break;
         case 'international':
            $data = Setting::where('key', 'international_shipping_label')->first();
            break;
         default:
            $data = Setting::where('key', 'free_shipping_label')->first();
            break;
      }
      return view('dashboard.settings.index', get_defined_vars());
      // return $data;

      //=================== Using if statment ===============
      // if ($type === 'free') {
      //    $data = Setting::where('key', 'free_shipping_label')->first();
      // } elseif ($type === 'local') {
      //    $data = Setting::where('key', 'local_shipping_label')->first();
      // } elseif ($type === 'outer') {
      //    $data = Setting::where('key', 'outer_shipping_label')->first();
      // } elseif ($type === 'international') {
      //    $data = Setting::where('key', 'international_shipping_label')->first();
      // } else {
      //    $data = Setting::where('key', 'free_shipping_label')->first();
      // }
      // return $data;
   }

   public function updateshipping(shippingRequest $request, $id)
   {
      try {
         DB::beginTransaction(); // بداية الترانزكشن
         $data = Setting::findOrFail($id);
         $validated = $request->validated();
         $validated['is_active'] = $request->has('is_active') ? 1 : 0;
         $data->update($validated);
         DB::commit(); // حفظ التعديلات فعليًا
         Alert::toast('تم الحفظ بنجاح', 'success'); // 👈 توست ناجح
         return redirect()->back();
      } catch (\Exception $e) {
         DB::rollBack(); // تراجع عن أي تغيير

         return redirect()->back();
            Alert::toast('لم يتم الحفظ  ', 'error'); // 👈 توست ناجح
   }
}
}