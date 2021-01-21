<!-- ปฏิทินกิจกรรม -->
<div id="calendar" data-id="calendar" class="section-content bg-color-white">
                <div class="group-mange-section">
                    <div class="manage-tools">
                        <ul>
                            <li class="order-list">จัดการ</li>
                            <li class="order-list">ลบ</li>
                            <li class="order-list">ซ่อน</li>
                            <li class="order-list order-close">ปิด</li>
                        </ul>
                    </div> 
                    <div class="manage-dragdrop">
                        <img src="{{ asset('template1/assets/images/icons/icon-dragdrop.svg')}}" alt="icon" title="Drag and Drop">
                    </div>
                    <div class="manage-edit">
                        <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="icon">
                    </div>
                </div>
                <div class="container">
                    <div class="inner-content">
                        <div class="top-content border-bottom">
                            <div class="group-text">
                                <h3 class="title color-primary">ปฏิทินกิจกรรม</h3>
                                <p class="desc color-secondary">The Bangkok Metropolitan Council Secretariat</p>
                            </div>
                            <div class="group-gotoall">
                                <a href="/news">
                                    MORE 
                                    <div class="icon-more">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                            <g>
                                                <path class="st0" d="M3.9,4.5C3.4,5,3.4,5.8,3.9,6.3L9.6,12l-5.7,5.7l0,0c-0.5,0.5-0.5,1.4,0,1.9l0,0c0.5,0.5,1.4,0.5,1.9,0
                                                    l6.6-6.6l0,0c0.5-0.5,0.5-1.4,0-1.9L5.7,4.5l0,0C5.2,4,4.4,4,3.9,4.5L3.9,4.5z"/>
                                                <path class="st0" d="M11.6,4.5c-0.5,0.5-0.5,1.3,0,1.8l5.7,5.7l-5.7,5.7l0,0c-0.5,0.5-0.5,1.4,0,1.9l0,0c0.5,0.5,1.4,0.5,1.9,0
                                                    l6.6-6.6l0,0c0.5-0.5,0.5-1.4,0-1.9l-6.7-6.6l0,0C12.9,4,12.1,4,11.6,4.5L11.6,4.5z"/>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="main-content">
                            <div class="action-slide dis-flex justify-end">
                                <div class="input-custom">
                                    <div class="select-wrapper">
                                        <select name="month" class="slc">
                                            <optgroup label="เดือน">
                                                <option value="">มกราคม</option>
                                                <option value="">กุมภาพันธ์</option>
                                                <option value="">มีนาคม</option>
                                                <option value="">เมษายน</option>
                                                <option value="">พฤษภาคม</option>
                                                <option value="">มิถุนายน</option>
                                                <option value="">กรกฎาคม</option>
                                                <option value="">สิงหาคม</option>
                                                <option value="">กันยายน</option>
                                                <option value="">ตุลาคม</option>
                                                <option value="">พฤศจิกายน</option>
                                                <option value="">ธันวาคม</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>

                                <div class="slide-wrapper" id="action-slide_1">
                                    <div class="slide-arrow slide-prev"></div>
                                    <div class="slide-arrow slide-next"></div>
                                </div>
                            </div>
                            
                            <div class="main-calendar">
                                <div id="calendar_inside"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>


<script src='https://cdn.jsdelivr.net/npm/moment@2.27.0/min/moment.min.js'></script>

<link rel="stylesheet" href="{{ asset('template3/theme-green/css/calendar/main.min.css')}}">
<script type="text/javascript" src="{{ asset('template3/js/calendar/main.min.js') }}"></script>

<script>
    // Calendar
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar_inside');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            timeZone: 'UTC',
            locale: 'th',
            initialView: 'dayGridWeek',
            views: {
                week: {
                    type: 'basic', /* 'basicWeek' ?? */
                    duration: { weeks: 2 }
                }
            },
            //initialView: 'dayGridMonth',
            headerToolbar: false,
            dayMaxEventRows: true,
            events: [
                {
                    "title": "All Day Event",
                    "start": "2020-11-23",
                    //"color": "#E76F0E",
                    "url": "/calendar-detail"
                },
                {
                    "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือasdalk k;lkdpa sk",
                    "start": "2020-11-23",
                    //"color": "#8CB81F",
                    "url": "/calendar-detail"
                },
                {
                    "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือ บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือ",
                    "start": "2020-11-23",
                    //"color": "#8CB81F",
                    "url": "/calendar-detail"
                },
                {
                    "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือasdalk k;lkdpa sk",
                    "start": "2020-11-23",
                    //"color": "#8CB81F",
                    "url": "/calendar-detail"
                },
                {
                    "title": "บึงกุ่มชวนร่วมกิจกรรมบ้านหนังสือasdalk k;lkdpa sk",
                    "start": "2020-11-23",
                    //"color": "#8CB81F",
                    "url": "/calendar-detail"
                },
            ],
        });
        calendar.render();


        // default
        var view = calendar.view;
        var v_title = view.title;
        var c_month = (v_title).split(' ');
        var c_year = (v_title).split(' ');
        var cc_month = c_month[0];
        var cc_year = c_year[1];
        $('.month-title').html(c_month[0]);
        $('.year-title').html(c_year[1]);
        console.log(v_title);
        $("#month_fullcalendar option[value='" + cc_month + "']").attr("selected","selected");
        $("#year_fullcalendar option[value='" + cc_year + "']").attr("selected","selected");


    });
</script>