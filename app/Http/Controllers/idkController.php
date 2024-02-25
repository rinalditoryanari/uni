<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;

class idkController extends Controller
{
    public function index()
    {
        dd(
//            Staff::factory()->create(['password' => '12354678']),
//            Staff::factory()->withPassword('12345678')->create()
Staff::first()->user
    );
//        User::factory()->count(50)->create(['password'=>'12345678']);

    }
}
