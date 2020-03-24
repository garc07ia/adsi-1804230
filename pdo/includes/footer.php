  <!-- JavaScript-->
  <script src="<?php echo $vendor; ?>jquery/jquery.min.js"></script>
  <script src="<?php echo $vendor; ?>bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $vendor; ?>jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo $vendor; ?>datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo $vendor; ?>datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo $js; ?>sb-admin-2.min.js"></script>
  <script src="<?php echo $js; ?>sweetalert2.all.min.js"></script>
  <script>
  	$(document).ready(function(){
      // --------------------------------------------------------------
      $('#dataTable').dataTable();
      // --------------------------------------------------------------
  		<?php if (isset($_SESSION['message'])): ?>
    		Swal.fire(
    			'Muy bien!',
    			'<?php echo $_SESSION['message'] ?>',
    			'success'
    		);
    		<?php unset($_SESSION['message']); ?>
  		<?php endif ?>
      //*--------------------------------------------------------------*
      <?php if (isset($_SESSION['error'])): ?>
        Swal.fire(
          'Error!',
          '<?php echo $_SESSION['error'] ?>',
          'error'
        );
        <?php unset($_SESSION['error']); ?>
      <?php endif ?>
  	});
  </script>

</body>
</html>