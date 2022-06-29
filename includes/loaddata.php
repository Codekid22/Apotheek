<?php
include 'connect.db.php';

 if (strpos($_SERVER['REQUEST_URI'], "catalogus") == TRUE) {
  $sql    = "SELECT * FROM medicine ORDER BY id desc";
  $result = $conn->query($sql);
  
  if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
  
      $name = $row['name'];
      $unit  = $row['unit'];
  
  
      echo '<div class="procduct-card">
                          <div class="product-img"></div>
                          <div class="content">
                          <div class="product-title">
                              <h5>'.$name.'</h5>
                          </div>
                          <div class="product-unit">
                              <p>Vooraad '.$unit.' stuk(s)</p>
                          </div>
                          <button class="btn">Kopen</button>
                      </div>
                  </div>';
    }
  }
  $conn-> close();
 } elseif (strpos($_SERVER['REQUEST_URI'], "index") == TRUE) {
  $sql    = "SELECT * FROM news ORDER BY id desc LIMIT 3";
  $result = $conn->query($sql);
  
  if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
  
      $title = $row['title'];
      $text  = $row['txt'];
      $img  = $row['img'];
  
      echo '<div class="news-block">
              <div class="block-img">
                <img src="assets/images/'.$img.'">
            </div>
          <div class="block-content">
            <div class="block-title">
              <h4>'.$title.'</h4>
            </div>
            <div class="block-info">
              <p>
                '.$text.' 
              </p>
            </div>
            <div class="block-mi">
              <button class="btn">Lees verder</button>
            </div>
          </div>
      </div>';
    }
  }
  $conn-> close();

 }




?>