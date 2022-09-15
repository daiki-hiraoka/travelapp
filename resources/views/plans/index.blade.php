<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Travel Plan</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Travel Plan</h1>
        <div class='plans'>
            @foreach($plans as $plan)
                <div class='plan'>
                    <h2 class='title'>{{ $plan->title}}</h2>
                    <p class='place'>{{ $plan->place}}</p>
                    <p class='people'>{{ $plan->people}}人</p>
                    <p class='spot'>{{ $plan->spot}}</p>
                    <p class='cost'>{{ $plan->cost}}円</p>
                    <p class='date'>{{ $plan->date}}日</p>
                    <p class='move'>{{ $plan->move}}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $plans->links() }}
        </div>
    </body>
</html>