
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- custome css-->
   <link rel="stylesheet" href="/assets/css/styles.css">

<!-- bootstrap css -->
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">


    <title>{{$title ?? '' }}</title>
</head>
<body>

    <div class="wrapper">

        <x-partials.sidebar-customer/>

        <div class="main">
            <x-partials.navbar/>

            <main class="content px-3">
               {{$slot}}
            </main>  

        </div>
        
        
     
      


    </div>
     
    

   <!-- start js -->
<script src="/assets/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/d7f2c0c4f0.js" crossorigin="anonymous"></script>
<!-- end js -->

</body>
</html>



