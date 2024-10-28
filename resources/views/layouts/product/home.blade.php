<x-manager_component>

<x-slot name='title'>
       product home
</x-slot>

  <div class="containner">

  <div class="heading text-center mb-3">
   <div class=""><h3 class="fw-bold text-primary">choose brand</h3></div> 
  </div>

    <div class="row justify-content-center">
        <div class="col-md-4 p-3 rounded-start ">
            <div class="card text-center">
                <div class="card-header">
                    <h3>safi</h3>
                </div>

                <div class="card-body">
                    <a href="{{url('safi/products/')}}">
                    <img src="{{asset('images/powder.jpeg')}}" alt="internet">
                    </a>
                    <div class="details text-center"> 
                        <p class="text-danger">
                            Baking products Store</p> 
                    </div>

                </div>
            </div>
        </div>


        <div class="col-md-4 p-3 rounded-end " >
            <div class="card text-center">
                <div class="card-header">
                    <h3>Sai</h3>
                </div>

                <div class="card-body">
                    <a href="{{url('sai/products/')}}">
                    <img src="{{asset('images/plastic.jpeg')}}" alt="internet">
                    </a>
                    <div class="details text-center"> 
                        <p class="text-danger">Plastic products Store</p> 
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>


</x-manager_component>