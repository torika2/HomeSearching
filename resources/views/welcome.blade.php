@extends('layout')
@section('main')
    @foreach ($house as $houses)
        <div>
            <img src="#" height="300px" width="90%">
            <span><b>Address</b> : <code style="color:orange;">{{$houses->address}}</code></span>
                <br>
            <span><b>Rooms</b> : <code style="color:orange;">{{$houses->rooms}}</code></span>
                <br>
            <span><b>Price</b> : <code style="color:orange;">{{$houses->money}}$</code></span>
                <br>
            <span><b>m<sup>2</sup></b>: <code style="color:orange;">{{$houses->meter}}</code></span>
                <br>
            <span><b>Description</b> : <code style="color:orange;">{{$houses->description}}</code></span>
            <br>
                @if ($houses->centraluri == 1)
                    <span><b>Central Heating :</b > <code style="color:orange;">Exist</code></span> 
                @else
                   <span><b>Central Heating :</b> <code>Not Exist</code></span>   
                @endif
        </div>
    @endforeach
@endsection