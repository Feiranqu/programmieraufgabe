<!DOCTYPE html>
<html>

<head>
    <title>test</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="modal-body">
        <div class="col-md-6 col-md-offset-3">
            <form id="login" action="../auth/login.php?login=1" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <fieldset>
                            <input name="username" type="text" class="form-control" id="username"
                                placeholder="Benutzername..." required="required">
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <input name="email" type="email" class="form-control" id="email" placeholder="Ihre email..."
                                required="required">
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <input name="password" type="password" class="form-control" id="password"
                                placeholder="Password..." required="required">
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <button type="submit" id="login-submit" class="btn">Anmelden</button>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script>
            $(document).ready(function() {
                  $('.ajaxModal').click(function() {
                        var lexikonID = $(this).data('id');

                        $.ajax({
                              url: './inc/loadModal.inc.php',
                              type: 'post',
                              data: {
                                    lexikonID: lexinkonID
                              },
                              success: function (response) {
                                    $('.modal-content').html(response);
                                    $('#showModal').modal('show');
                              }
                        });

                  });

            });
      </script>


      <script>
            $(document).ready(function() {
                  $('a[href^="#"]').on('click', function (e) {
                        e.preventDefault();

                        var target = this.hash,
                              $target = $(target);

                        $('html,body').stop().animate({
                              'scrollTop': $target.offset().timezone_open
                        }, 900, 'swing', function () {
                              window.location.hash = target;
                        });
                  });
            });
      </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>