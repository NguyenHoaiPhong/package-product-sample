<?php

namespace Nhoma\Product\Controlers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;
use Nhoma\Product\Models\Product;

class ProductUserController extends Controller
{
    public $data = array();
    public function __construct() {

    }

    public function index(Request $request)
    {

        $obj_product = new Product();
        $products = $obj_product->get_products();
        $this->data = array(
            'request' => $request,
            'products' => $products
        );
        return view('product::product.index', $this->data);
    }

}