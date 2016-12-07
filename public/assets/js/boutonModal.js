// Get the modal
// var modal1 = document.getElementById('myModal1');
// var modal2 = document.getElementById('myModal2');

// Get the button that opens the modal
// var btn1 = document.getElementById("myBtn1");
// var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
// btn.onclick = function() {
//     modal1.style.display = "block";
//     modal2.style.display = "block";
// }




// When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     modal1.style.display = "none";
//     modal2.style.display = "none";
// }

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }



function openModal1(){

	$('#myModal1').fadeIn();
}

function openModal2(){

	$('#myModal2').fadeIn();
}


function closeModal(){
	$('.modal').fadeOut();
}