let MemeImage, selectMeme, topTextInput, bottomTextInput, topTextSizeInput, bottomTextSizeInput, imageInput, generateBtn, canvas, ctx;
var currImage,x,y,z1,z2;


function generateMeme (img, topText, bottomText, topTextSize, bottomTextSize) {
    let fontSize;
	currImage = img;
    // Size canvas to image
    canvas.width = img.width;
    canvas.height = img.height;

	UpdadeText();
}

function downloadCanvas(link, canvasId, filename) {
    link.href = document.getElementById(canvasId).toDataURL();
    link.download = filename;
}

document.getElementById('download').addEventListener('click', function() {
    downloadCanvas(this, 'meme-canvas', 'test.png');
}, false);

function init () {
    // Initialize variables
    topTextInput = document.getElementById('top-text');
    bottomTextInput = document.getElementById('bottom-text');
    topTextSizeInput = document.getElementById('top-text-size-input');
    bottomTextSizeInput = document.getElementById('bottom-text-size-input');
    imageInput = document.getElementById('image-input');
    generateBtn = document.getElementById('generate-btn');
	selectBtn1 = document.getElementById('selectMeme-btn-1');
	selectBtn2 = document.getElementById('selectMeme-btn-2');
	selectBtn3 = document.getElementById('selectMeme-btn-3');
	selectBtn4 = document.getElementById('selectMeme-btn-4');
    canvas = document.getElementById('meme-canvas');
	
    ctx = canvas.getContext('2d');
	MemeImage = document.getElementById('memeStart');
	
	canvas.width = MemeImage.width ;
    canvas.height = MemeImage.height;
	
	ctx.drawImage(MemeImage, 0, 0);
	
    // Default/Demo text
    topTextInput.value = bottomTextInput.value = 'Demo Text';
	
    // Generate button click listener
    generateBtn.addEventListener('click', function () {
        // Read image as DataURL using the FileReader API
        let reader = new FileReader();
        reader.onload = function () {
            let img = new Image;
            img.src = reader.result;
            generateMeme(img, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);
        };
        reader.readAsDataURL(imageInput.files[0]);
    });
	
	selectBtn1.addEventListener('click', function () {
			MemeImage = document.getElementById('meme1');
            generateMeme(MemeImage, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);
    });
	
	selectBtn2.addEventListener('click', function () {
			MemeImage = document.getElementById('meme2');
            generateMeme(MemeImage, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);
    });
	
	selectBtn3.addEventListener('click', function () {
			MemeImage = document.getElementById('meme3');
            generateMeme(MemeImage, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);
    });
	
	selectBtn4.addEventListener('click', function () {
			MemeImage = document.getElementById('meme4');
            generateMeme(MemeImage, topTextInput.value, bottomTextInput.value, topTextSizeInput.value, bottomTextSizeInput.value);
    });
	
	top_text_color.addEventListener("input", UpdadeText, false);
	bottom_text_color.addEventListener("input", UpdadeText, false);
}

init();

function UpdadeText() {
    x = document.getElementById("top-text");
	y = document.getElementById("bottom-text");
	z1 = document.getElementById("top_text_color");
	z2 = document.getElementById("bottom_text_color");
	
	// Clear canvas
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    // Draw main image
    ctx.drawImage(currImage, 0, 0);

    // Text style: 
    ctx.fillStyle = z1.value;
    ctx.strokeStyle = 'black';
    ctx.textAlign = 'center';

    // Top text font size
    fontSize = canvas.width * topTextSizeInput.value;
    ctx.font = fontSize + 'px Impact';
    ctx.lineWidth = fontSize / 20;

    // Draw top text
    ctx.textBaseline = 'top';
    x.value.split('\n').forEach(function (t, i) {
        ctx.fillText(t, canvas.width / 2, i * fontSize, canvas.width);
        ctx.strokeText(t, canvas.width / 2, i * fontSize, canvas.width);
    });

	 ctx.fillStyle = z2.value;
    // Bottom text font size
    fontSize = canvas.width * bottomTextSizeInput.value;
	ctx.font = fontSize + 'px Impact';
    ctx.lineWidth = fontSize / 20;

    // Draw bottom text
    ctx.textBaseline = 'bottom';
    y.value.split('\n').reverse().forEach(function (t, i) { // .reverse() because it's drawing the bottom text from the bottom up
        ctx.fillText(t, canvas.width / 2, canvas.height - i * fontSize, canvas.width);
        ctx.strokeText(t, canvas.width / 2, canvas.height - i * fontSize, canvas.width);
    });
} 
