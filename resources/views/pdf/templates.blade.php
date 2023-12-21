<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Template</title>
    <link rel="stylesheet" type="text/css" href="{{ public_path('css/pdf-styles.css') }}">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        #content {
            flex: 1;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: rgb(128, 128, 128);
            color: white;
            page-break-inside: avoid;
        }
    </style>
</head>
<body style="display: flex; flex-direction: column; min-height: 100vh;">
<header>
    <table style="width: 100%;">
        <tbody>
        <tr>
            <td><img src="https://contrataciones.rcc.gob.pe/docs/escudoperu.png"
                     style="height: 35px; padding: 0;" alt=""></td>
            <td class="caja-cabecera2"></td>
            <td style="width: 70px; font-size: 8px;"></td>
            <td><img src="https://contrataciones.rcc.gob.pe/docs/logoarcc.png"
                     style="height: 35px; padding: 0;" alt=""></td>
        </tr>
        <tr>
            <td colspan="5" style="text-align: center; font-size: 11px; font-style: italic; padding: 5px;">
                “DECENIO DE LA IGUALDAD DE OPORTUNIDADES PARA MUJERES Y HOMBRES”<br/>
                “Año de la unidad, la paz y el desarrollo” <br/>
            </td>
        </tr>
        </tbody>
    </table>
</header>

<div id="content" style="flex: 1;">
    <p class="text-right">Lima, {{$fechaActual}}</p>
    <div id="titulo">
        <h1 style="font-size: 18px;">CONSTANCIA DE PRESTACIÓN N° CONSTANCIA-2023-ARCC/GG/OA/UL</h1>
    </div>
    <div id="contenido" style="text-align: justify">
        Por medio del presente, se deja constancia que el proveedor {{ $rows[0]["proveedor"] }},
        con R.U.C. N° {{ $ruc }}, de acuerdo con los documentos que obran en el archivo de la
        Unidad de Logística de la Oficina de Administración, ha prestado servicios a la AUTORIDAD
        PARA LA RECONSTRUCCIÓN CON CAMBIOS, con RUC 20602114091, conforme el siguiente
        detalle:
    </div>
    <br>
    <table class="table table-sm table-bordered" style="margin-top: 10px; border-collapse: collapse; width: 100%;">
        <thead style="background: rgb(128,128,128); color: white;">
        <tr>
            <th style="text-align: center;font-size: 8px;" rowspan="2">Concepto</th>
            <th style="text-align: center;font-size: 8px;" rowspan="2">Área Usuaria</th>
            <th style="text-align: center;font-size: 8px;" colspan="3">Orden de Servicio</th>
            <th style="text-align: center;font-size: 8px;" rowspan="2">Monto Ejecutado<br>(S/)</th>
        </tr>
        <tr>
            <th style="text-align: center;font-size: 8px;">N°</th>
            <th style="text-align: center;font-size: 8px;">Fecha de inicio</th>
            <th style="text-align: center;font-size: 8px;">Fecha de fin</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($rows as $orden)
            <tr>
                <td style="text-align: center; padding: 5px; font-size: 8px;">{{ ucfirst(strtolower($orden["data"]->descrip_siaf)) }}&nbsp;</td>
                <td style="text-align: center; padding: 5px; font-size: 8px;">{{ (($orden["data"]->ejercicio)) }}&nbsp;</td>
                <td style="text-align: center; padding: 5px; font-size: 8px;">{{ (($orden["data"]->orden_servicio)) }}&nbsp;</td>
                <td style="text-align: center; padding: 5px; font-size: 8px;">{{ (($orden["data"]->fecha)) }}&nbsp;</td>
                <td style="text-align: center; padding: 5px; font-size: 8px;">{{ (($orden["data"]->fecha_fin)) }}&nbsp;</td>
                <td style="text-align: center; padding: 5px; font-size: 8px;">{{ (($orden["data"]->monto)) }}&nbsp;</td>
                <!-- Otros td aquí -->
            </tr>
        @endforeach
        </tbody>
    </table>

    <br>
    <div style="text-align: justify">PENALIDAD</div>
    Se expide la presente constancia a solicitud del interesado, para los fines que estime pertinente.
    <br>
    <div id="firma" class="text-center">

    </div>
</div>

<footer>
    <table style="">
        <tbody>
        <tr>
            <td style="width: 80%;">
                Jr. Santa Rosa N° 247 - Edificio Rimac III - Piso 3 <br/>
                Central Telefonica (511) 500 8833<br/>
                www.rcc.gob.pe
            </td>
            <td style="width: 20%;"><img src="https://contrataciones.rcc.gob.pe/docs/logo_scep.png"
                                         style="height: 39px; padding: 0;" alt=""/>
            </td>
        </tr>
        </tbody>
    </table>
</footer>

</body>
</html>
