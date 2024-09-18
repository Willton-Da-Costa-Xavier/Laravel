<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>

        <title>Laravel</title>


    </head>
    <body>
        <h1>Algum titulo</h1>
        <img src="/img/image.jpg" alt="">
        @if(10 > 15)
            <p>A condicao e true</p>
        @endif    

        @if($nome == "Tomas")
        <p>O nome e Tomas</p>
        @elseif($nome == "Maria")
        <p>O nome e Maria</p>
        @else
        <p>O nome e Willas e ele tem {{$idade}} anos e trabalha como {{$profissao}}</p>
        @endif

        @for($i =0;$i < count($arr);$i++)
        <p>{{$arr[$i]}} - {{$i}}</p>
        @if($i==2)
        <p>O i e 2</p>
        @endif
        @endfor

        @foreach($nomes as $nome)
            <p>{{$loop->index}}</p>
            <p>{{$nome }}</p>
        @endforeach

        @php
            $name = "Joana";
            echo $name;
        @endphp

        {{-- Este e o comentario do HTML --}}
    </body>
</html>
