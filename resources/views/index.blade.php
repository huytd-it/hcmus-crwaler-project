<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IT Conferences Crawler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/gh/ycodetech/horizontal-timeline-2.0@2/css/horizontal_timeline.2.0.min.css">
    <style>
        .header {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        ol {
            list-style-type: none;
        }

        body.loading {
            margin: 0;
            height: 100vh;
            overflow: hidden
        }

        .loader {
            display: none !important;
        }

        .loading>.loader {
            width: 100vw;
            height: 100vh;
            position: absolute;
            z-index: 9999;
            display: flex !important;

            background-color: rgba(9, 7, 7, 0.237);

        }

        .lds-roller {
            display: inline-block;
            position: relative;
            width: 80px;
            height: 80px;

        }

        .lds-roller div {
            animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            transform-origin: 40px 40px;
        }

        .lds-roller div:after {
            content: " ";
            display: block;
            position: absolute;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #fff;
            margin: -4px 0 0 -4px;
        }

        .lds-roller div:nth-child(1) {
            animation-delay: -0.036s;
        }

        .lds-roller div:nth-child(1):after {
            top: 63px;
            left: 63px;
        }

        .lds-roller div:nth-child(2) {
            animation-delay: -0.072s;
        }

        .lds-roller div:nth-child(2):after {
            top: 68px;
            left: 56px;
        }

        .lds-roller div:nth-child(3) {
            animation-delay: -0.108s;
        }

        .lds-roller div:nth-child(3):after {
            top: 71px;
            left: 48px;
        }

        .lds-roller div:nth-child(4) {
            animation-delay: -0.144s;
        }

        .lds-roller div:nth-child(4):after {
            top: 72px;
            left: 40px;
        }

        .lds-roller div:nth-child(5) {
            animation-delay: -0.18s;
        }

        .lds-roller div:nth-child(5):after {
            top: 71px;
            left: 32px;
        }

        .lds-roller div:nth-child(6) {
            animation-delay: -0.216s;
        }

        .lds-roller div:nth-child(6):after {
            top: 68px;
            left: 24px;
        }

        .lds-roller div:nth-child(7) {
            animation-delay: -0.252s;
        }

        .lds-roller div:nth-child(7):after {
            top: 63px;
            left: 17px;
        }

        .lds-roller div:nth-child(8) {
            animation-delay: -0.288s;
        }

        .lds-roller div:nth-child(8):after {
            top: 56px;
            left: 12px;
        }

        @keyframes lds-roller {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>

    <div class="loader d-flex justify-content-center align-items-center">
        <div class="lds-roller">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <header>
        <div class="header">
            <div class="container-md d-flex align-items-center">
                <img width="130" src="logo.png" alt="" srcset="">
                <h3 class="text-uppercase">IT Conferences Crawler</h3>
            </div>
        </div>
    </header>
    <main>
        <div class="main-wrapper container-md mt-3">
            <div class="filter-group mb-3">
                <div class="row g-3" id="filter">
                    <div class="col-xl-3">
                        <div class="form-group">

                            <select name="nguon_id" id="" class="form-control">
                                <option value=""> -- Nguồn thông tin --</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">

                            <select name="dia_diem_id" id="" class="form-control">
                                <option value=""> -- Địa điểm --</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">

                            <select name="dien_gia_id" id="" class="form-control">
                                <option value=""> -- Diễn giả --</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">

                            <select name="chu_de_id" id="" class="form-control">
                                <option value=""> -- Lĩnh vực quan tâm --</option>

                            </select>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3">
                        <div class="form-group">

                            <select name="" id="" class="form-control">
                                <option value=""> -- Chọn timezone --</option>

                            </select>
                        </div>
                    </div> --}}
                    <div class="col-xl-9">
                        <div class="form-group">

                            <input name="search" class="form-control" placeholder="Tìm kiếm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="cards" id="data-container">



            </div>
            <nav aria-label="Page navigation example">
                <div id="pagination-container" class="mt-3 float-right">




                </div>
            </nav>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/ycodetech/horizontal-timeline-2.0@2/JavaScript/horizontal_timeline.2.0.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
    <script src="https://pagination.js.org/dist/2.6.0/pagination.min.js"></script>
    <script>
        $('select').select2({
            theme: 'bootstrap-5'
        });
        var intervalIds = [];

        function showLoading() {
            $('body').addClass('loading');
        }

        function hideLoading() {
            $('body').removeClass('loading');
        }

        $('#filter [name=search]').on('input', function() {
            showLoading();
            getHoiNghi(generateList);
        });

        $('#filter select[name]').on('change', function() {
            showLoading();
            getHoiNghi(generateList);
        });

        var start = 0;

        getHoiNghi(generateList);

        getChuDe(function(res) {
            var options = '<option value="">-- Chọn lĩnh vực -- </option>';
            $(res).each(function(i, el) {
                options += '<option value="' + el.chu_de_id + '">' + el.ten_chu_de + "</option>";
            });

            $('[name=chu_de_id]').html(options);
        });

        getDiaDiem(function(res) {
            var options = '<option value="">-- Chọn địa điểm -- </option>';
            $(res).each(function(i, el) {
                options += '<option value="' + el.ten_dia_diem + '">' + el.ten_dia_diem + "</option>";
            });

            $('[name=dia_diem_id]').html(options);
        })
        getNguon(function(res) {
            var options = '<option value="">-- Chọn nguồn thông tin -- </option>';
            $(res).each(function(i, el) {
                options += '<option value="' + el.nguon_id + '">' + el.ten_nguon + "</option>";
            });

            $('[name=nguon_id]').html(options);
        })
        getDienGia(function(res) {
            var options = '<option value="">-- Chọn diễn giả -- </option>';
            $(res).each(function(i, el) {
                options += '<option value="' + el.dien_gia_id + '">' + el.ten_dien_gia + "</option>";
            });

            $('[name=dien_gia_id]').html(options);
        })

        function generateList(res) {

            for (var i = 0; i < intervalIds.length; i++) {
                clearInterval(intervalIds[i]);
            }
            intervalIds = [];

            $('#pagination-container').pagination({
                dataSource: res.data,
                callback: function(data, pagination) {
                    // template method of yourself


                    var html = '';
                    $(data).each(function(i, el) {

                        html += template(el, i);
                    })

                    $('#data-container').html(html);

                    $('.example').horizontalTimeline({
                        dateIntervals: {
                            "desktop": 200,
                            "tablet": 150,
                            "mobile": 120,
                            "minimal": true,
                            iconBaseClass: "fas fa-2x",
                        }
                    });
                    $('.page-item').find('a').addClass('page-link');
                },
                ulClassName: 'pagination',
                nextClassName: 'page-item',
                prevClassName: 'page-item',
                pageClassName: 'page-item',

            });


        }


        function getHoiNghi(callback) {
            $.ajax({
                url: '{{ route('v1.api.hoi-nghi.all') }}', // Thay đổi URL của API của bạn
                method: 'GET',
                dataType: 'json',
                data: {
                    search: $('#filter [name=search]').val(),
                    nguon_id: $('#filter [name=nguon_id]').val(),
                    chu_de_id: $('#filter [name=chu_de_id]').val(),
                    dien_gia_id: $('#filter [name=dien_gia_id]').val(),
                    dia_diem_id: $('#filter [name=dia_diem_id]').val(),

                    start: start,
                    length: 100
                }, // Kiểu dữ liệu trả về từ API
                success: function(data) {
                    callback(data)
                    hideLoading();
                },
                error: function(error) {
                    console.error('Lỗi khi gửi yêu cầu:', error);
                }
            });
        }

        function getDiaDiem(callback) {
            $.ajax({
                url: '{{ route('v1.api.dia-diem.all') }}', // Thay đổi URL của API của bạn
                method: 'GET',
                dataType: 'json',
                data: {
                    search: $('#filter [name=search]').val(),
                    start: start,
                    length: 10
                }, // Kiểu dữ liệu trả về từ API
                success: function(data) {
                    callback(data)
                },
                error: function(error) {
                    console.error('Lỗi khi gửi yêu cầu:', error);
                }
            });
        }

        function getChuDe(callback) {
            $.ajax({
                url: '{{ route('v1.api.chu-de.all') }}', // Thay đổi URL của API của bạn
                method: 'GET',
                dataType: 'json',
                data: {
                    search: $('#filter [name=search]').val(),
                    start: start,
                    length: 10
                }, // Kiểu dữ liệu trả về từ API
                success: function(data) {
                    callback(data)
                },
                error: function(error) {
                    console.error('Lỗi khi gửi yêu cầu:', error);
                }
            });
        }

        function getDienGia(callback) {
            $.ajax({
                url: '{{ route('v1.api.dien-gia.all') }}', // Thay đổi URL của API của bạn
                method: 'GET',
                dataType: 'json',
                data: {
                    search: $('#filter [name=search]').val(),
                    start: start,
                    length: 10
                }, // Kiểu dữ liệu trả về từ API
                success: function(data) {
                    callback(data)
                },
                error: function(error) {
                    console.error('Lỗi khi gửi yêu cầu:', error);
                }
            });
        }

        function getNguon(callback) {
            $.ajax({
                url: '{{ route('v1.api.nguon-thong-tin.all') }}', // Thay đổi URL của API của bạn
                method: 'GET',
                dataType: 'json',
                data: {
                    search: $('#filter [name=search]').val(),
                    start: start,
                    length: 10
                }, // Kiểu dữ liệu trả về từ API
                success: function(data) {
                    callback(data)
                },
                error: function(error) {
                    console.error('Lỗi khi gửi yêu cầu:', error);
                }
            });
        }
        //   showLoading();

        function updateCountdown(selector, data) {
            var currentTime = moment();

            var duration = moment.duration(moment(data.thoi_gian_ket_thuc).diff(currentTime));

            var days = duration.days();
            var hours = duration.hours();
            var minutes = duration.minutes();
            var seconds = duration.seconds();

            document.getElementById(selector).innerHTML = days + 'd ' + hours + 'h ' + minutes + 'm ' + seconds + 's';
        }



        function template(data, i) {
            var startDate = moment(data.thoi_gian_bat_dau).format('MMMM Do YYYY');
            var endDate = '';
            var now = moment();
            if (data.thoi_gian_ket_thuc) {
                endDate = moment(data.thoi_gian_ket_thuc);

            }
            const countdownId = "countdown_" + i + "_" + (new Date()).getTime();

            intervalIds.push(setInterval(function() {
                updateCountdown(countdownId, data);
            }, 1000));


            return `<div class="card mt-2 bg-info-subtle ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <p class="title h4 mb-4 text-uppercase">${data.ten_hoi_nghi}</p>
                                <p class="address mb-0">Địa điểm: ${data.dia_diem}</p>
                                <p class="date mb-0">Ngày diễn ra: ${startDate}</p>
                                <p class="subject mb-0">Chủ đề:${data.ten_chu_de}
                                </p>
                            </div>
                            <div class="col-xl-6">
                                <p class="time countdown h4 mb-4" style="width:200px" id="${countdownId}"></p>
                                <p class="deadline mb-0">Deadline: ${endDate.format('MMMM Do YYYY')}
                                </p>
                                <a class="origin-website" href="${data.lien_ket}">Website: ${data.lien_ket}</a>
                                <div class="horizontal-timeline example">
                                    <div class="events-content">
                                        <ol>
                                            <li class="selected" data-horizontal-timeline='{"date": "16/01/2014"}'>

                                            </li>
                                            <li data-horizontal-timeline='{"date": "23/05/2015"}'>

                                            </li>
                                            <li data-horizontal-timeline='{"date": "23/07/2016"}'>

                                            </li>

                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>`;
        }
        var container = $('#pagination-container');
        container.addHook('beforePageOnClick', function() {
            console.log(this);
        });
    </script>
</body>

</html>
