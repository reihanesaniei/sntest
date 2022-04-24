@extends('layouts.master')
@section('content')
    <!-- ======= Hero Section ======= -->
    <main id="main">
        <div class="container">
            <div class="row">
                <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">شماره</th>
                        <th scope="col">سمبل</th>
                        <th scope="col">نام ارز</th>
                        <th scope="col">قیمت (usd)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $counter = 0;?>
                    @foreach($pricelist as $price)
                        <tr>
                            <th scope="row"><?php echo $counter++; ?></th>
                            <td>{{$price["id"]}}</td>
                            <td>{{$price["name"]}}</td>
                            <td>{{$price["current_price"]}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </main><!-- End #main -->
    <script>
        function fetchdata(){
            $.ajax({
                url: '/api/pricelist',
                type: 'get',
                success: function(response){
                    $("#body").html('');
                    $("#body").html(response);
                }
            });
        }

        $(document).ready(function(){
            setInterval(fetchdata,15000);
        });

    </script>
@endsection
