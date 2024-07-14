<?php require 'fcHalamanWeb.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 5px;
        }

        section {
            margin: 0 0 30px 0;
            border-bottom: 1px solid black;
            padding: 0 30px 10px 30px;
        }

        section li {
            margin-top: 15px;
        }

        .bioData {
            display: grid;
        }

        h3 {
            text-decoration: underline double;
            letter-spacing: 1px;
            font-size: 25px;
            margin-left: -30px;

            margin-bottom: 10px;
        }

        .bioData table {}

        .bioData th {
            text-align: left;
            vertical-align: top;
        }

        .bioData img {
            width: 200px;
            height: 250px;

            display: flex;
            justify-self: center;

            outline: 2px double black;
            outline-offset: 2px;

            margin: 20px;
        }

        /* Extra small devices (phones, less than 576px) */
        @media (max-width: 600px) {
            .bioData img {
                grid-column: 1/2;
                grid-row: 1/2;

                padding: 0 20%;
            }

            .bioData h3 {
                grid-column: 1/2;
                grid-row: 2/3;
            }


            .bioData table {
                grid-column: 1/2;
                grid-row: 3/4;
            }


        }

        @media (min-width: 601px) {
            .bioData img {
                grid-column: 2/3;
                grid-row: 2/3;
            }

            .bioData h3 {
                grid-column: 1/3;
                grid-row: 1/2;
            }

            .bioData table {
                grid-column: 1/2;
                grid-row: 2/3;
            }


        }
    </style>
</head>

<body>
    <section class="bioData">
        <h3>Bio Data</h3>
        <img src=<?php echo $profile_img ?>>
        <table>
            <tr>
                <th>Nama</th>
                <th>&nbsp;:&nbsp;</th>
                <td>Aris Mardiana</td>
            </tr>
            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <th>&nbsp;:&nbsp;</th>
                <td>Tasikmalaya, 11 Maret 2003</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <th>&nbsp;:&nbsp;</th>
                <td>
                    Republik Indonesia,<br />Provinsi Jawa Barat,<br />Kabupaten
                    Tasikmalaya,<br />Kecamatan Pancatengah,<br />Desa Neglasari,<br />Kampung
                    Sempur,<br />RT 018/RW 002
                </td>
            </tr>
            <tr>
                <th>Golongan darah</th>
                <th>&nbsp;:&nbsp;</th>
                <td>-</td>
            </tr>
            <tr>
                <th>Nama Ayah</th>
                <th>&nbsp;:&nbsp;</th>
                <td>Aep Hendaryo</td>
            </tr>
            <tr>
                <th>Nama Ibu</th>
                <th>&nbsp;:&nbsp;</th>
                <td>Eha Julaeha</td>
            </tr>
            <tr>
                <th>Status</th>
                <th>&nbsp;:&nbsp;</th>
                <td>Lajang</td>
            </tr>
            <tr>
                <th>Pekerjaan terakhir</th>
                <th>&nbsp;:&nbsp;</th>
                <td>Quality Control - PT Kaldusari Nabati</td>
            </tr>
        </table>
    </section>
    <section class="aboutMe pekerjaan">
        <h3>Pengalaman Kerja</h3>
        <ul>
            <li>
                <h4>2022-2024 <br />Quality Control - PT Kaldusari Nabati</h4>
                <p>
                    Melakukan pemantauan dan pengawasan terkait standarisasi dan kesesuaian
                    proses produksi dengan standar-standar yang telah ditentukan perusahan.
                    Selain itu saya juga dituntut memahami terkait ISO 22000 dan HACCP
                    sebagai standar yang membentuk suatu sistem manajemen keamanan pangan,
                    yang dirancang untuk semua segmen industri pangan mulai dari penanaman,
                    pemanenan, pengolahan, pabrikasi, distribusi dan penjualan sampai pada
                    penyiapan makanan untuk dikonsumsi.
                </p>
            </li>
            <li>
                <h4>2021-2022 <br />Admin - PT Ananda Bima Sakti</h4>
                <p>
                    Melakukan pendataan, penyediaan document-document yang diperlukan
                    perusahaan. Selain itu, saya juga melakukan pemantauan, pengawasan dan
                    pencatatan keuangan serta mengurus penggajihan karyawan.
                </p>
            </li>
        </ul>
    </section>
    <section class="aboutMe kemampuan">
        <h3>Skill & Kemampuan</h3>
        <ul>
            <li>
                <h4>Microsoft Office<br />Word, Exel, Power Point</h4>
                <p>Saya sudah terbiasa dengan software yang familiar dalam dunia kerja.</p>
            </li>
            <li>
                <h4>Front Enginer Web Developer<br />HTML, CSS, Java Script, PHP</h4>
                <p>
                    Saya juga mempunyai minat yang cukup besar dengan bidang Full Stack
                    Developer, tetapi untuk sekarang ini saya masih fokus di bagain Front
                    Engginer Web terlebih dahulu.
                </p>
            </li>
        </ul>
    </section>
    <section class="aboutMe pendidikan">
        <h3>Pendidikan</h3>
        <ul>
            <li>
                <h4>2018-2021 <br />SMA Plus Pancatengah</h4>
                <p>
                    Saya menjabat sebagai OSIS selama dua periode berturut-turut, periode
                    pertama saya menjabat sebagai wakil ketua OSIS dan periode kedua saya
                    mengajukan diri sebagai sekertaris OSIS.
                    <br />
                    Pada periode kedua saya mengajukan sebagai sekertaris karena saya sangat
                    tertarik dalam dunia administrasi dan komputer, dengan saya menjabat
                    sebgai sekretaris akhirnya saya bisa mengasah skill dalam
                    penyediaan dan pengelolaan document-document yang diperlukan organisasi
                    seperti proposal, sertifikat, design ID Card, dll.
                </p>
            </li>
            <li>
                <h4>2015-2018 <br />MTs NU Nurul Huda Kudus</h4>
                <p>
                    Saat MTs saya pernah menjabat sebagai bendahara kelas. Saya juga cukup
                    aktif dalam beberapa ekstrakulikuler seperti, ekskul komputer, pramuka,
                    dan kegiatan-kegiatan kepanitiaan acara yang sering di adakan sekolah.
                </p>
            </li>
            <li>
                <h4>2018-2009 <br />SD Negeri Neglasari</h4>
                <p>
                    Selama menempuh 6 tahun pendidikan, saya selalu berada dalam peringkat
                    10 besar dengan rata-rata peringkat di 3 besar.
                </p>
            </li>
        </ul>
    </section>
</body>

</html>