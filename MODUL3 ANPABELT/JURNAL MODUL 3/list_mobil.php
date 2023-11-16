<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>

<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <table>

                <tr>
                    <th>No</th>
                    <th>Nama Mobil</th>
                    <th>Brand Mobil</th>
                    <th>Warna Mobil</th>
                    <th>Tipe Mobil</th>
                    <th>Harga Mobil</th>
                </tr>

                <?php
                include 'connect.php';
                $no = 1;
                $data = mysqli_query($connect, "select * from showroom_mobil");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nama_mobil']; ?></td>
                    <td><?php echo $d['brand_mobil']; ?></td>
                    <td><?php echo $d['warna_mobil']; ?></td>
                    <td><?php echo $d['tipe_mobil']; ?></td>
                    <td><?php echo $d['harga_mobil']; ?></td>
                    <td>
                        <a href="form_detail_mobil.php?id=<?php echo $d['id']; ?>">Detail</a>
                        <a href="delete.php?id=<?php echo $d['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>






            <!--  **********************  1  **************************     -->












            <!--  **********************  1  **************************     -->


            <!--  **********************  2  **************************     -->







            <!--  **********************  2  **************************     -->

        </div>
    </center>
</body>

</html>