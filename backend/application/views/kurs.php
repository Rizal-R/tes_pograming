<?php $this->load->view('header_admin'); ?>
<style type="text/css">
    .close{
        display: contents;
    }
</style>
 
	 		 <div class="modal-body">
	 		 <legend><h3><i class="far fa-money-bill-alt"></i> Kurs</h3></legend>
                    <div class="btn btn-danger"><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#ModalaAdd"><span class="fas fa-plus-square"></span> Tambah Kurs</a></div>
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
			    <th>Bank</th>
				<th>Kurs Jual</th>
				<th>Kurs Beli</th>
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
                 <h6 class="modal-title" id="myModalLabel">Tambah Kurs</h6>
    

            </div>
            <form class="form-horizontal">
                <div class="modal-body">


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Bank</label>
                        <div class="col-xs-9">
                            <input name="bank" id="bank" class="form-control" type="text" placeholder="Bank" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kurs Jual</label>
                        <div class="col-xs-9">
                            <input name="kurs_jual" id="kurs_jual" class="form-control" type="text" placeholder="Kurs Jual"  required>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kurs Beli</label>
                        <div class="col-xs-9">
                            <input name="kurs_beli" id="kurs_beli" class="form-control" type="text" placeholder="Kurs Beli"  required>
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
                                          
                            <input type="hidden" name="id_kurs" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus kurs ini?</p></div>
                                        
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
                <h6 class="modal-title" id="myModalLabel">Edit Kurs</h6>
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
                        <label class="control-label col-xs-3" >Bank</label>
                        <div class="col-xs-9">
                            <input name="bank_edit" id="id_bank" class="form-control" type="text" placeholder="Bank"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kurs Jual</label>
                        <div class="col-xs-9">
                            <input name="kurs_jual_edit" id="id_kurs_jual" class="form-control" type="text" placeholder="kurs Jual"  required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kurs Beli</label>
                        <div class="col-xs-9">
                            <input name="kurs_beli_edit" id="id_kurs_beli" class="form-control" type="text" placeholder="Kurs Beli" required>
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
		tampil_data_kurs();	//pemanggilan fungsi tampil barang.
		$('#mydata').dataTable();

		function tampil_data_kurs(){
		    $.ajax({
		        type  : 'ajax',
		        url   : 'http://localhost/backend/Kurs/data_kurs',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].id_kurs+'</td>'+
		                  		'<td>'+data[i].bank+'</td>'+
		                  		'<td>'+data[i].kurs_jual+'</td>'+
		                  		'<td>'+data[i].kurs_beli+'</td>'+
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
                url  : "http://localhost/backend/kurs/get_kurs",
                dataType : "JSON",
                data : {id_kurs:id_kurs},
                success: function(data){
                	$.each(data,function(bank, kurs_jual, kurs_beli, id_kurs){
                    	$('#ModalaEdit').modal('show');
                        $('[name="id_kurs"]').val(data.id_kurs);
            			$('[name="bank_edit"]').val(data.bank);
            			$('[name="kurs_jual_edit"]').val(data.kurs_jual);
            			$('[name="kurs_beli_edit"]').val(data.kurs_beli);
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

		//Simpan Kurs
		$('#btn_simpan').on('click',function(){
            var bank=$('#bank').val();
            var kurs_jual=$('#kurs_jual').val();
            var kurs_beli=$('#kurs_beli').val();
            $.ajax({
                type : "POST",
                url  : "http://localhost/backend/Kurs/simpan_kurs",
                dataType : "JSON",
                data : {bank:bank , kurs_jual:kurs_jual, kurs_beli:kurs_beli},
                success: function(data){
                    $('[name="bank"]').val("");
                    $('[name="kurs_jual"]').val("");
                    $('[name="kurs_beli"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_kurs();
                }
            });
            return false;
        });

        //Update Kurs
        $('#btn_update').on('click',function(){
            var id_kurs=$('#id_kurs').val();
            var bank=$('#id_bank').val();
            var kurs_jual=$('#id_kurs_jual').val();
            var kurs_beli=$('#id_kurs_beli').val();
            $.ajax({
                type : "POST",
                url  : "http://localhost/backend/Kurs/update_kurs",
                dataType : "JSON",
                data : {bank:bank , kurs_jual:kurs_jual, kurs_beli:kurs_beli, id_kurs:id_kurs },
                success: function(data){
                     $('[name="id_kurs"]').val("");
                    $('[name="bank_edit"]').val("");
                    $('[name="kurs_jual_edit"]').val("");
                    $('[name="kurs_beli_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_kurs();
                }
            });
            return false;
        });


        //Hapus Kurs
        $('#btn_hapus').on('click',function(){
            var id_kurs=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "http://localhost/backend/Kurs/hapus_kurs",
            dataType : "JSON",
                    data : {id_kurs: id_kurs},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_kurs();
                    }
                });
                return false;
            });

	});

</script>


