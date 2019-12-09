<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product_model extends Model
{
    protected $table = 'product';
    public function getproduct_model($where = null){
       return DB::table('product')->where($where)->get();
    }
}
