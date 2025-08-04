<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booklet;
use App\Models\BookletQuestion;
use App\Traits\AuthCode;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;

class BookletQuestionController extends Controller
{
    use AuthCode;
    public function index(Request $request)
    {

        if ($request->ajax()) {


            $bookletQuestions = BookletQuestion::with('booklet')->get();

            return Datatables::of($bookletQuestions)
                ->addColumn('action', function ($bookletQuestion) {
                    $btn = '<a href="/admin/booklet/question/delete/' . $bookletQuestion->id . '" class="" title="Delete"><i class="fa fa-trash"></i></a>';
                    return $btn;
                })->editColumn('created_at', function ($bookletQuestion) {
                    return [
                        'display'   => Carbon::parse($bookletQuestion->created_at)->format('d-m-Y h:i A'),
                        'timestamp' => $bookletQuestion->created_at,
                    ];
                })->editColumn('booklet', function ($bookletQuestion) {
                    return @$bookletQuestion->booklet->name;
                })
                ->editColumn('name', function ($bookletQuestion) {
                    return $bookletQuestion->name;
                })
                ->escapeColumns([])

                ->make(true);
        }
        return view('admin.bookletQuestions.index');
    }

    public function create()
    {

        $booklets = Booklet::whereStatus('0')->get();
        return view('admin.bookletQuestions.create', compact('booklets'));
    }

    public function store(Request $request)
    {

        $validator = $request->validate([
            'booklet_id'          => 'required',
            'name'          => 'required',
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'answer' => 'required',

        ]);
        $file_name = null;
        if ($request->hasFile('image')) {
            $file_name = $this->uploadImg($request->image, 'bookletsQuestions');
        }
        $data = [
            'booklet_id'     => $request->booklet_id,
            'name'    => $request->name,
            'answer'  => $request->answer,
            'image' => $file_name ?? null
        ];

        $bookletQuestion = BookletQuestion::create($data);

        if ($bookletQuestion) {

            return redirect()->route('admin.bookletQuestion.index')->with('success', 'Blog created successfully.');
        }
        return redirect()->route('admin.bookletQuestion.index')->withErrors($validator)->withInput();

    }
    public function destroy(string $id)
    {
        try {
            $bookletQuestion = BookletQuestion::where('id', $id)->first();

            if ($bookletQuestion) {
                $bookletQuestion->delete();
                return redirect()->back()->with('success', 'Blog deleted successfully!');
            } else {
                return redirect()->back()->with('error', 'Failed to delete blog!');
            }
        } catch (Exception $e) {

            return redirect()->back()->with('error', 'An error occurred while deleting the blog.');
        }
    }
}
