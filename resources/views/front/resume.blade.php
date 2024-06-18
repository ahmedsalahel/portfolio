<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>portfolio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('front_assets/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                    <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Start Bootstrap</span></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('resume') }}">Resume</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('projects') }}">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contacts') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Experience Section-->
                        <section>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                                <!-- Download resume button-->
                                <!-- Note: Set the link href target to a PDF file within your project-->
                                <a class="btn btn-primary px-4 py-3" href="#!" download>
                                    <div class="d-inline-block bi bi-download me-2"></div>
                                    Download Resume
                                </a>
                            </div>
                            <!-- Experience Card 1-->
                            @foreach ( $experience as $exp )
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">

                                                <div class="text-primary fw-bolder mb-2">{{ $exp->date }}</div>
                                                <div class="small fw-bolder">{{ $exp->name }}</div>
                                                <div class="small text-muted"> {{ $exp->department }}</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div> {{ $exp->description  }}</div></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </section>
                        <!-- Education Section-->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                            <!-- Education Card 1-->


                            @foreach ( $education as $edu )
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">

                                                <div class="text-secondary fw-bolder mb-2">{{ $edu->date }}</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">{{ $edu->name }}</div>
                                                    <div class="small text-muted">{{ $edu->country }}</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">{{ $edu->section }}</div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><div>{{ $edu->description }}</div></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Education Card 2-->

                        </section>
                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                        <div class="mb-5">
                                            <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional Skills</span></h3>
                                            </div>
                                            <div class="row row-cols-1 row-cols-md-3 mb-4">
                                                @foreach ($prof as $skill)
                                                <div class="col">  <div class="d-flex align-items-center bg-light rounded-4 p-4 h-100">
                                                    <b>

                                                        {{ $skill->name }}
                                                    </b>

                                                </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    <!-- Languages list-->
                                        <div class="mb-0 languages-section">
                                            <div class="mb-5">
                                            <div class="d-flex align-items-center mb-4">
                                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                                            </div>
                                            <div class="row">
                                                @foreach ($data as $skill)
                                                <div class="col-md-4 mb-3">  <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                    <img src="{{ $skill->image }}" alt="HTML Icon" class="mr-2" width="25" height="25">
                                                    <b>
                                                        {{ $skill->name }}
                                                    </b>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            </div>
                                        </div>
                                    </section>
                        </div>
                    </div>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="{{ route('contacts') }}">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('front_assets/js/scripts.js') }}"></script>
    </body>
</html>
