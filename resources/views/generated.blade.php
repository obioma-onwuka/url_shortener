<x-main>

    @section('title', 'Password Generator')
    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Password Generator</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Project</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Password Generator</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    @if(session()->has('success'))
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="position-relative d-inline text-success ps-4">
                                Success 🤝
                            </h6>
                            <h3 class="mt-2 text-success">Yeah! {{$message}}</h3>
                        </div>
                    @endif
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <form>
                            
                            <div class="row g-3">
                                <div class="col-12 text-justify">

                                    {{-- <p>Password Length: {{$length}}</p>
                                    <p>Strength @if {{$length <= 10}} : Average @elseif {{$length <= 15}}: Medium @else High</p> --}}

                                </div>
                                <div class="col-12">

                                    <div class="form-floating">
                                        
                                        <input type="text" class="form-control" id='myInput' readonly value = "{{ $password }}">
                                        
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" onclick="myFunction()">
                                        Copy Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="position-relative d-inline text-primary ps-4">
                            Heads Up!
                        </h6>
                        <h2 class="mt-2">Generated passwords are not stored.</h2>
                    </div>
                    <div class="wow fadeInUp text-center" data-wow-delay="0.3s">
                        <p class="mb-4">You can generate as many passwords as you want. This service is free.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-main>

<script>
    function myFunction() {
        /* Get the text field */
        var copyText = document.getElementById("myInput");

        /* Select the text field */
        copyText.select();
        copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        document.execCommand("copy");

        /* Alert the copied text */
        alert("Password copied successfully");
    }
</script>

