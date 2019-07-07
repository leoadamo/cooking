document.addEventListener('DOMContentLoaded', function () {

  abreModal('login-modal');

  function abreModal(modalID) {
    const modal = document.getElementById(modalID);

    if (modalID) {
      modal.classList.add('modal-open');
      modal.addEventListener('click', function (e) {
        if (e.target.id == modalID || e.target.className == 'modal-close') {
          modal.classList.remove('modal-open');
        }
      });
    }
  }
});