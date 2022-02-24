<?php


namespace App\Http\Controllers\Buyers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Listing;
use Illuminate\Http\Request;
use DB;

class BuyersProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('hello');
        $productDatas = DB::table('products')
        ->leftjoin('categories','categories.id','products.category_id')
        ->leftjoin('subcategories','subcategories.id','products.subcategory_id')
        ->leftjoin('listings','listings.id','products.listing_id')
        ->select('listings.storename','categories.categoryname',
        'subcategories.subcategoryname','products.*')->get();
       // dd($productDatas );
     
        return view('backEnd.buyers.product.index',compact('productDatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        $category = Category::latest()->get();
        $listing = Listing::latest()->get();
          if ($request->ajax()) {
            if (isset($request->category_id)) {
                echo "<option>Please Select One</option>";
                foreach ( DB::table('subcategories')->where('category_id', $request->category_id)->get() as $sub) {

                    echo "<option value='" . $sub->id . "'>" . $sub->subcategoryname . "</option>";
                }
            }
        }
        else {
            return view('backEnd.buyers.product.create',compact('category','listing'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'productname' => "required"
        ]);

        try {
            $data=$request->except(['_token']);
            $productid=	DB::table('products')->insertGetId([			
                'category_id'         => $request->category_id,
                'subcategory_id'         => $request->subcategory_id,
                'productname'         => $request->productname,
                'quantityunit'         => $request->quantityunit,
                'value'         => $request->value,
                'description'         => $request->description,
                'type'         => $request->type,
                'status'         => $request->status,
                'listing_id'         => $request->listing_id,
                'createdby'         => auth()->user()->id,
                'updatedby'         => auth()->user()->id,
                'created_at'			    =>	   date('y-m-d'),
                'updated_at'              =>    date('y-m-d'),
                ]);
            $files = [];
            if($request->hasFile('productimage'))
            {
                foreach ($request->file('productimage') as $file) {
                    $destinationPath = 'backEnd/image/productimage';
                    $name = $file->getClientOriginalName();
                   $file->move($destinationPath, $name);
                         //  dd($s); die;
                    $files[] = $name;
                 
                }
            }
            foreach($files as $filess )
            {
           // dd($files); die;
              DB::table('productimages')->insert([
                    'product_id' => $productid, 
                    'productimage' => $filess, 
                     'created_at' => date('y-m-d'), 
                    'updated_at' => date('y-m-d')            
                ]);  
            
            }
            $output = array('msg' => 'Create Successfully');
            return back()->with('success', $output);
     
      
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
        $category = Category::latest()->get();
        $listing = Listing::latest()->get();
        $product = Product::where('id', $id)->first();
        $productDatas = DB::table('productimages')->where('product_id', $id)->get();
        return view('backEnd.buyers.product.edit', compact('product','productDatas','id','category','listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = '')
    {
        $request->validate([
            'productname' => "required",
        ]);
        try {
            $data=$request->except(['_token']);
            $productid=	DB::table('products')->where('id', $id)->update([			
                'category_id'         => $request->category_id,
                'subcategory_id'         => $request->subcategory_id,
                'productname'         => $request->productname,
                'quantityunit'         => $request->quantityunit,
                'value'         => $request->value,
                'description'         => $request->description,
                'type'         => $request->type,
                'status'         => $request->status,
                'listing_id'         => $request->listing_id,
                'createdby'         => auth()->user()->id,
                'updatedby'         => auth()->user()->id,
                'created_at'			    =>	   date('y-m-d'),
                'updated_at'              =>    date('y-m-d'),
                ]);
            $files = [];
            if($request->hasFile('productimage'))
            {
                foreach ($request->file('productimage') as $file) {
                    $destinationPath = 'backEnd/image/productimage';
                    $name = $file->getClientOriginalName();
                   $file->move($destinationPath, $name);
                         //  dd($s); die;
                    $files[] = $name;
                 
                }
            }
            foreach($files as $filess )
            {
           // dd($files); die;
              DB::table('productimages')->insert([
                    'product_id' => $id, 
                    'productimage' => $filess, 
                     'created_at' => date('y-m-d'), 
                    'updated_at' => date('y-m-d')            
                ]);  
            
            }
            $output = array('msg' => 'Updated Successfully');
            return redirect('buyer/product')->with('success', $output);
        } catch (Exception $e) {
            DB::rollBack();
            Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
            report($e);
            $output = array('msg' => $e->getMessage());
            return back()->withErrors($output)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function Delete($id = '')
    { 
            try {
             DB::table('products')->where('id', $id)->delete();
             DB::table('productimages')->where('product_id', $id)->delete();
                $output = array('msg' => 'Deleted Successfully');
                return back()->with('statuss', $output);
            } catch (Exception $e) {
                DB::rollBack();
                Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
                report($e);
                $output = array('msg' => $e->getMessage());
                return back()->withErrors($output)->withInput();
            }
    
    }
    public function productDelete($id = '')
       { 
               try {
                DB::table('productimages')->where('id', $id)->delete();
                   $output = array('msg' => 'Deleted Successfully');
                   return back()->with('statuss', $output);
               } catch (Exception $e) {
                   DB::rollBack();
                   Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
                   report($e);
                   $output = array('msg' => $e->getMessage());
                   return back()->withErrors($output)->withInput();
               }
       
       }
}
