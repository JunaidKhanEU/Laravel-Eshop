<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // show all products
    public function index () {
        return view('products.index'); 
    }

    // create form for a new product
    public function create () {
    return 'A Form to create a new Product FROM CONTROLLER';
    }

    // store product to DB
    public function store () {
      return 'store product in DB FROM Controller' ;  
    }
    
    // show single product
    public function show ($product){
        return view('products.show');
    }

    // edit a selected single product 
    public function edit ($product) {
    return ' showing form to edit the Product FROM CONTROLLER '.$product;
    }

    // update edited single product to DB
    public function update ($product) {
     return 'update product in DB FROM Controller' ;  
    }

    // delete selected single product
    public function destroy ($product) {
        return 'delete product from DB FROM Controller' ;  
    }
}
