@extends('layout.main')

@section('content')
    <div class="container contact-heading">
        <h1>get in touch</h1>
        <p>We are located in the heart of kathmandu in bla bla place . You van visit us any time in the location given below.</p>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.03008620655!2d85.34261931448438!3d27.685464982800898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198d99470043%3A0x167d008efb47d64c!2sBroadway+Infosys+Nepal!5e0!3m2!1sen!2snp!4v1539339780149" height="450" style="border:0" allowfullscreen></iframe>
    </div>



    <div class="container contact-form">
        <div class="row">
            <div class="col-md-6">

                <h2>Phone Number:</h2>
                <h5><u>980017282</u></h5>
                <h2>Social Media Links:</h2>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <h2>Address</h2>
                <h6>Sahid marg,<br>Narayan gopal chowk,<br>Kathmandu</h6>
                <h2>Apply for a job</h2>
                <h5>Send your resume and cover letter at: <a href="#">meroudhyogHR@gmail.com</a></h5>
            </div>

            <div class="col-md-6">
                <h2>Connect through email</h2>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                        <small id="emailHelp" class="form-text text-muted">Review Us!</small>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>

    </div>


@endsection