<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>manager dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
               integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

     <script src="https://kit.fontawesome.com/d7f2c0c4f0.js" crossorigin="anonymous"></script>          
     <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <div class="wrapper">
         <aside id="sidebar">
            <div class="d-flex">
               <button id="toggle-btn" type="button">
               <i class="fa-solid fa-bars"></i>
               </button>

               <div class="sidebar-logo">
                  <a href="#">minimarket</a>
               </div>

            </div>

            
      
            <ul class="sidebar-nav">
                  <li class="sidebar-item">
                     <a href="#" class="sidebar-link">
                     <i class="fa-solid fa-user"></i>
                        <span> Products </span>
                     </a>
                  </li>

                  <li class="sidebar-item">
                     <a href="#" class="sidebar-link">
                     <i class="fa-solid fa-chart-simple"></i>
                        <span> statistics </span>
                     </a>
                  </li>

                  <li class="sidebar-item">
                     <a href="#" class="sidebar-link has-dropdown collapsed"data-bs-toggle="collapse" 
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth" >
                        <i class="fa-solid fa-hand-holding-dollar fa-bounce"></i>
                           <span> Sales </span>
                     </a>
                     <ul id="auth" class="sidebar-dropdown list-unstyled collapse"  data-bs-target="#sidebar">
                           <li class="sidebar-list"> 
                              <a href="#" class="sidebar-link">Branch 1</a>
                           </li>
                     
                           <li class="sidebar-list"> 
                              <a href="#" class="sidebar-link">Branch 2</a>
                           </li>


                        </ul>
                     
                  </li>

                  <li class="sidebar-item">

                        <a href="" class="sidebar-link has-dropdown collapsed " data-bs-toggle="collapse" 
                           data-bs-target="#stakeholders" aria-expanded="false" aria-controls="stakeholders" >
                           <i class="fa-solid fa-people-group"></i>
                           <span> Stakeholders</span>
                        </a>

                        <ul id="stakeholders" class="sidebar-dropdown list-unstyled collapse"  data-bs-target="#sidebar">
                           <li class="sidebar-item">

                                 <a href="#" class="sidebar-link collapsed " data-bs-toggle="collapse" 
                                       data-bs-target="#traders" aria-expanded="false" aria-controls="traders" >
                                                <p class="sidebar-link">
                                                   manage stakeholders
                                 </a>

                                 <ul  id="traders" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                       <a href="#" class="sidebar-link">Agents</a>
                                    </li>

                                    <li class="sidebar-item">
                                       <a href="#" class="sidebar-link">Supliers</a>
                                    </li>
                                       
                                    <li class="sidebar-item">
                                       <a href="#" class="sidebar-link">Customers</a>
                                    </li>

                                 </ul>
                           </li>
                           
                        </ul>
                  </li>

                  <li class="sidebar-item">
                     <a href="#" class="sidebar-link">
                     <i class="fa-solid fa-money-bill-trend-up"></i>
                        <span> Expenses </span>
                     </a>
                  </li>
                   
                  <li class="sidebar-item">
                     <a href="#" class="sidebar-link">
                     <i class="fa-solid fa-gear fa-spin"></i>
                        <span> settings</span>
                     </a>
                  </li>

                 
            </ul>

            <div class="sidebar-footer">
               <a href="#" class="sidebar-link">
                  <i class="fa-solid fa-person-walking-arrow-right"></i>
                  <span> logout</span>
               </a>
            </div>

         </aside>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/scripts/script.js"></script>
  </body>
</html>