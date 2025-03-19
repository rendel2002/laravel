<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    // Function for Inventory Slip PDF
    public function generateInventoryPDF()
    {
        $pdf = Pdf::loadView('pdf.inventory_slip');
        return $pdf->stream('inventory_slip.pdf');
    }

    // Function for Journal Entry PDF
    public function generateJournalEntryPDF()
    {
        $pdf = Pdf::loadView('pdf.journal_entry');
        return $pdf->stream('journal_entry.pdf');
    }
}
