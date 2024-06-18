<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Project extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $fillable = [
        'name',
        'image',
        'description',
        'link',
    ];

    public function registerMediaConversions(?Media $media = null): void
    {

        $this->addMediaConversion('inMainIndex');

        $this->addMediaConversion('inSinglePage')
            ->width(750)
            ->height(350);
    }
}
