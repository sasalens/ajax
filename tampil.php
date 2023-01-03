<h1>Data Mahasiswa</h1>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Id Siswa</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Menu</th>
                </tr>
                <?php
                include "koneksi.php";

                $no=1;
                $ambildata = mysqli_query($koneksi,"SELECT * FROM `table`");
                while($tampil = mysqli_fetch_array($ambildata)){
                    echo "
                    <tr>
                        <td>$no</td>
                        <td>$tampil[id]</td>
                        <td>$tampil[nama]</td>
                        <td>$tampil[alamat]</td>
                        <td>
                        <a href='#' onclick='hapus($tampil[id])' class='hapus btn btn-danger'>Hapus</a>
                        </td>
                    <tr>";
                    $no++;
                }
                ?>
            </table>

            <script>
                function hapus(id) {
                        $.ajax({
                        method: "POST",
                        url: "hapus.php",
                        data: 'id='+id,
                        success: function(){
                            $('#tampil').load("tampil.php");
                            }
                        })
                }
            </script>