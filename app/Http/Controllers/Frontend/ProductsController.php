<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;


class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request['search'] ?? "";

        if($search != "")
        {
            //where
            $product = Products::where('product_name', 'LIKE', "%$search%")->orwhere('description', 'LIKE', "%$search%")->get();
          $categories = Category::with('products')->get(); 

        }else
        {
        $product = Products::paginate(5);
            }
        $url =url('/products/listingppp');
 
        $title ="Products";
        $data =compact( 'product', 'search', 'url','title', 'categories' );
      
       return view('frontend.products')->with($data);
    }


    public function addproduct()
    {
        $product = Products::all();
        $Category = Category::all();
        $url =url('/products/add');
        $title ="Add Product";
        $data =compact( 'product', 'Category', 'url','title');
      
        return view('frontend.productadd')->with($data);
    }
    public function store(Request $request){
     
        // echo "<pre>";
        // print_r($request->all());
        // p($request->all());
        // die;
        // Insert Query
        $product = new Products;
        $category = new Category;
        $product->product_name = $request['pname'];
        $product->description = $request['Description'];
        $product->image = $request['pimage'];
     //   $product->category = $category['category'];
      
    //     $product->image = $request->file('pimage')->store('public/uploads');
        $product->price = $request['price'];

        $product->save();
        $data =compact( 'product');
        return redirect('/products/listing')->with($data);;
    }


    public function editproduct($id)
    {
        $product = Products::find($id);
        if(is_null($product)){
            //Not found
            return redirect('/products/listing');
        }else{
            //found
            $url = url('products/update'."/".$id);
            $title = "Update Product";
             $data = compact('product','url','title');
            return view('frontend.productadd')->with($data);

        }
    }

    public function update($id, Request $request){
        $product = Products::find($id);
       
        $product->product_name = $request['pname'];
        $product->description = $request['Description'];
        if($product->image == null)
        {
        $product->image = $product->image ;
    }else{
        $product->image = $request['pimage'];
    }
        $product->price = $request['price'];
        $product->save();
      
        return redirect('/products/listing');
    }

 
    public function delete($id){

        

        // echo $id;
        // die;


        $product = Products::find($id);
        // echo "<pre>";
        // print_r($customerc);

        if(!is_null($product))
        {
            $product->delete();
        }
        return redirect('/products/listing');
    }


}
