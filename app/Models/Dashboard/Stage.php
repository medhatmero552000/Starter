<?php

namespace App\Models\Dashboard;

use App\Models\Dashboard\Auth\Admin;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stage extends Model
{
    use HasFactory, SoftDeletes, Translatable;

    /**
     * اسم الجدول المرتبط بالموديل.
     */
    protected $table = 'stages';

    /**
     * تحميل الترجمة بشكل تلقائي مع كل استعلام.
     */
    protected $with = ['translations'];

    /**
     * الأعمدة القابلة للترجمة.
     */
    public $translatedAttributes = ['name', 'desc'];

    /**
     * الحقول القابلة للإدخال الجماعي.
     */
    protected $guarded = [];

    /**
     * التحويل التلقائي لأنواع الحقول.
     */
    protected $casts = [
        'is_active' => 'boolean',
    ];


public function updatedByAdmin()
{
    return $this->belongsTo(Admin::class, 'updated_by');
}

public function createdByAdmin()
{
    return $this->belongsTo(Admin::class, 'created_by');
}

}
