<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use DataTables;
use Carbon\Carbon;

class ContactController extends Controller
{
     public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name'         => 'required|string|max:255',
            'last_name'          => 'required|string|max:255',
            'email'              => 'required|email',
            'phone'              => 'nullable|string|max:20',
            'company_name'       => 'nullable|string|max:255',
            'service_interested' => 'required|string|max:255',
            'project_budget'     => 'nullable|string|max:255',
            'message'            => 'required|string',
            'subscribe_newsletter' => 'nullable|boolean',
        ]);

        $validated['subscribe_newsletter'] = $request->has('subscribe_newsletter');

        Contact::create($validated);

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            if ($request->deleted == 'true') {
                $contacts = Contact::onlyTrashed()->latest();
                return Datatables::of($contacts)
                    ->editColumn('created_at', function ($contact) {
                    return [
                        'display'   => Carbon::parse($contact->created_at)->format('d-m-Y h:i A'),
                        'timestamp' => $contact->created_at,
                    ];
                })->escapeColumns([])

                    ->make(true);
            } else {
                $contacts = Contact::latest();
                return Datatables::of($contacts)
                   ->editColumn('created_at', function ($contact) {
                    return [
                        'display'   => Carbon::parse($contact->created_at)->format('d-m-Y h:i A'),
                        'timestamp' => $contact->created_at,
                    ];
                })->escapeColumns([])
                    ->make(true);
            }
        }
        return view('admin.contacts.index');
    }
}
