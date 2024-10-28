

<x-manager_component>

<x-slot name='title'>
       All categories
</x-slot>


 <div class="card p-4">
                <h5 class="card-header">All categories</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                       @foreach($categories as $item)
                       <tr>
         
                          <td>{{($item->id)}}</td>
                          <td>
                            <img src="{{asset($item->image)}}" style="height:70px; width:70px" alt="internet">
                            
                          </td>
                          <td>{{($item->name)}}</td>
                          <td>{{($item->description)}}</td>
                          <td> 
                              @if($item->is_active)
                                  available
                                 @else 
                                  unavaillable

                                  @endif
                            </td>                       
                          
                        
                          <td>
                           
                            <a href="{{url('category/'.$item->id.'/edit')}}" class="btn btn-success">Edit</a>
                            <a href="{{url('category/delete')}}" class="btn btn-danger">Delete</a>
                          </td>
                       </tr>
                       @endforeach
                        
                      
                    </tbody>
                  </table>
                </div>
              </div>

              




</x-manager_component>