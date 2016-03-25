function arrowTopClick(){
	keysDown |= flags.rotLeft;
	setTimeout(function(){console.log("arrowTopClick");keysDown ^= flags.rotLeft}, 150);
}
function arrowLeftClick(){
	keysDown |= flags.moveLeft;
	setTimeout(function(){console.log("arrowLeftClick");keysDown ^= flags.moveLeft;}, 150);
}
function arrowRightClick(){
	keysDown |= flags.moveRight;
	setTimeout(function(){console.log("arrowRightClick");keysDown ^= flags.moveRight;}, 150);
}
function arrowDownClick(){
	keysDown |= flags.moveDown;
	startLoop();
	setTimeout(function(){console.log("arrowRightClick");stopLoop();keysDown ^= flags.moveDown;}, 150);
}
function holdClick(){
	keysDown |= flags.holdPiece;
	setTimeout(function(){console.log("arrowRightClick");keysDown ^= flags.holdPiece;}, 150);
}
