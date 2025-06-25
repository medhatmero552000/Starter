<?php

namespace App\Models\Dashboard;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use Translatable;
    use HasFactory;

    // protected $translationModel = setting_translations::class;
    protected $translationModel = SettingTranslation::class;
    # -------------------- THE TABLE ASSOCIATED WITH THE MODEL ------------------- #
    protected $table = 'settings';
    protected $with = ["translations"];
    public $translatedAttributes = ['store_name', 'value']; // 👈 حط أسماء الأعمدة القابلة للترجمة هنا
    # ----------------- THE ATTRIBUTES THAT ARE MASS ASSIGNNABLE ----------------- #
    protected $guarded = [];


    # -------------------------------- UPLOAD PATH ------------------------------- #
    const UPLOADPATH = 'images/';

    # ------------------------------- UPLOAD FIELDS ------------------------------ #
    const UPLOADFIELDS = [];

    # ----------------------------------- CASTS ---------------------------------- #
    protected $casts = [
        'is_translatable' => 'boolean',
    ];
}


##----------------------------------------RELATIONSHIPS

##----------------------------------------ATTRIBUTES

##----------------------------------------CUSTOM FUNCTIONS

##----------------------------------------SCOPS

##----------------------------------------ACCESSORS AND MUTATORS