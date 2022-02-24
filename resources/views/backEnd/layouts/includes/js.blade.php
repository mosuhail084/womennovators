
<!--- JQuery min js -->
<script src="{{ url('backEnd/plugins/jquery/jquery.min.js')}}"></script>

<!--- Datepicker js -->
<script src="{{ url('backEnd/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>


<!--- Ionicons js -->
<script src="{{ url('backEnd/plugins/ionicons/ionicons.js')}}"></script>

<!--- Chart bundle min js -->
<script src="{{ url('backEnd/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!--- Internal Sampledata js -->
<script src="{{ url('backEnd/js/chart.flot.sampledata.js')}}"></script>
<!--- Index js -->
<script src="{{ url('backEnd/js/index.js')}}"></script>

<!--- Moment js -->
<script src="{{ url('backEnd/plugins/moment/moment.js')}}"></script>

<!--- JQuery sparkline js -->
<script src="{{ url('backEnd/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

<!--- Perfect-scrollbar js -->
<script src="{{ url('backEnd/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{ url('backEnd/plugins/perfect-scrollbar/p-scroll.js')}}"></script>


<!--- Rating js -->
<script src="{{ url('backEnd/plugins/rating/jquery.rating-stars.js')}}"></script>
<script src="{{ url('backEnd/plugins/rating/jquery.barrating.js')}}"></script>

<!--- Custom Scroll bar Js -->
<script src="{{ url('backEnd/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>


<!--- Sidebar js -->
<script src="{{ url('backEnd/plugins/side-menu/sidemenu.js')}}"></script>


<!--- Right-sidebar js -->
<script src="{{ url('backEnd/plugins/sidebar/sidebar.js')}}"></script>
<script src="{{ url('backEnd/plugins/sidebar/sidebar-custom.js')}}"></script>

<!--- Eva-icons js -->
<script src="{{ url('backEnd/js/eva-icons.min.js')}}"></script>

<!--- Scripts js -->
<script src="{{ url('backEnd/js/script.js')}}"></script>

<!--- Custom js -->
<script src="{{ url('backEnd/js/custom.js')}}"></script>

<!--- Switcher js -->
<script src="{{ url('backEnd/switcher/js/switcher.js')}}"></script>


<!--table-->

<!--- Bootstrap Bundle js -->
<script src="{{ url('backEnd/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


<!-- Internal Data tables -->
<script src="{{ url('backEnd/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ url('backEnd/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!-- datatable js -->
<script src="{{ url('backEnd/js/table-data.js')}}"></script>


		<!--- Internal jquery.maskedinput js -->
<script src="{{ url('backEnd/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--- Internal Spectrum-colorpicker js -->
<script src="{{ url('backEnd/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<!--- Select2.min js -->
<script src="{{ url('backEnd/plugins/select2/js/select2.min.js')}}"></script>
<!--- Internal ion.rangeSlider.min js -->
<script src="{{ url('backEnd/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>

<!--- Internal jquery-simple-datetimepicker js -->
<script src="{{ url('backEnd/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!--- Ionicons js -->
<script src="{{ url('backEnd/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!--- Internal Pickerjs js -->
<script src="{{ url('backEnd/plugins/pickerjs/picker.min.js')}}"></script>
<!-- form-elements js -->
<script src="{{ url('backEnd/js/form-elements.js')}}"></script>

<!--- Quill js -->
<script src="{{ url('backEnd/plugins/quill/quill.min.js')}}"></script>
<!--- Internal Form-editor js -->
<script src="{{ url('backEnd/js/form-editor.js')}}"></script>

<script src="{{ url('backEnd/js/summernote.js')}}"></script>  
<script>
        $(document).ready(function() {
            $('.summernote').summernote();
            
            $('.dataTable1').DataTable();
        });
    
</script>
<!--- Internal Form-elements js -->
<script src="{{ url('backEnd/js/advanced-form-elements.js')}}"></script>
<script src="{{ url('backEnd/js/select2.js')}}"></script>
		<!--- Internal Sumoselect js -->
<script src="{{ url('backEnd/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
		