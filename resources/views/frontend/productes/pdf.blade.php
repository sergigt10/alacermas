<html>
    <head>
        <title>{{ $titol }}</title>
    </head>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .titol-pdf {
            font-size: 20px;
            color: #0d476d;
            font-weight: bold;
        }

        .descripcio-pdf {
            text-align: justify !important;
            font-size: 13px;
        }

        .imatge1 {
            display: inline-block;
            margin-right: 30px; 
            width: 200px;
        } 

        .imatge2 {
            display: inline-block; 
            width: 200px;
        } 

        table{ 
            width: 100%;
            text-decoration: none; 
            font-size: 12px; 
            color: #000;
        }

        table, table th, table td{
            border: 1px solid #FFF;
            border-collapse: collapse
        }

        table td, table th{
            padding: 5px 0px;
            text-align: center;
            color:#000;
        }

        .header-taula {
            background: #b6c7d3;
        }

        .content-taula {
            background: #f7f9fa;
        }
    </style>
    <body>
        <img src="{{ public_path("backend/images/logo.png") }}" alt="{{ $titol }}">
        <br>
        <p class="titol-pdf">
            {{ $titol }}
        </p>
        <div class="descripcio-pdf">
            {!! $descripcio !!}
        </div>
        <br><br><br>
        <img class="imatge1" src="{{ __DIR__ .'/../../app/public/'.$imatge1 }}" alt="{{ $titol }}">
        @if ($imatge2)
            <img class="imatge2" src="{{ __DIR__ .'/../../app/public/'.$imatge2 }}" alt="{{ $titol }}">
        @endif
        <br><br>
        @if (!$taules->isEmpty())
            <table class="table table-bordered table-hover">
                @foreach ($taules as $producteTaula)
                    {{ \App\Http\Controllers\ProductesFrontendController::excelProduct(__DIR__ .'/../../app/public/'.$producteTaula->excel, $producteTaula->files_th_excel) }}
                @endforeach
            </table>
        @endif
    </body>
</html>