<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minum extends Model
{
    use HasFactory;

    protected $visible = ['cover', 'nama', 'deskripsi', 'bahan', 'caramembuat'];
    protected $fillable = ['cover', 'nama', 'deskripsi', 'bahan', 'caramembuat'];
    public $timestamps = true;

    public function cover()
    {
        if ($this->cover && file_exists(public_path('images/minum/' . $this->cover))) {
            return asset('images/minum/' . $this->cover);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteCover()
    {
        if ($this->cover && file_exists(public_path('images/minum/' . $this->cover))) {
            return unlink(public_path('images/minum/' . $this->cover));
        }

    }
}
