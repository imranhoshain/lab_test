/**
* ---------------------------------------------------------------------------
Author: princ-imran
Version: 1.0
* --------------------------------------------------------------------------- 
*/

(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        /*---------------------------------------------------
                    Session Alert
        ---------------------------------------------------*/
        $(document).ready(function () {
            $('.alert').delay(2000).fadeOut(1000, function () {
                $(this).alert('close');
            });
        });

        /*---------------------------------------------------
                    Delete Data On database with Modal
        ---------------------------------------------------*/
        $(document).on('click','.delete',function () {
            var id = $(this);
            $('#delete').val(id.data('id'));
        });

        /*---------------------------------------------------
                    Datatable
        ---------------------------------------------------*/

        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });

        /*---------------------------------------------------
                    Slicknav
        ---------------------------------------------------*/

        $('#nav').slicknav({
            prependTo: ".responsive-menu-wrap"
        });

    });

    jQuery(window).load(function () {


    });

}(jQuery));