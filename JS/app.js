// let message = 70;
// let message2 = 100;

//console.log (message + message2)

//let car = {type: 'ford', miles: '12000', fuelType: 'diesel'
}
//console.log (car)

let formData = new FormData();
formData.append('1name', 'value1');
formData.append('email-address', 'value2');
formData.append('subject', 'value3')

// List key/value pairs
for(let [name, value] of formData) {
  alert(`${name} = ${value}`); // 1name = value1, then email-address = value2, subject = value3
}