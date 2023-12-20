<html>
<head>
    <style>
        body {
            font-family: sans-serif;
            size: 12px;
        }

        @page {
            margin: 140px 50px ;
        }

        header {
            position: fixed;
            left: 0px;
            top: -90px;
            right: 0px;
            height: 30px;
            /*background-color: #ddd;*/
            text-align: center;
        }

        header h1 {
            margin: 10px 0;
        }

        header h2 {
            margin: 0 0 10px 0;
        }

        header img {
            height: 80px;
        }

        footer {
            position: fixed;
            left: 0px;
            bottom: -50px;
            right: 0px;
            height: 40px;
            border-bottom: 2px solid #ddd;
        }

        footer .page:after {
            content: counter(page);
        }

        footer table {
            width: 100%;
        }

        footer p {
            text-align: right;
        }

        footer .izq {
            text-align: left;
        }

        footer img {
            height: 80px;
        }

        table {
            border-collapse: collapse;
        }

        .bg-gray {
            background-color: lightgray;
        }

        #titulo {
            text-align: center;
        }

        #titulo h1 {
            font-size: 10.0pt;
        }

        .no-border {
            border: none;
        }

        .border-bottom {
            border-bottom: 1px solid black;
        }

        .text-left {
            text-align: left;
        }

        #content {
            font-size: 12px;
        }

        /* estilos de los paneles */
        .card {
            box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgba(0, 0, 0, .2);
            margin-bottom: 1rem;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1 solid #6c757d;
            border-radius: .25rem;
        }


        .bg-secondary, .bg-secondary > a {
            color: #fff !important;
        }

        .bg-secondary {
            background-color: #6c757d !important;
        }

        .card-header {
            background-color: transparent;
            border-bottom: 1px solid rgba(0, 0, 0, .125);
            padding: .75rem 1.25rem;
            position: relative;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
        }

        .pl-3, .px-3 {
            padding-left: 1rem !important;
        }

        .pr-3, .px-3 {
            padding-right: 1rem !important;
        }

        .pb-2, .py-2 {
            padding-bottom: .5rem !important;
        }

        .pt-2, .py-2 {
            padding-top: .5rem !important;
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 1px;
            padding: 0.5rem;
        }

        .mb-0, .my-0 {
            margin-bottom: 0 !important;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -7.5px;
            margin-left: -7.5px;
        }

        dl, ol, ul {
            margin-top: 0;
            margin-bottom: 1rem;
        }


        .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 7.5px;
            padding-left: 7.5px;
        }

        .col-md-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        .col-md-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            background-color: transparent;
            border: none;
            font-size: 11px;
        }

        table {
            border-collapse: collapse;
        }

        th {
            text-align: inherit;
        }

        td, th {
            line-height: 1.2;
            vertical-align: middle !important;
        }

        th {
            padding-top: .5rem !important;
            padding-bottom: .5rem !important;
        }

        .table td, .table th {
            padding: .20rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table-sm td, .table-sm th {
            padding: .20rem;
            padding-top: 0.20rem;
            padding-bottom: 0.20rem;
        }

        .table-sm thead th {
            padding: .20rem;
            padding-top: 0.20rem;
            padding-bottom: 0.20rem;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 1px solid #dee2e6;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }

        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 50%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .badge-light {
            color: #1f2d3d;
            background-color: #f8f9fa;
        }

        .text-rigth {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }

        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: .5rem;
        }

        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit;
        }

        .h6, h6 {
            font-size: 1rem;
        }

        .float-right {
            float: right !important;
        }

        .page-number:before {
            content: counter(page);
        }

        #titulo {
            text-align: center;
        }

        #titulo h1 {
            font-size: 10.0pt;
        }


        .caja-cabecera1 {
            width: 120px;
            font-size: 8px;
            padding: 0px 5px 0px 3px;
            text-align: left;
            color: #fff;
            background-color: #6c757d;
            height: 25px;
            border: 1px solid #fff;
            border-spacing: 0px;
        }

        .caja-cabecera2 {
            width: 60px;
            font-size: 8px;
            padding: 0px 5px 0px 3px;
            text-align: left;
            color: #fff;
            background-color: #fff;
            height: 25px;
            border: 1px solid #fff;
            border-spacing: 0px;
        }

    </style>
<body>
<header>
    <table style="width: 100%;">
        <tbody>
        <tr>
            <td><img src="https://contrataciones.rcc.gob.pe/docs/escudoperu.png"
                     style="height: 35px; padding: 0px;"></img></td>
            <td class="caja-cabecera2"></td>
            <td style="width: 70px; font-size: 8px;"></td>
            <td><img src="https://contrataciones.rcc.gob.pe/docs/logoarcc.png"
                     style="height: 35px; padding: 0px;"></img></td>
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
<div id="content">
    <p class="text-rigth">Lima, {{$hoy}}</p>
    <br>
    <div id="titulo">
        <h1 style="font-size: 18px;">CONSTANCIA DE PRESTACIÓN N° {{$numConstancia}}-2023-ARCC/GG/OA/UL</h1>
    </div>
    <div id="contenido" style="text-align: justify">
        Por medio del presente, se deja constancia que el proveedor {{ $desProveedor }},
        con R.U.C. N° {{ $rucProveedor }}, de acuerdo con los documentos que obran en el archivo de la
        Unidad de Logística de la Oficina de Administración, ha prestado servicios a la AUTORIDAD
        PARA LA RECONSTRUCCIÓN CON CAMBIOS, con RUC 20602114091, conforme el siguiente
        detalle:
    </div>
    <br>
    <table class="table table-sm table-bordered">
        <thead style="background: gray;">
        <tr>
            <th style="text-align: center;" rowspan="2">Concepto</th>
            <th style="text-align: center;" rowspan="2">Área Usuaria</th>
            <th style="text-align: center;" colspan="3">Orden de Servicio</th>
            <th style="text-align: center;" rowspan="2">Monto Ejecutado<br>(S/)</th>
        </tr>
        <tr>
            <th style="text-align: center;">N°</th>
            <th style="text-align: center;">Fecha de inicio</th>
            <th style="text-align: center;">Fecha de fin</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($ordenes as $orden)
            <tr>
                <td>{{ $orden['concepto'] }}&nbsp;</td>
                <td>{{ $orden['nombre_area'] }}&nbsp;</td>
                <td style="text-align: center;">{{ $orden['orden_procesocompra'] }}&nbsp;</td>
                <td style="text-align: center;">{{ $orden['fecha_inicio'] }}&nbsp;</td>
                <td style="text-align: center;">{{ $orden['fecha_fin'] }}&nbsp;</td>
                <td style="text-align: center;">{{ $orden['valor_procesocompra'] }}&nbsp;</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div style="text-align: justify">{{ $txtPenalidad }}</div>
    Se expide la presente constancia a solicitud del interesado, para los fines que estime pertinente.
    <br><br><br><br><br>
    <div id="firma" class="text-center">
        Documento Firmado Digitalmente<br>
        <b>HUGO ANDRES ASCAMA FLORES</b><br>
        Jefe de la Unidad de Logística<br>
        Autoridad para la Reconstrucción con Cambios<br>
        Presidencia de Consejo de Ministros
    </div>
</div>
<footer>
    <table>
        <tbody>
        <tr>
            <td style="width: 80%; font-size: 8px;">
                Jr. Santa Rosa N° 247 - Edificio Rimac III - Piso 3 <br/>
                Central Telefonica (511) 500 8833<br/>
                www.rcc.gob.pe
            </td>
            <td style="width: 20%;"><img src="https://contrataciones.rcc.gob.pe/docs/logo_scep.png"
                                         style="height: 39px; padding: 0px;" /></td>

        </tr>
        </tbody>
    </table>
</footer>
</body>
</html>
