<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.cdn')
    <title>About Us</title>
</head>

<body>
	<!-- Navbar starts -->
	@include('layouts.navbar')
    <!-- Navbar ends --> 

    <!-- Image div -->
    <div class="upper-image d-flex justify-content-center align-items-center flex-column">
        <h1 class="aboutus-text text-center">It is good to be blessed.<br>It is better to be a blessing.</h1>
        <p class="aboutus-subtext"><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <div class="colour-overlay"></div>
    </div>
<div class="row">
    
    <div class="col-md-8">
        <div class="float-left aboutus-description">
            <h3 class="pb-4">About AMM Foundation</h3>
            <small>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat venenatis justo, sed convallis mauris ornare eu. Mauris ut gravida leo. Integer sed dui ullamcorper, commodo quam in, hendrerit tellus. Phasellus vel nunc lectus. Vestibulum lobortis quam vel est auctor, nec fermentum sem iaculis. Fusce facilisis, tellus eu bibendum sagittis, magna lectus vulputate tortor, at vulputate enim nisi ac tortor. Donec imperdiet ut urna sed faucibus. Proin non consectetur nulla. Ut placerat ligula id aliquam semper.<br><br>
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum vitae augue nulla. Ut hendrerit diam nulla, a mattis enim semper ac. Quisque tellus justo, viverra id leo sed, lobortis dictum ex. Aliquam volutpat nec leo vitae molestie. Sed aliquam auctor pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi tempor nunc vitae magna molestie elementum. Nulla et turpis ac mauris tempus eleifend eu vitae lorem. Integer id mauris vitae nulla condimentum tempor. Etiam fringilla justo non eleifend viverra. Aenean ut erat nec nunc rutrum mollis.<br><br>
                Vestibulum maximus urna vitae ligula suscipit lacinia. Cras turpis nisi, lobortis in tortor id, mollis laoreet enim. Phasellus tempus, massa in facilisis condimentum, tortor elit imperdiet orci, dictum laoreet quam ex a ante. Nunc at pharetra odio. Nam vel nisi vitae metus laoreet ullamcorper. Fusce semper purus sit amet ipsum efficitur vulputate vel id urna. Maecenas iaculis varius tellus non porttitor. Phasellus cursus efficitur purus nec porttitor. Maecenas egestas tellus tellus, non porta felis faucibus a. Quisque posuere ultricies risus id venenatis. Sed tincidunt euismod ligula, sed tempus sapien consequat et.
            </small>
        </div>
    </div> 
    <div class="image_column col-md-4">
        <div class="float-right mr-1" >
            <img src="{{url('images/businessman.png')}}" id="aboutus-man" style="height: auto;width: 100%;">
        </div>
    </div>   
    
</div>
<footer class="text-center text-white p-1">2020 All Rights Reserved</footer>

</body>
</html>
