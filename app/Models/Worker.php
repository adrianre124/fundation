<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'position',
        'picture',
        'description',
    ];

    public function delete()
    {
        $filePath = public_path('storage/' . $this->picture);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        parent::delete();
    }
}
