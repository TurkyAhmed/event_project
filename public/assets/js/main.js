  // Spinner
  var spinner = function () {
    setTimeout(function () {
        if ($('#spinner').length > 0) {
            $('#spinner').removeClass('show');
        }
    }, 1);
};
spinner();


// Initiate the wowjs
new WOW().init();


// Sticky Navbar
$(window).scroll(function () {
    if ($(this).scrollTop() > 45) {
        $('.navbar').addClass('sticky-top shadow-sm');
    } else {
        $('.navbar').removeClass('sticky-top shadow-sm');
    }
});


/////////
document.addEventListener('DOMContentLoaded', function() {

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


      // sidbar active
      // to rednder partichal view
      // Add a click event listener to the sidebar links

    // $('#dashboaed-sidebar a.nav-link').on('click', function(e) {
    //     e.preventDefault();

    //     var url = $(this).attr('href');

    //     $.ajax({
    //         url: url,
    //         type: 'GET',
    //         success: function(response) {
    //             $('#dashboard-content').html(response);
    //         },
    //         error: function(error) {
    //             console.log(error);
    //         }
    //     });
    // });

    // end sidebar


    // add new hall with its services in reservation
    let btn_add_hall = document.getElementById('add_hall');

    let hall_with_services = ` <div class="hall_with_services">

    <div class="mb-3">
        <label for="interval">القاعة</label>
        <select class="form-control" id="interval" name="hall_id">
            <option selected disabled >--اختار القاعة--</option>
            @foreach ($halls as $hall )
                <option value="{{$hall->id}}" >{{$hall->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="row">
        @foreach ($services as $service )
            <div class="col-12 col-md-2 col-lg-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{$service->id}}" name="service_id[]" id="services_{{$service->name}}">
                    <label class="form-check-label" for="services_{{$service->name}}"> {{$service->name}} </label>
                </div>
            </div>
        @endforeach
    </div>

</div>`;



    // btn_add_hall.addEventListener('click', () => {
    //     console.log('ok');
    //     document.getElementById('reservation_hall_with_services').append(hall_with_services);
    // });
});


