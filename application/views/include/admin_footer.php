<!---->

<div class="copy">

    <p> ©<?=date("Y");?> NEST || ALL Right Reserved </p>

</div>

</div>

<div class="clearfix"> </div>

</div>

</div>

<!---->

<!--scrolling js-->

<script src="<?php echo base_url(); ?>media/admin/js/jquery.nicescroll+.js"></script>

<script src="<?php echo base_url(); ?>media/admin/js/scripts+.js"></script>

<!--//scrolling js-->

<script src="<?php echo base_url(); ?>media/admin/js/bootstrap.min.js"> </script>

<script src="<?php echo base_url(); ?>media/admin/js/jquery.multi-select.js"> </script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'lBfrtip',
            buttons: [
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
    });
</script>


<script type="text/javascript">
    $(function() {
        $('#people').multiSelect();
        $('#line-wrap-example').multiSelect({
            positionMenuWithin: $('.position-menu-within')
        });
        $('#categories').multiSelect({
            noneText: 'All categories',
            presets: [{
                    name: 'All categories',
                    options: []
                },
                {
                    name: 'My categories',
                    options: ['a', 'c']
                }
            ]
        });
    });
</script>

<script src="<?php echo base_url(); ?>media/admin/commonjs/ajax.js"> </script>

 
