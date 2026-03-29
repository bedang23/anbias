<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use Illuminate\View\View;

class ContactEnquiryController extends Controller
{
    public function index(): View
    {
        return view('admin.enquiries.index', [
            'enquiries' => ContactEnquiry::query()->latest()->paginate(15),
        ]);
    }

    public function show(ContactEnquiry $enquiry): View
    {
        return view('admin.enquiries.show', [
            'enquiry' => $enquiry,
        ]);
    }
}
