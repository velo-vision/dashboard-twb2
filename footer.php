

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>


<script>
$( document ).ready(function() {
  wedding();
  $(".directorio-proveedor").change(function() {
    wedding();
  });

  function wedding() {
    var seleccion = $(".directorio-proveedor option:selected").val();
    if(seleccion != "proveedorsito"){
      $(".perfiles > div").hide();
      $(".perfiles ."+seleccion).show();
    }
  }

});
</script>

<script>
$( document ).ready(function() {
  wedding();
  $(".directorio-proveedor2").change(function() {
    wedding();
  });

  function wedding() {
    var seleccion = $(".directorio-proveedor2 option:selected").val();
    if(seleccion != "perfilito"){
      $(".perfiles2 > div").hide();
      $(".perfiles2 ."+seleccion).show();
    }
  }

});
</script>
<script>
/* Demo purposes only */
$(".hover").mouseleave(
function () {
  $(this).removeClass("hover");
}
);
</script>

<!-- Resolve-->
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

 <!--conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>

<?php 
/*

<link rel="stylesheet" href="tablas/jq.css" type="text/css" media="print, projection, screen" />
  <link rel="stylesheet" href="tablas/style.css" type="text/css" media="print, projection, screen" />


  <script type="text/javascript" src="tablas/jquery-latest.js"></script>
  
  <script type="text/javascript" src="tablas/jquery.tablesorter.js"></script>
  <script type="text/javascript" src="tablas/jquery.tablesorter.pager.js"></script>
  <!-- <script type="text/javascript" src="js/chili/chili-1.8b.js"></script> -->
  <script type="text/javascript" src="tablas/docs.js"></script>
  
  <script type="text/javascript">
  $(function() {
    // add new widget called repeatHeaders
    $.tablesorter.addWidget({
      // give the widget a id
      id: "repeatHeaders",
      // format is called when the on init and when a sorting has finished
      format: function(table) {
        // cache and collect all TH headers
        if(!this.headers) {
          var h = this.headers = []; 
          $("thead th",table).each(function() {
            h.push(
              "<th>" + $(this).text() + "</th>"
            );
            
          });
        }
        
        // remove appended headers by classname.
        $("tr.repated-header",table).remove();
        
      }
    });
    
    // call the tablesorter plugin and assign widgets with id "zebra" (Default widget in the core) and the newly created "repeatHeaders"
    $("table").tablesorter({
      widgets: ['zebra','repeatHeaders']
    });

  });     
  </script>



*/
 ?>

  
</body>
</html>
