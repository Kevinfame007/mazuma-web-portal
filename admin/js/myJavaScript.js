const useroremail = document.getElementById('useroremail');
const password = document.getElementById('password');
const form = document.getElementById('form');
const errorElement = document.getElementById('error');

form.addEventListener('submit' , function(e){
    e.preventDefault();
    if (useroremail.value === '' || useroremail.value == null) {
        showerror(useroremail, 'กรุณา');
    }

    if (condition) {
        
    }

});
