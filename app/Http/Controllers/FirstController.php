<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;
use App\Category;
use App\Brand;
use App\Subcategory;
use App\Order;
use Auth;

class FirstController extends Controller
{
    public function index($value='')
   {

   	$items=Item::all();
      $flasitems=Item::orderBy('created_at','desc')->get();
   	$categories=Category::all();
   	$brands=Brand::all();
   	//$subcategories=Subcategory::all();

   	return view('index',compact('items','brands','categories'));
   }

   public function cart($value='')
   {
     // $categories = Category::orderBy('id', 'desc')->get();
     //    $subcategories = Subcategory::orderBy('id', 'desc')->get();
     //    $brands = Brand::all();
     //    $items = Item::all();
     //    return view('frontend.shoppingcart', compact('categories', 'subcategories', 'brands', 'items'))
   	return view('frontend.cart');
   }

   public function itemdetail($value='')
   {
      // $categories = Category::orderBy('id', 'desc')->get();
      //   $subcategories = Subcategory::orderBy('id', 'desc')->get();
      //   $brands = Brand::all();
      //   $items = Item::take(4)->get();
      //   $item_detail = Item::find($id);
      //   return view('frontend.itemdetail',compact('categories','subcategories','brands','items'));
       return view('frontend.itemdetail');
   }

   public function filter($id)
  {
    $category = Category::find($id);
    $subcategories=$category->subcategory;
    
    return view('frontend.filter',compact('category','subcategories'));
  }

  public function orderhistory($value='')
    {
        //$categories = Category::orderBy('id', 'desc')->get();
        //$subcategories = Subcategory::orderBy('id', 'desc')->get();
        //$brands = Brand::all();
        //$items = Item::all();

        $orders = Order::where('user_id',Auth::id())->orderBy('id','desc')->get();
        return view('frontend.orderhistory',compact('orders'));

        // return view('frontend.orderhistory',compact('categories','subcategories','brands','items','orders'));
    }
}
