 <!-- Footer -->
 </body>
 <footer class="content-footer footer bg-footer-theme">
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

 <!-- Core JS -->
 <!-- build:js assets/vendor/js/core.js -->
 <script src="<?=base_url('assets/') ?>/assets/vendor/libs/jquery/jquery.js"></script>
 <script src="<?=base_url('assets/') ?>/assets/vendor/libs/popper/popper.js"></script>
 <script src="<?=base_url('assets/') ?>/assets/vendor/js/bootstrap.js"></script>
 <script src="<?=base_url('assets/') ?>/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

 <script src="<?=base_url('assets/') ?>/assets/vendor/js/menu.js"></script>
 <!-- endbuild -->

 <!-- Vendors JS -->
 <script src="<?=base_url('assets/') ?>/assets/assets/vendor/libs/apex-charts/apexcharts.js"></script>

 <!-- Main JS -->
 <script src="<?=base_url('assets/') ?>/assets/js/main.js"></script>

 <!-- Page JS -->
 <script src="<?=base_url('assets/') ?>/assets/js/dashboards-analytics.js"></script>

 <!-- Place this tag in your head or just before your close body tag. -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>
 <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        })
</script>
 </body>

 </html>