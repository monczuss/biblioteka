// AUTHOR: JAKUB MĄCZKA
// UPDATE FORM

const name = document.querySelector('input[name="name"]')
const release = document.querySelector('input[name="release"]')
const author = document.querySelector('input[name="author"]')
const isbn = document.querySelector('input[name="isbn"]')
const status = document.querySelector('input[name="status"]')
const form = document.querySelector('form')
const message = document.querySelector('.message')

const url = './php/updateData.php'

const checkForm = () => {
	message.style.color = 'red'
	if (name.value === '' || release.value === '' || author.value === '' || isbn.value === '' || status.value === '') {
		message.textContent = 'Wypełnij wszystkie pola!'
	} else if (isbn.value.length !== 13) {
		message.textContent = 'Number ISBN powinien miec 13 cyfr!'
	} else if (status.value !== '1' && status.value !== '0') {
		message.textContent = 'Status wypożyczenia musi być równy 1 albo 0!'
	} else {
		return true
	}
}

const updateData = e => {
	e.preventDefault()
	if (checkForm()) {
		const data = new URLSearchParams()
		for (const d of new FormData(form)) {
			data.append(d[0], d[1], d[2], d[3], d[4])
		}
		fetch(url, {
			method: 'POST',
			body: data,
		})
			.then(response => response.text())
			.then(response => {
				message.style.color = 'green'
				message.textContent = response
			})
			.catch(error => {
				console.error('Błąd:', error)
			})
	}
}

form.addEventListener('submit', updateData)
