<?php $this->load->view('header_admin'); ?>
<style type="text/css">
    .close{
        display: contents;
    }
</style>
 
	 		 <div class="modal-body">
	 		 <legend><h3><i class="fas fa-hand-holding-usd"></i> Kurs Erate</h3></legend>
                    <div class="btn btn-danger"><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#ModalaAdd"><span class="fas fa-plus-square"></span> Tambah Kurs Erate</a></div>
  	<hr/>
  	</div>


  	<body>
	<div class="container">
	<div class="row">
			 <div class="table-responsive">
			<table class="table table-striped table-bordered table-hover" id="mydata" width="100%" cellspacing="0" >
				<thead>
				<tr>
				<th>ID Kurs</th>
			    <th>Erate Beli</th>
				<th>Erate Jual</th>
				<th>TTCounter Beli</th>
				<th>TT Counter Jual</th>
                <th>Date</th>
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
                 <h6 class="modal-title" id="myModalLabel">Tambah Kurs Erate</h6>
    

            </div>
            <form class="form-horizontal">
                <div class="modal-body">


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Erate Beli</label>
                        <div class="col-xs-9">
                            <input name="erate_beli" id="erate_beli" class="form-control" type="text" placeholder="Erate Beli" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Erate Jual</label>
                        <div class="col-xs-9">
                            <input name="erate_jual" id="erate_jual" class="form-control" type="text" placeholder="Erate Jual"  required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >TTCounter Beli</label>
                        <div class="col-xs-9">
                            <input name="ttcounter_beli" id="ttcounter_beli" class="form-control" type="text" placeholder="TTCounter Beli"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >TTCounter Jual</label>
                        <div class="col-xs-9">
                            <input name="ttcounter_jual" id="ttcounter_jual" class="form-control" type="text" placeholder="TTCounter Jual"  required>
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
                         <h6 class="modal-title" id="myModalLabel">Hapus Kurs Erate</h6>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <input type="hidden" name="id_kurs" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus kurs erase ini?</p></div>
                                        
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
                <h6 class="modal-title" id="myModalLabel">Edit Kurs Erate</h6>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kurs Id</label>
                        <div class="col-xs-9">
                            <input name="id_kurs" id="id_kurs" class="form-control" type="text"   readonly="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Erate Beli</label>
                        <div class="col-xs-9">
                            <input name="erate_beli_edit" id="id_erate_beli" class="form-control" type="text" placeholder="Erate Beli"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Erate Jual</label>
                        <div class="col-xs-9">
                            <input name="erate_jual_edit" id="id_erate_jual" class="form-control" type="text" placeholder="Erate Jual"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >TTCounter Beli</label>
                        <div class="col-xs-9">
                            <input name="ttcounter_beli_edit" id="id_ttcounter_beli" class="form-control" type="text" placeholder="TTCounter Beli" required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >TTCounter Jual</label>
                        <div class="col-xs-9">
                            <input name="ttcounter_jual_edit" id="id_ttcounter_jual" class="form-control" type="text" placeholder="TTCounter Jual" required>
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
		tampil_data_kurs_erate();	//pemanggilan fungsi tampil barang.
		$('#mydata').dataTable();

		function tampil_data_kurs_erate(){
		    $.ajax({
		        type  : 'ajax',
		        url   : 'http://localhost/backend/Kurs_erate/data_kurs_erate',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].id_kurs+'</td>'+
		                  		'<td>'+data[i].erate_beli+'</td>'+
		                  		'<td>'+data[i].erate_jual+'</td>'+
		                  		'<td>'+data[i].ttcounter_beli+'</td>'+
		                  		'<td>'+data[i].ttcounter_jual+'</td>'+
                                '<td>'+data[i].date_created+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id_kurs+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id_kurs+'">Hapus</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }
		    });
		}

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id_kurs=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "http://localhost/backend/Kurs_erate/get_kurs_erate",
                dataType : "JSON",
                data : {id_kurs:id_kurs},
                success: function(data){
                	$.each(data,function(erate_beli, erate_jual, ttcounter_beli, ttcounter_jual,id_kurs){
                    	$('#ModalaEdit').modal('show');
                        $('[name="id_kurs"]').val(data.id_kurs);
            			$('[name="erate_beli_edit"]').val(data.erate_beli);
            			$('[name="erate_jual_edit"]').val(data.erate_jual);
            			$('[name="ttcounter_beli_edit"]').val(data.ttcounter_beli);
                        $('[name="ttcounter_jual_edit"]').val(data.ttcounter_jual);
            		});
                }
            });
            return false;
        });


		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="id_kurs"]').val(id);
        });

		//Simpan Kurs Erate
		$('#btn_simpan').on('click',function(){
            var erate_beli=$('#erate_beli').val();
            var erate_jual=$('#erate_jual').val();
            var ttcounter_beli=$('#ttcounter_beli').val();
            var ttcounter_jual=$('#ttcounter_jual').val();
            $.ajax({
                type : "POST",
                url  : "http://localhost/backend/Kurs_erate/simpan_kurs_erate",
                dataType : "JSON",
                data : {erate_beli:erate_beli , erate_jual:erate_jual, ttcounter_beli:ttcounter_beli, ttcounter_jual:ttcounter_jual},
                success: function(data){
                    $('[name="erate_beli"]').val("");
                    $('[name="erate_jual"]').val("");
                    $('[name="ttcounter_beli"]').val("");
                    $('[name="ttcounter_jual"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_kurs_erate();
                }
            });
            return false;
        });

        //Update Kurs Erate
        $('#btn_update').on('click',function(){
            var id_kurs=$('#id_kurs').val();
            var erate_beli=$('#id_erate_beli').val();
            var erate_jual=$('#id_erate_jual').val();
            var ttcounter_beli=$('#id_ttcounter_beli').val();
            var ttcounter_jual=$('#id_ttcounter_jual').val();
            $.ajax({
                type : "POST",
                url  : "http://localhost/backend/Kurs_erate/update_kurs_erate",
                dataType : "JSON",
                data : {erate_beli:erate_beli , erate_jual:erate_jual, ttcounter_beli:ttcounter_beli, ttcounter_jual:ttcounter_jual, id_kurs:id_kurs },
                success: function(data){
                    $('[name="id_kurs"]').val("");
                    $('[name="erate_beli_edit"]').val("");
                    $('[name="erate_jual_edit"]').val("");
                    $('[name="ttcounter_beli_edit"]').val("");
                    $('[name="ttcounter_jual_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_kurs_erate();
                }
            });
            return false;
        });


        //Hapus Kurs Erate
        $('#btn_hapus').on('click',function(){
            var id_kurs=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "http://localhost/backend/Kurs_erate/hapus_kurs_erate",
            dataType : "JSON",
                    data : {id_kurs: id_kurs},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_kurs_erate();
                    }
                });
                return false;
            });

	});

</script>


