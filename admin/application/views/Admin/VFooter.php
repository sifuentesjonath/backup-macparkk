    <script src="<?php echo base_url(); ?>assets/dashboard/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/main.js"></script>


    <script src="<?php echo base_url(); ?>assets/dashboard/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/dashboard.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/js/widgets.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url(); ?>assets/dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

    <!-- Carga de libreria JavaScript para DataTables -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/af-2.3.2/b-1.5.4/b-colvis-1.5.4/b-flash-1.5.4/b-html5-1.5.4/b-print-1.5.4/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>

    <!-- Carga de los scripts para DataTables -->
    <?php if($this->uri->segment(1)=='CClient') {?> 
        <script src="<?php echo base_url(); ?>assets/datatables/ClientsData.js"></script>
    <?php }?>

    <!-- Creación de la variable global base_url para js -->
    <script type="text/javascript">
        var baseurl = "<?php echo base_url(); ?>";
    </script>

</body>

</html>
