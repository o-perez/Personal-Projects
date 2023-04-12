<head><link rel="stylesheet" type="text/css" href="../css/stylesheet.css" ></head>
<body>
<div class="carousel">
    
    <!-- <button class="carousel__button carousel__button--left is-hidden"><</button> -->

    <div class="carousel__track-container">
        <ul class="carousel__track">
            <li class="carousel__slide currentSlide">
                <a>
                    <img src="../images/showcaseImg/aboutUs.jpg" id="aboutUs img" alt="About Us" class="carousel__image"><h2>About Us:</h2>
                </a>
            </li>

            <li class="carousel__slide currentSlide">
                <a>
                    <img src="../images/showcaseImg/departments.jpg" id="departments img" alt="departments" class="carousel__image"><h2>Our departments:</h2>
                </a>
            </li>   

            <li class="carousel__slide currentSlide">
                <a>
                    <img src="../images/showcaseImg/location.jpg" id="location img" alt="locations" class="carousel__image"><h2>Our locations:</h2>
                </a>
            </li> 

            <li class="carousel__slide currentSlide">
                <a>
                    <img src="../images/showcaseImg/offers.jpg" id="offers img" alt="offers" class="carousel__image"><h2>Our offers:</h2>
                </a>
            </li> 

            <li class="carousel__slide currentSlide">
                <a>
                    <img src="../images/showcaseImg/pricing.png" id="pricing img" alt="pricing" class="carousel__image"><h2>Get estimate:</h2>
                </a>
            </li> 
        </ul>    
    </div>

    <!-- <button class="carousel__button carousel__button--rigth is-hidden">></button> -->

    <div class="carousel_nav"> 
        <!--Shortcut to create this button button.carousel_indicator*cuantity needed (ex: 3) -->
        <button class="carousel_indicator currentSlide"></button>
        <button class="carousel_indicator"></button>
        <button class="carousel_indicator"></button>
        <button class="carousel_indicator"></button>
        <button class="carousel_indicator"></button>
    </div>
</div>

<script type="text/javascript">

    //Variables.
    const track = document.querySelector('.carousel__track');
    const slides = Array.from(track.children);
    // const nextBTTN = document.querySelector('.carousel__button--rigth');
    // const prevBTTN = document.querySelector('.carousel__button--left');
    const dotNav = document.querySelector('.carousel_nav');
    const dots = Array.from(dotNav.children);
    const slideSIZE = slides[0].getBoundingClientRect().width;

    //Arrange the photos.
    const setSlidePOTN = (slide, index) => {
        slide.style.left = slideSIZE * index + 'px';
    };

    slides.forEach(setSlidePOTN);
    
    const moveToSlide = (track, currentSlides, targetSlide) => {
        track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
        currentSlides.classList.remove('currentSlides')
        targetSlide.classList.add('currentSlides')
    }

    const updateDots = (currentDot, targetDot) => {

        currentDot.classList.remove('currentSlide');
        targetDot.classList.add('currentSlide');
    }

    // const hideArrowBTTNS = (slides, prevBTTN, nextBTTN, targetIndex) => {
    //     if(targetIndex === 0){
    //         prevBTTN.classList.add('is-hidden');
    //         nextBTTN.classList.remove('is-hidden');
    //     }

    //     else if(targetIndex === slides.length -1){
    //         prevBTTN.classList.remove('is-hidden');
    //         nextBTTN.classList.add('is-hidden');
    //     }

    //     else{
    //         prevBTTN.classList.remove('is-hidden');
    //         nextBTTN.classList.remove('is-hidden');
    //     }
    // }

    //Clicking to the previous photo

    //  prevBTTN.addEventListener('click', e => {
    //     const currentSlides = track.querySelector('.currentSlide');
    //     const prevSlide = currentSlides.previousElementSibling;
    //     const currentDot = dotNav.querySelector('.currentSlide');
    //     const prevDot = currentDot.previousElementSibling;
    //     const prevIndex = slides.findIndex(slide => slide === prevSlide)

    //     moveToSlide(track, currentSlides, prevSlide);
    //     updateDots(currentDot, prevDot);
    //     hideArrowBTTNS(slides, prevBTTN, nextBTTN, prevIndex);
    // })

    //Clicking to the next photo.
    // nextBTTN.addEventListener('click', e => {
    //     const currentSlides = track.querySelector('.currentSlide');
    //     const nextSlide = currentSlides.nextElementSibling;
    //     const currentDot = dotNav.querySelector('.currentSlide');
    //     const nextDot = currentDot.nextElementSibling;
    //     const nextIndex = slides.findIndex(slide => slide === nextSlide)

    //     moveToSlide(track, currentSlides, nextSlide);
    //     updateDots(currentDot, nextDot);        
    //     hideArrowBTTNS(slides, prevBTTN, nextBTTN, nextIndex);
    // })

    //Updating nav dots.
    dotNav.addEventListener('click', e =>{
        const targetDot = e.target.closest('button');

        if(!targetDot) return;

        const currentSlides = track.querySelector('.currentSlide');
        const currentDot = dotNav.querySelector('.currentSlide');
        const targetIndex = dots.findIndex(dot => dot === targetDot);
        const targetSlide = slides[targetIndex];

        moveToSlide(track, currentSlides, targetSlide);
        updateDots(currentDot, targetDot);
        // hideArrowBTTNS(slides, prevBTTN, nextBTTN, targetIndex);
    }) 
</script>
</body>