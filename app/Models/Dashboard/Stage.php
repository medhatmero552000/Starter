<?php

namespace App\Models\Dashboard;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Models\Dashboard\Auth\Admin;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stage extends Model
{
    use HasFactory, SoftDeletes, Translatable, HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name', 'desc')
            ->saveSlugsTo('slug');
    }
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
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
