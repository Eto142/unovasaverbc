
        <!-- App Footer start -->
        <div class="app-footer">
          <span>© Unova Saver Bank Corporation 2026</span>
        </div>
        <!-- App footer end -->

      </div>
      <!-- Main container end -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
      ************ Required JavaScript Files *************
    ************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/modernizr.js')}}"></script>
    <script src="{{asset('admin/assets/js/moment.js')}}"></script>

    <!-- *************
      ************ Vendor Js Files *************
    ************* -->

    <!-- Overlay Scroll JS -->
    <script src="{{asset('admin/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/overlay-scroll/custom-scrollbar.js')}}"></script>

    <!-- News ticker -->
    <script src="{{asset('admin/assets/vendor/newsticker/newsTicker.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/newsticker/custom-newsTicker.js')}}"></script>

    <!-- Apex Charts -->
    <script src="{{asset('admin/assets/vendor/apex/apexcharts.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/apex/custom/dash2/revenue.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/apex/custom/dash2/analytics.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/apex/custom/dash2/sparkline.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/apex/custom/dash2/sales.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/apex/custom/dash2/reports.js')}}"></script>

    <!-- Vector Maps -->
    <script src="{{asset('admin/assets/vendor/jvectormap/jquery-jvectormap-2.0.5.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jvectormap/world-mill-en.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jvectormap/gdp-data.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jvectormap/continents-mill.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jvectormap/custom/world-map-markers4.js')}}"></script>

    <!-- Rating JS -->
    <script src="{{asset('admin/assets/vendor/rating/raty.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/rating/raty-custom.js')}}"></script>

    		<!-- Data Tables -->
		<script src="{{asset('admin/assets/vendor/datatables/dataTables.min.js')}}"></script>
		<script src="{{asset('admin/assets/vendor/datatables/dataTables.bootstrap.min.js')}}"></script>
		<script src="{{asset('admin/assets/vendor/datatables/custom/custom-datatables.js')}}"></script>

    <!-- Main Js Required -->
    <script src="{{asset('admin/assets/js/main.js')}}"></script>

    <!-- Shared: tooltips + responsive card-collapse tables (see brand-theme.css .table-card-collapse) -->
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).forEach(function (el) {
          new bootstrap.Tooltip(el);
        });

        document.querySelectorAll('.table-card-collapse').forEach(function (table) {
          var headers = table.querySelectorAll('thead th');
          table.querySelectorAll('tbody tr').forEach(function (row) {
            row.querySelectorAll('td').forEach(function (cell, index) {
              if (headers[index]) {
                cell.setAttribute('data-label', headers[index].textContent.trim());
              }
            });
          });
        });
      });
    </script>
  </body>

</html>