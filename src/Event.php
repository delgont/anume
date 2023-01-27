<?php

namespace Delgont\Anume;

use Illuminate\Database\Eloquent\Model;


//traits
use Delgont\Cms\Models\Concerns\Categorable;
use Delgont\Cms\Models\Concerns\Groupable;
use Delgont\Cms\Models\Concerns\Iconable;
use Delgont\Cms\Models\Concerns\HasComments;
use Delgont\Cms\Models\Concerns\HasLinks;
use Delgont\Cms\Models\Concerns\Searchable;
use Delgont\Cms\Models\Concerns\HasOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Event extends Model
{
    //
    use Categorable, Groupable, Iconable, SoftDeletes, HasComments, Searchable, HasLinks, HasOptions;

    protected $appends = ['url'];


    public function getUrlAttribute()
    {
        if ($this->slug) {
            return url($this->slug);
        }
        return null;
    }

    public function scopeToDay($query)
    {
        return $query->whereStartDate(today());
    }

    public function scopeUpComing($query)
    {
        return $query->where( 'start_date', '>', now() );
    }

}
