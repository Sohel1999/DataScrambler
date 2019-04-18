<?php
include_once 'scramblerf.php';
$task='encode';
if(isset($_GET['task']) && $_GET['task']!=''){
    $task=$_GET['task'];
}
$key="abcdefghijklmnopqrstuvwxyz1234567890";
if('key'==$task){
    $key_original=str_split($key);
    shuffle($key_original);
    $key=join('',$key_original);
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Scrambler</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/milligram.css">

</head>
<body>
<div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="column column-60 column-offset-25">
          <h3>Data scrambler</h3>
          <p >use this application to scrambler your data</p>
          <a href="scrambler.php?task=encode">Encode|</a>
          <a href="scrambler.php?task=decode">Decode|</a>
          <a href="scrambler.php?task=key">Generate key</a>
      </div>

    </div>
    <div class="row">
            <div class="column column-60 column-offset-25">
                <form action="">
                    <label for="key">Key</label>
                    <input type="text" id="key" name="key" <?php displayKey($key)?>>
                    <label for="data">Data</label>
                    <textarea name="data" id="data" cols="30" rows="10"></textarea>
                    <label for="result">Result</label>
                    <textarea name="result" id="result" cols="30" rows="10"></textarea>
                    <button type="submit">Do it for me!</button>
                </form>
            </div>
    </div>
</div>
</body>
</html>
