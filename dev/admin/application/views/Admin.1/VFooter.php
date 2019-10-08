</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">									
					<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
					<p>
						<b>We'll let you know when it's done</b></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="<?php echo base_url(); ?>assets/dashboard/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboard/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboard/js/core/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboard/js/core/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboard/js/plugin/chartist/chartist.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboard/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboard/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboard/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboard/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboard/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboard/js/plugin/chart-circle/circles.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboard/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!--<script src="<?php echo base_url(); ?>assets/dashboard/js/ready.min.js"></script>
<script src="<?php echo base_url(); ?>assets/dashboard/js/demo.js"></script>-->

<!-- Carga de libreria JavaScript para DataTables -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/af-2.3.2/b-1.5.4/b-colvis-1.5.4/b-flash-1.5.4/b-html5-1.5.4/b-print-1.5.4/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-1.5.0/sl-1.2.6/datatables.min.js"></script>

<!-- Carga de los scripts para DataTables -->
<?php if($this->uri->segment(1)=='CClient') {?> 
	<script src="<?php echo base_url(); ?>assets/datatables/ClientsData.js"></script>
<?php }?>

<script type="text/javascript">
	var baseurl = "<?php echo base_url(); ?>";
</script>

</html>