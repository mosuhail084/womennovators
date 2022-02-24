<?php

namespace App\Http\Controllers\frontEnd;
//namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Faqsupport;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class FaqsupportController  extends Controller
{
  
  // * Show all FAQ
  public function faq(Request $request)
  {
    $faq = Faqsupport::latest()->get();
    $faqshow = Faq::latest()->get();
    $faqdata = Faq::latest()->get();
    return view('we.faq', compact('faq', 'faqshow', 'faqdata'));
  }

  // * Filter FAQ based on category
  public function faq_filter(Request $request)
  {
    $cat = $request->cat;
    $faq = Faqsupport::latest()->get();
    $faqshow = Faq::where(['category' => $cat])->latest()->get();
    $faqdata = Faq::latest()->get();
    // dd($faqshow);
    return view('we.faqajax', compact('faq', 'faqshow', 'faqdata'));
  }


  public function faqStore(Request $request)
  {  //dd($request);

    /* $request->validate([
            'name' => "required",
            'phone' =>  "required",
            'email' => "required"
        ]);*/
    // dd($request);
    try {

      $data = $request->except(['_token']);

      // dd($data);
      Faqsupport::Create($data);
      return Redirect::back()->with('error_code', 8);

      // return back()->with('alert','Thank you for Contecting with us – we will get back to you soon!');

    } catch (Exception $e) {
      DB::rollBack();
      Log::emergency("File:" . $e->getFile() . "Line:" . $e->getLine() . "Message:" . $e->getMessage());
      report($e);
      $output = array('msg' => $e->getMessage());
      return back()->withErrors($output)->withInput();
    }
  }
}
