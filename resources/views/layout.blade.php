<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
    <meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
        body{
            background: grey;
            color:black;
        }
        ul li{
            display: inline-block;
        }
        main{
          display: grid;
          grid-template-columns: auto auto auto auto;
          grid-gap: 2px;
          background: lightgrey;
          padding: 5px;
        }
        main > div{
          background-color: grey;
          padding: 10px 0;
          font-size: 30px;
        }
        main div{
            min-width: 249px;
            width: 80%;
            text-align: center;
            color:white;
        }
        main div span{
            width:70%;
            font-size: 15px;
            word-wrap: break-word;
            overflow: auto;  
        }
        label{
            color:white;
        }
    </style>
    <hr>
    <div style="background: orange;width: 100%;text-align: center">
                <a style="color:black;" href="/addHome">Add Home Post</a>
                </div>
                <hr>
        <form class="form-group" action="{{ route('poooo') }}" method="POST">
            @csrf
            <div>
            <label style="display: inline-block;">Hood :</label>
                <select style="color:black;width: 30%;display: inline-block;" class="form-control" name="select">
                    <option>Empty</option>
                    <option value="ვაკე">ვაკე</option>
                    <option value="საბურთალო">საბურთალო</option>
                    <option value="დიდუბე">დიდუბე</option>
                    <option value="ბაგები">ბაგები</option>
                </select>
            </div>

                    <hr>
                <div>
                    <label style="display: inline-block;">Search :</label>
                    <input style="display: inline-block;width: 50%;" type="search" class="form-control"   name="search" placeholder="Search..">
                </div>
                    <hr>
                <label for="minA">m<sup>2</sup> :</label>
                <input id="minA" type="number" class="form-control" min="15" style="width: 10%;display: inline-block;" placeholder="15 - Minimum" class="form-control" name="minNumber" >
                    -
                <input type="number" class="form-control" min="15" style="width: 10%;display: inline-block;" placeholder="Max" class="form-control" name="maxNumber">
                <hr>
                <label for="minA">Cost :</label>
                <input id="minA" type="number" class="form-control" min="1500" style="width: 10%;display: inline-block;" placeholder="1500 - Min" class="form-control" name="minMoney">
                    -
                <input type="number" class="form-control" style="width: 10%;display: inline-block;" placeholder="Max" class="form-control" name="maxMoney">
                <hr>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Number of rooms :</label>
            <div class="form-check form-check-inline">
              <input name="rooms" class="form-check-input" type="radio" id="inlineRadio1" value="1">
              <label class="form-check-label" for="inlineRadio1">1</label>
            </div>
            <div class="form-check form-check-inline">
              <input name="rooms"    class="form-check-input" type="radio" id="inlineRadio2" value="2">
              <label class="form-check-label" for="inlineRadio2">2</label>
            </div>
            <div class="form-check form-check-inline">
              <input name="rooms"    class="form-check-input" type="radio"  id="inlineRadio2" value="3">
              <label class="form-check-label" for="inlineRadio2">3</label>
            </div>
            <div class="form-check form-check-inline">
              <input name="rooms"    class="form-check-input" type="radio"  id="inlineRadio2" value="4">
              <label class="form-check-label" for="inlineRadio2">4</label>
                </div>
                            <div class="form-check form-check-inline">
              <input name="rooms"    class="form-check-input" type="radio"  id="inlineRadio2" value="5">
              <label class="form-check-label" for="inlineRadio2">5</label>
                </div>
         </div>
            <hr>
         <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">Central heating : </label>
           <input name="centraluri"    class="form-check-input" type="checkbox"  id="inlineRadio2" value="1">       
         </div>
         <hr>
{{--                 <select name="check">
                    <option>Empty</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> --}}
                <button  type="submit"  class="form-control btn-primary">Search</button>
        </form>
        <hr>
        <form action="{{ route('wel') }}">
            <button  type="submit"  class="form-control btn-secondary" required>UnFill</button>
        </form>
        <hr>
        <main>
                @yield('main')
        </main>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>