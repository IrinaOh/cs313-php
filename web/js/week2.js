// trigger alert box on click
function alertClicked(){
  alert("Clicked");
}

// change the color of a first div
function changeColor(newColor){
  var newColor = document.getElementById("newColor").value;
  document.getElementById("div1").style.backgroundColor = newColor;
}

$(document).ready(function(){
  // change color of a second div
  $('#btn2').click(function(){
    var newColor = $("#newColor2").val();
    $("#div2").css("background", newColor);
  });

  // toggle fading effect of a third div
  $('#btn3').on('click', function(){
    // hide/show div
    $('#div3').fadeToggle();
    // change text on the button
    $(this).text(function(i, v){
      return v === 'HIDE DIV' ? 'SHOW DIV' : 'HIDE DIV'
    })
  });
});