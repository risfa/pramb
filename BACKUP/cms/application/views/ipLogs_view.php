<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pramborsfm.com</title>
    <link href="<?php echo base_url('assests/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assests/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
   <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!-- <?php
    echo '<pre>'; print_r($this->session->all_userdata());
    echo '<pre>'; print_r($this->session->userdata('user_nama'));
?> -->

    <!-- menu div -->
 <div>
        <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">

                <!-- <?php foreach($category as $categorys){?>

                <li><a href="#"><?php echo $categorys->Category ;?></a></li>

                <?php } ?> -->

                <li><a href="<?php echo base_url() ?>pageAttachment">attachment</a></li>
                <li><a href="<?php echo base_url() ?>pageBubblingup">Bubbling-up</a></li>
                <li><a href="<?php echo base_url() ?>pageDj">Dj</a></li>
                <li><a href="<?php echo base_url() ?>pageMeme">Meme</a></li>
                <li><a href="<?php echo base_url() ?>pageMusicProgram">Music Program</a></li>
                <li><a href="<?php echo base_url() ?>pageNews">News</a></li>
                <li><a href="<?php echo base_url() ?>pagePage">Page</a></li>
                <li><a href="<?php echo base_url() ?>pagePost">Post</a></li>
                <li><a href="<?php echo base_url() ?>pageQuiz">Quiz</a></li>
                <li><a href="<?php echo base_url() ?>pageRevision">Revision</a></li>
                <li><a href="<?php echo base_url() ?>pageStation">Station</a></li>
                <li><a href="<?php echo base_url() ?>pageSudutDengar">Sudur Dengar</a></li>
                <li><a href="<?php echo base_url() ?>page_wp_posts_wpcf7_contact">wp_posts_wpcf7_contact</a></li>
                <li><a href="<?php echo base_url() ?>pageConcertAndEvent">Concert And Event</a></li>
                <li><a href="<?php echo base_url() ?>pagePrograms">Programs</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
            <li> <a href="<?php echo base_url() ?>category">Category</a></li>
            <li> <a href="<?php echo base_url() ?>emailSub">Email Subscriber</a></li>
            <li> <a href="<?php echo base_url() ?>pageAll">All</a></li>
            <?php
            if($this->session->userdata('user_nama')== 'super-user'){
            ?>
            <li> <a href="<?php echo base_url() ?>book/managementUser">Management User</a></li>
            <li> <a href="<?php echo base_url() ?>book/ipLogs">Ip Logs</a></li>

            <?php 
                }
            ?>

            <li>From<input id="date-1" type="date" name="date-1"> </li>
                  
            <li>Until<input id="date-2" type="date" name="date-2"> </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php print_r($this->session->userdata('user_nama')); ?> <span class="caret"></span></a>


              <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li><a href="<?=site_url().'Logout'?>">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>  

</div>
<!-- /.end -->


  <div class="container">
    <h1>Masima Prambors CMS</h1>
</center>
    <br />
    <button id="tambah-click" class="btn btn-success" onclick="add_book()"><i class="glyphicon glyphicon-plus"></i> Tambah</button>
    <br />
    <br />
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
				
          <th>ID</th>
          <th>ip</th>
          <th>host</th>
          <th>Vote Date</th>


          <th style="width:125px;">Action
          </p></th>
        </tr>
      </thead>
      <tbody>
				<?php foreach($books as $book){?>
				     <tr>
				         <td><?php echo $book->id;?></td>
                 <td><?php echo $book->ip;?></td>
                 <td><?php echo $book->host;?></td>
                 <!-- <td><?php //echo $book->post_content;?></td> -->
                <td><?php echo $book->vote_date;?></td>
								<td>
									<button class="btn btn-warning" onclick="edit_book(<?php echo $book->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
									<button class="btn btn-danger" onclick="delete_book(<?php echo $book->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>


								</td>
				      </tr>
				     <?php }?>



      </tbody>

      <tfoot>
        <tr>
            <th>ID</th>
          <th>ip</th>
          <th>host</th>
          <th>Vote Date</th>
        </tr>
      </tfoot>
    </table>

  </div>

  <script src="<?php echo base_url('assests/jquery/jquery-3.1.0.min.js')?>"></script>
  <script src="<?php echo base_url('assests/bootstrap/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo base_url('assests/datatables/js/dataTables.bootstrap.js')?>"></script>


  <script type="text/javascript">




  $(document).ready( function () {
      $('#table_id').DataTable();

         document.getElementById('date-2').valueAsDate = new Date();
         var date = new Date();
         var date_change = date.setDate(date.getDate() - 30);
         document.getElementById('date-1').valueAsDate = date;
     
  } );
    var save_method; //for save method strin
    var table;


  $( "#cancel-form" ).click(function() {
    alert('test')
});





    function add_book()
    {

            $('[name="ID"]').val("");
            $('[name="post_type"]').val("");
            $('[name="post_title"]').val("");
            CKEDITOR.instances['textareaId'].setData("");

      save_method = 'add';
      $('#form')[0].reset(); // reset form on modals
      // // $('#modal_form').modal('show'); // show bootstrap modal
      




            $.getJSON("<?php echo site_url('index.php/book/post_type/')?>", function(result){
              $.each(result, function(i, field){

                //   alert(fetch);




                  var select = document.getElementById('select-type');
                  var option =$(select).append('<option value=' + field.category + '>' + field.category + '</option>');


                  var selectedCountry = $(".select-type option:selected").val();
                  $('[name="post_type"]').val(selectedCountry);



                  


                   $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                  $('.modal-title').text('add Book'); // Set title to Bootstrap modal title







              });



                            $("select.select-type").change(function(){
                                var selectedCountry = $(".select-type option:selected").val();

                                $('[name="post_type"]').val(selectedCountry);

                            });
          });


    }

    
    function edit_book(id)
    {
      save_method = 'update';
      $('#form')[0].reset(); // reset form on modals


                             
                     



      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('index.php/book/ajax_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

                $.ajax({
                                      url : "<?php echo site_url('index.php/book/post_type/')?>",
                                      type: "GET",
                                      dataType: "JSON",
                                      success: function(data2)
                                      {
                                         $.each(data2, function(i, field){
                                          var select = document.getElementById('select-type');
                                          var option =$(select).append('<option value=' + field.category + '>' + field.category + '</option>');


                                             var selectedCountry = $(".select-type option:selected").val();
                                             $('[name="post_type"]').val(selectedCountry);


                                         });
                                  

                                      },
                                      error: function (jqXHR, textStatus, errorThrown)
                                      {
                                          alert('Error get data from ajax');

                                      }
                                  });


            $('[name="ID"]').val(data.ID);
            // $('[name="select-type"]').val('data_global');

            $('[name="post_title"]').val(data.post_title);
            CKEDITOR.instances['textareaId'].setData(data.post_content);


            $("select.select-type").change(function(){
                                              var selectedCountry = $(".select-type option:selected").val();

                                              $('[name="post_type"]').val(selectedCountry);

                                          });



            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Book'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');

        }
    });

    }



    function save()
    {
      var url;
      if(save_method == 'add')
      {
          url = "<?php echo site_url('index.php/book/book_add')?>";
      }
      else
      {
        url = "<?php echo site_url('index.php/book/book_update')?>";
      }

        for (instance in CKEDITOR.instances) {
              CKEDITOR.instances[instance].updateElement();
        }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               $('#modal_form').modal('hide');
              location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');

            }
        });
    }

    function delete_book(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('index.php/book/book_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

      }
    }



  </script>

  <!-- Bootstrap modal -->
  <div class="modal fade" id="modal_form" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Form Tambah</h3>
      </div>
      <div class="modal-body form">
        <form action="#" id="form" class="form-horizontal">
          <input type="hidden" value="" name="ID"/>
          <div class="form-body">


            <div class="form-group">
              <label class="control-label col-md-3">Type</label>
               <select name="select-type" form="select-type" id="select-type" class="select-type">
              </select>
            </div>

            <!-- <div class="form-group"> -->
              <!-- <label class="control-label col-md-3">Post Type</label> -->
              <!-- <div class="col-md-9"> -->
                <input name="post_type" placeholder="Post type" class="form-control" type="hidden">
              <!-- </div> -->
            <!-- </div> -->

            <div class="form-group">
              <label class="control-label col-md-3">Post Title</label>
              <div class="col-md-9">
                <input name="post_title" placeholder="Post Title" class="form-control" type="text">
              </div>
            </div>
                    <textarea id="textareaId" name="editor1"></textarea>
                    <script>
                      CKEDITOR.replace( 'editor1' );
                    </script>


            <!-- <input id="test-new" name="ckeditor_text" placeholder="ckeditor" class="form-control" type="text"> -->

          </div>
        </form>
          </div>
          <div class="modal-footer">
            <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button id="cancel-form" type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  <!-- End Bootstrap modal -->

  </body>

  <script type="text/javascript">
    

  $( "#cancel-form" ).click(function() {


            $('[name="ID"]').val("");
            $('[name="post_type"]').val("");
            $('[name="post_title"]').val("");
            CKEDITOR.instances['textareaId'].setData("");
});


    $('#date-1').change(function(){


        
        $('#date-2').change(function(){
          
          var date1 = $('#date-1').val();
          var date2 = $('#date-2').val();
          alert(date1 + '' +date2);

          $.ajax({
                                      url : "<?php echo site_url('index.php/book/changeipLogs/')?>"+date1+'/'+date2,
                                      type: "GET",
                                      dataType: "JSON",
                                      success: function(data2)
                                      {
                                         alert('success')
                                  

                                      },
                                      error: function (jqXHR, textStatus, errorThrown)
                                      {
                                          alert('Error get data from ajax');

                                      }
                                  });




      });      
    });



  </script>
</html>
