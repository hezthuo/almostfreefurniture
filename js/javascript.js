
//CODE TO RANDOMIZE IMAGE ON HOME PAGE
function randomImage(){

  //images
  var image1 = "/supportFiles/1.jpg";
  var image2 = "/supportFiles/2.jpg";
  var image3 = "/supportFiles/3.jpg";

  //variabl to hold array index number
  var i;

  //image array
  imgArr = [image1, image2, image3];

  //randomly selecting an image from the array

  i = Math.floor((Math.random() * 3) );

  //selecting the id of the image tag and assigning the src a random image url
  randomImage = document.getElementById("randomImage");
  randomImage.src= imgArr[i];
}

//CODE TO SHOW/H
function productInformation(id){
  var cheaptableX800 = document.getElementById("cheapTableDetails");
  var luxuryTable = document.getElementById("productDiv");
  var chair101 = document.getElementById("chair101Details");

    if (id === "cheaptableX800"){
      luxuryTable.style.display = 'none';
      chair101.style.display = 'none';

        if(cheaptableX800.style.display === 'none'){
          cheaptableX800.style.display = 'block';
        }else{
          cheaptableX800.style.display = 'none';
        }
    }else if (id === "luxuryTable"){
      chair101.style.display = 'none';
      cheaptableX800.style.display = 'none';

        if(luxuryTable.style.display === 'none'){
          luxuryTable.style.display = 'block';
        }else{
          luxuryTable.style.display = 'none';
        }
    }else if (id === "chair101"){
      cheaptableX800.style.display = 'none';
      luxuryTable.style.display = 'none';

        if(chair101.style.display === 'none'){
          chair101.style.display = 'block';
        }else{
          chair101.style.display = 'none';
        }
      }


}

// function productInformation(){
//   var productCatalogue = document.getElementById("productCatalogue");
//   var product = productCatalogue.getElementByTagName("cheapTable");
//   var product = productCatalogue.getElementByTagName("luxuryTable");
//   var product = productCatalogue.getElementByTagName("chair101");
//
//
// }
