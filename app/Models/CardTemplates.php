<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardTemplates extends Model
{
    public function setTemplateDataAttribute($value) {
        $this->attributes['order_config'] = json_encode($value);
    }
	public function getTemplateDataAttribute($value) {
		return json_decode($value, true);
    }
}
