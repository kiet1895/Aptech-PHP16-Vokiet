
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
	<title>Document</title>
</head>
<body>
<?php
	$products = [
		'iphone x' =>
		[
			'price' => 1800000,
			'color' => 'yellow'
        ],
		'iphone' =>
		[
			'price' => 1900000,
			'color' => 'green'
		]
        ];
//  var_dump($products['iphone x']);      
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Ten</th>
      <th scope="col">Gia</th>
      <th scope="col">Mau</th>
    </tr>
  </thead>
  <tbody>
    
  <?php 
    foreach($products as $key => $value) {
      // echo($key); 
      echo("<tr>");
        echo("<td> $key</td>");
      foreach($value as $var){
          // echo($key);
          // echo($var);
          echo("<td>$var</td>");
      }
      echo("</tr>");
  }
  ?>
  </tbody>
</table>
<!-- bang 2 -->
<?php
  $data = [
      [
          'type' => 'iphone',
          'property' => [
              'price' => 100,
              'size' => 6.5,
              'ram' => '2 GB',
              'made' => [
                  'by' => 'California',
                  'in' => 'China',
              ],
          ],
      ],
      [
          'type2' => 'ipad',
          'property2' => [
              'price2' => 190,
              'size2' => 7.9,
              'ram2' => '4 GB',
              'made2' => [
                  'by2' => 'California2',
                  'in2' => 'China2',
              ],
          ],
      ],
  ];
?>
<!-- <?php
foreach($data as $k1 => $value1){
  foreach($value1 as $k2 => $value2){
    // echo"{$k2} <br/>";
    if(!is_array($value2)){
      echo "{$value2}<br>";
    }else{
      foreach($value2 as $k3 => $value3){
        echo "{$k3} <br>";
        if (!is_array($value3)){
          echo "{$value3}<br>";
        }else{
          foreach($value3 as $k4 => $value4){
            echo "{$k4}<br>";
            echo "{$value4}<br>";
          };
        };
      };
    };
  };
};
?> -->
 <?php
foreach($data as $k1 => $value1){
  foreach($value1 as $k2 => $value2){
    // echo"{$k2} <br/>";
    if(!is_array($value2)){ ?>
<table class="table table-bordered">
  <thead>
  <tr>
    <th scope="col">type</th>
    <th colspan="3">property</th>
  </tr>
  </thead>
  <tbody>
  <tr>
    <td rowspan="5"><?php echo "{$value2}";?></td>
  </tr>
  <?php
  }else{
    foreach($value2 as $k3 => $value3){
  ?>
  <tr>
    <td colspan="2"><?php echo "{$k3} "; ?></td>
    <td><?php if (!is_array($value3)){ echo "{$value3}";?>
  <!-- </tr>
  <tr> -->
    <?php }else{
          foreach($value3 as $k4 => $value4){
            echo "{$k4}"; ?></td>
            <td><?php echo "{$value4}"; ?></td>
  </tr>
  <tr>
    
  </tr>
  </tbody>
</table>
<?php     };
        };
      };
    };
  };
};?>
</body>
</html>


