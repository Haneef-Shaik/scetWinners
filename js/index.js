const canvas = document.getElementById('canvas1');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
const numberOfParticles = 60;
let particleArray = [];
const pumpkin = new Image();
pumpkin.src = 'images/flower2.png';
var maim = 35,
    mini = 30;

class particle {

    random1() {
        max = maxim;
        min = mini;
        let step1 = max - min + 1;
        let step2 = Math.random() * step1;
        let result = Math.floor(step2) + min;
        return result;
    }

    constructor() {

        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;
        this.size = random1();
        this.size = b;
        console.log(this.size);
        this.speed = Math.random() * 4 + 2;
        this.angle = Math.random() * 360;
        this.spin = Math.random() < 0.5 ? -1 : 1;
    }
    draw() {
        ctx.save();
        ctx.translate(this.x, this.y);
        ctx.rotate(this.angle * Math.PI / 360 * this.spin);
        ctx.drawImage(pumpkin, 0 - this.size / 2, 0 - this.size / 2, this.size, this.size);
        ctx.restore();
    }
    update() {
        this.angle += 2;
        if (this.y - this.size > canvas.height) {

            this.y = 0 - this.size;
            this.x = Math.random() * canvas.width;
            this.size = random1();

            this.size = b;
            console.log(this.size);
            this.speed = Math.random() * 5 + 2;
        }
        this.y += this.speed;
    }
}

function init() {
    for (let i = 0; i < numberOfParticles; i++) {
        particleArray.push(new particle());
    }
}
init();

function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    for (let i = 0; i < particleArray.length; i++) {
        particleArray[i].draw();
        particleArray[i].update();
    }
    requestAnimationFrame(animate);
}
animate();