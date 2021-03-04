<div class="section-content">
    <div class="group-mange-section">
        <div class="manage-edit">
            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="แก้ไข">
        </div>
        <div class="manage-add">
            <img src="{{ asset('template1/assets/images/icons/icon-add.svg')}}" alt="เพิ่ม">
        </div>
    </div>
                <div class="container">
                    <div class="inner-content">
                        <div class="top-content">
                            <div class="group-text">
                                <h3 class="title color-primary">ค้นหา</h3>
                            </div>
                        </div>
                        <div class="search-content">
                             <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="input-custom inp-search">
                                            <input class="style-input" type="text" name="" placeholder="คำค้นหา" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="input-custom inp-categories">
                                            <div class="select-wrapper width-full">
                                                <select name="month" class="slc">
                                                    <optgroup label="ประเภทข่าว">
                                                        <option value="">ประเภทข่าว 1</option>
                                                        <option value="">ประเภทข่าว 2</option>
                                                        <option value="">ประเภทข่าว 3</option>
                                                        <option value="">ประเภทข่าว 4</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="input-custom inp-calendar">
                                            <input id="start_date" class="style-input" type="text" name="datefilter" placeholder="จากวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                            <div class="icon-calendar"><em class="far fa-calendar"></em></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="input-custom inp-calendar">
                                            <input id="end_date" class="style-input" type="text" name="datefilter" placeholder="ถึงวันที่" autocomplete="off" data-provide="datepicker" data-date-language="th-th" />
                                            <div class="icon-calendar"><em class="far fa-calendar"></em></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="btn-search ">
                                            <button type="submit" class="icon-search bg-color-primary">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="20px" height="20px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                                <g>
                                                    <circle class="st0" cx="9.3" cy="9.3" r="7.3"/>
                                                    <line class="st0" x1="14.9" y1="14.9" x2="18" y2="18"/>
                                                </g>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="main-content">

                            <div class="list-search">
                                <ul>
                                    <li>
                                        <a href="">
                                            <div class="article-wrap">
                                                <div class="top-rubric">
                                                    <span class="rubric">ข่าวสาร</span>
                                                    <span class="time">5 ธ.ค 2557</span>
                                                </div>
                                                <div class="main-article-content">
                                                    ผู้ว่าฯกทม. เยือนจีนดูงานผลิตโซล่าเซลล์เพื่อเป็นทางเลือกประหยัดพลังงานของกทม.
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="article-wrap">
                                                <div class="top-rubric">
                                                    <span class="rubric">ข่าวสาร</span>
                                                    <span class="time">1 ม.ค. 2557</span>
                                                </div>
                                                <div class="main-article-content">
                                                    ชมจีนบำบัดน้ำเสียวิธีทางธรรมชาติด้วยไรน้ำ
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="article-wrap">
                                                <div class="top-rubric">
                                                    <span class="rubric">ข่าวสาร</span>
                                                    <span class="time">3 มิ.ย. 2557</span>
                                                </div>
                                                <div class="main-article-content">
                                                    กทม. จับมือสโมสรกีฬาห้วยขวางเดินเทิดพระเกียรติ ถือป้ายพระราชกรณียกิจ 509 เมตร ยาวสุดในประเทศไทย 
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <div class="article-wrap">
                                                <div class="top-rubric">
                                                    <span class="rubric">คำถามที่พบบ่อย</span>
                                                </div>
                                                <div class="main-article-content">
                                                    มหานครแห่งอาเซียน 
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="pagination-custom d-flex justify-content-end align-items-center">
                                <div class="all-page">
                                    Page <span>1</span> of <span>120</span>
                                </div>
                                <div class="item-page d-flex justify-content-end align-items-center">
                                    <div class="slide-prev disabled"></div>
                                    <div class="input-custom">
                                        <input type="text" class="style-input" value="1">
                                    </div>
                                    <div class="slide-next"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>