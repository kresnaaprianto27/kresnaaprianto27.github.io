export function tidakAdaGangguan() {
  const body = document.getElementsByTagName('body')[0];
  // ----------------------
  const container = document.createElement('div');
  const containerNode = document.createTextNode('');
  container.appendChild(containerNode);
  container.classList.add('container');
  body.appendChild(container);
  // ----------------------
  const kotakValidasi = document.createElement('div');
  const kotakValidasiNode = document.createTextNode('');
  kotakValidasi.appendChild(kotakValidasiNode);
  kotakValidasi.classList.add('kotakvalidasi');
  container.appendChild(kotakValidasi);
  // --------------------
  const image = document.createElement('img');
  const imageNode = document.createTextNode('');
  image.appendChild(imageNode);
  image.classList.add('image');
  image.setAttribute('src', '../../images/icon-sehat.png');
  kotakValidasi.appendChild(image);
  // -----------------------
  const judul = document.createElement('h2');
  const judulNode = document.createTextNode('Tidak ditemukan Gangguan mental!! Anda masih Baik-Baik Saja..');
  judul.appendChild(judulNode);
  judul.classList.add('judulredirec');
  kotakValidasi.appendChild(judul);
  //------------------------
  const btnkembali = document.createElement('button');
  const btnkembaliNode = document.createTextNode('Kembali');
  btnkembali.appendChild(btnkembaliNode);
  btnkembali.classList.add('btnkembali');
  kotakValidasi.appendChild(btnkembali);
  // -------------------------
  btnkembali.addEventListener('click', function () {
    btnkembali.parentElement.parentElement.style.display = 'none';
    window.location.href = '../dashboardUser/dashboardUser.php';
  });
}

export function suksesKonsultasi() {
  const body = document.getElementsByTagName('body')[0];
  // ----------------------
  const container = document.createElement('div');
  const containerNode = document.createTextNode('');
  container.appendChild(containerNode);
  container.classList.add('container');
  body.appendChild(container);
  // ----------------------
  const kotakValidasi = document.createElement('div');
  const kotakValidasiNode = document.createTextNode('');
  kotakValidasi.appendChild(kotakValidasiNode);
  kotakValidasi.classList.add('kotakvalidasi');
  kotakValidasi.style.border = '10px solid purple';
  kotakValidasi.style.background = 'linear-gradient(#8562f6, #b83bbf)';
  container.appendChild(kotakValidasi);
  // --------------------
  const image = document.createElement('img');
  const imageNode = document.createTextNode('');
  image.appendChild(imageNode);
  image.classList.add('image');
  image.setAttribute('src', '../../images/icon-succes.png');
  kotakValidasi.appendChild(image);
  // -----------------------
  const judul = document.createElement('h2');
  const judulNode = document.createTextNode('Konsutasi Selesai!! Cek Hasil Ke Dashboard Data Diri');
  judul.appendChild(judulNode);
  judul.style.color = 'white';
  judul.classList.add('judulredirec');
  judul.style.textShadow = '3px 2px 4px black';
  kotakValidasi.appendChild(judul);
  // ------------------------
  const btnkembali = document.createElement('button');
  const btnkembaliNode = document.createTextNode('Kembali');
  btnkembali.appendChild(btnkembaliNode);
  btnkembali.classList.add('btnkembali');
  btnkembali.style.backgroundColor = 'rgb(20, 164, 20)';
  btnkembali.style.border = '5px solid rgb(0, 70, 0';
  btnkembali.style.textShadow = '2px 2px 3px black';
  btnkembali.style.boxShadow = '2px 2px 3px black';
  kotakValidasi.appendChild(btnkembali);
  // -------------------------
  btnkembali.addEventListener('click', function () {
    btnkembali.parentElement.parentElement.style.display = 'none';
    window.location.href = '../dashboardUser/dashboardUser.php';
  });
}
