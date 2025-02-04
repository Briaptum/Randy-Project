<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\HelpItem;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        $helpItems = HelpItem::all()->groupBy('category');
        return view('dashboard.index', compact('contacts', 'helpItems'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('dashboard.index')->with('success', 'Contact deleted successfully');
    }

    public function storeHelpItem(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);

        HelpItem::create($request->all());
        return redirect()->route('dashboard.index')->with('success', 'Help item added successfully');
    }

    public function destroyHelpItem(HelpItem $helpItem)
    {
        $helpItem->delete();
        return redirect()->route('dashboard.index')->with('success', 'Help item deleted successfully');
    }
} 