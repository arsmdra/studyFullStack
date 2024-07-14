<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    html {
      margin: 0;
      padding: 0;
      height: 100vh;
      width: 100vw;
      box-sizing: border-box;
    }

    body {
      height: inherit;
      width: inherit;
      display: flex;
      flex-direction: column;
      gap: 2px;

      padding: 10px;
      box-sizing: border-box;
    }

    body header {}

    body header #header {
      height: inherit;
      box-sizing: border-box;


      border-radius: 15px 15px 0 0;
      border-top: 1px solid black;
      border-right: 1px solid black;
      border-left: 1px solid black;
      padding: 5px;
      font-weight: bold;

      cursor: pointer;
    }

    /* Header Active ----------------------- */
    .headerActive {
      z-index: 10;
      position: relative;

      background-color: yellow;
    }

    .headerNonactive {
      background-color: rgb(168, 168, 2);
    }

    /* ------------------------------------- */

    body main {
      flex-grow: 1;
      overflow-y: auto;
      background-color: yellow;
      border: 1px solid black;

      position: relative;
      padding: 5px;
    }

    body main #content {
      position: absolute;
      top: 0;
    }

    /* Header Active ----------------------- */
    .contentActive {
      display: initial;
    }

    .contentNonactive {
      display: none;
    }

    /* ------------------------------------- */
    body main #content span {
      font-size: 20px;
    }
  </style>
</head>

<body>
  <header>
    <span id="header" src="document" class="headerActive">Document</span>
    <span id="header" src="acount" class="headerNonactive">Acount</span>
    <span id="header" src="picture" class="headerNonactive">Picture</span>
  </header>
  <main>
    <div id="content" src="document" class="contentActive">
      <span><b>Document</b></span>


    </div>
    <div id="content" src="acount" class="contentNonactive">
      <span><b>Acount</b></span>


    </div>
    <div id="content" src="picture" class="contentNonactive">
      <span><b>Picture</b></span>


    </div>
  </main>

</body>

</html>

<script>
  function showContent(header, content) {
    const headers = document.querySelectorAll(header);
    const contents = document.querySelectorAll(content);

    headers.forEach(header => {
      header.addEventListener('click', (e) => {
        headerActive(e.target, headers, contents);
      })
      headerObserve(header, headers, contents)
    })


  }

  function headerActive(headerTarget, headers, contents) {
    headers.forEach(header => {
      if (header == headerTarget) {
        header.classList.add('headerActive')
        header.classList.remove('headerNonactive')
      } else {
        header.classList.add('headerNonactive')
        header.classList.remove('headerActive')
      }
    });
  }

  function headerObserve(headerTarget, headers, contents) {
    // Seleksi elemen yang akan diamati
    const targetNode = headerTarget;

    // Konfigurasi observer
    const config = {
      attributes: true,
      attributeFilter: ['class']
    };

    // Callback function yang akan dieksekusi saat perubahan terdeteksi
    const callback = function(mutationsList, observer) {
      for (let mutation of mutationsList) {
        if (mutation.target.className == 'headerActive') {
          const urlHeader = mutation.target.getAttribute("src");
          contents.forEach(content => {
            if (urlHeader == content.getAttribute('src')) {
              content.classList.add('contentActive')
              content.classList.remove('contentNonactive')
            } else {
              content.classList.add('contentNonactive')
              content.classList.remove('contentActive')
            }
          });
        }

      }
    };

    // Membuat instance MutationObserver
    const observer = new MutationObserver(callback);

    // Mulai mengamati target node untuk perubahan yang ditentukan dalam konfigurasi
    observer.observe(targetNode, config);

    // Untuk berhenti mengamati
    // observer.disconnect();

  }

  showContent('#header', '#content')
</script>