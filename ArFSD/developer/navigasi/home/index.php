<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            display: flex;
            flex-direction: row-reverse;
        }

        nav {
            width: max-content;
        }

        nav .tbl_kategori {
            height: fit-content;
            width: fit-content;
            display: flex;
            flex-direction: column;
            position: sticky;
            right: 5px;
            top: 15%;
        }

        .tbl {
            text-decoration: none;
            background-color: bisque;
            color: inherit;
            height: 15px;
            padding: 1px 4px;
            border-radius: 4px;
            outline: 1px solid black;
            margin: 2px;
        }

        /* ------------------------------ */
        .tblActive {
            background-color: #fc5185;
        }

        /* ------------------------------ */
        main {
            width: 100%;
            height: fit-content;
        }

        .content {
            height: 100vh;
            padding: 10px;
            display: flex;
        }

        .content:nth-child(even) {
            flex-direction: row-reverse;
        }

        .deskripsi {
            padding: 30px;
        }

        h1 {
            font-size: 20px;
            font-weight: bold;
        }

        h2 {
            font-size: 50px;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .content img {
            padding: 30px;
            width: 300px;
            height: 300px;
        }

        .more {
            margin-top: 10px;
            padding: 4px;
            background-color: #fc5185;
            border-radius: 9px;
            /* Hover */
            border: 2px transparent solid;
        }

        .more a {
            text-decoration: none;
            color: aliceblue;
            font-weight: bolder;
            margin: auto;
            font-size: small;
        }

        .more:hover {
            border: 2px black solid;
        }

        /* Extra small devices (phones, less than 576px) */
        @media (max-width: 700px) {
            .content img {
                display: none;
            }
        }

        /* Small devices (tablets, 576px and up) */
        @media (max-width: 1050px) {
            nav {
                display: none;
            }
        }
    </style>
</head>

<body>
    <nav>
        <div class="tbl_kategori">
            <a class="tbl tblActive" href="#bio">Bio Data</a>
            <a class="tbl" href="#rincianDiri">About Me</a>
            <a class="tbl" href="#pendidikan">Riwayat Pendidikan</a>
            <a class="tbl" href="#kemampuan">Skill & Kemampuan Tambahan</a>
            <a class="tbl" href="#pekerjaan">Pengalaman Kerja</a>
            <a class="tbl" href="#portofolio">Portofolio</a>
            <a class="tbl" href="#rekamMedis">Rekam Medis</a>
        </div>
    </nav>
    <main>
        <section id="bio" class="content">
            <img src="../../images/ilustration-biodata.png" alt="" />
            <div class="deskripsi">
                <h1>Selamat datang di #web-pribadi saya</h1>
                <h2>Bio Data</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia,
                    modi deserunt dolorum odio neque odit dignissimos doloribus eius
                    laudantium reiciendis sunt, iusto quae corrupti minima
                    necessitatibus non adipisci temporibus repellendus.
                </p>
                <button class="more">
                    <a href="bioData.html">Selengkapnya</a>
                </button>
            </div>
        </section>
        <section id="rincianDiri" class="content">
            <img src="../../images/abotme-ilustration.png" alt="" />
            <div class="deskripsi">
                <h1>Selamat datang di #web-pribadi saya</h1>
                <h2>About Me</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia,
                    modi deserunt dolorum odio neque odit dignissimos doloribus eius
                    laudantium reiciendis sunt, iusto quae corrupti minima
                    necessitatibus non adipisci temporibus repellendus.
                </p>
                <button class="more">
                    <a href="aboutMe.html">Selengkapnya</a>
                </button>
            </div>
        </section>
        <section id="pendidikan" class="content">
            <img src="../../images/ilustration-study.png" alt="" />
            <div class="deskripsi">
                <h1>Selamat datang di #web-pribadi saya</h1>
                <h2>Riwayat Pendidikan</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia,
                    modi deserunt dolorum odio neque odit dignissimos doloribus eius
                    laudantium reiciendis sunt, iusto quae corrupti minima
                    necessitatibus non adipisci temporibus repellendus.
                </p>
                <button class="more">
                    <a href="pendidikan.html">Selengkapnya</a>
                </button>
            </div>
        </section>
        <section id="kemampuan" class="content">
            <img src="../../images/ilustration-skill.png" alt="" />
            <div class="deskripsi">
                <h1>Selamat datang di #web-pribadi saya</h1>
                <h2>Skill & Kemapuan Tambahan</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia,
                    modi deserunt dolorum odio neque odit dignissimos doloribus eius
                    laudantium reiciendis sunt, iusto quae corrupti minima
                    necessitatibus non adipisci temporibus repellendus.
                </p>
                <button class="more"><a href="skill.html">Selengkapnya</a></button>
            </div>
        </section>
        <section id="pekerjaan" class="content">
            <img src="../../images/ilustration-pengalaman kerja.png" alt="" />
            <div class="deskripsi">
                <h1>Selamat datang di #web-pribadi saya</h1>
                <h2>Pengalaman Kerja</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia,
                    modi deserunt dolorum odio neque odit dignissimos doloribus eius
                    laudantium reiciendis sunt, iusto quae corrupti minima
                    necessitatibus non adipisci temporibus repellendus.
                </p>
                <button class="more">
                    <a href="pekerjaan.html">Selengkapnya</a>
                </button>
            </div>
        </section>
        <section id="portofolio" class="content">
            <img src="../../images/ilustrasi-portofolio.png" alt="" />
            <div class="deskripsi">
                <h1>Selamat datang di #web-pribadi saya</h1>
                <h2>Portofolio</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia,
                    modi de serunt dolorum odio neque odit dignissimos doloribus eius
                    laudantium reiciendis sunt, iusto quae corrupti minima
                    necessitatibus non adipisci temporibus repellendus.
                </p>
                <button class="more">
                    <a href="portofolio.html">Selengkapnya</a>
                </button>
            </div>
        </section>
        <section id="rekamMedis" class="content">
            <img src="../../images/ilustrasi-rekam-medis.png" alt="" />
            <div class="deskripsi">
                <h1>Selamat datang di #web-pribadi saya</h1>
                <h2>Rekam Medis</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia,
                    modi de serunt dolorum odio neque odit dignissimos doloribus eius
                    laudantium reiciendis sunt, iusto quae corrupti minima
                    necessitatibus non adipisci temporibus repellendus.
                </p>
                <button class="more">
                    <a href="rekamMedis.html">Selengkapnya</a>
                </button>
            </div>
        </section>
    </main>
</body>

</html>

<script>
    const content = document.querySelectorAll(".content");
    const tbl = document.querySelectorAll(".tbl");
    window.addEventListener("scroll", () => {
        content.forEach((sec) => {
            let top = window.scrollY;
            let offset = sec.offsetTop;
            let height = sec.offsetHeight;
            let id = sec.getAttribute("id");

            if (top >= offset && top < offset + height) {
                tbl.forEach((link) => {
                    link.classList.remove("tblActive");
                    document
                        .querySelector("nav a[href*=" + id + "]")
                        .classList.add("tblActive");
                });
            }
        });
    });
</script>