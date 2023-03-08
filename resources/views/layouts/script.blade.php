<script src="{{ asset('js/app.js') }}" ></script>
	<script src="{{asset('frontend/plugins/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('frontend/plugins/bootstrap3/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/plugins/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('frontend/js/forum/apps.min.js')}}"></script>
    <script src="{{asset('frontend/js/swal/sweetalert2.all.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->

	<script>
	    $(document).ready(function() {
	        App.init();
	    });
    </script>
    <script type="text/javascript">
        $(document).on('click', '.search-btn', function(e){
            _curr_val = $('#search_status').val();
            $('#search_status').val(_curr_val + $(this).html());
        });
      
        $(document).on('click', '#search-btn', function (e) {
            var search_status = $("#search_status").val();
            $.get('pencarian-laundry',{'_token': $('meta[name=csrf-token]').attr('content'),search_status:search_status}, function(resp){
                  if (resp != 0) {
                        $(".modal_status").show();
                        $("#customer").html(resp.customer);
                        $("#tgl_transaksi").html(resp.tgl_transaksi);
                        $("#status_order").html(resp.status_order);
                  }else{
                      swal({html: "No Invoice Tidak Terdaftar!"})
                  }
            });
        });
        function close_dlgs(){
              $(".modal_status").hide();
              $("#search_status").val("");
        }
      </script>