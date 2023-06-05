<?php
$conn = mysqli_connect("localhost","root","","apiz_inc");

function query($query)
{
    global $conn;
    $results = mysqli_query($conn,$query);
    $datas = [];
    while( $data = mysqli_fetch_assoc($results) )
    {
        $datas[] = $data;
    }
    return $datas;
}

function ingput($data)
{
    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $nip = htmlspecialchars($data['nip']);
    $tpt_lahir = htmlspecialchars($data['tpt_lahir']);
    $tgl_lahir = htmlspecialchars($data['tgl_lahir']);
    $gender = htmlspecialchars($data['gender']);
    $kewarganegaraan = htmlspecialchars($data['kewarganegaraan']);
    $status_perkawinan = htmlspecialchars($data['status_perkawinan']);
    $agama = htmlspecialchars($data['agama']);
    $alamat = htmlspecialchars($data['alamat']);
    $tanggungan = htmlspecialchars($data['tanggungan']);
    $mulai_bekerja = htmlspecialchars($data['mulai_bekerja']);
    $no_telp = htmlspecialchars($data['no_telp']);
    $kontrak = htmlspecialchars($data['kontrak']);
    $jabatan = htmlspecialchars($data['jabatan']);
    $pay_rate = htmlspecialchars($data['pay_rate']);
    $jam_kerja = htmlspecialchars($data['jam_kerja']);
    $id_gaji = htmlspecialchars($data['id_karyawan']);
   
    if($pay_rate <= 25 && $pay_rate > 0)
    {
        if($jam_kerja <= 35 && $jam_kerja > 0)
        {
            $weekly_pay = $pay_rate * $jam_kerja;
            
            mysqli_query($conn,"INSERT INTO jobdesk_karyawan VALUES ('','$nama','$jabatan','$pay_rate','$jam_kerja','$weekly_pay')");
            
            mysqli_query($conn,"INSERT INTO identitas_karyawan VALUES ('','$nama','$nip','$tpt_lahir','$tgl_lahir','$gender','$kewarganegaraan','$status_perkawinan','$agama','$alamat','$tanggungan','$mulai_bekerja','$no_telp','$kontrak','$id_gaji')");
            return mysqli_affected_rows($conn);
        }
        else if ($jam_kerja <= 60 && $jam_kerja > 35)
        {
            $weekly_pay = $pay_rate * 35;
            $jam_lembur = $jam_kerja - 35;
            $bonus_lembur = $pay_rate * $jam_lembur * 1.5;
            $weekly_pay2 = $weekly_pay + $bonus_lembur;
            
            mysqli_query($conn,"INSERT INTO jobdesk_karyawan VALUES ('','$nama','$jabatan','$pay_rate','$jam_kerja','$weekly_pay2')");

            mysqli_query($conn,"INSERT INTO identitas_karyawan VALUES ('','$nama','$nip','$tpt_lahir','$tgl_lahir','$gender','$kewarganegaraan','$status_perkawinan','$agama','$alamat','$tanggungan','$mulai_bekerja','$no_telp','$kontrak','$id_gaji')");
            return mysqli_affected_rows($conn);
        }
        else
        {
            echo"
            <script>
                alert('INAPPROPRIATE WORKING TIME!');
                document.location.href = 'ingput.php';
            </script>
            ";
        }
    }
    else
    {
        echo"
            <script>
                alert('INAPPROPRIATE PAY RATE!);
                document.location.href = 'ingput.php';
            </script>
            ";
    }
}
function ingput_tb2($data)
{
    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $jabatan = htmlspecialchars($data['jabatan']);
    $pay_rate = htmlspecialchars($data['pay_rate']);
    $jam_kerja = htmlspecialchars($data['jam_kerja']);
    
    if($pay_rate <= 25 && $pay_rate > 0)
    {
        if($jam_kerja <= 35 && $jam_kerja > 0)
        {
            $weekly_pay = $pay_rate * $jam_kerja;
            $query = mysqli_query($conn,"INSERT INTO jobdesk_karyawan VALUES ('','$nama','$jabatan','$pay_rate','$jam_kerja','$weekly_pay')");
        
           return mysqli_affected_rows($conn);
        }
        else if ($jam_kerja <= 60 && $jam_kerja > 35)
        {
            $weekly_pay = $pay_rate * 35;
            $jam_lembur = $jam_kerja - 35;
            $bonus_lembur = $pay_rate * $jam_lembur * 1.5;
            $weekly_pay2 = $weekly_pay + $bonus_lembur;
            $query = mysqli_query($conn,"INSERT INTO jobdesk_karyawan VALUES ('','$nama','$jabatan','$pay_rate','$jam_kerja','$weekly_pay2')");
        
            return mysqli_affected_rows($conn);
        }
        else
        {
            echo"
            <script>
                alert('INAPPROPRIATE WORKING TIME!');
                document.location.href = 'ingput.php';
            </script>
            ";
        }
    }
    else
    {
        echo"
            <script>
                alert('INAPPROPRIATE PAY RATE!);
                document.location.href = 'ingput.php';
            </script>
            ";
    }
}
function update_tb2($data)
{
    global $conn;
    $id = $_GET['id'];
    $nama = htmlspecialchars($data['nama']);
    $jabatan = htmlspecialchars($data['jabatan']);
    $pay_rate = htmlspecialchars($data['pay_rate']);
    $jam_kerja = htmlspecialchars($data['jam_kerja']);
    if($pay_rate <= 25 && $pay_rate > 0)
    {
        if($jam_kerja <= 35 && $jam_kerja > 0)
        {
            $weekly_pay = $pay_rate * $jam_kerja;
            $query = mysqli_query($conn,"UPDATE jobdesk_karyawan SET nama='$nama',jabatan='$jabatan',pay_rate='$pay_rate',jam_kerja='$jam_kerja',weekly_pay='$weekly_pay' WHERE id='$id'");
        
           return mysqli_affected_rows($conn);
        }
        else if ($jam_kerja <= 60 && $jam_kerja > 35)
        {
            $weekly_pay = $pay_rate * 35;
            $jam_lembur = $jam_kerja - 35;
            $bonus_lembur = $pay_rate * $jam_lembur * 1.5;
            $weekly_pay2 = $weekly_pay + $bonus_lembur;
            $query = mysqli_query($conn,"UPDATE jobdesk_karyawan SET nama='$nama',jabatan='$jabatan',pay_rate='$pay_rate',jam_kerja='$jam_kerja',weekly_pay='$weekly_pay2' WHERE id='$id'");
        
            return mysqli_affected_rows($conn);
        }
        else
        {
            echo"
            <script>
                alert('INAPPROPRIATE WORKING TIME!');
                document.location.href = 'ingput.php';
            </script>
            ";
        }
    }
    else
    {
        echo"
            <script>
                alert('INAPPROPRIATE PAY RATE!');
                document.location.href = 'ingput.php';
            </script>
            ";
    }
}

function cari($keyword)
{
    $query = "SELECT identitas_karyawan.id_karyawan,
                    identitas_karyawan.nama, 
                    identitas_karyawan.nip, 
                    identitas_karyawan.tpt_lahir, 
                    identitas_karyawan.tgl_lahir, 
                    identitas_karyawan.gender,
                    identitas_karyawan.kewarganegaraan,
                    identitas_karyawan.status_perkawinan,
                    identitas_karyawan.agama,
                    identitas_karyawan.alamat,
                    identitas_karyawan.tanggungan,
                    identitas_karyawan.mulai_bekerja,
                    identitas_karyawan.no_telp,
                    identitas_karyawan.kontrak,
                    jobdesk_karyawan.weekly_pay
                    FROM identitas_karyawan
                    INNER JOIN jobdesk_karyawan ON identitas_karyawan.id_gaji = jobdesk_karyawan.id_gaji WHERE 
                    identitas_karyawan.nama LIKE '%$keyword%'
            ";

    return query($query);
}
?>