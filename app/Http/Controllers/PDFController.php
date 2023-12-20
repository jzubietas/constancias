<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Config;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use TCPDF;

class PDFController extends Controller
{
    public function generarPDF()
    {
        // Obtén los datos que necesitas para el PDF
        $datos = [
            'nombre' => 'John Doe',
            'email' => 'john@example.com',
            // ... otros datos
        ];

        // Genera el PDF con TCPDF
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->writeHTML(view('pdf.template', $datos)->render(), true, false, true, false, '');

        // Descarga el PDF
        $pdf->Output('archivo.pdf', 'D');
    }

    public function generarPDFs()
    {
        try {
            //Config::set('database.default', 'mysql'); // Change 'mysql' to your desired connection name

            // Obtén todos los datos de la tabla
            //$datos = User::all();
            $datos = DB::table('users')->select(["id","name","email"])->get();//->limit(5)
            //$users = User::where('status', 'active')->take(10)->get();

            $pdf = new TCPDF();
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);

            foreach ($datos as $dato) {
                $pdf->AddPage();
                $htmlContent = view('pdf.templates', ['dato' => $dato])->render();
                $pdf->writeHTML($htmlContent, true, false, true, false, '');
            }

            $pdfContent = $pdf->Output('S');
            $pdf->Output(storage_path('app/pdfs/todos_los_datos.pdf'), 'F');

            Storage::disk('pdfs')->put('todos_los_datos.pdf', $pdfContent);

            return "PDFs generados exitosamente.";
        } catch (Exception $e) {
            Log::error('Error al generar el PDF: ' . $e->getMessage());
            dd($e->getMessage());
        } finally {
            Config::set('database.default', env('DB_CONNECTION'));
        }
    }

}
