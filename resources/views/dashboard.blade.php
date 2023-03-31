<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="{{ asset('master.css') }}" />
    <link rel="stylesheet" href="{{ asset('framework.css') }}" />
    <link rel="stylesheet" href="{{ asset('all.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.4/dist/css/uikit.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"
        integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <script src="https://kit.fontawesome.com/c5b37edee1.js" crossorigin="anonymous"></script>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('saad') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="content w-full">
                    <!-- start head-->

                    <!-- end head-->
                    <!--start contenu-->

                    <div class="wrapper d-grid gap-20">
                        <!--start welcome-->
                        <div class="welcome bg-white red-10 txt-c-mobile block-mobile">
                            <div class="intro p-20 d-flex space-between bg-eee">
                                <div>
                                    <h1 class="m-0 fw-30 p-0">bienvenu</h1>
                                    <p class="c-grey mt-5 fw-30">Admin</p>
                                </div>
                                <img src="{{ asset('logo-removebg-preview_350x200.png') }}" alt=""
                                    width="5000px">
                            </div>
                            <img src="{{ asset('imgs/avatar-06.png') }}" alt="" class="avatar2">
                            <div class="body txt-c d-flex p-20 mt-20 block-mobile">
                                <div>SAAD BOUTIRHITEN <span class="d-block c-grey fs-14 mt-10">Administrateur</span>
                                </div>
                                <div>80 <span class="d-block c-grey fs-14 mt-10">tâche </span></div>
                                <div>80 <span class="d-block c-grey fs-14 mt-10"> Gagné</span></div>
                            </div>
                            <div class="body txt-c d-flex p-20 mt-20 block-mobile">
                                <div>Younesse El Assyly <span class="d-block c-grey fs-14 mt-10">Administrateur</span>
                                </div>
                                <div>80 <span class="d-block c-grey fs-14 mt-10">tâche </span></div>
                                <div>80 <span class="d-block c-grey fs-14 mt-10"> Gagné</span></div>
                            </div>

                        </div>
                        <!--end welcome-->

                        <!--start quiq draft-->
                        <div class="quiq-draft p-20 bg-white red-10  txt-c-mobile">
                            <h2 class="mt-0 mb-10 fw-30">Quick Draft</h2>
                            <p class="mr-10 mt-0 mb-20 c-grey fs-15 fw-15">Write A Draft for your ideas</p>
                            <canvas width="auto" height="auto" aria - label="Hello ARIA World" role="img"
                                id="myChart">
                            </canvas>
                        </div>
                        <!--end quiq draft-->

                        <!--start targets-->
                        <div class="targets p-20 bg-white red-10 ">
                            <h2 class="mt-0 mb-10">Yearly targets</h2>
                            <p class="mt-0 mb-20 c-grey fs-15 fw-bolder">targets of the year</p>
                            <div class="targets-row mb-20 blue align-center d-flex">
                                <div class="icon center-flex">
                                    <i class="fa-solid fa-dollar-sign c-blue"></i>
                                </div>
                                <div class="details">
                                    <span class="a fs-14 c-grey fw-bolder">Money</span>
                                    <span class="aa d-block m mb-10 fw-bold c-black">20.000$</span>
                                    <div class="progress p-relative">
                                        <span class="bg-bleu blue" style="width: 40%;">
                                            <span class="bg-bleu">40%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="targets-row mb-20  align-center d-flex orange">
                                <div class="icon center-flex">
                                    <i class="fa-solid fa-diagram-project c-orange"></i>
                                </div>
                                <div class="details">
                                    <span class="a fs-14 c-grey fw-bolder">Projects</span>
                                    <span class="aa d-block mb-10 fw-bold c-black ml-6 p-relative">25</span>
                                    <div class="progress p-relative">
                                        <span class="bg-orange orange" style="width: 55%;">
                                            <span class="bg-orange">55%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="targets-row mb-20  align-center d-flex green">
                                <div class="icon center-flex">
                                    <i class="fa-solid fa-user c-green"></i>
                                </div>
                                <div class="details">
                                    <span class="a fs-14 c-grey fw-bolder">team</span>
                                    <span class="aa d-block  mb-10 fw-bold c-black">12</span>
                                    <div class="progress p-relative">
                                        <span class="bg-green green" style="width: 75%;">
                                            <span class="bg-green">75%</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end targets-->

                        <!--start tickets-->
                        <div class="tickets p-20 bg-white red-10">
                            <h2 class="mt-0 mb-10">Tickets Statistics</h2>
                            <p class="mt-0 mb-20 c-grey fs-15">Everything About Support Tickets</p>
                            <div class="uk-animation-toggle" tabindex="0">
                                <div class="d-flex txt-c gap-20 f-wrap">

                                    <div class="box p-20 red-10 fs-14 c-grey uk-animation-shake uk-animation-reverse">
                                        <i class="fa-solid fa-rectangle-list fa-2x c-orange"></i>
                                        <span class="d-block c-black fw-30 fs-25 mb-5">2500</span>
                                        total
                                    </div>

                                    <div
                                        class="box p-20 red-10 fs-14 c-grey uk-animation-slide-left-small uk-animation-reverse">
                                        <i class="fa-solid fa-spider fa-2x c-black"></i>
                                        <span class="d-block c-black fw-30 fs-25 mb-5">500</span>
                                        pending
                                    </div>
                                    <div
                                        class="box p-20 red-10 fs-14 c-grey uk-animation-scale-up uk-transform-origin-bottom-right">
                                        <i class="fa-solid fa-circle-check fa-2x c-green"></i>
                                        <span class="d-block c-black fw-30 fs-25 mb-5">1900</span>
                                        closed
                                    </div>
                                    <div
                                        class="box p-20 red-10 fs-14 c-grey uk-animation-scale-up uk-transform-origin-bottom-center">
                                        <i class="fa-solid fa-rectangle-xmark fa-2x c-red"></i>
                                        <span class="d-block c-black fw-30 fs-25 mb-5">1900</span>
                                        deleted
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end tickets-->

                        <!--start latest news-->
                        <div class="latest-news p-20 bg-white red-10 txt-c-mobile">
                            <h2 class="mt-0 mb-10">Latest news </h2>
                            <div class="news-row d-flex align-center">
                                <img src="img/news-01.png" alt="">
                                <div class="info">
                                    <h3>Created SASS Section</h3>
                                    <p class="m-0 fs-14 c-grey">New Sass Example & Tutorials</p>
                                </div>
                                <span class="btn-shape bg-eee fs-14 label">3 days Ago</span>
                            </div>
                            <div class="news-row d-flex align-center">
                                <img src="img/news-02.png" alt="">
                                <div class="info">
                                    <h3>Scholl begineers</h3>
                                    <p class="m-0 fs-14 c-grey">New Sass Example & Tutorials</p>
                                </div>
                                <span class="btn-shape bg-eee fs-14 label">3 days Ago</span>
                            </div>
                            <div class="news-row d-flex align-center">
                                <img src="img/news-03.png" alt="">
                                <div class="info">
                                    <h3>Created SASS Section</h3>
                                    <p class="m-0 fs-14 c-grey">New Sass Example & Tutorials</p>
                                </div>
                                <span class="btn-shape bg-eee fs-14 label">3 days Ago</span>
                            </div>
                            <div class="news-row d-flex align-center">
                                <img src="img/news-04.png" alt="">
                                <div class="info">
                                    <h3>Created SASS Section</h3>
                                    <p class="m-0 fs-14 c-grey">New Sass Example & Tutorials</p>
                                </div>
                                <span class="btn-shape bg-eee fs-14 label">3 days Ago</span>
                            </div>
                        </div>
                        <!--end latest news-->

                        <!--start tacks -->
                        <div class="tasks  p-20 bg-white red-10">
                            <h2 class="mt-0 mb-20">Latest Tasks</h2>
                            <div class="task-row between-flex">
                                <div class="info">
                                    <h3 class="m-0 mb-5 fs-15">Record one vedio</h3>
                                    <p class="m-0 c-grey">Record Python create Exe Project</p>
                                </div>
                                <i class="fa-solid fa-trash delete"></i>
                            </div>
                            <div class="task-row between-flex">
                                <div class="info">
                                    <h3 class="m-0 mb-5 fs-15">Record one vedio</h3>
                                    <p class="m-0 c-grey">Record Python create Exe Project</p>
                                </div>
                                <i class="fa-solid fa-trash delete"></i>
                            </div>
                            <div class="task-row between-flex done">
                                <div class="info">
                                    <h3 class="m-0 mb-5 fs-15">Record one vedio</h3>
                                    <p class="m-0 c-grey">Record Python create Exe Project</p>
                                </div>
                                <i class="fa-solid fa-trash delete"></i>
                            </div>
                            <div class="task-row between-flex">
                                <div class="info">
                                    <h3 class="m-0 mb-5 fs-15">Record one vedio</h3>
                                    <p class="m-0 c-grey">Record Python create Exe Project</p>
                                </div>
                                <i class="fa-solid fa-trash delete"></i>
                            </div>
                        </div>
                        <!--end tacks -->

                        <!--start top search  -->
                        <div class="search-items  p-20 bg-white red-10">
                            <h2 class="mt-0 mb-20">Top Search Items</h2>
                            <div class="items-head d-flex space-between c-grey mb-10">
                                <div class="fw-bolder">Keyword</div>
                                <div class="fw-bolder">Search Count</div>
                            </div>
                            <div class="items d-flex space-between pt-15 pb-15">
                                <span>Programming</span>
                                <span class="bg-eee fs-13 btn-shape">220</span>
                            </div>

                            <div class="items d-flex space-between pt-15 pb-15">
                                <span>raja</span>
                                <span class="bg-eee fs-13 btn-shape">270</span>
                            </div>
                            <div class="items d-flex space-between pt-15 pb-15">
                                <span>Learning</span>
                                <span class="bg-eee fs-13 btn-shape">20</span>
                            </div>
                        </div>
                        <!--end top search  -->

                        <!--start latest upload  -->
                        <div class="latest-uploads p-20 bg-white red-10">

                            <h2 class="mt-0 mb-20">Latest Upload</h2>
                            <ul class="m-0">
                                <li class="between-flex pb-10 mb-10">
                                    <div class="d-flex align-center">
                                        <img class="mr-10" src="img/pdf.svg" alt="">
                                        <div>
                                            <span class="d-block">My-file.pdf</span>
                                            <span class="fs-15 c-grey">SAAD</span>
                                        </div>
                                    </div>
                                    <div class="bg-eee btn-shape fs-13">
                                        2.9mb
                                    </div>
                                </li>
                                <li class="between-flex pb-10 mb-10">
                                    <div class="d-flex align-center">
                                        <img class="mr-10" src="img/pdf.svg" alt="">
                                        <div>
                                            <span class="d-block">My-file.pdf</span>
                                            <span class="fs-15 c-grey">SAAD</span>
                                        </div>
                                    </div>
                                    <div class="bg-eee btn-shape fs-13">
                                        3mb
                                    </div>
                                </li>
                                <li class="between-flex pb-10 mb-10">
                                    <div class="d-flex align-center">
                                        <img class="mr-10" src="img/pdf.svg" alt="">
                                        <div>
                                            <span class="d-block">My-file.pdf</span>
                                            <span class="fs-15 c-grey">SAAD</span>
                                        </div>
                                    </div>
                                    <div class="bg-eee btn-shape fs-13">
                                        2.9mb
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--end latest upload  -->

                        <!--start last project  -->
                        <div class="last-project  p-20 bg-white red-10 p-relative">
                            <h2 class="mt-0 mb-20">Last project Progress</h2>
                            <ul class="m-0 p-relative">
                                <li class="mt-25 d-flex align-center done">Got The Project</li>
                                <li class="mt-25 d-flex align-center done">Got The Project</li>
                                <li class="mt-25 d-flex align-center done">Got The Project</li>
                                <li class="mt-25 d-flex align-center current">Got The Project</li>
                                <li class="mt-25 d-flex align-center">Got The Project</li>
                            </ul>
                            <img class="launch-icon " src="img/project.png" alt="">
                        </div>
                        <!--end last project  -->

                        <!--start last post  -->
                        <div class="last-post  p-20 bg-white red-10 p-relative">
                            <h2 class="mt-0 mb-25">Latest Post</h2>
                            <div class="top d-flex align-center">
                                <img class="avatar mr-15" src="img/avatar.png" alt="">
                                <div class="info">
                                    <span class="d-block mb-5">SAAD</span>
                                    <span class="c-grey">About 3 Hours Ago</span>
                                </div>
                            </div>
                            <div class="post-content txt-c-mobile pt-20 pb-20 mt-20 mb-20">
                                hello every body , there are some of the people felling malady , but you can't fool all
                                of the
                                pepole.
                            </div>
                            <div class="post-stats between-flex  c-grey">
                                <div>
                                    <i class="fa-regular fa-heart"></i>
                                    <span>1.700K</span>
                                </div>

                                <div>
                                    <i class="fa-regular fa-comment"></i>
                                    <span>200</span>
                                </div>

                            </div>

                        </div>
                        <!--end last posst  -->

                        <!--start social media-->
                        <div class="social  p-20 bg-white red-10 p-relative">
                            <h2 class="mt-0 mb-25">Social media</h2>
                            <div class="box twitter p-15 p-relative mb-10 between-flex">
                                <i class="fa-brands fa-twitter  fa-2x c-white h-full center-flex"></i>
                                <span class="fw-bolder">90K</span>
                                <a class="fs-13 c-white btn-shape" href="#">Follow</a>
                            </div>
                            <div class="box facebook p-15 p-relative mb-10 between-flex">
                                <i class="fa-brands fa-facebook  fa-2x c-white h-full center-flex"></i>
                                <span class="fw-bolder">9K</span>
                                <a class="fs-13 c-white btn-shape" href="#">Follow</a>
                            </div>
                            <div class="box youtube p-15 p-relative mb-10 between-flex">
                                <i class="fa-brands fa-youtube  fa-2x c-white h-full center-flex"></i>
                                <span class="fw-bolder">2K</span>
                                <a class="fs-13 c-white btn-shape" href="#">Follow</a>
                            </div>
                            <div class="box linkedin p-15 p-relative mb-10 between-flex">
                                <i class="fa-brands fa-linkedin  fa-2x c-white h-full center-flex"></i>
                                <span class="fw-bolder">1K</span>
                                <a class="fs-13 c-white btn-shape" href="#">Follow</a>
                            </div>
                        </div>

                        <!--end social media-->

                        <!--end social media-->

                    </div>
                    <!--start table
                    <div class="projects p-20 bg-white red-10 m-20">

                        <h2 class="mt-0 mb-20">Project</h2>
                        <div class="responsive-table">
                            <table class="fs-15 w-full uk-table uk-table-hover">
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Finish Date</td>
                                        <td>Client</td>
                                        <td>Price</td>
                                        <td>Team</td>
                                        <td>status</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ministry Wikepedi</td>
                                        <td>10 May 2022</td>
                                        <td>Ministry</td>
                                        <td>5300$</td>
                                        <td>
                                            <img src="img/team-01.png" alt="">
                                            <img src="img/team-02.png" alt="">
                                            <img src="img/team-03.png" alt="">
                                            <img src="img/team-04.png" alt="">
                                        </td>
                                        <td>
                                            <span class="label bg-orange c-white btn-shape">Pending</span>
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody>
                                    <tr>
                                        <td>Ministry Of Morocco</td>
                                        <td>10 May 2022</td>
                                        <td>Ministry</td>
                                        <td>5300$</td>
                                        <td>
                                            <img src="img/team-01.png" alt="">
                                            <img src="img/team-02.png" alt="">
                                            <img src="img/team-03.png" alt="">
                                            <img src="img/team-04.png" alt="">
                                        </td>
                                        <td>
                                            <span class="label bg-green c-white btn-shape">Completed</span>
                                        </td>
                                    </tr>
                                </tbody>
                                <tbody>
                                    <tr>
                                        <td>Ministry</td>
                                        <td>10 May 2022</td>
                                        <td>Ministry</td>
                                        <td>5300$</td>
                                        <td>
                                            <img src="img/team-01.png" alt="">
                                            <img src="img/team-02.png" alt="">
                                            <img src="img/team-03.png" alt="">
                                            <img src="img/team-04.png" alt="">
                                        </td>
                                        <td>
                                            <span class="label bg-red c-white btn-shape">Refused</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                 end table-->
                </div>
            </div>
        </div>

    </x-app-layout>




    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
        const data = [@json($data->solvable_count), @json($data->not_solvable_count)];
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['solvable', 'cest pas solvable'],
                datasets: [{
                    label: 'Total',
                    data: data,
                    borderWidth: 2,
                    backgroundColor: ['green', 'red'],

                }]

            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }

            }
        });
    </script>

</body>

</html>
