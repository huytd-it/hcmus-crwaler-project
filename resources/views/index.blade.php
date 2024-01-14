<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    </style>
</head>

<body>

    <header>
        <div class="header" style="display:flex;justify-content:center;align-items:center;">
            <img width="150" src="logo.png" alt="" srcset="">
            <h3>IT Conferences Crawler</h3>
        </div>
    </header>
    <main>
        <div class="main-wrapper container-md mt-3">
            <div class="filter-group mb-3">
                <div class="row g-3">
                    <div class="col-xl-3">
                        <div class="form-group">

                            <select name="origin_host" id="" class="form-control">
                                <option value=""> -- Nguồn thông tin --</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">

                            <select name="" id="" class="form-control">
                                <option value=""> -- Địa điểm --</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">

                            <select name="" id="" class="form-control">
                                <option value=""> -- Diễn giả --</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">

                            <select name="" id="" class="form-control">
                                <option value=""> -- Lĩnh vực quan tâm --</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="form-group">

                            <select name="" id="" class="form-control">
                                <option value=""> -- Chọn timezone --</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="form-group">

                            <input name="" id="" class="form-control" placeholder="Tìm kiếm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="cards">
                <div class="card bg-info-subtle">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <p class="title h4 mb-4 text-uppercase">Hội nghị về lĩnh vực công nghệ thông tin</p>
                                <p class="address mb-0">Địa điểm: Bristol, UK and Online</p>
                                <p class="date mb-0">Ngày diễn ra: July 15 - 20, 2024</p>
                                <p class="subject mb-0">Chủ đề: Asia Conference on Computer and Communications Security
                                </p>
                            </div>
                            <div class="col-xl-6">
                                <p class="time h4 mb-4">12 days 05 h 49 m 19 s</p>
                                <p class="deadline mb-0">Deadline: Fri Dec 1st 2023 18:59:59 +07 (2023-11-30 23:59:59
                                    UTC-12)
                                </p>
                                <p class="origin-website">Website: https://www.petsymposium.org/cfp24.php</p>
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
                </div>
            </div>
            <div id="pagination" class="pagination">

            </div>
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
    <script src="https://pagination.js.org/dist/2.6.0/pagination.min.js"></script>
    <script>
        $('select').select2({
            theme: 'bootstrap-5'
        });

        $('.example').horizontalTimeline({
            dateIntervals: {
                "desktop": 200,
                "tablet": 150,
                "mobile": 120,
                "minimal": true,
                iconBaseClass: "fas fa-2x",
            }
        });

        $('#pagination').pagination({
            dataSource: [1, 2, 3, 4, 5, 6, 7, 195],
            callback: function(data, pagination) {
                // template method of yourself
                var html = template(data);
                dataContainer.html(html);
            }
        })
    </script>
</body>

</html>
