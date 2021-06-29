<?php
include 'config.php';

class makanan{
    public $id_makanan, $nama_makanan, $foto, $deskripsi, $harga, $created_by, $created_date, $modified_by, $modified_date;

    function create($nama_makanan, $foto, $deskripsi, $harga){
        $respon["status"] = 1;
        $respon["message"] = "";

        if(isset($_SESSION['user_id'])){ // Cek apakah ada sesi login atau tidak, jika tidak tampilkan pesan untuk login dulu
            $id_user = $_SESSION['user_id'];
            $id_role = $_SESSION['user_role'];

            if($id_role == 1){// cek apakah role nya sebagai admin atau bukan , jika admin lanjut, jika bukan tampilkan pesan tidak memiliki akses
                $created_date = Date("Y-m-d H:i:s");
                try{
                    $insert = mysqli_query($koneksi, "INSERT INTO makanan (nama_makanan, foto, deskripsi, harga, created_by, created_date) VALUES(".
                                            "'".$nama_makanan."', ".
                                            "'".$foto."', ".
                                            "'".$deskripsi."', ".
                                            "'".$harga."', ".
                                            "'".$id_user."', ".
                                            "'".$created_date."', ".
                                            ")");

                    $respon["status"] = 1;
                    $respon["message"] = "Berhasil menambahkan data.";
                }catch(Exception $e){
                    $respon["status"] = 0;
                    $respon["message"] = "Gagal menambahkan data. Pesan Error : ".$e->getMessage().".";
                }
            }else{
                $respon["status"] = 0;
                $respon["message"] = "Gagal menambahkan data. Anda belum login atau sesi telah berakhir. Silahkan login terlebih dahulu sebagai admin.";
            }
        }else{
            $respon["status"] = 0;
            $respon["message"] = "Gagal menambahkan data. Anda belum login atau sesi telah berakhir. Silahkan login terlebih dahulu sebagai admin.";
        }
    }

    function update($id_makanan, $nama_makanan, $foto, $deskripsi, $harga){
        $id_user = $_SESSION['user_id'];
        $modified_date = Date("Y-m-d H:i:s");

        $update = mysqli_query($koneksi, "UPDATE makanan SET ".
                                " nama_makanan='".$nama_makanan."', ".
                                " foto='".$foto."', ".
                                " deskripsi='".$deskripsi."', ".
                                " harga='".$harga."', ".
                                " modified_by='".$id_user."', ".
                                " modified_date='".$modified_date."', ".
                                " WHERE id_makanan='".$id_makanan."'");
    }

    function delete($id_makanan){
        mysqli_query($koneksi, "DELETE FROM makanan WHERE id_makanan='".$id_makanan."'");
    }
}
?>