getOptions();

//function to display the fruits with an Asyn call to 'get-fruits' API
function getOptions() {
  $.get('api/get-fruits.php', function(data) {
    var div = '';
    var fruitsObj = JSON.parse(data);
    fruitsObj.forEach(function(fruit) {
      div = div + '<div class="fruit"><img class="fruitimg" src="img/' + fruit.image + '"/><div class="fruitname">' + fruit.name + '</div><button onClick="vote(' + fruit.id + ')" class="btn btn-primary votes" type="button"><span class="badge">' + fruit.votes + '</span> Vote Up</button></div>';
    });
    $('#fruits').html(div);

  }).catch(function(error) {
    console.log("Error " + error.status);
  });

}

//function to store the vote with an Asyn call to 'vote'
function vote(id) {

  $.get('api/vote.php?id=' + id, function(result) {
    if (result) {
      console.log('Vote Recorded');
      getOptions();
    } else {
      console.log('Error');
    }
  }).catch(function(error) {
    console.log("Error" + error.status);
  });


}
