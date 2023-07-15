// LOGIN
export function loginDataKosong() {
  const body = document.getElementsByTagName('body')[0];
  const container = document.getElementsByClassName('container');
  // -----------------------
  const validasiForm = document.createElement('div');
  const validasiNode = document.createTextNode('');
  validasiForm.appendChild(validasiNode);
  validasiForm.classList.add('validasiform');
  body.appendChild(validasiForm);
  // ----------------------
  const kotakPesan = document.createElement('div');
  const kotakPesanNode = document.createTextNode('');
  kotakPesan.appendChild(kotakPesanNode);
  kotakPesan.classList.add('kotakpesan');
  validasiForm.appendChild(kotakPesan);
  // ---------------------
  const image = document.createElement('img');
  const imageNode = document.createTextNode('');
  image.appendChild(imageNode);
  image.classList.add('image');
  image.setAttribute('src', '../../images/icon-warning.png');
  kotakPesan.appendChild(image);
  // --------------------
  const judulpesan = document.createElement('h2');
  const judulNode = document.createTextNode('Harap Isi Semua Data');
  judulpesan.appendChild(judulNode);
  judulpesan.style.margin = '0px';
  judulpesan.classList.add('judulpesan');
  kotakPesan.appendChild(judulpesan);
  // ---------------------
  const btnUlangi = document.createElement('button');
  const btnNode = document.createTextNode('Ulangi');
  btnUlangi.appendChild(btnNode);
  btnUlangi.classList.add('btnulangi');
  kotakPesan.appendChild(btnUlangi);
  btnUlangi.addEventListener('click', function () {
    btnUlangi.parentElement.parentElement.style.display = 'none';
  });
}

export function suksesLogin() {
  const body = document.getElementsByTagName('body')[0];
  const container = document.getElementsByClassName('container');
  // -----------------------
  const validasiForm = document.createElement('div');
  const validasiNode = document.createTextNode('');
  validasiForm.appendChild(validasiNode);
  validasiForm.classList.add('validasiform');
  body.appendChild(validasiForm);
  // ----------------------
  const kotakPesan = document.createElement('div');
  const kotakPesanNode = document.createTextNode('');
  kotakPesan.appendChild(kotakPesanNode);
  kotakPesan.style.border = '5px solid rgb(0, 88, 7)';
  kotakPesan.classList.add('kotakpesan');
  validasiForm.appendChild(kotakPesan);
  // ---------------------
  const image = document.createElement('img');
  const imageNode = document.createTextNode('');
  image.appendChild(imageNode);
  image.classList.add('image');
  image.setAttribute('src', '../../images/icon-succes.png');
  kotakPesan.appendChild(image);
  // --------------------
  const judulpesan = document.createElement('h2');
  const judulNode = document.createTextNode('Login Berhasil');
  judulpesan.appendChild(judulNode);
  judulpesan.classList.add('judulpesan');
  kotakPesan.appendChild(judulpesan);
  // ---------------------
  const btnUlangi = document.createElement('button');
  const btnNode = document.createTextNode('Ulangi');
  btnUlangi.appendChild(btnNode);
  btnUlangi.style.backgroundColor = 'green';
  btnUlangi.style.color = 'white';
  btnUlangi.style.border = '5px solid rgb(0, 88, 7)';
  btnUlangi.classList.add('btnulangi');

  kotakPesan.appendChild(btnUlangi);

  btnUlangi.addEventListener('click', function () {
    btnUlangi.parentElement.parentElement.style.display = 'none';
    window.location.href = '../dashboardUser/dashboardUser.php';
  });
}


export function userPassSalah() {
  const body = document.getElementsByTagName('body')[0];
  const container = document.getElementsByClassName('container');
  // -----------------------
  const validasiForm = document.createElement('div');
  const validasiNode = document.createTextNode('');
  validasiForm.appendChild(validasiNode);
  validasiForm.classList.add('validasiform');
  body.appendChild(validasiForm);
  // ----------------------
  const kotakPesan = document.createElement('div');
  const kotakPesanNode = document.createTextNode('');
  kotakPesan.appendChild(kotakPesanNode);
  kotakPesan.style.border = '5px solid red';
  kotakPesan.classList.add('kotakpesan');
  validasiForm.appendChild(kotakPesan);
  // ---------------------
  const image = document.createElement('img');
  const imageNode = document.createTextNode('');
  image.appendChild(imageNode);
  image.classList.add('image');
  image.setAttribute('src', '../../images/icon-error.png');
  kotakPesan.appendChild(image);
  // --------------------
  const judulpesan = document.createElement('h2');
  const judulNode = document.createTextNode('Username & Password Salah');
  judulpesan.appendChild(judulNode);
  judulpesan.style.margin = '0';
  judulpesan.classList.add('judulpesan');
  kotakPesan.appendChild(judulpesan);
  // ---------------------
  const btnUlangi = document.createElement('button');
  const btnNode = document.createTextNode('Ulangi');
  btnUlangi.appendChild(btnNode);
  btnUlangi.style.backgroundColor = 'red';
  btnUlangi.style.color = 'white';
  btnUlangi.style.border = '5px solid orangered';
  btnUlangi.classList.add('btnulangi');

  kotakPesan.appendChild(btnUlangi);

  btnUlangi.addEventListener('click', function () {
    btnUlangi.parentElement.parentElement.style.display = 'none';
    // window.location.href = '../loginUser/loginUser.php';
  });
}
