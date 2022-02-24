<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign_product ;
use Illuminate\Http\Request;
use Image;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()   
    {
        $this->middleware('auth:admin');
    }
    public function index($id="")
    {
        $productDatas = Campaign_product::where('campaign_id',$id)->get();
      // dd($productDatas);
        return view('backEnd.product.index',compact('productDatas','id'));
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productCreate($id)
    {
      //  dd($id);
        return view('backEnd.product.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { //dd($request);
        $request->validate([
            'product_name' => "required",
          //  'status' => "required"
        ]);

        try {
            $data=$request->except(['_token']);
            if($request->hasFile('product_image'))
            {
                $avatar = $request->file('product_image');
                
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(1000, 750)->save('backEnd/image/productimage/' . $filename);
                $data['product_image']=$filename;
            }
            if($request->hasFile('product_image2'))
            {
                $avatar = $request->file('product_image2');
                $filename2 = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(1000, 750)->save('backEnd/image/productimage/' . $filename2);
                $data['product_image2']=$filename2;
            }
            if($request->hasFile('product_image3'))
            {
                $avatar = $request->file('product_image3');
                $filename3 = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(1000, 750)->save('backEnd/image/productimage/' . $filename3);
                $data['product_image3']=$filename3;
            }
            $data['campaign_id']=$request->campaign_id;
            Campaign_product ::Create($data);
           
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
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id = '')
    {
        $product = Campaign_product ::where('id', $id)->first();
        return view('backEnd.product.edit', compact('id', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id="")
    {
       // dd($request);
        $request->validate([
            'product_name' => 'required',
           // 'status' => 'required'
        ]);

        try {
            $data=$request->except(['_token']);
            if($request->hasFile('product_image'))
            {
                $avatar = $request->file('product_image');
                $path=public_path().'/backEnd/image/productimage/';
                //dd($path);
                $filename = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(1000, 750)->save('backEnd/image/productimage/' . $filename);
                $data['product_image']=$filename;
                //dd($data['product_image']);
            }
            if($request->hasFile('product_image2'))
            {
                $avatar = $request->file('product_image2');
                $path=public_path().'/BackEnd/image/productimage/';
                $filename2 = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(1000, 750)->save('backEnd/image/productimage/' . $filename2);
                $data['product_image2']=$filename2;
            }
            if($request->hasFile('product_image3'))
            {
                $avatar = $request->file('product_image3');
                $path=public_path().'/BackEnd/image/productimage/';
                $filename3 = time() . '.' . $avatar->getClientOriginalExtension();
                Image::make($avatar)->resize(1000, 750)->save('backEnd/image/productimage/' . $filename3);
                $data['product_image3']=$filename3;
            }
           
           
            $campaign_id=Campaign_product::where('id',$id)->select('campaign_id')->pluck('campaign_id')->first();
           // dd($campaign_id);
          //  App\Models\Menu::whereIn('id',$Datas1)->with('submenu')->get();
            $data['campaign_id']= $campaign_id;
           
           Campaign_product ::find($id)->update($data);
            $output = array('msg' => 'Updated Successfully');
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id = '')
    {
           try {
            Campaign_product ::destroy($id);
               $output = array('msg' => 'Deleted Successfully');
               return redirect('admin/product')->with('statuss', $output);
           } catch (Exception $e) {
               DB::rollBack();
               Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
               report($e);
               $output = array('msg' => $e->getMessage());
               return back()->withErrors($output)->withInput();
           }
       }
}
