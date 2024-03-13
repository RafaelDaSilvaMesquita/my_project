// Importing and parse JSON.
var json = JSON.parse( $('script[type="application/ld+json"]').text() );

// Log the JSON
// console.log(json);

// Storing the space.
const cont = document.querySelector('#container');

// Print the name.
var heading = document.createElement('H1');
heading.innerHTML = json.name;

document.querySelector('#head').addEventListener('click',function(){
	cont.appendChild(heading);
} )


// Print the image.
var image = document.createElement('img');
image.setAttribute('src', json.image[1]);

document.querySelector('#image').addEventListener('click',function(){
	cont.appendChild(image);
} )

// Print the description.
var description = document.createElement('p');
description.innerHTML = json.description;

document.querySelector('#description').addEventListener('click',function(){
	cont.appendChild(description);
} )