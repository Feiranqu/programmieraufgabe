<!doctype html>
<html>
<?php
//include auth.php file on all secure pages
include("auth.php");
define('SECURE',true);
?>

<head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/customstyle.css">
</head>

<body>
      <?php include('../inc/loggedNav.inc.php');?>
      <section class="pt-5 mt-5" id="lexikon">
            <!-- Button trigger modal -->
            <div class="ribbon">
                  <div class="ribbon-fold"><button type="button" class="btn" data-toggle="modal"
                              data-target="#addEntry">
                              <i class="fas fa-plus"></i> Add Entry </button></div>
            </div>

            <!--Modal-->

            <div class="modal fade" id="addEntry" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                        <div class="modal-header">
                              <h5 class="modal-title" id="exampleModaLabel">Neuer Eintrag</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <div class="modal-body">
                              <form method="post" action="../inc/saveEntry.inc.php" enctype="multipart/form-data">
                                    <div class="form-group">
                                          <label for="tiltle">Title (max.550 Zeichen)</label>
                                          <input type="text" class="form-control" name="title" require>
                                    </div>
                                    <div class="form-group">
                                          <label for="teaser">Teaser (max. 550 Zeichen)</label>
                                          <textarea class="form-control" name="teaser" require></textarea>
                                    </div>
                                    <div class="form-group">
                                          <label for="decription">Beschreibung</label>
                                          <textarea class="form-control" rows="3" name="description" require></textarea>
                                    </div>
                                    <div class="form-group">
                                          <label for="fileupload">File upload</label>
                                          <input type="file" class="form-conrol-file" name="fileupload">
                                    </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
            </div>
      </section>

      <section class="container pt2 my-34 h-100">

            <div class="table-responsiv" id="lexikon_table">
                  <tbody>
                        <?php
         include('../inc/login.inc.php');
         $result =$con->query("SELECT id,title FROM content ORDER BY id DESC");
         while($entry =$resultz->fetch_assoc()) {
               if(mb_detect_encoding($entry['title']) != 'UTF-8(' || 'ASCII') {$entry['title'] =utf_8_encode($entry['title']);}
             ?>
                        <tr>
                              <td><?php echo $entry['id']; ?></td>
                              <td>
                                    <?php echo $entry['title'];?>
                              </td>
                              <td>
                                    <button type="button" class="card-title btn edit_data" name="edit" value="edit"
                                          data-toggle="modal" id="<?php echo $entry ['id']?>">
                                          <i class="fas fa-edit"></i>
                                    </button>
                              </td>
                              <td>
                                    <button type="button" class="card-title btn delete_data" name="delete"
                                          value="Löschen" data-toggle="modal" id=<?php echo $entry['id']?>>
                                          <i class="fas fa-trash"></i>
                                    </button>
                              </td>
                              <td>
                                    <button type="button" class="card-title btn changeImage_data" name="changeImage"
                                          value="Löschen" data-toggle="modal" id="<?php echo $entry['id']?>">
                                          <i class="fas fa-image"></i>
                                    </button>
                              </td>
                        </tr>

                        <?php } $con->close(); ?>
                  </tbody>
                  </table>
            </div>
      </section>

      <!--Modal-->$_COOKIE<div class="modal fade" id="add_data_Modal" tabindex="1" role="dialog"
            aria-labelleddby="lexikon-entry" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                        <div class="modal-body">
                              <form method="post" id="insert_form">
                                    <input type="hidden" name="erntry_id" id="entry_id" />
                                    <div class="form-group">
                                          <label for="title">Title</label>
                                          <input type="text" id="title " class="form-control" name="title">
                                          <!--<texarea class="form-control" rows"3"
          name="title" require></textarea -->
                                    </div>
                                    <div class="form-group">
                                          <label for="teaser">Teaser</label>
                                          <textarea type="text" id="teaser" class="form-control" name="teaser"><textarea>
       </div>
       <div class="form-group">
          <label for="description">Beschreibung</label>
          <textarea type="text" id="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                          <img src="" class="img-fluid" id="imgOld">
                                    </div>
                                    <div class="form-group">
                                          <label for="description">Neues Bild</label>
                                          <input type="file" class="form-control-file" name="fileUpdate"
                                                id="fileUpdate">
                                    </div>
                                    <button type="button" class="btn btn-sucess" name="insert">Insert</button>
                              </form>
                        </div>
                        <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                  </div>
            </div>
      </div>

            <td>
                  <button type="button" class="card-title btn
                  delete_data" name="delete" value="Löschen" data-toggle="modal" id="<?php echo $entry["id"]
                   ?>">
                  <i class="fas fa-trash"></i>
                  </button>
           </td>

      <!--delete_data_Modal-->
      <div id="delete_data_Modal" class="modal fade">
            <div class="modal-dialog">
                  <div class="modal-content">
                        <div class="modal-header>
                   <button" class="close" data-dismiss="modal">&
                              times;</button>
                              <h4 class="modal-title">Löschen</h4>
                        </div>
                        <div class="modal-body">
                              <p id="titleDelete"></p>
                              <p id="descriptionDelete"></p>
                              <p id="teaserDelete"></p>
                              <p id="imgDelete"></p>
                              <form method="post" id="delete_form">
                                    <input type="hidden" id="deleteIMG" name="deleteIMG">
                                    <input type="hidden" name="entry_id" id="entryDelete_id" />
                                    <button class="btn btn-default" type="button" name="delete" id="delete class=" btn
                                          btn-danger>Löschen</button>
                              </form>
                              <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                        </div>
                  </div>
            </div>




            <script>
                  $(document).on('click', 'edit_data', funktion() {
                                    var entry_id = $(this).attr("id");
                                    console.log(entry_id);
                                    $ajax({
                                                url: "fetch.php",
                                                method: "POST",
                                                data: {
                                                      entry_id: entry_id
                                                },
                                                dataType: 'json',
                                                success: function (data) {
                                                      $('title').val(data.title);
                                                      $('teaser').val(data.teaser);
                                                      $('description'.val(data.description); $('#entry_id')
                                                                  .val(data.entry_id); $('#imgOld').val(data
                                                                        .imgOld); $('#insert').val(data
                                                                        .insert):
                                                                  $('#add_data_Modal').modal('show');
                                                            },
                                                            error: funktion(req, err) {
                                                                  console.log('my message' + err);
                                                            }
                                                });
                                    }); $(document).on('click', '#insert', funktion(event) {
                                    event.preventaDefault();
                                    if ($('title').val() == ""
                                          '') {
                                          alert("Name is requiered") = ;
                                    } else if ($('#teaser').val() == '') {
                                          alert("teaser is required");
                                    } else if ($('#description').val() == '') {
                                          alert("description is required");
                                    } else {
                                          $.ajax({
                                                url: "insert.php",
                                                method: "POST",
                                                data: $('#insert_form').serialize(),
                                                beforeSend: funtion() { 
                                                      $('#insert').val("Inserting");
                                                },
                                                success: funtion(data) {

                                                      $('#insert_form')[0].reset();
                                                      $('#add_data_Modal').modal('hide');
                                                      $('#lexikon_table').html(data);
                                                }
                                          });
                                    }
                              });
                  $(document).on('click','delete_data', function() {
                        var entryDelete_id = $(this).atrr("id");
                        console.log(entryDelete_id);
                        $.ajax({
                              url: "fetch.php",
                              data: {
                                    entry_id: entryDelete_id
                              }
                              dataType: 'json',
                              success: function(data) {
                                    $('#titleDelete').html(data.title);
                                    $('#teaserDelete').html(data.teaser);
                                    $('#descriptionDelete').html(data.description);
                                    $('#imgDelete').html(data.imgpath);
                                    $('#deleteIMG').val(data,impath);
                                    $('#entryDelete_id').val(data.id);
                                    $('#delete').html("Delete");
                                    $('#delete_data_Modal').modal('show');

                              },
                              error: function(req,err){
                                    console.log('my message '+err);
                              }
                        });
                  });
                  $(document).on('click', '#delete_from', function (event){
                        event.preventDefault();
                        
                        $.ajax({
                              url:"delete.php",
                              method: "POST",
                              data: $('#delete_from')[0].reset();
                              beforeSend: funktion () {
                                    $('#delete').val("Deleting");
                              },
                              success: funktion (data) {
                                    $('#delete_form')[0].reset();
                                    $('#delete_data_Modal')modal('hide');
                                    $('#lexicon_table').html(data);
                              }
                        });
                  });    

         </script>

          