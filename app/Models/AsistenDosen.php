<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsistenDosen extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nik',
//        'first_name',
//        'last_name',
        'phone',
        'jenis_kelamin',
        'alamat'
    ];

    /*
     * Relationship other model to User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
