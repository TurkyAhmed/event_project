
    let side_bar_link = document.querySelectorAll('#dashboaed-sidebar a.nav-link ')
    console.log(side_bar_link.length);

    side_bar_link.forEach(link => {
        link.addEventListener('click', () => {
          side_bar_link.forEach(link => {
            link.classList.remove('active');
          });
          link.classList.add('active');
        });
      });


      // to rednder partichal view
      // Add a click event listener to the sidebar links
    // $('#dashboaed-sidebar a.nav-link').on('click', function(e) {
    //     e.preventDefault(); // Prevent the default link behavior

    //     // Get the URL of the link
    //     var url = $(this).attr('href');

    //     // Use AJAX to load the content from the URL
    //     $.ajax({
    //         url: url,
    //         type: 'GET',
    //         success: function(response) {
    //             // Update the content of the dashboard section
    //             $('#dashboard-content').html(response);
    //         },
    //         error: function(error) {
    //             console.log(error);
    //         }
    //     });
    // });


