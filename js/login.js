// AUTHOR: JAKUB MĄCZKA
// TOGGLE PASSWORD

const toggleBtn = document.querySelector('.toggle-password')
const passInput = document.querySelector('.password')

const togglePassword = () => {
	if (toggleBtn.classList.contains('fa-eye')) {
		toggleBtn.classList.remove('fa-eye')
		toggleBtn.classList.add('fa-eye-slash')
		toggleBtn.classList.add('color')
		passInput.type = 'text'
	} else {
		toggleBtn.classList.add('fa-eye')
		toggleBtn.classList.remove('fa-eye-slash')
		toggleBtn.classList.remove('color')
		passInput.type = 'password'
	}
}

toggleBtn.addEventListener('click', togglePassword)
