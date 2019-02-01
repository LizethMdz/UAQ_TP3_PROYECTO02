<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Decalogo de Mavila!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-light js-scroll-trigger" href="#page-top">SISTEMAS DE INFORMACIÓN</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-light text-dark rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Principios</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Introducción</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead text-black text-center " style="background-image: url('img/happy.jpeg'); ">
      <div class="container">
        <h1 class="text-uppercase text-white mb-0">DECÁLOGO DE MAVILA</h1>
        <hr class="star-light">
        <h2 class="font-weight-light text-white mb-0">Proyecto 2 -  TÓPICO III</h2>
      </div>
    </header>

        <!-- Memorama Section-->
        <section class="bg-secondary mt-5">
          <!-- <div class="container"> -->
          <h1 class="text-uppercase text-white text-center mb-0">JUEGO DE MEMORAMA</h1>
          <hr class="star-light">
            <div id="land" class="land">
              <div id="land-msg" class="land-msg">
                <div class="memorama-flip">
                  <span class="memorama" >memorama</span>
                  <button class="btn-play" onclick="javascript:playNow();">Play now &#9658;</button>
                </div>
              </div>
            </div>

              <div id="result" class="land land-hide">
                <div id="result-content" class="land-msg">
                  <span id="result-msg" class="result-msg"></span>
                  <button class="btn-play btn-play-again" onclick="javascript:playAgain();">Play again &#9658;</button>
                </div>
              </div>

              <div id="game"><ul class="flex-container" id="cards"></ul>
              </div>
          <!-- </div> -->
        </section>

        <!-- Send informataion Section -->
        <section class="bg-white mb-0" id="about">
          <div class="container">
            <div class="text-center mt-4">
              <a class="btn btn-xl btn-outline-secondary" href="index.php">
                <i class="fas fa-arrow-circle-left mr-2"></i>
                Atras!
              </a>
            </div>
          </div>
        </section>
      </div>
    </section>
  </body>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Desarrollado</h4>
            <p class="lead mb-0">Facultad de Informática
              <br>UAQ</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>

            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Web</h4>
            <p class="lead mb-0"> Desarrollado con HTML, CSS, Bootstrap
              <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Your Website 2019</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    </html>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>
    <script type="text/javascript">
    const NUM_MAX_CARDS = 12
    const NUM_TUPLE     = 2

    const Cards = [[1,
       {
        id:1,
        source: "http://richarddocwra.com/app/uploads/2016/08/respect.jpg"
      }],[2,

      {
        id:2, source:"https://cms-assets.tutsplus.com/uploads/users/127/posts/28552/final_image/8_3.png",
      }],[3,

      {
        id:3,
     source:"http://media.istockphoto.com/vectors/life-and-work-balance-vector-id468780190?k=6&m=468780190&s=612x612&w=0&h=UqqiPaJT-T5XEs_mQw4dbf31gD4t7J4ms_qoTIZCPZw=",
      }],[4,

      {
        id:4,      source:"https://png.pngtree.com/element_origin_min_pic/17/07/10/ef0105dba58f2d8018752d780ba410e2.jpg",
      }],[5,

      {
        id:5,      source:"http://www.respaldofinanciero.com/wp-content/uploads/2016/04/12.jpg",
      }], [6,

      {
        id:6,      source:"https://st2.depositphotos.com/1000423/9263/i/950/depositphotos_92634564-stock-photo-up-the-ladder-overcoming-challenges.jpg",
      }  ]
    ]

    class Card {
      constructor(id, sourceFront) {

        this.liCard = this.renderCard(id)

        this.back = this.liCard.querySelector(".card-back")
        this.front = this.liCard.querySelector(".card-front")
        this.sourceFront = sourceFront

        this.isBack = true
        this.enabled = true
      }

      flip(){
        if(this.enabled == true) {
          this.front.src = this.sourceFront
          this.back.classList.toggle("card-back-flip")
          this.front.classList.toggle("card-front-flip")
          this.enabled = false
          this.isBack = false
          return true;
        }
        return false;
      }

      cover(){
        this.enabled = true
        this.isBack = true
        this.back.classList.toggle("card-back-flip")
        this.front.classList.toggle("card-front-flip")
        this.front.src = this.back.src
      }

      say(say){
        this.front.classList.toggle("card-front-" + say)
      }

      renderCard(id) {
        const src = "https://media.istockphoto.com/photos/group-of-people-forming-a-thumbs-up-symbol-picture-id520733808"
        let cardBack = document.createElement('img')
        cardBack.className = "card-back"
        cardBack.src = src

        let cardFront = document.createElement('img')
        cardFront.className = "card-front"
        cardFront.src = src

        let divCard = document.createElement('div')
        divCard.className = "card"
        divCard.appendChild(cardBack)
        divCard.insertBefore(cardFront, cardBack)

        let li = document.createElement('li')
        li.id = "card" + id
        li.className = "flex-item"
        li.appendChild(divCard)

        return li
      }
    }

    class Game{
      constructor(onEndGame, elCanvas) {
        this.cards = new Map()
        this.cardsSelected = new Array()
        this.onEndGame = onEndGame.bind(this)
        this.numTuplesOK = 0
        this.numClicks = 0
        this.resultArray = ["ʘ‿ʘ Excelent!", "(´･_･`) Not bad", "¯\\_(ツ)_/¯ Bad "]
        this.elCanvas = elCanvas
        this.shuffleNum = [];
      }

      init(){
        let cardsMap = new Map(Cards);
        this.shuffle()
        this.cleanCanvas()

        for(let i=0; i<this.shuffleNum.length; i++){
          let num = (this.shuffleNum[i] % (NUM_MAX_CARDS/NUM_TUPLE)) +1
          let card = cardsMap.get(num)
          let cardg = new Card(i, card.source)
          this.addCard(i, cardg)
        }
      }

      addCard(id, card){
        card.liCard.addEventListener('click',  this.onClick.bind(this, card))
        this.cards.set(id, card)
        this.elCanvas.appendChild(card.liCard)
      }

      onClick(card){
        let flip = false
        if(this.cardsSelected.length < NUM_TUPLE){
          if (card.flip()){
            this.cardsSelected.push(card)
            this.numClicks++
          }
          if(this.cardsSelected.length == NUM_TUPLE ){
            this.enabledCards(false)
            if(!this.checkTupla()){
              setTimeout(()=>this.coverCards(), 1700)
              this.cardsSay("no", 1500)
              setTimeout(()=>this.enabledCards(true), 2000)
              setTimeout(()=>{this.cardsSelected = new Array()}, 2000)
            }
            else{
              setTimeout(()=>this.enabledCards(true), 800)
              this.cardsSay("yes", 600)
              setTimeout(()=>{this.cardsSelected = new Array()}, 700)

              this.numTuplesOK++
              if(this.numTuplesOK === NUM_MAX_CARDS / NUM_TUPLE)
                setTimeout(()=>{this.endGame()}, 1000)
            }
          }
        }
      }

      checkTupla(){
        if(this.cardsSelected.length > 0){
          let srcFilter = this.cardsSelected[0].sourceFront
          let ce = this.cardsSelected.filter(card=> card.sourceFront ===  srcFilter)
          return ce.length === this.cardsSelected.length
        }
        return false
      }


      cardsSay(say, delay){
        this.cardsSelected.forEach(function(card) {
          setTimeout(()=> card.say(say), delay - 350)
          setTimeout(()=> card.say(say), delay)
        })
      }

      coverCards(){
        this.cardsSelected.forEach(function(card){
          card.cover()
        })
      }

      enabledCards(value){
        this.cards.forEach(function(card) {
          if(card.isBack)
            card.enabled = value
        })
      }

      endGame(){
        let numClicksMin = NUM_MAX_CARDS
        let resultIndex = this.resultArray.length - 1

        if(this.numClicks === numClicksMin)
          resultIndex = 0

        if(this.numClicks > numClicksMin && this.numClicks <= numClicksMin * 2 )
          resultIndex = 1

        if(this.numClicks >= numClicksMin * 2 )
          resultIndex = 2

        this.onEndGame( this.resultArray[resultIndex], this.numClicks)
      }

      cleanCanvas(){
        while (this.elCanvas.firstChild) {
          this.elCanvas.removeChild(this.elCanvas.firstChild);
        }
      }

      randomNum(min, max) { return Math.round(Math.random() * (max - min) + min) }

      shuffle(){
        this.shuffleNum = [];
        for(var i=0; i<NUM_MAX_CARDS; i++) {
          var num = this.randomNum(1,NUM_MAX_CARDS);
          console.log(num)
          if(this.shuffleNum.indexOf(num) >= 0) {
              i = i-1;
          } else {
                this.shuffleNum[i] = num;
          }
        }
      }
    }


    function startGame(){
      let cards = document.getElementById("cards");
      let game = new Game(endGame, cards)
      game.init()
    }

    function playNow(){
      land.classList.toggle("land-hide");
      startGame();
    }

    function playAgain(){
      result.classList.toggle("land-hide");
      startGame();
    }

    function endGame(resultGame, score){
      document.getElementById('result-msg').innerHTML = resultGame + " - " + score + " Clicks";
      result.classList.toggle("land-hide");
    }




    </script>

  </body>

</html>
