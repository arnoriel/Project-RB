<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resep extends Model
{
    use HasFactory;

    protected $visible = ['cover', 'nama', 'bahan', 'bumbu', 'bahancemplung', 'caramembuat'];
    protected $fillable = ['cover', 'nama', 'bahan', 'bumbu', 'bahancemplung', 'caramembuat'];
    public $timestamps = true;

    public function cover()
    {
        if ($this->cover && file_exists(public_path('images/resep/' . $this->cover))) {
            return asset('images/resep/' . $this->cover);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteCover()
    {
        if ($this->cover && file_exists(public_path('images/resep/' . $this->cover))) {
            return unlink(public_path('images/resep/' . $this->cover));
        }

    }
}