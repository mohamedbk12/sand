

$(document).ready(function() {
  $('#navbar-toggle-btn').on('click', function() {
      $('#navbar-toggle-menu').slideToggle(200);
  });

  $('#close-toggle-menu').on('click', function() {
      $('#navbar-toggle-menu').slideToggle(200);
  });

  $(document).on('click', function(e) {
      if (!$(e.target).closest('#navbar-toggle-btn, #navbar-toggle-menu').length) {
          $('#navbar-toggle-menu').slideUp(200);
      }
  });



  $('#search-wrapper .open-search-btn').on('click', function() {
      $('#search-wrapper').addClass('active')
      $('header').addClass('open-search')
    });
    $('#search-wrapper .close-search-btn').on('click', function() {
      $('#search-wrapper').removeClass('active')
      $('header').removeClass('open-search')
  });




  // Menu buttons
  var buttons = $('.nav-btns [data-submenu]');

  // Submenus
  var submenus = $('.nav-btns.sub div[id]');

  // Hide all submenus
  submenus.hide();

  // Button click handler
  let currentActive;
  buttons.on('click', function() {
    var submenuId = $(this).attr('data-submenu');

    // If the button is already active, toggle its associated submenu
    if ($(this).hasClass('active')) {
      $('#' + submenuId).hide();
      $(this).removeClass('active');
    } else {
      // Otherwise, hide all open submenus and show the selected one
      buttons.removeClass('active')
      submenus.hide();
      $(this).addClass('active');
      $(this).parent().addClass('active');
      currentActive = $(this).parent()
      $('#' + submenuId).show();
    }
  });

  $('.nav-btns.sub button').on('click', function() {
    $(this).parent().hide();
    currentActive.removeClass('active')
  })

  $('.go-top').on('click', function() {
    $('html, body').animate({scrollTop: 0}, 'smooth');
  })





  /*-------------------------------------
  ------------ PRODUCT DETAIL -----------
  -------------------------------------*/

  let productInput = $('#product-count-input');
  let productUpBtn = $('#product-up-btn');
  let productDownBtn = $('#product-down-btn');
  let productMinValue = 1
  let productMaxValue = 999

  productUpBtn.click(function() {
    let oldValue = parseInt(productInput.val());
    let newValue = oldValue + 1;
    if (newValue <= productMaxValue) {
      productInput.val(newValue);
    }
  });

  productDownBtn.click(function() {
    let oldValue = parseInt(productInput.val());
    let newValue = oldValue - 1;
    if (newValue >= productMinValue) {
      productInput.val(newValue);
    }
  });


  $('.tabs-head > a').click(function(e) {
    e.preventDefault();

    $('.tabs-head > a.active').removeClass('active')
    $(this).addClass('active');

    $('.tabs-body > div.active').removeClass('active');
    $('.tabs-body > div').eq($(this).index()).addClass('active');
  });



  // Machine Detail Inage AND Content Controller 
  $(".image-w-txt > div > div > .content-img").click(function() {
    if ($(this).parent().hasClass("active")) {
      $(this).parent().removeClass("active")
    }else{
      $(this).parent().addClass("active").siblings().removeClass("active");
    }
  });
  $(".image-w-txt > div > div .close").click(function() {
      $(this).parent().parent().removeClass("active")
  });



  // input'a tıklandığında dropdown açılır
  let currentDropdown;

  // dropdown açıkken dışarıya tıklanırsa dropdown kapanır
  document.addEventListener('click', (e) => {
    if (currentDropdown) {
      console.log(!e.composedPath().includes(currentDropdown[0]))
      if (!e.composedPath().includes(currentDropdown[0])) {
        currentDropdown.removeClass('active')
      }
    }
  })

  $('.custom-dropdown input').click(function() {
    if ($(this).parent().hasClass('active')) {
      $(this).parent().removeClass('active')
      console.log('kapandı')
    }else{
      console.log('açıldı')
      $(this).parent().addClass('active')
      setTimeout(() => {
        currentDropdown = $(this).parent()
      }, 50);
    }
  });

  // dropdown içindeki span'lardan biri tıklandığında dropdown kapanır ve seçilen span'ın içeriği input değeri olarak atanır
  $('.custom-dropdown .dropdown span').click(function() {
    var value = $(this).text();
    $(this).parent().parent().children().eq(0).val(value)
    currentDropdown.removeClass('active')
  });




  // PERCENT CONTROLLER
  $('[data-percent]').each(function() {
    var percent = $(this).data('percent');
    $(this).animate({width: percent + '%'}, 3000);
  });
  



  // DYNAMIC TAB AREA
  $('[data-tab-id]').click(function() {
    var tabId= $(this).attr('data-tab-id');
    var tabName = $(this).attr('data-tab-name');
    var content = $('[data-content-name="' + tabName + '"]');

    $('[data-tab-id="' + tabId + '"]').removeClass('active');
    $(this).addClass('active');

    $('[data-content-id="' + tabId + '"]').removeClass('active');
    content.addClass('active');
  });





  // DYNAMIC MODALS
  let currentVideo;
  let currentModal;

  function checkIncludeModal(e){
    if (!e.composedPath().includes(currentModal.children[0])) {
      closeModal()
    }
  }
  
  function closeModal() {
    currentModal.classList.remove('active')
    document.removeEventListener('click', checkIncludeModal, true)
    $('body').removeClass('no-scroll')
    if (currentVideo) {
      currentVideo.pause();
      currentVideo.currentTime = 0;
    }
  }
  function openModal(modal) {
    currentModal = modal
    currentModal.classList.add('active')
    document?.addEventListener('click', checkIncludeModal, true)
    $('body').addClass('no-scroll')
    currentVideo = currentModal.querySelector("video");
    if (currentVideo) {
      currentVideo.currentTime = 0;
    }
  }
  

  let modalBtns = document.querySelectorAll('[data-modal]')
  let closeModalBtns = document.querySelectorAll('.close-modal-btn')

  modalBtns.forEach(modalBtn => {
    modalBtn.addEventListener('click', () => {
      openModal(document.getElementById(modalBtn.dataset.modal))
    })
  })

  closeModalBtns.forEach(closeModalBtn => {
    closeModalBtn.addEventListener('click', () => {
      closeModal()
    })
  })

  
  
  // DYNAMIC MODALS

  modalBtns.forEach(modalBtn => {
      modalBtn.addEventListener('click', () => {
          currentModal = document.getElementById(modalBtn.dataset.modal)
          currentModal.classList.add('active')
          document?.addEventListener('click', checkIncludeModal, true)

          currentVideo = currentModal.querySelector("video");
          if (currentVideo) {
              currentVideo.currentTime = 0;
          }
      })
  })


  
  
});

