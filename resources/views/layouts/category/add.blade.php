<x-manager_component>

<x-slot name='title'>
        Add category
</x-slot>


<div class="container">
    <div class="row">
        <div class="col-md-10 py-5">

                @if (session('status'))
                   <div class="alert bg-success mb-3">{{session('status')}}</div>
                @endif
            <div class="card">
                <div class="card-header ">
                  <h4 class="text-center">
                     Add category
                     <a href="{{url('category/list')}}" class="btn btn-primary float-end">view list</a>
                  </h4>  
                  
                    
                </div>


                <div class="cardbody p-5">

                    <form action="{{url('category/add')}}"  method="POST" enctype="multpart/file-data">
                           @csrf
                        
                           
                        <div class="row mb-6">
                            <label class="col-sm-2 col-form-label" >Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" 
                            name="name" 
                            value="{{old('name')}}"
                            id="basic-default-name" 
                            placeholder="eg. electronics" />
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-sm-2 col-form-label" >Description</label>
                            <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="description" 
                                value="{{old('description')}}"
                                placeholder=" short description" />
                            </div>
                        </div>
                        
             

                        <div class="row mb-6">
                            <label class="col-sm-2 col-form-label" >Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" 
                                name="image" 
                                />
                            </div>
                        </div>

                        <div class="row mb-6">
                            <label class="col-sm-2 col-form-label">Availability</label>
                            <div class="col-sm-10">
                            <input
                                type="checkbox"                            
                                name="is_active" 
                                 {{old('is_active') == true ? 'checked':''}}
                                
                                />
                            </div>
                        </div>
                        
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
           </div>
        </div>
    </div>
</div>
            
                 
</x-manager_component>
