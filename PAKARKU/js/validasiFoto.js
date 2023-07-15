export function fotoKosong() {
  const disableScrollBody = document.getElementsByTagName('body')[0];
  disableScrollBody.classList.toggle('disablescroll');
  const beforeNavbar = document.getElementsByClassName('navigasi-menu')[0];
  // -----------------
  const disableContent = document.createElement('div');
  const disableContentNode = document.createTextNode('');
  disableContent.appendChild(disableContentNode);
  disableContent.classList.toggle('disablecontent');
  disableScrollBody.insertBefore(disableContent, beforeNavbar);
  // ----------------------
  const validasiForm = document.createElement('div');
  const validasiFormNode = document.createTextNode('');
  validasiForm.appendChild(validasiFormNode);
  validasiForm.classList.toggle('validasiform');
  disableContent.appendChild(validasiForm);
  // -------------------------
  const image = document.createElement('img');
  const imageNode = document.createTextNode('');
  image.appendChild(imageNode);
  image.classList.toggle('image');
  image.setAttribute('src', '../../images/icon-image.png');
  validasiForm.appendChild(image);
  // ------------------------
  const judulText = document.createElement('h2');
  const judulTextNode = document.createTextNode('Oops..!!File Belum Dipilih');
  judulText.appendChild(judulTextNode);
  judulText.classList.toggle('judultext');
  judulText.style.margin = '0';
  validasiForm.appendChild(judulText);
  // ------------------------
  const btnValid = document.createElement('button');
  const btnValidNode = document.createTextNode('Ulangi');
  btnValid.appendChild(btnValidNode);
  btnValid.classList.toggle('btnvalid');
  validasiForm.appendChild(btnValid);
  btnValid.addEventListener('click', function () {
    btnValid.parentElement.parentElement.style.display = 'none';
    disableScrollBody.classList.remove('disablescroll');
  });
}

export function fileBukanGambar() {
  const disableScrollBody = document.getElementsByTagName('body')[0];
  disableScrollBody.classList.toggle('disablescroll');
  const beforeNavbar = document.getElementsByClassName('navigasi-menu')[0];
  // -----------------
  const disableContent = document.createElement('div');
  const disableContentNode = document.createTextNode('');
  disableContent.appendChild(disableContentNode);
  disableContent.classList.toggle('disablecontent');
  disableScrollBody.insertBefore(disableContent, beforeNavbar);
  // ----------------------
  const validasiForm = document.createElement('div');
  const validasiFormNode = document.createTextNode('');
  validasiForm.appendChild(validasiFormNode);
  validasiForm.classList.toggle('validasiform');
  disableContent.appendChild(validasiForm);
  // -------------------------
  const image = document.createElement('img');
  const imageNode = document.createTextNode('');
  image.appendChild(imageNode);
  image.classList.toggle('image');
  image.setAttribute('src', '../../images/icon-image.png');
  validasiForm.appendChild(image);
  // ------------------------
  const judulText = document.createElement('h2');
  const judulTextNode = document.createTextNode('Oops..!!File Bukan Gambar');
  judulText.appendChild(judulTextNode);
  judulText.classList.toggle('judultext');
  judulText.style.margin = '0';
  validasiForm.appendChild(judulText);
  // ------------------------
  const btnValid = document.createElement('button');
  const btnValidNode = document.createTextNode('Ulangi');
  btnValid.appendChild(btnValidNode);
  btnValid.classList.toggle('btnvalid');
  validasiForm.appendChild(btnValid);
  btnValid.addEventListener('click', function () {
    btnValid.parentElement.parentElement.style.display = 'none';
    disableScrollBody.classList.remove('disablescroll');
  });
}

export function ukuranGambarBesar() {
  const disableScrollBody = document.getElementsByTagName('body')[0];
  disableScrollBody.classList.toggle('disablescroll');
  const beforeNavbar = document.getElementsByClassName('navigasi-menu')[0];
  // -----------------
  const disableContent = document.createElement('div');
  const disableContentNode = document.createTextNode('');
  disableContent.appendChild(disableContentNode);
  disableContent.classList.toggle('disablecontent');
  disableScrollBody.insertBefore(disableContent, beforeNavbar);
  // ----------------------
  const validasiForm = document.createElement('div');
  const validasiFormNode = document.createTextNode('');
  validasiForm.appendChild(validasiFormNode);
  validasiForm.classList.toggle('validasiform');
  disableContent.appendChild(validasiForm);
  // -------------------------
  const image = document.createElement('img');
  const imageNode = document.createTextNode('');
  image.appendChild(imageNode);
  image.classList.toggle('image');
  image.setAttribute('src', '../../images/icon-image.png');
  validasiForm.appendChild(image);
  // ------------------------
  const judulText = document.createElement('h2');
  const judulTextNode = document.createTextNode('Ukuran Gambar Terlalu Besar (Max. 2MB)');
  judulText.appendChild(judulTextNode);
  judulText.classList.toggle('judultext');
  judulText.style.margin = '0';
  judulText.style.textAlign = 'center';
  validasiForm.appendChild(judulText);
  // ------------------------
  const btnValid = document.createElement('button');
  const btnValidNode = document.createTextNode('Ulangi');
  btnValid.appendChild(btnValidNode);
  btnValid.classList.toggle('btnvalid');
  validasiForm.appendChild(btnValid);
  btnValid.addEventListener('click', function () {
    btnValid.parentElement.parentElement.style.display = 'none';
    disableScrollBody.classList.remove('disablescroll');
  });
}

export function suksesUploadGambar() {
  const disableScrollBody = document.getElementsByTagName('body')[0];
  disableScrollBody.classList.toggle('disablescroll');
  const beforeNavbar = document.getElementsByClassName('navigasi-menu')[0];
  // -----------------
  const disableContent = document.createElement('div');
  const disableContentNode = document.createTextNode('');
  disableContent.appendChild(disableContentNode);
  disableContent.classList.toggle('disablecontent');
  disableScrollBody.insertBefore(disableContent, beforeNavbar);
  // ----------------------
  const validasiForm = document.createElement('div');
  const validasiFormNode = document.createTextNode('');
  validasiForm.appendChild(validasiFormNode);
  validasiForm.classList.toggle('validasiform');
  validasiForm.style.border = '5px solid green';
  disableContent.appendChild(validasiForm);
  // -------------------------
  const image = document.createElement('img');
  const imageNode = document.createTextNode('');
  image.appendChild(imageNode);
  image.classList.toggle('image');
  image.setAttribute('src', '../../images/icon-image.png');
  validasiForm.appendChild(image);
  // ------------------------
  const judulText = document.createElement('h2');
  const judulTextNode = document.createTextNode('Yeah..!!Gambar Berhasil Terupload');
  judulText.appendChild(judulTextNode);
  judulText.classList.toggle('judultext');
  judulText.style.margin = '0';
  judulText.style.textAlign = 'center';
  validasiForm.appendChild(judulText);
  // ------------------------
  const btnValid = document.createElement('button');
  const btnValidNode = document.createTextNode('Ulangi');
  btnValid.appendChild(btnValidNode);
  btnValid.classList.toggle('btnvalid');
  btnValid.style.backgroundColor = 'green';
  btnValid.style.border = '3px solid rgb(0, 98, 3)';
  validasiForm.appendChild(btnValid);
  btnValid.addEventListener('click', function () {
    btnValid.parentElement.parentElement.style.display = 'none';
    disableScrollBody.classList.remove('disablescroll');
  });
}
