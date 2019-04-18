document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any nav burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

  // Expand description block in category_parent page
  var expandButton = document.querySelector('.expand-button')
  if (expandButton) {
    expandButton.addEventListener('click', function () {
      var text = document.querySelector('.special-text')
      text.classList.toggle('-expanded')

      if (text.classList.contains('-expanded')) {
        expandButton.innerHTML = 'Свернуть'
      } else {
        expandButton.innerHTML = 'Читать больше'
      }
    })
  }




  // Functions

  function getAll(selector) {
    return Array.prototype.slice.call(document.querySelectorAll(selector), 0);
  }

  var $burgers = getAll('.burger');

  if ($burgers.length > 0) {
    $burgers.forEach(function ($el) {
      $el.addEventListener('click', function () {
        var target = $el.dataset.target;
        var $target = document.getElementById(target);
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');
      });
    });
  }





  // Child Category Page - Fixed Sidenav

  var anchors_ref_el = document.getElementById('anchorsReference');
  var anchors_el = document.getElementById('anchors');
  var anchor_links_el = getAll('.bd-anchor-link');

  var anchors_by_id = {};
  var anchors_order = [];
  var anchor_nav_els = [];

  if (anchors_el && anchor_links_el.length > 0) {
    anchors_el.classList.add('is-active');
    var anchors_el_list = anchors_el.querySelector('.bd-anchors-list');

    anchor_links_el.forEach(function (el, index) {
      var link_target = el.getAttribute('href');
      var link_text = el.previousElementSibling.innerText;

      if (link_text != '') {
        var item_el = createAnchorLink(link_text, link_target);
        anchors_el_list.appendChild(item_el);

        var anchor_key = link_target.substring(1); // #target -> target
        anchors_by_id[anchor_key] = {
          id: anchor_key,
          index: index,
          target: link_target,
          text: link_text,
          nav_el: item_el
        };
        anchors_order.push(anchor_key);
        anchor_nav_els.push(item_el);
      }
    });
  }


  // Product Page - Modal Window

  var rootEl = document.documentElement;
  var $modals = getAll('.modal');
  var $modalButtons = getAll('.modal-button');
  var $modalCloses = getAll('.modal-background, .modal-close, .modal-card-head .delete, .modal-card-foot .button');

  if ($modalButtons.length > 0) {
    $modalButtons.forEach(function ($el) {
      $el.addEventListener('click', function () {
        var target = $el.dataset.target;
        openModal(target);
      });
    });
  }

  if ($modalCloses.length > 0) {
    $modalCloses.forEach(function ($el) {
      $el.addEventListener('click', function () {
        closeModals();
      });
    });
  }

  function openModal(target) {
    var $target = document.getElementById(target);
    rootEl.classList.add('is-clipped');
    $target.classList.add('is-active');
  }

  function closeModals() {
    rootEl.classList.remove('is-clipped');
    $modals.forEach(function ($el) {
      $el.classList.remove('is-active');
    });
  }

  document.addEventListener('keydown', function (event) {
    var e = event || window.event;
    if (e.keyCode === 27) {
      closeModals();
      closeDropdowns();
    }
  });




  // Scrolling Function

  // Anchors highlight

  var past_anchors = [];
  anchor_links_el.reverse();
  var trigger_offset = 24; // In pixels
  var typo_el = document.getElementById('typo');

  function whenScrolling() {
    if (anchors_ref_el) {
      var bounds = anchors_ref_el.getBoundingClientRect();
      var anchors_height = anchors_el.clientHeight;
      var typo_bounds = typo_el.getBoundingClientRect();
      var typo_height = typo_el.clientHeight;

      if (bounds.top < 1 && typo_bounds.top - anchors_height + typo_height > 0) {
        anchors_el.classList.add('is-pinned');
      } else {
        anchors_el.classList.remove('is-pinned');
      }

      anchor_links_el.some(function (el) {
        var bounds = el.getBoundingClientRect();
        var href = el.getAttribute('href');
        var key = href.substring(1); // #target -> target

        if (bounds.top < 1 + trigger_offset && past_anchors.indexOf(key) == -1) {
          past_anchors.push(key);
          highlightAnchor();
          return;
        } else if (bounds.top > 0 + trigger_offset && past_anchors.indexOf(key) != -1) {
          removeFromArray(past_anchors, key);
          highlightAnchor();
          return;
        }
      });
    }
  }
  var ticking = false;
  var lastY = 0;

  window.addEventListener('scroll', function () {
    var currentY = window.scrollY;

    if (!ticking) {
      window.requestAnimationFrame(function () {
        // upOrDown(lastY, currentY);
        whenScrolling();
        ticking = false;
        lastY = currentY;
      });
    }

    ticking = true;
  });


});
