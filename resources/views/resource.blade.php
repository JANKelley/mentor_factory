@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2><span class="highlight">About</span> JanKelley</h2>
        </div>
    </div>
    <div class="row mb-5 justify-content-center">
        <div class="col-md-8 text-center">
            <p>Jan Kelley is an award-winning creative digital agency. We help businesses grow by using our proprietary growth framework to develop, implement and optimize strong digital-first marketing strategies and programs. Our philosophy brings together the power of technology and the brilliance of humanity to spark ideas, generate momentum and drive lasting results.
                Our diverse team of experts is here to support you as you launch your business and work to accelerate business growth.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center mb-3">
            <h3>Meet Your <span class="highlight">Mentors</span></h3>
        </div>
    </div>

    <div class="row mentors">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card" >
                <a class="card-linkedin-link" href="https://www.linkedin.com/in/brontejones/" target="_blank">
                    <img class="card-img-top" 
                    src="./images/Bronte.jpg" 
                    alt="Bronte Jones">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Bronte Jones</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Social Media Strategy</li>
                        <li class="list-group-item">Community Management</li>
                        <li class="list-group-item">Reporting & Analytics</li>
                    </ul>
                    <a href="#" class="btn btn-black arrow" target="_blank">Book a meeting</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card" >
                <a class="card-linkedin-link" href="https://www.linkedin.com/in/kamilakarwowski/" target="_blank">
                        <img class="card-img-top" 
                        src="images/Kamila.jpg" 
                        alt="Kamila Karwowski">
                    </a>    
                <div class="card-body">
                    <h5 class="card-title">Kamila Karwowski</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Marcom strategy</li>
                        <li class="list-group-item">Content strategy</li>
                        <li class="list-group-item">Messaging</li>
                    </ul>
                    <a href="#" class="btn btn-black arrow" target="_blank">Book a meeting</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card" >
                <a class="card-linkedin-link" href="https://www.linkedin.com/in/danjohn/" target="_blank">
                    <img class="card-img-top" 
                    src="images/Dan.jpg" 
                    alt="Dan John">
                </a>  
                <div class="card-body">
                    <h5 class="card-title">Dan John</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Digital Media Strategy</li>
                        <li class="list-group-item">Adwords & Optimization</li>
                        <li class="list-group-item">&nbsp;</li>
                    </ul>
                    <a href="#" class="btn btn-black arrow" target="_blank">Book a meeting</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card" >
                <a class="card-linkedin-link" href="https://www.linkedin.com/in/evan-tamblyn/" target="_blank">
                    <img class="card-img-top" 
                    src="images/Evan.jpg" 
                    alt="Evan Tamblyn">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Evan Tamblyn</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Digital Audit & Insights</li>
                        <li class="list-group-item">Digital Strategy</li>
                        <li class="list-group-item">Demand Generation</li>
                    </ul>
                    <a href="#" class="btn btn-black arrow" target="_blank">Book a meeting</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card" >
                <a class="card-linkedin-link" href="https://www.linkedin.com/in/chantel-broten-084a153/" target="_blank">
                    <img class="card-img-top" 
                    src="images/Chantel.jpg" 
                    alt="Chantel Broten">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Chantel Broten</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Brand Strategy</li>
                        <li class="list-group-item">Value Proposition & Positioning</li>
                        <li class="list-group-item">Sales Acceleration</li>
                    </ul>
                    <a href="https://calendly.com/cbroten/jk-mentor-factory" class="btn btn-black arrow" target="_blank">Book a meeting</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card" >
            <a class="card-linkedin-link" href="https://www.linkedin.com/in/kbanse/" target="_blank">
                    <img class="card-img-top" 
                    src="images/Klaus.jpg" 
                    alt="Klaus Banse">
                </a>
                <div class="card-body">
                    <h5 class="card-title">Klaus Banse</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Martech Stacks</li>
                        <li class="list-group-item">Integration</li>
                        <li class="list-group-item">Automation</li>
                    </ul>
                    <a href="https://calendly.com/kbanse/virtual-coffee" class="btn btn-black arrow" target="_blank">Book a meeting</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
