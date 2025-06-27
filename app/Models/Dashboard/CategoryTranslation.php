<?php

namespace App\Models\Dashboard;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;



    # -------------------- THE TABLE ASSOCIATED WITH THE MODEL ------------------- #
    protected $table = 'category_translations';


    # ----------------- THE ATTRIBUTES THAT ARE MASS ASSIGNNABLE ----------------- #
    protected $guarded = [];


    # -------------------------------- UPLOAD PATH ------------------------------- #
    const UPLOADPATH = 'images/';

    # ------------------------------- UPLOAD FIELDS ------------------------------ #
    const UPLOADFIELDS = [];
    # ----------------------------------- CASTS ---------------------------------- #
    protected $casts = [
        //fields to cast
    ];
}


##----------------------------------------RELATIONSHIPS

##----------------------------------------ATTRIBUTES

##----------------------------------------CUSTOM FUNCTIONS

##----------------------------------------SCOPS

##----------------------------------------ACCESSORS AND MUTATORS