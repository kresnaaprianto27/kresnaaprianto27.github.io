export function warningValidasi() {
        const container = document.getElementsByClassName('container')[0];
        // membuat clas disable content
        const disablecontent = document.createElement('div');
        const disableContentNode = document.createTextNode('');
        const beforeForm = document.querySelector('.form-register');
        disablecontent.appendChild(disableContentNode);
        disablecontent.classList.toggle('disablecontent');
        container.insertBefore(disablecontent, beforeForm);

        // membuat clas validasi register
        const validasiRegis = document.createElement('div');
        const validasiRegisNode = document.createTextNode('');
        validasiRegis.appendChild(validasiRegisNode);
        validasiRegis.classList.toggle('validasiregister');
        disablecontent.appendChild(validasiRegis);
        // membuat class image
        const image = document.createElement('img');
        const imageNode = document.createTextNode('');
        image.appendChild(imageNode);
        image.classList.toggle('iconimage');
        image.setAttribute('src', '../../../images/icon-warning.png');
        image.setAttribute('width', '100px');
        validasiRegis.appendChild(image);
        // membuat class judul
        const judul = document.createElement('h2');
        const judulNode = document.createTextNode('Harap Isi Semua Data');
        judul.appendChild(judulNode);
        judul.classList.toggle('judul');
        validasiRegis.appendChild(judul);
        // menambahkan class btn register
        const btnValidasi = document.createElement('button');
        const btnValidasiNode = document.createTextNode('Ulangi');
        btnValidasi.appendChild(btnValidasiNode);
        btnValidasi.classList.toggle('btnvalidasi');
        btnValidasi.setAttribute('type', 'button');
        validasiRegis.appendChild(btnValidasi);

        btnValidasi.addEventListener('click', function () {
          btnValidasi.parentElement.parentElement.style.display = 'none';
        });
}
export function succesValidasi() {
  const container = document.getElementsByClassName('container')[0];
  // membuat clas disable content
  const disablecontent = document.createElement('div');
  const disableContentNode = document.createTextNode('');
  const beforeForm = document.querySelector('.form-register');
  disablecontent.appendChild(disableContentNode);
  disablecontent.classList.toggle('disablecontent');
  container.insertBefore(disablecontent, beforeForm);

  // membuat clas validasi register
  const validasiRegis = document.createElement('div');
  const validasiRegisNode = document.createTextNode('');
  validasiRegis.appendChild(validasiRegisNode);
  validasiRegis.classList.toggle('validasiregister');
  disablecontent.appendChild(validasiRegis);
  // membuat class image
  const image = document.createElement('img');
  const imageNode = document.createTextNode('');
  image.appendChild(imageNode);
  image.classList.toggle('iconimage');
  image.setAttribute('src', '../../../images/icon-succes.png');
  image.setAttribute('width', '100px');
  validasiRegis.appendChild(image);
  // membuat class judul
  const judul = document.createElement('h2');
  const judulNode = document.createTextNode('Registrasi Berhasil');
  judul.appendChild(judulNode);
  judul.classList.toggle('judul');
  validasiRegis.appendChild(judul);
  // menambahkan class btn register
  const btnValidasi = document.createElement('button');
  const btnValidasiNode = document.createTextNode('Ulangi');
  btnValidasi.appendChild(btnValidasiNode);
  btnValidasi.classList.toggle('btnvalidasi');
  btnValidasi.setAttribute('type', 'button');
  btnValidasi.style.backgroundColor ='green'
  btnValidasi.style.color = 'white';
  btnValidasi.style.border = '3px solid rgb(0, 64, 0)';
  validasiRegis.appendChild(btnValidasi);

  btnValidasi.addEventListener('click', function () {
    btnValidasi.parentElement.parentElement.style.display = 'none';
    window.location.href = '../loginUser/loginUser.php';
  });
}
