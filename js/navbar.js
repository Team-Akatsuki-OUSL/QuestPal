let btn = document.querySelector('#btn');
let sidebar = document.querySelector('.custom-sidebar');
let searchBtn = document.querySelector('.bx-search');

btn.addEventListener('click', () => {
  sidebar.classList.toggle('active');
});

searchBtn.addEventListener('click', () => {
  sidebar.classList.toggle('active');
});
