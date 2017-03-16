<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     *
     */

    protected $primaryKey = 'ID';

    protected $table = "category";

    protected $fillable = [
        'ID',
        'Category',
        'Slug',
        'Content',
        'MediaIDs',
        'FeatureMedias',
        'ParentID',
        'IsDeleted',
        'CreatedAt',
        'CreatedBy',
        'UpdatedAt',
        'UpdatedBy',
        'IsHistory'
    ];


}
