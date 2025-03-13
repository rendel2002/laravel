<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'lgu' => 'Sample LGU',
            'fund' => 'General Fund',
            'ics_no' => 'ICS-2025-001',
            'items' => [
                ['qty' => 1, 'unit' => 'pc', 'cost' => '₱1,000', 'total' => '₱1,000', 'desc' => 'Computer Monitor', 'item_no' => 'IT-001', 'useful_life' => 5],
                ['qty' => 3, 'unit' => 'units', 'cost' => '₱500', 'total' => '₱1,500', 'desc' => 'Office Chairs', 'item_no' => 'OFF-002', 'useful_life' => 5],
                ['qty' => 2, 'unit' => 'pcs', 'cost' => '₱700', 'total' => '₱1,400', 'desc' => 'Filing Cabinets', 'item_no' => 'ST-003', 'useful_life' => 5]
            ],
            'received_from' => 'John Doe',
            'position_from' => 'Supply Officer',
            'date_from' => now()->format('m/d/Y'),
            'received_by' => 'Jane Smith',
            'position_by' => 'Clerk',
            'date_by' => now()->format('m/d/Y'),
        ];

        // Load inventory_slip.blade.php for PDF
        $pdf = Pdf::loadView('pdf.inventory_slip', $data);
        return $pdf->stream('inventory_slip.pdf');
    }
}
