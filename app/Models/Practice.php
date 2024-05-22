<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 *
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 * @property string $description
 * @property string|null $thumbnail
 * @property string $duties
 * @property string $tools
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PracticeFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Practice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Practice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Practice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereDuties($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereTools($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Practice whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Practice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function delete()
    {
        $filePath = public_path('storage/' . $this->thumbnail);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        parent::delete();
    }
}
