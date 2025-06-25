<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Admin_panel_setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin_panel_settings_Controller extends Controller
{
   public function index()
   {
   
      return view('dashboard.settings.index', get_defined_vars());
   }
}
