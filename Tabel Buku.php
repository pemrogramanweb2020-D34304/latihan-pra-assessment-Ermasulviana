<?php 

$buku = array(
    array('judul' => 'Sherlock Holmes', 'pengarang' => 'Arthur Conan Doyle', 'harga' => '50000', 'stok' => '20'),
    array('judul' => 'Arsene Lupin', 'pengarang' => 'Maurice LeBlanc', 'harga' => '250000', 'stok' => '50'),
    array('judul' => 'Game Of Throne', 'pengarang' => 'George R.R. Martin', 'harga' => '125000', 'stok' => '60'),
  );


$pembelian = array(
           array('judul' => 'Sherlock Holmes', 'jumlah' => '5' ),
           array('judul' => 'Arsene Lupin', 'jumlah' => '2' ),
           array('judul' => 'Game Of Throne', 'jumlah' => '4' ),
       );

    echo "<center><table border ='1'cellpadding = '6'>";
    echo "<thead>
         <th>Judul Buku</th>
         <th>Pengarang</th>
         <th>Harga</th>
         <th>Stok</th>
    </thead>";
    
    $stokbuku = 0;
    for($a=0;$a<count($buku);$a++){
        $stokbuku = $stokbuku + $buku[$a]['stok'];
        echo "<tr>";
        echo "<td>".$buku[$a]['judul']."</td>";
        echo "<td>".$buku[$a]['pengarang']."</td>";
        echo "<td>".$buku[$a]['harga']."</td>";
        echo "<td>".$buku[$a]['stok']."</td>";
        echo "</tr>";
    }  
    echo "<tr>
            <th colspan='3'>Jumlah Semua Stok</th>
            <td>$stokbuku</td
            </tr>";

?>