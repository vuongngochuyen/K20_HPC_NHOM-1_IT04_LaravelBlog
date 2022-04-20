<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Tablebasic extends Model
{
    use HasFactory;
    protected $table='user';
    protected $fillable=[
        'name',
        'email',
        'password'
    ];
    public function getAllUser(){

        $tablebasic=DB::select('SELECT * FROM tablebasic ORDER BY STATUS DESC');
        return $tablebasic;
    }
    public function addUser($data){
        DB::insert('INSERT INTO user ( name,email,password) values (?, ?,?)', $data);
    }
}
