<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class GroupPost extends Model
{
    protected $table = 'cms_group_post';
    protected $primaryKey = 'id';
    protected $fillable = [
        'group_name',
        'group_slug',
        'group_special',
        'group_display'
    ];

    // liên kết khóa chính -> ngoại
    public function check_type() {
        return $this->hasMany('App\Models\GroupType','id','type_group');
    }
    public function check_post() {
        return $this->hasMany('App\Models\Post','id','post_group');
    }
}
