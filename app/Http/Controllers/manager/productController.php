<?php

namespace App\Http\Controllers\manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;
use App\category;
use App\unite;
use App\supplier;
use Illuminate\Support\Str;


class productController extends Controller
{

        public function view(){
          $all_product=product::latest()->get();
          return view('manager.product.view_product',compact('all_product'));
        }


        public function add(){
          $category=category::latest()->get();
          $unite=unite::latest()->get();
          $supplier=supplier::latest()->get();
          return view('manager.product.add_product',compact('category','unite','supplier'));
        }


        public function store(Request $request){
          $product=new product;
            $product['category_id']=$request->category_id;
            $product['supplier_id']=$request->supplier_id;
            $product['unite_id']=$request->unite_id;
            $product['product_name']=$request->product_name;
            $product['total_stock']=$request->total_stock;
            $product['product_status']=$request->product_status;
            $product['sell_quantity']=$request->sell_quantity;
            $product['Product_price']=$request->Product_price;


            //image upload start
            $path=$request->file('product_image')->store('/image');

            $image=$request->file('product_image');
                 if ($image){

                   $image_name=Str::random(20);
                   $ext=strtolower($image->getClientOriginalExtension());
                   $image_full_name=$image_name.'.'.$ext;
                   $upload_path='image/';
                   $image_url=$upload_path.$image_full_name;
                   $success=$image->move($upload_path,$image_full_name);
                       if ($success) {
                       $product['product_image']=$image_url;
                       $product->save();
                       return back();
                                     }
                          }



        }



        public function unactive($id){
          $unactive=product::find($id);
            $unactive['product_status']=0;
          $unactive->save();
          return back();
        }



        public function active($id){
          $active=product::find($id);
            $active['product_status']=1;
          $active->save();
          return back();
        }


        public function edite($id){
          $edite=product::find($id);
          $category=category::latest()->get();
          $unite=unite::latest()->get();
          $supplier=supplier::latest()->get();
            return view('manager.product.edite',compact('edite','category','unite','supplier'));
        }





        public function update(Request $request,$id){
          $product_update=product::find($id);


            $product_update['category_id']=$request->category_id;
            $product_update['supplier_id']=$request->supplier_id;
            $product_update['unite_id']=$request->unite_id;
            $product_update['product_name']=$request->product_name;
            $product_update['total_stock']=$request->total_stock;
            $product_update['product_status']=$request->product_status;
            $product_update['sell_quantity']=$request->sell_quantity;
            $product_update['Product_price']=$request->Product_price;

            if (is_null($request->product_image)) {
                $product_update['product_image']=$product_update['product_image'];
            }else {


            //image upload start
            $path=$request->file('product_image')->store('/image');

            $image=$request->file('product_image');
                 if ($image){

                   $image_name=Str::random(20);
                   $ext=strtolower($image->getClientOriginalExtension());
                   $image_full_name=$image_name.'.'.$ext;
                   $upload_path='image/';
                   $image_url=$upload_path.$image_full_name;
                   $success=$image->move($upload_path,$image_full_name);
                       if ($success) {
                       $product_update['product_image']=$image_url;
                       $product_update->save();
                       return back();
                                     }
                                }
                          }


        }





        public function delete($id){
          $delete=product::find($id);
            $delete->delete();
          return back();
        }


}
