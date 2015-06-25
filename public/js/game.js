//Javascript Document
$( document ).ready(function() {

    var canvas = document.getElementById("backgroundCanvas");
    var ctx = canvas.getContext("2d");
    var stats = document.getElementById("stats");

    // Getting elements
    var pad = document.getElementById("pad");
    var ball = document.getElementById("ball");
    var svg = document.getElementById("svgRoot");
    var game = document.getElementById("game");

    // Ball
    var ballRadius = ball.r.baseVal.value;
    var ballX;
    var ballY;
    var previousBallPosition = { x: 0, y: 0 };
    var ballDirectionX;
    var ballDirectionY;
    var ballSpeed = 7;

    // Pad
    var padWidth = pad.width.baseVal.value;
    var padHeight = pad.height.baseVal.value;
    var padX;
    var padY;
    var padSpeed = 0;
    var inertia = 0.85;

    // Bricks
    var bricks = [];
    var destroyedBricksCount;
    var brickWidth = 60;
    var brickHeight = 25;
    var bricksRows = 5;
    var bricksCols = 16;
    var bricksMargin = 15;
    var bricksTop = 20;

    // Misc.
    var minX = ballRadius;
    var minY = ballRadius;
    var maxX;
    var maxY;
    var startDate;

    var gameIntervalID = -1;

    // Brick function
    function Brick(x, y) {
        var isDead = false;
        var position = { x: x, y: y };
        var rect = document.createElementNS("http://www.w3.org/2000/svg", "rect");
        svg.appendChild(rect);
        rect.setAttribute("width", brickWidth);
        rect.setAttribute("height", brickHeight);
        rect.setAttribute("fill", "#a53809");
        pad.setAttribute("fill","#afafaf");

        this.drawAndCollide = function () {
            if (isDead)
                return;

            // Drawing
            rect.setAttribute("x", position.x);
            rect.setAttribute("y", position.y);

            // Collision
            if (ballX + ballRadius < position.x || ballX - ballRadius > position.x + brickWidth)
                return;
            if (ballY + ballRadius < position.y || ballY - ballRadius > position.y + brickHeight)
                return;

            // Dead
            this.remove();
            isDead = true;
            destroyedBricksCount++;

            // Updating ball
            ballX = previousBallPosition.x;
            ballY = previousBallPosition.y;
            ballDirectionY *= -1.0;
        };

        // Killing a brick
        this.remove = function () {
            if (isDead)
                return;
            svg.removeChild(rect);
        };
    }

    // Collisions
    function collideWithWindow() {
        if (ballX < minX) {
            ballX = minX;
            ballDirectionX *= -1.0;
        } else if (ballX > maxX) {
            ballX = maxX;
            ballDirectionX *= -1.0;
        }

        if (ballY < minY) {
            ballY = minY;
            ballDirectionY *= -1.0;
        } else if (ballY > maxY) {
            ballY = maxY;
            ballDirectionY *= -1.0;
            lost();
        }
    }

    function collideWithPad() {
        if (ballX + ballRadius < padX || ballX - ballRadius > padX + padWidth)
            return;
        if (ballY + ballRadius < padY)
            return;
        ballX = previousBallPosition.x;
        ballY = previousBallPosition.y;
        ballDirectionY *= -1.0;
        var dist = ballX - (padX + padWidth / 2);
        ballDirectionX = 2.0 * dist / padWidth;
        var square = Math.sqrt(ballDirectionX * ballDirectionX + ballDirectionY * ballDirectionY);
        ballDirectionX /= square;
        ballDirectionY /= square;
    }

    // Pad movement
    function movePad() {
        padX += padSpeed;

        padSpeed *= inertia;

        if (padX < minX)
            padX = minX;

        if (padX + padWidth > maxX)
            padX = maxX - padWidth;
    }

    window.addEventListener('keydown', function (evt) {
        switch (evt.keyCode) {
            // Left arrow
            case 37:
                padSpeed -= 10;
                break;
            // Right arrow
            case 39:
                padSpeed += 10;
                break;
        }
    }, true);

    function checkWindow() {
        maxX = window.innerWidth - minX;
        maxY = window.innerHeight - 130 - 40 - minY;
        padY = maxY - 10;
    }

    function gameLoop() {
        movePad();

        // Movements
        previousBallPosition.x = ballX;
        previousBallPosition.y = ballY;
        ballX += ballDirectionX * ballSpeed;
        ballY += ballDirectionY * ballSpeed;

        // Collisions
        collideWithWindow();
        collideWithPad();

        // Bricks
        for (var index = 0; index < bricks.length; index++) {
            bricks[index].drawAndCollide();
        }

        // Ball
        ball.setAttribute("cx", ballX);
        ball.setAttribute("cy", ballY);

        // Pad
        pad.setAttribute("x", padX);
        pad.setAttribute("y", padY);

        // Victory ?
        if (destroyedBricksCount == bricks.length) {
            win();
        }
    }

    function generateBricks() {
        // Removing previous ones
        for (var index = 0; index < bricks.length; index++) {
            bricks[index].remove();
        }

        // Creating new ones
        var brickID = 0;

        var offset = (window.innerWidth - bricksCols * (brickWidth + bricksMargin)) / 2.0;

        for (var x = 0; x < bricksCols; x++) {
            for (var y = 0; y < bricksRows; y++) {
                bricks[brickID++] = new Brick(offset + x * (brickWidth + bricksMargin), y * (brickHeight + bricksMargin) + bricksTop);
            }
        }
    }

    function lost() {
        clearInterval(gameIntervalID);
        gameIntervalID = -1;

        game.innerHTML = "Game over !";
    }

    function win() {
        clearInterval(gameIntervalID);
        gameIntervalID = -1;

        var end = (new Date).getTime();

        game.innerHTML = "Victory   (" + Math.round((end - startDate) / 1000) + "s)";
    }

    document.getElementById("easy_mode").onclick = ezGame;
    document.getElementById("medium_mode").onclick = mediumGame;
    document.getElementById("expert_mode").onclick = expertGame;
    document.getElementById("insane_mode").onclick = insaneGame;

    function ezGame() {
        ballSpeed = 4;
        $('#pad').css('width','300px');
        padWidth = 300;
        startGame();
    }

    function mediumGame() {
        ballSpeed = 6;
        $('#pad').css('width','200px');
        padWidth = 200;
        startGame();
    }

    function expertGame () {
        ballSpeed = 8;
        $('#pad').css('width','100px');
        padWidth = 100;
        startGame();
    }

    function insaneGame() {
        ballSpeed = 10;
        $('#pad').css('width', '100px');
        padWidth = 100;
        startGame();
    }

    function startGame() {
        $('#ball').css('display','block');
        $('#pad').css('display','block');
        initGame();
        destroyedBricksCount = 0;
        if (gameIntervalID > -1)
            clearInterval(gameIntervalID);
        startDate = (new Date()).getTime(); ;
        gameIntervalID = setInterval(gameLoop, 16);
        $('#game').text('Brick Break');

    }

    window.onresize = initGame;

    function initGame() {
        checkWindow();

        padX = (window.innerWidth - padWidth) / 2.0;

        ballX = window.innerWidth / 2.0;
        ballY = maxY - 60;

        previousBallPosition.x = ballX;
        previousBallPosition.y = ballY;

        padSpeed = 0;

        ballDirectionX = Math.random();
        ballDirectionY = -1.0;
        generateBricks();
        gameLoop();
    }
});
