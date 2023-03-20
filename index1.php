<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>
<body>
  <header>
    <?php include('cabecalho.php');
    ?>  
  </header>
  

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <content>
    <div class="container-fluid">

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>

      <div class="row p-4">

        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 border">
          conteudo 1        
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 border">
          conteudo 2 
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 border">
          conteudo 3 
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 border">
          conteudo 4 
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-3 border">
          conteudo 5 
        </div>
      </div>

      <div class="row"> 

        <table>

        </table>

      </div>  
    </div>
  </content>

  <footer>
    <?php include('rodape.php');
    ?>
  </footer>
</body>
</html>