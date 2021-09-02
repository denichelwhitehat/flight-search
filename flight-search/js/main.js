let idaVuelta = document.getElementById('return')
let ida = document.getElementById('one-way')
let input = document.getElementById('arriving-on')
let label = document.getElementById('to-remove')
let leavingFrom = null
let arrivingAt = null
let leavingOn = null
let returningOn = null
let adults = null
let children = null
let classe = null



function events(){

	ida.addEventListener('click', function (){
		if (ida.checked) {
			input.style.display = 'none'
			label.style.display = 'none'

		}
	})

	idaVuelta.addEventListener('click', function (){
		if (idaVuelta.checked) {
			input.style.display = 'block'
			label.style.display = 'block'
		}
	})

} events()


function validateForm(){
//	debugger
	//arrivingAt = document.getElementById('arriving-at').value

	leavingFrom = document.getElementById('leaving-from').value
	arrivingAt = document.getElementById('arriving-at').value
	leavingOn = document.getElementById('living-on').value
	returningOn = document.getElementById('arriving-on').value

	let leavingTmp = leavingOn.split('-')
	let returningTmp = returningOn.split('-')
	//console.log(typeof returningTmp[0])
	let leavingYear = parseInt(leavingTmp[0])
	let returningYear = parseInt(returningTmp[0])
	let leavingMonth = parseInt(leavingTmp[1])
	let returningMonth = parseInt(returningTmp[1])
	let leavingDay = parseInt(leavingTmp[2])
	let returningDay = parseInt(returningTmp[2])
	let result = null

	if (idaVuelta.checked){

		if (
			returningYear >= leavingYear && 
			returningMonth >= leavingMonth &&
			returningDay > leavingDay ||
			returningDay < leavingDay
		){
			adults = document.getElementById('adults').value
			children = document.getElementById('children').value
			classe = document.getElementById('classe').value
			

			// result = {
			// 	leavingFrom : leavingFrom,
			// 	arrivingAt : arrivingAt,
			// 	leavingOn : leavingOn,
			// 	returningOn : returningOn,
			// 	adults : adults,
			// 	children : children,
			// 	classe : classe
			// }

			document.getElementsByClassName('flight-form')[0].submit()

		}

		else{
			result = {
				message : 'Error, no puedes reservar.'
			}
		}
	}

	

	console.log(result)
	//console.log(livingOn)
	//console.log(arrivingAt)


	return false
} 


