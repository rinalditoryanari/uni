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
//        'firstName',
//        'lastName',
        'namaAyah',
        'namaIbu',
        'tmpLahir',
        'tglLahir',
        'phone',
        'photo',
        'jns_kelamin',
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
