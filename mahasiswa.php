<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="aset/css/style.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1 align="center">
        Selamat Datang</h1>
    <table border="1" align="center" cellspacing="5px" cellpadding="10px">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="about.php">Tentang</a></td>
            <td><a href="contact.php">contact</a></td>
            <td><a href="mahasiswa.php">Data mahasiswa</a></td>
        </tr>

    </table>
    <h2>
        Data Mahasiswa
    </h2>
    <a href="TambahData.php">Tambah Data</a>

    <table border="1" cellspacing="5px" cellspadding="10px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th >Jurusan</th>
            <th>Email</th>
            <th>no_hp</th>
            <th>Foto </th>
            <th> Aksi </th>
        </tr>
            
            <td>1</td>
            <td>M. Zulfikar Dzulkarnain Dzulhijah</td>
            <td>3322114545</td>
            <td align="center">Teknologi Informasi</td>
            <td align="center">zul@gmail.com</td>
            <td align="center">081239789006</td>
            <td><img src="aset/image/lutffy.jpg" width="70px" /></td>
            <td>
                <a href="editdata.php"><button>Edit</button></a>
                <a href="deletedata.php"><button>Hapus</button></a>
            </td>
        </tr>
        
        <tr>
            <td>2</td>
            <td>Riski Izma Perdani</td>
            <td>3322114545</td>
            <td align="center">Teknologi Informasi</td>
            <td align="center">riskiizmap@gmail.com</td>
            <td align="center">082339726293</td>
            <td><img src="aset/image/lutffy.jpg" width="70px" /></td>
        <td>
                <a href="editdata.php"><button>Edit</button></a>
                <a href="deletedata.php"><button>Hapus</button></a>
                
        </td>
        </tr>
        <table border="2" cellspacing="5px" cellspandding="10px">
            <tr>
                <td>1,1</td>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
            </tr>
            <tr>
                <td>2,1</td>
                <td rowspan="2" colspan="2" align="center"> ? </td>
                <td>2,4</td>
                <!-- <td>2,4</td> -->
            </tr>
            <tr>
                <td>3,1</td>
                <td>3,4</td>
            </tr>
            <tr>
                <td>4,1</td>
                <td>4,2</td>
                <td>4,3</td>
                <td>4,4</td>
            </tr>
        </table>

        </h2>
    </table>
    <hr />
</body>

</html>