<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('admin.dashboard', [
            'enquiryCount' => ContactEnquiry::query()->count(),
            'latestEnquiryAt' => ContactEnquiry::query()->latest('id')->value('created_at'),
        ]);
    }
}
