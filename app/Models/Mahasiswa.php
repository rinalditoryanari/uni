<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nim',
//        'first_name',
//        'last_name',
        'nama_ayah',
        'nama_ibu',
        'tempat_lahir',
        'tanggal_lahir',
        'phone',
        'photo',
        'jenis_kelamin',
        'alamat',
    ];

    /*
     * Relationship other model to User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
