<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">

    <title>Auto Complete Textbox</title>
  </head>
  <body>
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-10 mx-auto">
                <h3 class="text-center py-4">Auto Complete Textbox PHP with AJAX</h3>
                <table class="table">
                    <form action="" method="post">
                        <tr>
                            <td>Search Skill : </td>
                            <td><input type="text" class="form-control" id="skill" name="skill" placeholder="Search Skill"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span id="suggestTxt"></span>
                            </td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="main.js" type="text/javascript"></script>
  </body>
</html>