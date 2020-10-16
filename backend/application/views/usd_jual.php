<?php $this->load->view('header_admin'); ?>
<style type="text/css">
    .close{
        display: contents;
    }

</style>
 
	 		 <div class="modal-body">
	 		 <legend><h3><i class="fas fa-dollar-sign"></i> USD Jual</h3></legend>
                    <div class="btn btn-danger"><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#ModalaAdd"><span class="fas fa-plus-square"></span> Tambah USD Jual</a></div>
  	<hr/>
  	</div>


  	<body>
	<div class="container">
	<div class="row">
			 <div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="mydata" width="100%" cellspacing="0" >
				<thead>
				<tr>
				<th>ID USD</th>
			    <th>Mata Uang</th>
				<th>Jual Week</th>
				<th>Jual Month</th>
				<th>Jual Tree Month</th>
				<th>Jual Six Month</th>
                <th>Data Label</th>
                <th>Data Created</th>
                <th>Aksi</th>

				</tr>
			</thead>
			
			<tbody id="show_data">

			</tbody>
			</table>
		
		</div>
	</div>
  <!-- MODAL TAMBAH -->
   <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                 <h6 class="modal-title" id="myModalLabel">Tambah USD</h6>
    

            </div>
            <form class="form-horizontal">
                <div class="modal-body">


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Mata Uang</label>
                        <div class="col-xs-9">
                            <input name="mata_uang" id="mata_uang" class="form-control" type="text" placeholder="Mata Uang" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jual Week</label>
                        <div class="col-xs-9">
                            <input name="jual_week" id="jual_week" class="form-control" type="text" placeholder="Jual Week"  required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jual Month</label>
                        <div class="col-xs-9">
                            <input name="jual_month" id="jual_month" class="form-control" type="text" placeholder="Jual Month"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jual Tree Month</label>
                        <div class="col-xs-9">
                            <input name="jual_threemonth" id="jual_threemonth" class="form-control" type="text" placeholder="Jual Tree Month"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jual Six Month</label>
                        <div class="col-xs-9">
                            <input name="jual_six_month" id="jual_sixmonth" class="form-control" type="text" placeholder="Jual Six Month"  required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>

        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                         <h6 class="modal-title" id="myModalLabel">Hapus Kurs</h6>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <input type="hidden" name="id_usd" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus USD ini?</p></div>
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

           <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h6 class="modal-title" id="myModalLabel">Edit USD</h6>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Id Usd</label>
                        <div class="col-xs-9">
                            <input name="id_usd" id="id_usd" class="form-control" type="text"   readonly="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Mata Uang</label>
                        <div class="col-xs-9">
                            <input name="mata_uang_edit" id="id_mata_uang" class="form-control" type="text" placeholder="Mata Uang"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jual Week</label>
                        <div class="col-xs-9">
                            <input name="jual_week_edit" id="id_jual_week" class="form-control" type="text" placeholder="Jual Week"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jual Month</label>
                        <div class="col-xs-9">
                            <input name="jual_month_edit" id="id_jual_month" class="form-control" type="text" placeholder="Jual Month" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jual Three Month</label>
                        <div class="col-xs-9">
                            <input name="jual_threemonth_edit" id="id_jual_threemonth" class="form-control" type="text" placeholder="Jual Three Month" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Jual Six Month</label>
                        <div class="col-xs-9">
                            <input name="jual_sixmonth_edit" id="id_jual_sixmonth" class="form-control" type="text" placeholder="Jual Six Month" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
<?php $this->load->view('footer_admin'); ?>

<script type="text/javascript">
	$(document).ready(function(){
		tampil_data_usd();	
		$('#mydata').dataTable();

		function tampil_data_usd(){
		    $.ajax({
		        type  : 'ajax',
		        url   : 'http://localhost/backend/Usd_jual/data_usd',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].id_usd+'</td>'+
		                  		'<td>'+data[i].mata_uang+'</td>'+
		                  		'<td>'+data[i].jual_week+'</td>'+
		                  		'<td>'+data[i].jual_month+'</td>'+
		                  		'<td>'+data[i].jual_threemonth+'</td>'+
                                '<td>'+data[i].jual_sixmonth+'</td>'+
                                '<td>'+data[i].date_label+'</td>'+
                                '<td>'+data[i].date_created+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id_usd+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id_usd+'">Hapus</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }
		    });
		}

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id_usd=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "http://localhost/backend/Usd_jual/get_usd",
                dataType : "JSON",
                data : {id_usd:id_usd},
                success: function(data){
                	$.each(data,function(mata_uang, jual_week, jual_month, jual_threemonth, jual_sixmonth ,id_usd){
                    	$('#ModalaEdit').modal('show');
                        $('[name="id_usd"]').val(data.id_usd);
                        $('[name="mata_uang_edit"]').val(data.mata_uang);
            			$('[name="jual_week_edit"]').val(data.jual_week);
            			$('[name="jual_month_edit"]').val(data.jual_month);
            			$('[name="jual_threemonth_edit"]').val(data.jual_threemonth);
                        $('[name="jual_sixmonth_edit"]').val(data.jual_sixmonth);
            		});
                }
            });
            return false;
        });


		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="id_usd"]').val(id);
        });

		//Simpan USD
		$('#btn_simpan').on('click',function(){
            var mata_uang=$('#mata_uang').val();
            var jual_week=$('#jual_week').val();
            var jual_month=$('#jual_month').val();
            var jual_threemonth=$('#jual_threemonth').val();
            var jual_sixmonth=$('#jual_sixmonth').val();
            $.ajax({
                type : "POST",
                url  : "http://localhost/backend/Usd_jual/simpan_usd",
                dataType : "JSON",
                data : {mata_uang:mata_uang , jual_week:jual_week, jual_month:jual_month, jual_threemonth:jual_threemonth, jual_sixmonth:jual_sixmonth},
                success: function(data){
                    $('[name="mata_uang"]').val("");
                    $('[name="jual_week"]').val("");
                    $('[name="jual_month"]').val("");
                    $('[name="jual_threemonth"]').val("");
                    $('[name="jual_sixmonth"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_usd();
                }
            });
            return false;
        });

        //Update USD
        $('#btn_update').on('click',function(){
            var id_usd=$('#id_usd').val();
            var mata_uang=$('#id_mata_uang').val();
            var jual_week=$('#id_jual_week').val();
            var jual_month=$('#id_jual_month').val();
            var jual_threemonth=$('#id_jual_threemonth').val();
            var jual_sixmonth=$('#id_jual_sixmonth').val();
            $.ajax({
                type : "POST",
                url  : "http://localhost/backend/Usd_jual/update_usd",
                dataType : "JSON",
                data : {mata_uang:mata_uang , jual_week:jual_week, jual_month:jual_month, jual_threemonth:jual_threemonth, jual_sixmonth:jual_sixmonth , id_usd:id_usd},
                success: function(data){
                    console.log(data);
                    $('[name="id_usd"]').val("");
                    $('[name="mata_uang_edit"]').val("");
                    $('[name="jual_week_edit"]').val("");
                    $('[name="jual_month_edit"]').val("");
                    $('[name="jual_threemonth_edit"]').val("");
                    $('[name="jual_sixmonth_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_usd();
                }
            });
            return false;
        });


        //Hapus USD
        $('#btn_hapus').on('click',function(){
            var id_usd=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "http://localhost/backend/Usd_jual/hapus_usd",
            dataType : "JSON",
                    data : {id_usd: id_usd},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_usd();
                    }
                });
                return false;
            });

	});

</script>


