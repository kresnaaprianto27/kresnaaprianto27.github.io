/* <div class="welcome">
        <div class="kotakucapan">
            <img width="400px" src="../../images/icon-pesawat.png" alt="mulai">
            <h2>Kenali Gejala Mental Anda <br>Sebelum Terlambat</h2>
            <button type="submit">Cek Sekarang!!</button>
        </div>
    </div> */
    const container =  document.getElementsByClassName('container')[0];
    const beforeH2 = document.getElementsByClassName('judul')[0];
    const welcome = document.createElement('div');
    const welcomeNode = document.createTextNode('');
    welcome.appendChild(welcomeNode);
    welcome.classList.add('welcome');
    container.insertBefore(welcome,beforeH2);
    // ------------------
    const kotakUcapan = document.createElement('div');
    const kotakUcapanNode = document.createTextNode('');
    kotakUcapan.appendChild(kotakUcapanNode);
    kotakUcapan.classList.add('kotakucapan');
    welcome.appendChild(kotakUcapan);
    // -------------------
    const img = document.createElement('img');
    const imgNode = document.createTextNode('');
    img.appendChild(imgNode);
    img.classList.add('image')
    img.setAttribute('src', '../../images/icon-pesawat.png');
    kotakUcapan.appendChild(img);
    // -------------------
    const h2 = document.createElement('h3');
    const h2Node = document.createTextNode('Kenali Gejala Mental Anda Sebelum Terlambat');
    h2.appendChild(h2Node);
    h2.classList.add('judul2');
    kotakUcapan.appendChild(h2);
    // --------------
    const btnCek = document.createElement('button');
    const btnCekNode = document.createTextNode('Cek Sekarang');
    btnCek.appendChild(btnCekNode);
    kotakUcapan.appendChild(btnCek);

   btnCek.addEventListener('click', function () {
    btnCek.parentElement.parentElement.style.display = 'none';
    
   })
