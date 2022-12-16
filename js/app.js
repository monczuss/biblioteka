// AUTHOR: JAKUB MĄCZKA
// SEND FORM

const name = document.querySelector('input[name="name"]')
const release = document.querySelector('input[name="release"]')
const author = document.querySelector('input[name="author"]')
const isbn = document.querySelector('input[name="isbn"]')
const status = document.querySelector('input[name="status"]')
const form = document.querySelector('form')
const message = document.querySelector('.message')
const resetBtn = document.querySelector('button[type="reset"]')

const url = './php/sendData.php'

const checkForm = () => {
	message.style.color = 'red'
	if (name.value === '' || release.value === '' || author.value === '' || isbn.value === '') {
		message.textContent = 'Wypełnij wszystkie pola!'
	} else if (isbn.value.length !== 13) {
		message.textContent = 'Number ISBN powinien mieć 13 cyfr!'
	} else {
		return true
	}
}

const reset = () => {
	const inputs = document.querySelectorAll('input')
	message.textContent = ''
	status.checked = false
	inputs.forEach(input => {
		input.value = ''
	})
}

const sendData = e => {
	e.preventDefault()
	if (checkForm()) {
		const data = new URLSearchParams()
		for (const d of new FormData(form)) {
			data.append(d[0], d[1], d[2], d[3])
		}
		fetch(url, {
			method: 'POST',
			body: data,
		})
			.then(response => response.text())
			.then(response => {
				reset()
				message.style.color = 'green'
				message.textContent = response
			})
			.catch(error => {
				console.error('Błąd:', error)
			})
	}
}

form.addEventListener('submit', sendData)
resetBtn.addEventListener('click', reset)
