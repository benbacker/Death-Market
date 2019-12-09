<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_model;

class Product extends Controller
{
    public function getproduct($id,Product_model $model){
        $data = $model->getproduct_model(array('user_fingerprint'=>$id));
        $json = json_encode($data);
        return $json;
    }
}
