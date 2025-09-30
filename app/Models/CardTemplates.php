<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardTemplates extends Model
{
    protected $fillable = [
        'title', 'slug', 'thumbnail', 'category', 'description', 'template_data', 'seo_title', 'seo_description', 'seo_keywords', 'use_count'
    ];

    public function setTemplateDataAttribute($value) {
        $this->attributes['order_config'] = json_encode($value);
    }
	public function getTemplateDataAttribute($value) {
		return json_decode($value, true);
    }
}
