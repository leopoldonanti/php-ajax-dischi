<?php
  require_once __DIR__ . '/data/db.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="asset/style.css">
  <title>Document</title>
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
      <?php foreach($database as $disco){ ?>
      <div class="card">  
          <img src="<?php echo $disco['poster'] ?>" alt="">     
          <h3> <?php echo $disco['author'] ?> </h3>
          <h5>ALBUM: <?php echo $disco['title']  ?> </h5>
          <h5> ANNO: <?php echo $disco['year'] ?>  </h5>
      </div>
      <?php } ?>
    </div>

  </main>
</body>
</html>