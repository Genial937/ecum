// Create a function to select elements
// const selectElement = (element) => document.querySelector(element);
// Open and close nav on click
// selectElement('.menu-icons').addEventListener('click', ()=>{
//      selectElement('nav').classList.toggle( 'active');
// });



// nav slider
$("#nav-slider").owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

// course featured
$("#course-slider").owlCarousel({
    loop:true,
    margin:20,
    dots:true,
    autoplay: true,
    autoplaySpeed: 800,
    responsive:{
    	0:{
    		items:1
    	},
    	600:{
    		items:2
    	},
    	1000:{
    		items:3
    	}
    }
});

// Descriptions slider
$("#desc-slider").owlCarousel({
    loop:true,
    margin:20,
    dots:true,
    autoplay: true,
    autoplaySpeed: 800,
    responsive:{
    	0:{
    		items:1
    	},
    	600:{
    		items:2
    	},
    	1000:{
    		items:4
    	}
    }
});

// Schools slider
$("#school-slider").owlCarousel({
    loop:true,
    margin:20,
    dots:true,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive:{
    	0:{
    		items:1
    	},
    	600:{
    		items:2
    	},
    	1000:{
    		items:3
    	}
    }
});

// Our testimonials
$("#testimonial-slider").owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive:{
    	0:{
    		items:1
    	},
    	600:{
    		items:2
    	},
    	1000:{
    		items:3
    	}
    }
});


// Examination bodies
$("#partners-slider").owlCarousel({
    loop:true,
    margin:5,
    nav:false,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive:{
    	0:{
    		items:1
    	},
    	600:{
    		items:2
    	},
    	1000:{
    		items:6
    	}
    }
});

// single Courses slider
$("#feature-course-slider").owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive:{
    	0:{
    		items:1
    	},
    	600:{
    		items:1
    	},
    	1000:{
    		items:1
    	}
    }
});

// Campus slider
$("#campus-slider").owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay: true,
    autoplaySpeed: 1000,
    responsive:{
    	0:{
    		items:1
    	},
    	600:{
    		items:1
    	},
    	1000:{
    		items:1
    	}
    }
});




// google map
function initMap(){
    var location = {lat :  -1.045620, lng : 37.075142};
    var map = new google.maps.Map(document.getElementByID("map"),{
        zoom: 4,
        center : location
    });
    var marker = new google.maps.Marker({
        position : location,
        map : map
    });
}


$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover:false,
        responsive: [{
            breakpoint: 768,
            setting: {
                slidesToShow:4
            }
        }, {
            breakpoint: 520,
            setting: {
                slidesToShow: 3
            }
        }]
    });
});