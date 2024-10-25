<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class RecordDetailsController extends Controller
{
    public function index(Request $request)
    {
        // Initialize the applications query
        $records = Record::orderBy('id', 'asc');

        // Options for item limits
        $filter_limit_options = [10, 20, 50, 100, 200, 500, 1000, 2000, 5000, 'All'];

        // Filters initialization
        $filter_limit = $request->item_limit ?? 10;


        // Paginate results based on the item limit
        if (is_numeric($filter_limit)) {
            // If the filter limit is a valid number, apply pagination with that limit
            $records = $records->paginate((int) $filter_limit);
        } else {
            // Default pagination (or show all results) when 'All' or any non-numeric value is selected
            $records = $records->paginate(); // Or you can remove pagination here to show all results
        }


        // Return the view with the data
        return view('frontend.record-list', compact(
            'records',
            'filter_limit_options',
            'filter_limit',
        ));

    }


    public function RecordSubmit()
    {
        return view('frontend.record-submit');
    }
    public function RecordStore(Request $request)
    {
        $request->validate([
            "name"                 => "required",
            "daag_number"          => "required",
            "mouja"                => "required",
            "khotian"              => "required",
            "buyer_name"           => "required",
            "seller_name"          => "required",
            "google_file_upload"   => "required|mimes:pdf,doc,docx",
        ]);

//        if ($request->has('google_file_upload')) {
//            $record_upload_tmpName = str_replace(' ', '_', $request->google_file_upload->getClientOriginalName());
//            Storage::disk("google")->putFileAs("", $request->google_file_upload, $record_upload_tmpName);
//            $all_files = Storage::disk("google")->allFiles();
//            $first_upload_file = $all_files[0];
//            $get_google_drive_url = Storage::disk('google')->url($first_upload_file);
//        }
//        dd($get_google_drive_url);
        DB::beginTransaction();
        try {
            $record = Record::create([
                'name'                => $request->name,
                'daag_number'         => $request->daag_number,
                'mouja'               => $request->mouja,
                'khotian'             => $request->khotian,
                'buyer_name'          => $request->buyer_name,
                'seller_name'         => $request->seller_name,
//                'google_file_upload'  => $get_google_drive_url,
            ]);

            DB::commit();

            return redirect()
                ->route('record-list');
        } catch (\Exception $exception) {
            DB::rollBack();
            return redirect()
                ->back()
                ->withInput()
                ->with('error', $exception->getMessage());
        }
    }

}
