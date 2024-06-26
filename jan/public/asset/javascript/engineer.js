let thumbnails=document.getElementsByClassName('thumbnail');

        let activeImage=document.getElementsByClassName('active');

        for(var i=0; i<thumbnails.length; i++){
            thumbnails[i].addEventListener('mouseover',function(){
                if(activeImage.length >0){
                    activeImage[0].classList.remove('active')
                }
                this.classList.add('active')
                document.getElementById('featured').src =this.src
            })
        }

        let buttonRight=document.getElementById('slidRight');
        let buttonLeft=document.getElementById('slidLeft');

        buttonLeft.addEventListener('click',function(){
            document.getElementById('slider').scrollLeft -=180
        })

        buttonRight.addEventListener('click',function(){
            document.getElementById('slider').scrollLeft +=180
        })





        // ====================rivewa part=================

        const wrapper = document.querySelector('.wrapper');
const indicators = [...document.querySelectorAll('.indicators button')];

let currentTestimonial = 0; // Default 0

indicators.forEach((item, i) => {
    item.addEventListener('click', () => {
        indicators[currentTestimonial].classList.remove('active');
        wrapper.style.marginLeft = `-${100 * i}%`;
        item.classList.add('active');
        currentTestimonial = i;
    })
})



