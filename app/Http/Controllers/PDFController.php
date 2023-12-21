<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
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
            $datos = DB::table('constancias')->select([
                "ejercicio","orden_servicio","exp_siaf","fecha","ruc","proveedor",
                "descrip_siga","descrip_siaf","monto","fecha_fin","especifica_gasto"
            ])->limit(20)->get();//
            //$users = User::where('status', 'active')->take(10)->get();

            $groupedData = [];
            foreach ($datos as $row) {
                //dd($row->ruc);
                $ruc = $row->ruc;

                if (!isset($groupedData[$ruc])) {
                    $groupedData[$ruc] = [];
                }

                $groupedData[$ruc][] = [
                    'proveedor' => $row->proveedor,
                    'data' => $row,
                ];
            }

            //dd($groupedData);

            // Output the grouped data

            $pdf = new TCPDF();
            $pdf->setPrintHeader(false);
            $pdf->setPrintFooter(false);

            $fechaActual = Carbon::now()->locale('es_ES')->isoFormat('LL');
            foreach ($groupedData as $ruc => $rows) {
                $pdf->AddPage();

                $htmlContent = view('pdf.templates', ['rows' => $rows, 'ruc' => $ruc, 'fechaActual' => $fechaActual])->render();
                $pdf->writeHTML($htmlContent, true, false, true, false, '');
                //$this->setFooter($pdf);
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

    private function setFooter($pdf)
    {
        // Establecer el pie de página al final de la página
        $pdf->SetY(-15);
        $pdf->SetFont('helvetica', 'I', 8);
        $pdf->Cell(0, 10, 'Tu Contenido de Pie de Página Aquí', 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }

}
