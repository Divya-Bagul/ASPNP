<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\subcategory;
use App\Models\subcategoryleve1;
use App\Models\homeform;


use App\Models\contact;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class products extends Controller
{
    //
    function set_product(Request $req){

        $req->validate(
                [

                'name'=>'required',
                ],[

                'name.required'=>'please add product name'
                ]
            );
        $product = new product;
        $product->product_name= $req->name;
        $product->description= $req->description;
        
        $product->category= $req->category;
        $product->subcategory= $req->subcategory;
        $product->subcategorylevel1= $req->subcategorylevel1;
        if( $req->has('p_image')){
            $image = $req->file('p_image'); //get file name and file in variable
            $reimage = time().'.'.$image->getClientOriginalExtension(); //rename name using timestamp
            $dest = public_path('/product_images'); //assign path public folder
            $image->move($dest,$reimage); //move image in public path
            $product->image = $reimage; // insewrt image in db


        }else{
           return back()->with('img',' select img');
        }


        $product->save();
        Alert::success('Success', 'Your Product Successfully Save');
        return back();
    }

    function set_category(Request $req){

       
        $category = new category;
        $category->cat_name= $req->catname;
        $category->catdetail= $req->catdetail;
        
       


        $category->save();
        Alert::success('Success', 'Your Category Successfully Save');
        return back();
    }

    function homeform(Request $req){

       //dd($req->name);
        $homeform = new homeform;
        $homeform->name= $req->name;
        $homeform->Country= $req->country;
        $homeform->Phone= $req->phone;
        $homeform->Email= $req->email;
        $homeform->Company = $req->company;
        $homeform->city= $req->city;
        $homeform->Pincode= $req->pincode;
        $homeform->category= $req->category;
        $homeform->project= $req->project_name;
        


        
       


        $homeform->save();
        $data = 123;
      return $data;
        Alert::success('Success', 'Your Category Successfully Save');
        return back();
    }
    function set_subcategory(Request $req){

       
        $subcategory = new subcategory;
        $subcategory->sub_catname= $req->subcatname;
        $subcategory->subcat_detail= $req->subcatdetail;
        $subcategory->maincat_id= $req->maincategory;

        
       


        $subcategory->save();
        Alert::success('Success', 'Your Sub Category Successfully Save');
        return back();
    }
    function set_subcategorylavel1(Request $req){

       
        $subcategoryleve1 = new subcategoryleve1;
        $subcategoryleve1->subcatlevel1_name= $req->subcatlevelname;
        $subcategoryleve1->subcatlevel_detail= $req->subcatleveldetail;
        $subcategoryleve1->maincat_id= $req->maincategory;
        $subcategoryleve1->subcat_id= $req->subcategory;


        
       


        $subcategoryleve1->save();
        Alert::success('Success', 'Your Sub Category Successfully Save');
        return back();
    }
    

    

function get_product(){
    $products = product::all();
    return view('show_products',compact('products'));
}
function get_category(){
    $category = category::all();

    return view('category/addcategory',compact('category'));
}
function edit_product($product_id){
   
   $products = product::where('product_id','=',$product_id)->get();
    //dd($products);
    return view('editproduct',compact('products'));
}
function update_product(Request $req)
{

    $req->validate(
        [

        'name'=>'required',
        ],[

        'name.required'=>'please add product name'
        ]
    );
    $product = product::where('product_id','=',$req->id)->update([
    
        'product_name'=>$req->input('name'),
        

    ]);
    //return $product;
    return redirect("showproduct");
}

function delete($id){
    $product = product::where("product_id","=",$id)->delete();
    return redirect('showproduct');
}
function deletecat($id){
    $product = category::where("id","=",$id)->delete();
   
    return redirect('addcategory');
}
function deletesubcat($id){
    $subcategory = subcategory::where("id","=",$id)->delete();
    $subcategoryleve1 = subcategoryleve1::where("subcat_id","=",$id)->delete();
    return redirect('showcategory');
}

function category(){
    $category = category::all();
    return view('addproducts',compact('category'));
}
function subcategory(){
    $category = category::all();
    $subcategory = subcategory::all();
    $subcategoryleve1 = subcategoryleve1::all();
    return view('subcategory/addcategory',compact('category','subcategory','subcategoryleve1'));
}






function subcat(Request $request){
    $parent_id = $request->cat_id;
        
        $subcategories = subcategory::where("maincat_id","=",$parent_id)->get();
        //dd($subcategories);
        return response()->json([
            'subcategories' => $subcategories
        ]);
}
function subcatlevel1(Request $request){
    $parent_id = $request->cat_id;
        
        $subcategorieslevel = subcategoryleve1::where("subcat_id","=",$parent_id)->get();
        //dd($subcategories);
        return response()->json([
            'subcategorieslevel' => $subcategorieslevel
        ]);
}

public static function show_categories(){
    $category = DB::table('categories')->select('categories.*')->get();
    //dd($category);

    foreach($category as $value){
        $data = $value->cat_name;
        
    }
    return $category;
}
public static function show_subcategories(){
    $subcategory = DB::table('subcategories')->select('subcategories.*')->get();
    //dd($category);

    
    return $subcategory;
}
public static function show_subcategorieslevel1(){
    $subcategorylevel1 = DB::table('subcategories_level1')->select('subcategories_level1.*')->get();
    //dd($category);

    
    return $subcategorylevel1;
}

function getcat($id){
    
        
    $categoryData = DB::table('categories')
    ->join('products' ,'categories.id',"=","products.category")
    ->where('categories.id',$id)->get();
        //dd($categoryData);
        return view('category/product',compact('categoryData'));
}

function getsubcat($id){
    
        
    $subCategoryData = DB::table('subcategories')
    ->join('products' ,'subcategories.id',"=","products.subcategory")
    ->where('subcategories.id',$id)->get();

     
    $subCategory = DB::table('subcategories')
    ->where('subcategories.id',$id)->get();

        //dd($categoryData);
        return view('subcategory/product',compact('subCategoryData','subCategory'));
}

function getsubcatlevel1($id){
    
        
    $categoryLevel1Data = DB::table('subcategories_level1')
    ->join('products' ,'subcategories_level1.id',"=","products.subcategorylevel1")
    ->where('subcategories_level1.id',$id)->get();



    $subCategorylevel1 = DB::table('subcategories_level1')
    ->where('subcategories_level1.id',$id)->get();
        //dd($categoryData);
        return view('subcategoryLevel/product',compact('categoryLevel1Data','subCategorylevel1'));
}


 public static function productHomePage(){
    $product = product::select('product_name')->inRandomOrder()
    ->limit(6)
    ->get();
    return $product;
}

function productShow($id){
    

    $product = DB::table('products')
    ->where('product_id',$id)->get();
        //dd($categoryData);
        return view('product/productData',compact('product'));
}
function contact(Request $req){



    $contactdata = new contact;
    $contactdata->name  = $req->name;
    $contactdata->email  = $req->email;

    $contactdata->subject  = $req->subject;

    $contactdata->message  = $req->message;
    $contactdata->save();
    Alert::success('Success', 'Thank you for your Message.');
    
    return back();


}

}
