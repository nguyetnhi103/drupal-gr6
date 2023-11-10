/* @license GNU-GPL-2.0-or-later https://www.drupal.org/licensing/faq */
(function($,Drupal){Drupal.behaviors.bannerAnimation={attach:function(context,settings){"use strict";const on=(type,el,listener)=>{$(el,context).once().on(type,listener);};AOS.init({duration:1000,easing:"ease-in-out",once:true,mirror:false});}};})(jQuery,Drupal);;
let slideIndex=1;showSlides(slideIndex);var autoplayInterval=setInterval(function(){document.getElementById("next").click();},8000);document.querySelector('video').playbackRate=1.0;function stopAutoplay(){clearInterval(autoplayInterval);}function plusSlides(n){showSlides(slideIndex+=n);}function currentSlide(n){showSlides(slideIndex=n);}function showSlides(n){let i;let slides=document.getElementsByClassName("mySlides");if(n>slides.length)slideIndex=1;if(n<1)slideIndex=slides.length;for(i=0;i<slides.length;i++)slides[i].style.display="none";slides[slideIndex-1].style.display="block";};
jQuery(document).ready(function($){$('.mobile-menu').click(function(){$(this).next('.primary-menu-wrapper').toggleClass('active-menu');});$('.close-mobile-menu').click(function(){$(this).closest('.primary-menu-wrapper').toggleClass('active-menu');});var header=document.getElementById("header");if(document.body.classList.contains('logged-out'))header.style.removeProperty('top');$('.search-icon').click(function(){$('.search-box').css('display','flex');return false;});$('.search-close').click(function(){$('.search-box').css('display','none');return false;});$(window).scroll(function(){if($(this).scrollTop()>80){$('.scrolltop').css('display','flex');$("header#header").addClass("active");}else{$('.scrolltop').fadeOut('slow');$("#header").removeClass("active");}});$('.scrolltop').click(function(){$('html, body').scrollTop(0);});jQuery('nav > ul > li').hover(function(){jQuery('ul',jQuery(this)).addClass('show');},function(){jQuery('ul',jQuery(this)).removeClass('show');});});jQuery(window).on('load',function(){if(jQuery(window).width()>767){var footerheight=jQuery('#footer').outerHeight(true)-250;jQuery('#last-section').css('height',footerheight);}});;
