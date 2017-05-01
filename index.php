<?php
$pagetitle = 'Home';
include 'inc/init.php';
include( $_SERVER[ 'DOCUMENT_ROOT' ]."/view/layout/header.php" );
?>



<div class="container">
  <div class="col-lg-8">
    <p>Welcome to the main page!</p>
  </div>
</div>

<?php
if( isset($_COOKIE[ 'cookie' ] ) ) {
  $cookie = $_COOKIE[ 'cookie' ];
  echo $cookie;
}
?>



<div class="container">

  <div class="col-lg-12">

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam in viverra erat, at facilisis dui. Duis urna est, elementum vitae elementum ut, condimentum a augue. Mauris ut efficitur tortor, eget condimentum enim. In nec eros orci. Maecenas mattis ac odio in placerat. Nam hendrerit lectus turpis, sed ultricies libero dignissim non. Vestibulum erat lectus, pellentesque quis pellentesque rhoncus, vulputate ut ex. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

    <p>Vivamus vel ipsum malesuada, cursus neque sit amet, sodales erat. Fusce id vulputate enim, sed dictum nibh. Duis scelerisque at dui ut cursus. Aenean sodales dui id felis suscipit tempor. Aliquam erat volutpat. Nunc eu leo mollis, pharetra elit eu, mollis mauris. Ut in luctus nibh. Duis pharetra erat id augue viverra maximus. Proin pellentesque dictum elit, sed iaculis justo mattis eu. Aenean nec consequat est. Praesent auctor dictum tincidunt. Vestibulum eu ante vitae dolor elementum blandit. Etiam ultricies est id ante lobortis auctor. Maecenas egestas eu augue consectetur mollis.</p>

    <p>Sed enim diam, tincidunt vitae tortor sit amet, venenatis mollis nisl. Pellentesque vitae dui eget dui facilisis convallis. Vestibulum efficitur pulvinar risus at euismod. Etiam sit amet varius lectus. Vivamus hendrerit sem posuere, efficitur orci in, faucibus lacus. Sed massa ex, eleifend viverra mi ac, dictum pulvinar nunc. Phasellus quis justo vel lacus faucibus auctor. Proin ut turpis at sapien suscipit bibendum in at lectus. Praesent scelerisque lobortis elementum. Phasellus in cursus mauris. Maecenas ut condimentum ipsum, a rutrum massa. Proin posuere metus non convallis euismod. Phasellus hendrerit vehicula laoreet. Vestibulum vel laoreet felis. Nulla facilisi. Donec id rutrum magna, quis elementum purus.</p>

    <p>Morbi semper ac ex fringilla lacinia. Donec varius nibh eu urna sagittis facilisis. Curabitur cursus accumsan metus. Suspendisse blandit placerat arcu ut faucibus. Nunc ullamcorper rutrum nisi egestas auctor. Vivamus finibus leo id ligula bibendum lobortis. Quisque et volutpat magna, non euismod sem. Sed non accumsan leo. Pellentesque ante magna, porta a orci nec, convallis imperdiet felis. Sed eros augue, finibus ac dictum in, iaculis et quam. In sem nulla, elementum id arcu a, vestibulum eleifend dui. Etiam consectetur semper gravida. Fusce tortor nunc, sagittis quis varius at, viverra id quam.</p>

    <p>Phasellus scelerisque dignissim velit, vel tempus quam vehicula eget. In ex turpis, dictum ut urna sed, ullamcorper hendrerit augue. Maecenas pellentesque mi non magna lacinia lobortis non ac nibh. Integer pulvinar velit sapien, vel fringilla augue lobortis vel. Proin dignissim imperdiet elit. Praesent semper accumsan rutrum. Quisque elit nibh, malesuada a mi in, vestibulum rhoncus nulla. Nulla facilisi. In tempus lobortis leo non faucibus. Cras luctus lectus mollis pretium posuere. Aliquam eu dolor semper, ultrices lorem sit amet, commodo justo. Cras facilisis neque ac leo ornare sagittis. Vestibulum blandit, urna et mattis placerat, sapien eros faucibus sem, id fringilla arcu ligula auctor lectus.</p>
  </div>
</div>




<?php
include( $_SERVER[ 'DOCUMENT_ROOT' ]."/view/layout/footer.php" );
?>
