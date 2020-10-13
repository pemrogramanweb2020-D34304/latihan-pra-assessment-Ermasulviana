<?php
    $buku = array(array('judul'=>'Sherlock Holmes',
				  		'pengarang'=>'Arthur Cona Doyle',
				  		'harga'=>50000,
				  		'stok'=>20),
				  array('judul'=>'Arsene Lupin',
				  		'pengarang'=>'Maurice LeBlanc',
				  		'harga'=>250000,
				  		'stok'=>50),
				  array('judul'=>'Games Of Throne',
				  		'pengarang'=>'George R.R.Martin',
				  		'harga'=>125000,
				  		'stok'=>60),
                );
                
     $pembelian = array(array('judul'=>'Sherlock Holmes',
                             'jumlah'=>5),
                       array('judul'=>'Arsene Lupin',
                             'jumlah'=>2),
                       array('judul'=>'Game Of Throne',
                             'jumlah'=>4),
                    );
    $total = 0;
    echo "<table border='1'>";
    echo "<thead>
          <th>Judul</th>
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

            
    echo "</table";
    echo "<table border='1'>";
    echo "<thead>
          <th>Judul</th>
          <th>Jumlah</th>
          <th>Harga</th>
          </thead>";

    for($i=0;$i<count($pembelian);$i++){
        echo "<tr>";
        echo "<td>".$pembelian[$i]['judul']."</td>";
        echo "<td>".$pembelian[$i]['jumlah']."</td>";
        for($x=0;$x<count($buku);$x++){
            if($pembelian[$i]['judul']==$buku[$x]['judul']){
                $harga = $buku[$x]['harga']*$pembelian[$i]['jumlah'];
                break;
            }
        }
        $totalbayar = $totalbayar + $harga;
    echo "<td>".$harga."</td>";
    echo "</tr>";
    }
    
     echo "<tr>
            <th colspan ='3'>Total Harga Bayar</th>
            <td>$totalbayar</td>
            </tr>";
?> 
