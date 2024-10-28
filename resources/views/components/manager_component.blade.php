<!doctype html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ $title ?? 'name'}}</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('dashboards/assets/vendor/fonts/boxicons.css')}}"/>

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('dashboards/assets/vendor/css/core.css')}}" class="template-customizer-core-css"/>
    <link rel="stylesheet" href="{{asset('dashboards/assets/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('dashboards/assets/css/demo.css')}}"/>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="dashboards/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"/> 
    <link rel="stylesheet" href="dashboards/assets/vendor/libs/apex-charts/apex-charts.css" />

    
    <script src="dashboards/assets/vendor/js/helpers.js" ></script>
    <script src="dashboards/assets/js/config.js"></script>
  </head>

  <body>
     <!--container -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
       
               <x-partials.manager_sidebar/> 

        <!-- Layout container -->
        <div class="layout-page">
          
                    <x-partials.navbar/>

          <!-- Content wrapper -->
          <div class="content-wrapper">
           
             {{($slot)}}


           <div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                  <div class="text-body">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with ❤️ by
                    <a href="#" target="_blank" class="footer-link">muuh developer</a>
                  </div>
                    

                    <a
                      href="#"
                      target="_blank"
                      class="footer-link"
                      >contact us</a>

                      <a
                      href="#"
                      target="_blank"
                      class="footer-link"
                      >safi product store</a>
                    
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="#"
        target="_blank"
        class="btn btn-danger btn-buy-now">
        safi store
      </a>
      
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="dashboards/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="dashboards/assets/vendor/libs/popper/popper.js"></script>
    <script src="dashboards/assets/vendor/js/bootstrap.js"></script>
    <script src="dashboards/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="dashboards/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="dashboards/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="dashboards/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="dashboards/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>