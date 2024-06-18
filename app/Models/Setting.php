<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Setting extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = ['name', 'image', 'description', 'linkedin', 'phone', 'email', 'github'];

    public function registerMediaConversions(?Media $media = null): void
    {

        $this->addMediaConversion('inMainIndex')
            ->width(368)
            ->height(232)
            ->sharpen(10);
        $this->addMediaConversion('inSinglePage')
            ->width(750)
            ->height(350);
    }
}
