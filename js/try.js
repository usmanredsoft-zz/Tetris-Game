var imgObj = new Image();
var pattern;
imgObj.onload = function(){
pattern = spriteCtx.createPattern(this, "repeat");
console.log("loaded");
spriteCtx.fillStyle = pattern;
spriteCtx.fillRect(x, 0, cellSize, cellSize);
spriteCtx.fill();
};
imgObj.src ="img/can.png";