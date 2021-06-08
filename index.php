<?php

  require_once __DIR__ . '/data/db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* HEADER SECTION */
    body{
      width: 100%;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    header{
      background: #4c4c4c; /* Old browsers */
      background: -webkit-linear-gradient(top,  #4c4c4c 0%,#595959 0%,#666666 0%,#474747 0%,#2c2c2c 0%,#000000 50%,#111111 60%,#2b2b2b 70%,#1c1c1c 90%,#131313 100%); /* Chrome10-25,Safari5.1-6 */
    }
    .frame-logotipo{
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      
    }
    .frame-logotipo img{
      width: 150px;
      margin: 20px 20px 20px 20px;
    }
    .frame-logotipo select{
      height: 30px;
      margin: 20px 20px 20px 20px;
    }

    /* MAIN SECTION */

    main{
      display: flex;
      justify-content: center;
    }
    .frame-card{
      width: 60%;
      display: flex;
      flex-wrap: wrap;
    }
    .card{
      width: 200px;
      display: flex;
      flex-direction: column;
      background-color: forestgreen;
      margin: 20px;
    }


  </style>
</head>
<body>
  
  <header>

    <div class="frame-logotipo">
      <img src="./logotipo.png" alt="">
      <select>
        <option value=""><strong>TUTTI I GENERI</strong></option>
        <option value=""><strong>POP</strong></option>
        <option value=""><strong>ROCK</strong></option>
        <option value=""><strong>METAL</strong></option>
        <option value=""><strong>JAZZ</strong></option>
      </select>
    </div>

  </header>

  <main>

  <?php
    //var_dump($response)
  ?>
  
    <div class="frame-card">
    <?php foreach($response as $disco){ ?>
      <div class="card">
          <h3> <?php echo $disco['author'] ?> </h3>
          <h3> <?php echo $disco['title'] ?> </h3>
          <h5> <?php echo $disco['genre'] ?> </h5>
          <h5> <?php echo $disco['year'] ?> </h5>
        <?php } ?>
      </div>

      
    </div>


  




  </main>



</body>
</html>