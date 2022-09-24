<script src="{{asset('/backend/js/all.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/Chart.min.js')}}"></script>
<script src="{{asset('backend/js/chart-area-demo.js')}}"></script>
<script src="{{asset('backend/js/chart-bar-demo.js')}}"></script>
<script src="{{asset('backend/js/datatables-simple-demo.js')}}"></script>
<script src="{{asset('backend/js/simple-datatables.js')}}"></script>
<script src="{{asset('js/mdb.min.js')}}"></script>
<script>
  //toottip
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
  </script>

  @yield('footer-script')
  
  

</body>
</html>
