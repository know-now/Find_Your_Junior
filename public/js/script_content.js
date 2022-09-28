

let toggleBtnCandidate = document.querySelector('#link-how-candidate');
let contentCompany = document.querySelector('#how-it-works-company');


let contentCandidate = document.querySelector('#how-it-works-candidate');
let toggleBtnCompany = document.querySelector('#link-how-company');


contentCandidate.style.display = 'none';

toggleBtnCandidate.addEventListener('click', () => {
  if (contentCandidate.style.display = 'none') {
    contentCandidate.style.display = 'block'
    contentCompany.style.display = 'none';

  } else {
    // contentCompany.style.display = 'none';
    // contentCandidate.style.display = 'block'

  }

});

toggleBtnCompany.addEventListener('click', () => {
  if (contentCompany.style.display = 'none') {
    contentCompany.style.display = 'block'
    contentCandidate.style.display = 'none';

  } else {
    // contentCompany.style.display = 'none';
    // contentCandidate.style.display = 'block'

  }

});


