<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StageTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    # -------------------- اسم الجدول المرتبط بالموديل ------------------- #
    protected $table = 'stage_translations'; 

    # ----------------- الحقول القابلة للإدخال الجماعي ------------------- #
    protected $guarded = []; 

    # -------------------------- تحويل أنواع الحقول ---------------------- #
    protected $casts = [
        'desc' => 'string', 
    ];

    ##---------------------------------------- RELATIONSHIPS

    ##---------------------------------------- ATTRIBUTES

    ##---------------------------------------- CUSTOM FUNCTIONS

    ##---------------------------------------- SCOPES

    ##---------------------------------------- ACCESSORS AND MUTATORS
}
