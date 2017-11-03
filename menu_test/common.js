$(document).ready(function() {

  var toggle_mnu = document.querySelector(".toggle_mnu");
  var menu = document.querySelector(".mobile_menu_container")
  // var link = document.querySelectorAll(".link");

  if ($(".toggle_mnu").length > 0) {

    toggle_mnu.addEventListener("click", function(event) {
      event.preventDefault(); //отмена стандартного дейстивия
      menu.classList.toggle("menu_show"); //добавляем класс
      toggle_mnu.classList.toggle("on");
    })

  }

  var main_menu = document.querySelector("section.l_menu")
  var ctg_item = document.querySelectorAll("a.menu_part_name_sub")


  $(".menu_part_name").click(function(event) {
    event.preventDefault();
    main_menu.classList.remove("main_menu");
    $(this).parents(".sub_mnu").find(".hide_menu").toggleClass("menu_show");
    // $(this).closest(".hide_menu").toggleClass("menu_show");
  });

  $(".menu_part_name_sub").click(function(event) {
    event.preventDefault();
    $(this).parents(".l_menu").find(".hide_menu_sub > li > .mnu_catagory_btn").toggleClass("sub_mnu_arrow");
    $(this).toggleClass("ctg_item_active");
    $(this).parents(".l_menu").find(".hide_menu_sub").toggleClass("menu_show");
  });

  $(".mnu_catagory_btn").click(function(event) {
    event.preventDefault();
    $(this).toggleClass("mnu_catagory_btn_active");
    $(this).parent("li").find(".level_two").toggleClass("menu_show");
  });



  // var hide_submnu = document.querySelectorAll(".hide_menu"); //скрытое меню
  // var top_mnubtn = document.querySelectorAll(".menu_part_name");// кнопка по которой открывается

  // if ($(".menu_part_name").length > 0) {
  //   top_mnubtn.addEventListener("click", function(event) {
  //    event.preventDefault();
  //    hide_submnu.classList.toggle("menu_show");
  // })
  // };

  $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
  //Checks if li has sub (ul) and adds class for toggle icon - just an UI

  $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
  //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

  // $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">Navigation</a>");

  //Adds menu-mobile class (for mobile toggle menu) before the normal menu
  //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
  //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
  //Done this way so it can be used with wordpress without any trouble

  $(".menu > ul > li").hover(function(e) {
    if ($(window).width() > 943) {
      $(this).children("ul").stop(true, false).fadeToggle(150);
      e.preventDefault();
    }
  });
  //If width is more than 943px dropdowns are displayed on hover

  $(".sub_mnu > a:first-child").click(function() {
    if ($(window).width() <= 870) {
      $(this).children("l_menu").fadeToggle(150);
    }
  });
  //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

  $(".menu-mobile").click(function(e) {
    $(".menu > ul").toggleClass('show-on-mobile');
    e.preventDefault();
  });
  //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

});