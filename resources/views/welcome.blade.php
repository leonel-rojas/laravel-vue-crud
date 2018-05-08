<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel & Vue</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body>
        <div id="main" class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h1>VUEjs - AJAX axios</h1>
                        <ul class="list-group">
                            <li v-for="item in lists" class="list-group-item">						
                                @{{ item.name }}
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-8">
                        <h1>JSON</h1>
                        <pre>
                            @{{ $data }}
                        </pre>
                    </div>
                </div>
            </div>            
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
