<?php

function checkUsed($bol){
  if ($bol) {
    echo "used";
  }else{
    echo 'unused';
  }
}
function checkEx($bol){
  if ($bol) {
    echo "available";
  }else{
    echo 'unavailable';
  }
}
function randOption($currentID, $con){
  $sql = "SELECT * FROM prod";
  $max =mysqli_num_rows(mysqli_query($con,$sql));
  $itemID = rand(1,$max);
  while ($itemID == $currentID) {
    $itemID = rand(1,mysqli_num_rows(mysqli_query($con,$sql)));
  }
  $sql = "SELECT * FROM prod WHERE `prodID`= {$itemID}";
  $result = mysqli_query($con,$sql);
  foreach($result as $row) {
    $arr['id'] = $itemID;
    $arr['t'] = $row['produsNume'];
    $arr['p'] = $row['Price'];
    $arr['DT'] = $row['DrinkType'];
  }
  return $arr;
}
function mainObj($currentID, $con){
  $sql = "SELECT * FROM prod WHERE `ID`= {$currentID}";
  $result = mysqli_query($con,$sql);
  if (mysqli_num_rows($result)==0){
    header("Location: http://localhost/404.php");
    exit();
  }
  foreach($result as $row) {
    $obj['name'] = $row['produsNume'];
    $obj['user'] = $row['Nume_prenume'];
    $obj['src'] = $row['img1'];
    $obj['country'] = $row['country'];
    $obj['Mun'] = $row['Mun'];
    $obj['oras'] = $row['Oras'];
    $obj['Drink'] = $row["Drink"];
    $obj['DT'] = $row['DrinkType'];
    $obj['used'] = $row['Used'];
    $obj['year'] = $row['year'];
    $obj['MI'] = $row['MadeIn'];
    $obj['BI'] = $row['BoughtIn'];
    $obj['det'] = $row['Details'];
    $obj['price'] = $row['Price'];
    $obj['Ex'] = $row['Exhange'];
    $obj['Nr'] = $row['PhoneNr'];
    //echo $row['ID'];
    //echo "<br>";
    //echo print_r($row);       // Print the entire row data
    //echo "<br>";
  }
  return $obj;
}

function SearchFor($name, $con,$pg ,$sort){
  if ($sort==0) {
    $sql = "SELECT * FROM `prod` WHERE produsNume Like '%{$name}%'";
  }else if($sort==1){
    $sql = "SELECT * FROM `prod` WHERE produsNume Like '%{$name}%' ORDER BY `Price` ASC;";
  }else {
    $sql = "SELECT * FROM `prod` WHERE produsNume Like '%{$name}%' ORDER BY `Price` DESC;";
  }
  $result = mysqli_query($con,$sql);
  if (mysqli_num_rows($result)>0){
    if ($pg ==1) {
      $min=0;
    }else{
      $min = 1+ ($pg-1)*4;
    }
    $max = $min+5;
    $i=0;
    foreach($result as $row) {
      $i++;
      if ($i<$max && $i>$min) {
        print('
          <div class="prod">
            <div class="name"><h3> '.$row['produsNume'].' </h3></div>
            <div class="details"> '.$row['Details'].'</div>
            <div class="price">'.$row['Price'].'</div>
            <div class="goTO"><a href="/tst.php?id='.$row['ID'].'">Visit Item</a></div>
          </div>
        ');
      }
    }
  }else{
    echo "<h1> Sorry We Have Not Found Items on This Search</h1>";
  }
}
function getPages($name, $con , $pg,$sort){
  $sql = "SELECT * FROM `prod` WHERE produsNume Like '%{$name}%'";
  $result = mysqli_query($con,$sql);
  $elementsNr = mysqli_num_rows($result);
  for ($i=1; $i <=ceil(mysqli_num_rows($result)/4) ; $i++) { 
    if ($i==$pg) {
      print('
        <p>'.$i.'</p>'
      );
    }else{
      print('
        <p><a href="http://localhost/Spage.php?search='.$name.'&pg='.$i.'&sort='.$sort.'">'.$i.'</a></p>'
      );
  }
  }
}

?>

