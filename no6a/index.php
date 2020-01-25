<!DOCTYPE html>
<html>
<head>
    <title>TABEL</title>
</head>
<body>
    <br/>
    <br/>
    <br/>
    <table border="1">
        <tr>
            <th>cashier</th>
            <th>product</th>
            <th>category</th>
            <th>price</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $data = mysqli_query($koneksi," SELECT * FROM product
                                            JOIN cashier ON cashier.id = product.id
                                             JOIN category ON category.id = product.id");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['cashier']; ?></td>
                <td><?php echo $d['name']; ?></td>
                <td><?php echo $d['kategori']; ?></td>
                <td><?php echo $d['price']; ?></td>
            </tr>
            <?php 
        }
        ?>
    </table>
</body>
</html>