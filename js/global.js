(function ($) {
    $(document).ready(function(){
        gsap.registerPlugin(ScrollTrigger);
        gsap.registerPlugin(ScrollToPlugin);

        // gsap.timeline({
        //     scrollTrigger: {
        //       trigger: ".home_wrap .hero_section",
        //       pin: true,
        //       scrub: true,
        //       scroller: 'body',
        //       start: "top top",
        //     },
        // }).to($('.home_wrap .hero_section .right_content img'), { y: -($('.home_wrap .hero_section .right_content img').height() - $('.home_wrap .hero_section').height()) });;

        $('.animate').each(function(index){
            ScrollTrigger.create({
                trigger: this,
                onEnter: function () {
                    $('.animate').eq(index).addClass('in-view');
                },
                // onLeaveBack: function(){
                //     $('.animate').eq(index).removeClass('in-view');
                // },
                // toggleActions: 'restart none none none',
                start: 'top 85%',
                end: 'center 85%',
            })
        });

        if($('body').hasClass('page-template-home')){
            var currentLink;
            $("a").on('click', function(e) {
                
                if( $(this).attr('href').includes('#')){
                    e.preventDefault();  
                    
                    if($(this).attr('href').includes('/')){
                        currentLink = $(this).attr('href').replaceAll("/", "");
                        
                    } else{
                        currentLink = $(this).attr('href');
                    }
        
                    $('html, body').animate({
                        scrollTop: $(currentLink).offset().top
                    }, 1000);
                }
            });
        }

        const swiper = new Swiper('.swiper', {
            loop: true,
            slidesPerView: 1.2,
            spaceBetween: 40,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            breakpoints: {
                750: {
                    slidesPerView: 2.2,
                },
                1100: {
                    slidesPerView: 3.2,
                    spaceBetween: 70
                }
              }
        });

        const swiperSecond = new Swiper('.swiper-container', {
            slidesPerView: 1,
            navigation: {
                nextEl: ".fourth_section_content_wrap .single_filter.tenant",
                prevEl: ".fourth_section_content_wrap .single_filter.developer",
            }
        });

        if($('body').hasClass('page-template-home')){
            $('.single_filter').on('click', function(){
                if($(this).hasClass('tenant')){
                    $('.filters_holder').addClass('right')
                    $('.description .content.developer').fadeOut('fast')
                    $('.fourth_section_content .three_box_section.developer').fadeOut('fast')
                    $('.fourth_section_content_wrap').addClass('orange')
                    $('.fourth_section_header h2').text('For Tenants')
    
                    setTimeout(function(){
                        $('.description .content.tenant').fadeIn('fast')
                        $('.fourth_section_content .three_box_section.tenant').fadeIn('fast').css('display', 'flex');
                    }, 500)
                    
                } else{
                    $('.filters_holder').removeClass('right')
                    $('.description .content.tenant').fadeOut('fast')
                    $('.fourth_section_content .three_box_section.tenant').fadeOut('fast')
                    $('.fourth_section_content_wrap').removeClass('orange')
                    $('.fourth_section_header h2').text('For Developers')
    
                    setTimeout(function(){
                        $('.description .content.developer').fadeIn('fast')
                        $('.fourth_section_content .three_box_section.developer').fadeIn('fast').css('display', 'flex');
                    }, 500)
                }
            })
        }
    
        $('.first_section_content .single_box').on('click', function(){
            if($(this).hasClass('developer')){
                $('.single_filter.developer').trigger('click');
            } else{
                $('.single_filter.tenant').trigger('click');
            }
        })

        if($('body').hasClass('page-template-faq')){
            var url_string = window.location.href; //window.location.href
            var url = new URL(url_string);
            var question = url.searchParams.get("questions");
            console.log(question);

            if(question){
                if(question == "tenants"){
                    setTimeout(function(){
                        $('.single_filter.tenant').trigger('click')  
                    }, 200)
                }

                if(question == 'developers'){
                    setTimeout(function(){
                        $('.single_filter.developer').trigger('click')  
                    }, 200)
                }
            }
            $('.single_filter').on('click', function(){
                if($(this).hasClass('tenant')){
                    let currentHeadline = $('.faq_wrap_content .right_content h1').data('tenant');
                    let currentIcon = $('.faq_wrap_content .left_content .icon_holder').data('tenantimage');
                    $('.filters_holder').addClass('right')
                    $('.questions_wrap.developer').fadeOut('fast')
                    $('.faq_wrap_content .left').addClass('orange')
                    $('.faq_wrap_content .left_content h2').text('Tenants')
                    $('.faq_wrap_content .right_content h1').text(currentHeadline)
                    $('.faq_wrap_content .left_content .icon_holder img').attr('src', currentIcon)

                    console.log(currentIcon);
    
                    setTimeout(function(){
                        $('.questions_wrap.tenant').fadeIn('fast').addClass('in-view')
                    }, 500)
                    
                } else{
                    let currentHeadline = $('.faq_wrap_content .right_content h1').data('developer');
                    let currentIcon = $('.faq_wrap_content .left_content .icon_holder').data('developerimage');
                    $('.filters_holder').removeClass('right')
                    $('.questions_wrap.tenant').fadeOut('fast')
                    $('.faq_wrap_content .left').removeClass('orange')
                    $('.faq_wrap_content .left_content h2').text('Developers')
                    $('.faq_wrap_content .right_content h1').text(currentHeadline)
                    $('.faq_wrap_content .left_content .icon_holder img').attr('src', currentIcon)
    
                    setTimeout(function(){
                        $('.questions_wrap.developer').fadeIn('fast').addClass('in-view')
                    }, 500)
                }
            })
        }
    
        $('.question_header').on('click', function(){
            $(this).parent().parent().toggleClass('active');
            $(this).parent().find('.question_answer').slideToggle();
        })
    
        $(window).on('scroll', function(){
            if ($(document).scrollTop() > 100 ) {
                $('header').addClass('scrolled');
            } else {
                $('header').removeClass('scrolled');
            }
        });
        
    });
    
    $(window).resize(function () {
        ScrollTrigger.refresh();
        ScrollTrigger.getAll().forEach((st) => st.refresh());
    });
})(jQuery);