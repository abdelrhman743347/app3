{{--<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">--}}



{{--<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>--}}
<script src="{{ asset('dashboard/bower_components/fastclick/lib/fastclick.js') }}"></script>

<script src="{{ asset('dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}'"></script>

<script src="{{ asset('dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>

<script src="{{ asset('dashboard/plugins/noty/noty.min.js')}}"></script>

<!-- jQuery 3 -->
<script src="{{ asset('dashboard/bower_components/jquery/dist/jquery.min.js')  }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('dashboard/bower_components/jquery-ui/jquery-ui.min.js')  }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js')  }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('dashboard/bower_components/raphael/raphael.min.js')  }}"></script>
<script src="{{ asset('dashboard/bower_components/morris.js/morris.min.js')  }}"></script>
<!-- Sparkline -->
<script src="{{ asset('dashboard/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')  }}"></script>
{{--      <!-- jvectormap -->--}}
<script src="{{ asset('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')  }}"></script>
<script src="{{ asset('dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')  }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('dashboard/bower_components/jquery-knob/dist/jquery.knob.min.js')  }}"></script>

<script src="{{ asset('dashboard/bower_components/moment/min/moment.min.js')  }}"></script>
<script src="{{ asset('dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.js')  }}"></script>
<!-- datepicker -->
<script src="{{ asset('dashboard/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')  }}"></script>

<script src="{{ asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')  }}"></script>

<script src="{{ asset('dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')  }}"></script>

<script src="{{ asset('dashboard/bower_components/fastclick/lib/fastclick.js')  }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard/dist/js/adminlte.min.js')  }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dashboard/dist/js/pages/dashboard.js')  }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dashboard/dist/js/demo.js')  }}"></script>
<script>
    //delete
    $('.delete').click(function (e) {

        var that = $(this)

        e.preventDefault();

        var n = new Noty({
            text: "Confirm Delete",
            type: "warning",
            killer: true,
            buttons: [
                Noty.button("YES", 'btn btn-success mr-2', function () {
                    that.closest('form').submit();
                }),

                Noty.button("No", 'btn btn-primary mr-2', function () {
                    n.close();
                })
            ]
        });

        n.show();

    });//end of delete
</script>
