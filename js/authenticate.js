//function to authenticate user by making an Asyn call to authenticate-user API
function authenticate() {

  $.post('api/authenticate-user.php', $('#login').serialize(), function(data) {
    console.log(data);
    if (data == 1) {
      window.location = '/symplicity/vote-for-fruits.html';
    } else {
      alert('Incorrect Username or Password');
    }

  }).catch(function(error) {
    console.log('Error: ' + error.status);
  });

}
