<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function remove($id)
    {
        $document = Document::find($id);
        $document->delete();
        return redirect()->back()->with('message','Document has been deleted successfully!');
    }

    public function uploadpage(){
        return view('product');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'file' => 'required|mimes:jpg,jpeg,bmp,png,pdf,docx,pptx,doc,ppt'
        ]);

        $data = new Document();

        $file = $request->file;
        $filename = time() .'.'. $file->getClientOriginalExtension();
        $request->file->move('assets/img/documents',$filename);
        $data->file=$filename;

        $data->name = $request->name;
        $data->description = $request->description;
        $data->userID = $request->userID;

        $data->save();
        return redirect()->back()->with('message','Document has been created successful!');
    }

    public function show()
    {
        $documents = Document::paginate(10);
        return view('showproduct', compact('documents'));
    }

    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Document::where('name', 'LIKE', '%'. $query. '%')->get();
          return response()->json($filterResult);
    }

    public function searchDocument(Request $request)
    {
        $query = $request->input('search');  
        $documents = Document::where('name', 'LIKE', '%'. $query. '%')->paginate(5);
        return view('showproduct', ['documents' => $documents]);
    }

    public function autocompleteSearchUser(Request $request)
    {
          $query = $request->get('query');
          $filterResult = Document::where('name', 'LIKE', '%'. $query. '%')->get();
          return response()->json($filterResult);
    }

    public function searchDocumentUser(Request $request)
    {
        $query = $request->get('search');  
        $documents = Document::where('name', 'LIKE', '%'. $query. '%')->paginate(5);
        return view('userDownload', ['documents' => $documents]);
    }

    public function userDownload()
    {
        $documents = Document::paginate(10);
        return view('userDownload', compact('documents'));
    }

    public function download(Request $request,$file)
    {
        return response()->download(public_path('assets/img/documents/'.$file));
    }

    public function view($id){
        $data = Document::find($id);
        return view('viewproduct', compact('data'));
    }
}
