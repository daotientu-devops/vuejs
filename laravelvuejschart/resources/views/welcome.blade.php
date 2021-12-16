<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add Coin Details</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
    </head>
    <body>
        <div class="container" id="app">
            <add-component></add-component>
            <chart-gold-component></chart-gold-component>
            <chart-component></chart-component>
        </div>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token()
            ]); ?>
        </script>
        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
