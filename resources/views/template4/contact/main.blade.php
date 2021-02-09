<div class="section-content">
    <div class="group-mange-section">
        <div class="manage-edit">
            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="แก้ไข">
        </div>
        <div class="manage-add">
            <img src="{{ asset('template1/assets/images/icons/icon-add.svg')}}" alt="เพิ่ม">
        </div>
    </div>
    <div class="inner-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="top-content flex-wrap detail-page bg-color-secondary">
                        <div class="group-text">
                            <h3 class="title">สำนักงานเลขานุการสภากรุงเทพฯ</h3>
                            <p class="desc">ชั้น 3 ศาลาว่าการกรุงเทพมหานคร 173 ถนนดินสอ เขตพระนคร กรุงเทพมหานคร 10200</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-content contact">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="iframe-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.0338107750213!2d100.4296997148538!3d13.594746604576166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bb0940b60c95%3A0x7916bd3efb77017b!2z4LiY4Liy4Lij4LiX4Liw4LmA4Lil4LiL4Li14Lif4Li54LmJ4LiU!5e0!3m2!1sen!2sth!4v1605687616968!5m2!1sen!2sth" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 offset-lg-6">
                                <div class="contact-tel">
                                    <div class="link-tel">
                                        <a href="tel:022212141" title="">0-2221-2141-69</a>
                                    </div>
                                    <div class="icon-content">
                                        <img src="{{ asset('template4/assets/images/icons/icon-tel-gray.svg')}}" alt="icon"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="contact-tel">
                                    <div class="link-tel">
                                        <a href="tel:022212141" title="">0-2224-3038</a>
                                    </div>
                                    <div class="icon-content">
                                        <img src="{{ asset('template4/assets/images/icons/icon-fax-gray.svg')}}" alt="icon"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="main-content contact">
                        <div class="top-content flex-detail">
                            <div class="group-text">
                                <h3 class="title">ติดต่อสอบถาม</h3>
                                <p class="desc">กรุณากรอกข้อมูลของท่าน</p>
                            </div>
                        </div>
                         <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                            <div class="group-form-section contact">
                                <div class="row">
                                    <div class="col-lg-6">
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
                                        <div class="input-custom">
                                            <textarea class="text-area" name="" id="" rows="3" placeholder="ข้อความ"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-wrapper">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="input-custom">
                                                        <label for="" class="title-field">ชื่อ-นามสกุล</label>
                                                        <input class="style-input" type="text" name="" placeholder="ระบุ">
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="input-custom">
                                                        <label for="" class="title-field">ที่อยู่</label>
                                                        <input class="style-input" type="text" name="" placeholder="ระบุ">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="input-custom">
                                                        <label for="" class="title-field">เบอร์โทรศัพท์</label>
                                                        <input class="style-input" type="text" name="" placeholder="ระบุ">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="input-custom">
                                                        <label for="" class="title-field">อีเมล</label>
                                                        <input class="style-input" type="text" name="" placeholder="ระบุ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="btn-custom width-full d-flex justify-content-center">
                                            <div class="btn-custom btn-custom-skew">
                                                <button class="btn btn-primary btn-skew" type="button">ส่งข้อความ</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-content bg-color-white">
    <div class="group-mange-section">
        <div class="manage-edit">
            <img src="{{ asset('template1/assets/images/icons/icon-edit.svg')}}" alt="แก้ไข">
        </div>
        <div class="manage-add">
            <img src="{{ asset('template1/assets/images/icons/icon-add.svg')}}" alt="เพิ่ม">
        </div>
    </div>
    <div class="inner-content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-content flex-wrap">
                        <div class="group-text">
                            <h3 class="title">ติดต่อส่วนราชการ</h3>
                            <p class="desc">สำนักงานเลขานุการสภากรุงเทพมหานคร<</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="main-content contact">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="list-item-gov">
                                    <div class="title-gov">เลขานุการสภากรุงเทพฯ</div>
                                    <div class="contact-gov d-flex">
                                        <div class="tel-gov">
                                            <div class="on">
                                                <!-- Generator: Adobe Illustrator 23.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                <path class="st0" d="M16.3,14.9c-0.2,0-0.4-0.1-0.6-0.1c-0.4-0.1-0.8-0.2-1.1-0.3c-0.8-0.3-1.7,0.1-2.1,0.9l-0.2,0.4
                                                    c-0.8-0.5-1.6-1-2.3-1.7s-1.2-1.4-1.7-2.3l0.4-0.2c0.8-0.4,1.2-1.3,0.9-2.1C9.5,9,9.3,8.7,9.3,8.3c0-0.2-0.1-0.4-0.1-0.6
                                                    C8.9,6.5,7.9,5.6,6.6,5.6H4c-0.7,0-1.4,0.3-1.9,0.9C1.6,7,1.4,7.8,1.5,8.5C2,12,3.6,15.3,6.1,17.9c2.5,2.5,5.8,4.2,9.4,4.6
                                                    c0.1,0,0.2,0,0.3,0c0.6,0,1.2-0.2,1.7-0.6c0.5-0.5,0.9-1.2,0.9-1.9v-2.6C18.4,16.2,17.5,15.1,16.3,14.9z M16.7,20
                                                    c0,0.2-0.1,0.5-0.3,0.6c-0.2,0.2-0.4,0.3-0.7,0.2c-3.2-0.4-6.1-1.9-8.4-4.1C5,14.4,3.6,11.4,3.1,8.3c0-0.3,0-0.5,0.2-0.7
                                                    C3.6,7.4,3.8,7.3,4,7.3h2.6C7,7.3,7.4,7.6,7.4,8c0,0.2,0.1,0.5,0.1,0.7C7.7,9.1,7.8,9.5,8,10l-1.2,0.6c-0.2,0.1-0.4,0.3-0.4,0.5
                                                    c-0.1,0.2-0.1,0.4,0,0.6c1.2,2.6,3.3,4.7,6,6c0.2,0.1,0.4,0.1,0.6,0c0.2-0.1,0.4-0.2,0.5-0.4L14,16c0.4,0.2,0.9,0.3,1.3,0.4
                                                    c0.2,0.1,0.5,0.1,0.7,0.1c0.4,0.1,0.7,0.4,0.7,0.9V20z M13.7,3.5c-0.2,0-0.4,0-0.6,0c-0.5,0-0.8,0.5-0.8,0.9c0,0.5,0.5,0.8,0.9,0.8
                                                    h0.5c2.8,0,5.1,2.3,5.1,5.1c0,0.2,0,0.3,0,0.5c0,0.5,0.3,0.9,0.8,0.9h0.1c0.4,0,0.8-0.3,0.9-0.8c0-0.2,0-0.4,0-0.6
                                                    C20.5,6.6,17.5,3.5,13.7,3.5z M14.4,11.3c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9c0-1.9-1.5-3.4-3.4-3.4c-0.5,0-0.9,0.4-0.9,0.9
                                                    s0.4,0.9,0.9,0.9C13.7,9.6,14.4,10.4,14.4,11.3z"/>
                                                </svg>
                                            </div>
                                            <div class="number">0-2222-5349</div>
                                        </div>
                                        <div class="tel-internal">
                                            <div class="on">ภายใน</div>
                                            <div class="number">1120</div>
                                        </div>
                                    </div>
                                    <div class="social-wrapper d-flex align-items-center">
                                        <ul>
                                            <li class="facebook">
                                                <a href="" title="facebook">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                    <g>
                                                        <path class="st0" d="M22.4,12c0-5.8-4.7-10.4-10.4-10.4C6.2,1.6,1.6,6.2,1.6,12c0,5.2,3.8,9.5,8.8,10.3V15H7.7v-3h2.7l0-2.3
                                                            c0-2.6,1.5-4.1,3.9-4.1c1.1,0,2.3,0.2,2.3,0.2v2.5h-1.3c-1.3,0-1.7,0.8-1.7,1.6l0,2h2.9l-0.5,3h-2.4v7.3
                                                            C18.6,21.5,22.4,17.2,22.4,12"/>
                                                        <path class="st1" d="M16.1,15l0.5-3h-2.9l0-2c0-0.8,0.4-1.6,1.7-1.6h1.3V5.9c0,0-1.2-0.2-2.3-0.2c-2.4,0-3.9,1.4-3.9,4.1l0,2.3H7.7
                                                            v3h2.7v7.3c0.5,0.1,1.1,0.1,1.6,0.1c0.6,0,1.1,0,1.6-0.1V15H16.1z"/>
                                                    </g>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="list-item-gov">
                                    <div class="title-gov">ผู้ช่วยเลขานุการสภากรุงเทพฯ (1)</div>
                                    <div class="contact-gov d-flex">
                                        <div class="tel-gov">
                                            <div class="on">
                                                <!-- Generator: Adobe Illustrator 23.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                <path class="st0" d="M16.3,14.9c-0.2,0-0.4-0.1-0.6-0.1c-0.4-0.1-0.8-0.2-1.1-0.3c-0.8-0.3-1.7,0.1-2.1,0.9l-0.2,0.4
                                                    c-0.8-0.5-1.6-1-2.3-1.7s-1.2-1.4-1.7-2.3l0.4-0.2c0.8-0.4,1.2-1.3,0.9-2.1C9.5,9,9.3,8.7,9.3,8.3c0-0.2-0.1-0.4-0.1-0.6
                                                    C8.9,6.5,7.9,5.6,6.6,5.6H4c-0.7,0-1.4,0.3-1.9,0.9C1.6,7,1.4,7.8,1.5,8.5C2,12,3.6,15.3,6.1,17.9c2.5,2.5,5.8,4.2,9.4,4.6
                                                    c0.1,0,0.2,0,0.3,0c0.6,0,1.2-0.2,1.7-0.6c0.5-0.5,0.9-1.2,0.9-1.9v-2.6C18.4,16.2,17.5,15.1,16.3,14.9z M16.7,20
                                                    c0,0.2-0.1,0.5-0.3,0.6c-0.2,0.2-0.4,0.3-0.7,0.2c-3.2-0.4-6.1-1.9-8.4-4.1C5,14.4,3.6,11.4,3.1,8.3c0-0.3,0-0.5,0.2-0.7
                                                    C3.6,7.4,3.8,7.3,4,7.3h2.6C7,7.3,7.4,7.6,7.4,8c0,0.2,0.1,0.5,0.1,0.7C7.7,9.1,7.8,9.5,8,10l-1.2,0.6c-0.2,0.1-0.4,0.3-0.4,0.5
                                                    c-0.1,0.2-0.1,0.4,0,0.6c1.2,2.6,3.3,4.7,6,6c0.2,0.1,0.4,0.1,0.6,0c0.2-0.1,0.4-0.2,0.5-0.4L14,16c0.4,0.2,0.9,0.3,1.3,0.4
                                                    c0.2,0.1,0.5,0.1,0.7,0.1c0.4,0.1,0.7,0.4,0.7,0.9V20z M13.7,3.5c-0.2,0-0.4,0-0.6,0c-0.5,0-0.8,0.5-0.8,0.9c0,0.5,0.5,0.8,0.9,0.8
                                                    h0.5c2.8,0,5.1,2.3,5.1,5.1c0,0.2,0,0.3,0,0.5c0,0.5,0.3,0.9,0.8,0.9h0.1c0.4,0,0.8-0.3,0.9-0.8c0-0.2,0-0.4,0-0.6
                                                    C20.5,6.6,17.5,3.5,13.7,3.5z M14.4,11.3c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9c0-1.9-1.5-3.4-3.4-3.4c-0.5,0-0.9,0.4-0.9,0.9
                                                    s0.4,0.9,0.9,0.9C13.7,9.6,14.4,10.4,14.4,11.3z"/>
                                                </svg>
                                            </div>
                                            <div class="number">0-2226-2759</div>
                                        </div>
                                        <div class="tel-internal">
                                            <div class="on">ภายใน</div>
                                            <div class="number">1121</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="list-item-gov">
                                    <div class="title-gov">ผู้ช่วยเลขานุการสภากรุงเทพฯ (2)</div>
                                    <div class="contact-gov d-flex">
                                        <div class="tel-gov">
                                            <div class="on">
                                                <!-- Generator: Adobe Illustrator 23.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                <path class="st0" d="M16.3,14.9c-0.2,0-0.4-0.1-0.6-0.1c-0.4-0.1-0.8-0.2-1.1-0.3c-0.8-0.3-1.7,0.1-2.1,0.9l-0.2,0.4
                                                    c-0.8-0.5-1.6-1-2.3-1.7s-1.2-1.4-1.7-2.3l0.4-0.2c0.8-0.4,1.2-1.3,0.9-2.1C9.5,9,9.3,8.7,9.3,8.3c0-0.2-0.1-0.4-0.1-0.6
                                                    C8.9,6.5,7.9,5.6,6.6,5.6H4c-0.7,0-1.4,0.3-1.9,0.9C1.6,7,1.4,7.8,1.5,8.5C2,12,3.6,15.3,6.1,17.9c2.5,2.5,5.8,4.2,9.4,4.6
                                                    c0.1,0,0.2,0,0.3,0c0.6,0,1.2-0.2,1.7-0.6c0.5-0.5,0.9-1.2,0.9-1.9v-2.6C18.4,16.2,17.5,15.1,16.3,14.9z M16.7,20
                                                    c0,0.2-0.1,0.5-0.3,0.6c-0.2,0.2-0.4,0.3-0.7,0.2c-3.2-0.4-6.1-1.9-8.4-4.1C5,14.4,3.6,11.4,3.1,8.3c0-0.3,0-0.5,0.2-0.7
                                                    C3.6,7.4,3.8,7.3,4,7.3h2.6C7,7.3,7.4,7.6,7.4,8c0,0.2,0.1,0.5,0.1,0.7C7.7,9.1,7.8,9.5,8,10l-1.2,0.6c-0.2,0.1-0.4,0.3-0.4,0.5
                                                    c-0.1,0.2-0.1,0.4,0,0.6c1.2,2.6,3.3,4.7,6,6c0.2,0.1,0.4,0.1,0.6,0c0.2-0.1,0.4-0.2,0.5-0.4L14,16c0.4,0.2,0.9,0.3,1.3,0.4
                                                    c0.2,0.1,0.5,0.1,0.7,0.1c0.4,0.1,0.7,0.4,0.7,0.9V20z M13.7,3.5c-0.2,0-0.4,0-0.6,0c-0.5,0-0.8,0.5-0.8,0.9c0,0.5,0.5,0.8,0.9,0.8
                                                    h0.5c2.8,0,5.1,2.3,5.1,5.1c0,0.2,0,0.3,0,0.5c0,0.5,0.3,0.9,0.8,0.9h0.1c0.4,0,0.8-0.3,0.9-0.8c0-0.2,0-0.4,0-0.6
                                                    C20.5,6.6,17.5,3.5,13.7,3.5z M14.4,11.3c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9c0-1.9-1.5-3.4-3.4-3.4c-0.5,0-0.9,0.4-0.9,0.9
                                                    s0.4,0.9,0.9,0.9C13.7,9.6,14.4,10.4,14.4,11.3z"/>
                                                </svg>
                                            </div>
                                            <div class="number">0-2225-7093</div>
                                        </div>
                                        <div class="tel-internal">
                                            <div class="on">ภายใน</div>
                                            <div class="number">1124</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="list-item-gov">
                                    <div class="title-gov">หน้าห้องประธานสภากรุงเทพฯ (1)</div>
                                    <div class="contact-gov d-flex">
                                        <div class="tel-gov">
                                            <div class="on">
                                                <!-- Generator: Adobe Illustrator 23.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                <path class="st0" d="M16.3,14.9c-0.2,0-0.4-0.1-0.6-0.1c-0.4-0.1-0.8-0.2-1.1-0.3c-0.8-0.3-1.7,0.1-2.1,0.9l-0.2,0.4
                                                    c-0.8-0.5-1.6-1-2.3-1.7s-1.2-1.4-1.7-2.3l0.4-0.2c0.8-0.4,1.2-1.3,0.9-2.1C9.5,9,9.3,8.7,9.3,8.3c0-0.2-0.1-0.4-0.1-0.6
                                                    C8.9,6.5,7.9,5.6,6.6,5.6H4c-0.7,0-1.4,0.3-1.9,0.9C1.6,7,1.4,7.8,1.5,8.5C2,12,3.6,15.3,6.1,17.9c2.5,2.5,5.8,4.2,9.4,4.6
                                                    c0.1,0,0.2,0,0.3,0c0.6,0,1.2-0.2,1.7-0.6c0.5-0.5,0.9-1.2,0.9-1.9v-2.6C18.4,16.2,17.5,15.1,16.3,14.9z M16.7,20
                                                    c0,0.2-0.1,0.5-0.3,0.6c-0.2,0.2-0.4,0.3-0.7,0.2c-3.2-0.4-6.1-1.9-8.4-4.1C5,14.4,3.6,11.4,3.1,8.3c0-0.3,0-0.5,0.2-0.7
                                                    C3.6,7.4,3.8,7.3,4,7.3h2.6C7,7.3,7.4,7.6,7.4,8c0,0.2,0.1,0.5,0.1,0.7C7.7,9.1,7.8,9.5,8,10l-1.2,0.6c-0.2,0.1-0.4,0.3-0.4,0.5
                                                    c-0.1,0.2-0.1,0.4,0,0.6c1.2,2.6,3.3,4.7,6,6c0.2,0.1,0.4,0.1,0.6,0c0.2-0.1,0.4-0.2,0.5-0.4L14,16c0.4,0.2,0.9,0.3,1.3,0.4
                                                    c0.2,0.1,0.5,0.1,0.7,0.1c0.4,0.1,0.7,0.4,0.7,0.9V20z M13.7,3.5c-0.2,0-0.4,0-0.6,0c-0.5,0-0.8,0.5-0.8,0.9c0,0.5,0.5,0.8,0.9,0.8
                                                    h0.5c2.8,0,5.1,2.3,5.1,5.1c0,0.2,0,0.3,0,0.5c0,0.5,0.3,0.9,0.8,0.9h0.1c0.4,0,0.8-0.3,0.9-0.8c0-0.2,0-0.4,0-0.6
                                                    C20.5,6.6,17.5,3.5,13.7,3.5z M14.4,11.3c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9c0-1.9-1.5-3.4-3.4-3.4c-0.5,0-0.9,0.4-0.9,0.9
                                                    s0.4,0.9,0.9,0.9C13.7,9.6,14.4,10.4,14.4,11.3z"/>
                                                </svg>
                                            </div>
                                            <div class="number">0-2222-5349</div>
                                        </div>
                                        <div class="tel-internal">
                                            <div class="on">ภายใน</div>
                                            <div class="number">1100 - 1101</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="list-item-gov">
                                    <div class="title-gov">กลุ่มงานเลขานุการ (1)</div>
                                    <div class="contact-gov d-flex">
                                        <div class="tel-gov">
                                            <div class="on">
                                                <!-- Generator: Adobe Illustrator 23.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                <path class="st0" d="M16.3,14.9c-0.2,0-0.4-0.1-0.6-0.1c-0.4-0.1-0.8-0.2-1.1-0.3c-0.8-0.3-1.7,0.1-2.1,0.9l-0.2,0.4
                                                    c-0.8-0.5-1.6-1-2.3-1.7s-1.2-1.4-1.7-2.3l0.4-0.2c0.8-0.4,1.2-1.3,0.9-2.1C9.5,9,9.3,8.7,9.3,8.3c0-0.2-0.1-0.4-0.1-0.6
                                                    C8.9,6.5,7.9,5.6,6.6,5.6H4c-0.7,0-1.4,0.3-1.9,0.9C1.6,7,1.4,7.8,1.5,8.5C2,12,3.6,15.3,6.1,17.9c2.5,2.5,5.8,4.2,9.4,4.6
                                                    c0.1,0,0.2,0,0.3,0c0.6,0,1.2-0.2,1.7-0.6c0.5-0.5,0.9-1.2,0.9-1.9v-2.6C18.4,16.2,17.5,15.1,16.3,14.9z M16.7,20
                                                    c0,0.2-0.1,0.5-0.3,0.6c-0.2,0.2-0.4,0.3-0.7,0.2c-3.2-0.4-6.1-1.9-8.4-4.1C5,14.4,3.6,11.4,3.1,8.3c0-0.3,0-0.5,0.2-0.7
                                                    C3.6,7.4,3.8,7.3,4,7.3h2.6C7,7.3,7.4,7.6,7.4,8c0,0.2,0.1,0.5,0.1,0.7C7.7,9.1,7.8,9.5,8,10l-1.2,0.6c-0.2,0.1-0.4,0.3-0.4,0.5
                                                    c-0.1,0.2-0.1,0.4,0,0.6c1.2,2.6,3.3,4.7,6,6c0.2,0.1,0.4,0.1,0.6,0c0.2-0.1,0.4-0.2,0.5-0.4L14,16c0.4,0.2,0.9,0.3,1.3,0.4
                                                    c0.2,0.1,0.5,0.1,0.7,0.1c0.4,0.1,0.7,0.4,0.7,0.9V20z M13.7,3.5c-0.2,0-0.4,0-0.6,0c-0.5,0-0.8,0.5-0.8,0.9c0,0.5,0.5,0.8,0.9,0.8
                                                    h0.5c2.8,0,5.1,2.3,5.1,5.1c0,0.2,0,0.3,0,0.5c0,0.5,0.3,0.9,0.8,0.9h0.1c0.4,0,0.8-0.3,0.9-0.8c0-0.2,0-0.4,0-0.6
                                                    C20.5,6.6,17.5,3.5,13.7,3.5z M14.4,11.3c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9c0-1.9-1.5-3.4-3.4-3.4c-0.5,0-0.9,0.4-0.9,0.9
                                                    s0.4,0.9,0.9,0.9C13.7,9.6,14.4,10.4,14.4,11.3z"/>
                                                </svg>
                                            </div>
                                            <div class="number">0-2224-3006</div>
                                        </div>
                                        <div class="tel-internal">
                                            <div class="on">ภายใน</div>
                                            <div class="number">1100 - 3</div>
                                        </div>
                                    </div>
                                    <div class="social-wrapper d-flex align-items-center">
                                        <ul>
                                            <li class="facebook">
                                                <a href="" title="facebook">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                    <g>
                                                        <path class="st0" d="M22.4,12c0-5.8-4.7-10.4-10.4-10.4C6.2,1.6,1.6,6.2,1.6,12c0,5.2,3.8,9.5,8.8,10.3V15H7.7v-3h2.7l0-2.3
                                                            c0-2.6,1.5-4.1,3.9-4.1c1.1,0,2.3,0.2,2.3,0.2v2.5h-1.3c-1.3,0-1.7,0.8-1.7,1.6l0,2h2.9l-0.5,3h-2.4v7.3
                                                            C18.6,21.5,22.4,17.2,22.4,12"/>
                                                        <path class="st1" d="M16.1,15l0.5-3h-2.9l0-2c0-0.8,0.4-1.6,1.7-1.6h1.3V5.9c0,0-1.2-0.2-2.3-0.2c-2.4,0-3.9,1.4-3.9,4.1l0,2.3H7.7
                                                            v3h2.7v7.3c0.5,0.1,1.1,0.1,1.6,0.1c0.6,0,1.1,0,1.6-0.1V15H16.1z"/>
                                                    </g>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="list-item-gov">
                                    <div class="title-gov">กลุ่มงานเลขานุการ (2)</div>
                                    <div class="contact-gov d-flex">
                                        <div class="tel-gov">
                                            <div class="on">
                                                <!-- Generator: Adobe Illustrator 23.0.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                                <svg version="1.1" id="" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                <path class="st0" d="M16.3,14.9c-0.2,0-0.4-0.1-0.6-0.1c-0.4-0.1-0.8-0.2-1.1-0.3c-0.8-0.3-1.7,0.1-2.1,0.9l-0.2,0.4
                                                    c-0.8-0.5-1.6-1-2.3-1.7s-1.2-1.4-1.7-2.3l0.4-0.2c0.8-0.4,1.2-1.3,0.9-2.1C9.5,9,9.3,8.7,9.3,8.3c0-0.2-0.1-0.4-0.1-0.6
                                                    C8.9,6.5,7.9,5.6,6.6,5.6H4c-0.7,0-1.4,0.3-1.9,0.9C1.6,7,1.4,7.8,1.5,8.5C2,12,3.6,15.3,6.1,17.9c2.5,2.5,5.8,4.2,9.4,4.6
                                                    c0.1,0,0.2,0,0.3,0c0.6,0,1.2-0.2,1.7-0.6c0.5-0.5,0.9-1.2,0.9-1.9v-2.6C18.4,16.2,17.5,15.1,16.3,14.9z M16.7,20
                                                    c0,0.2-0.1,0.5-0.3,0.6c-0.2,0.2-0.4,0.3-0.7,0.2c-3.2-0.4-6.1-1.9-8.4-4.1C5,14.4,3.6,11.4,3.1,8.3c0-0.3,0-0.5,0.2-0.7
                                                    C3.6,7.4,3.8,7.3,4,7.3h2.6C7,7.3,7.4,7.6,7.4,8c0,0.2,0.1,0.5,0.1,0.7C7.7,9.1,7.8,9.5,8,10l-1.2,0.6c-0.2,0.1-0.4,0.3-0.4,0.5
                                                    c-0.1,0.2-0.1,0.4,0,0.6c1.2,2.6,3.3,4.7,6,6c0.2,0.1,0.4,0.1,0.6,0c0.2-0.1,0.4-0.2,0.5-0.4L14,16c0.4,0.2,0.9,0.3,1.3,0.4
                                                    c0.2,0.1,0.5,0.1,0.7,0.1c0.4,0.1,0.7,0.4,0.7,0.9V20z M13.7,3.5c-0.2,0-0.4,0-0.6,0c-0.5,0-0.8,0.5-0.8,0.9c0,0.5,0.5,0.8,0.9,0.8
                                                    h0.5c2.8,0,5.1,2.3,5.1,5.1c0,0.2,0,0.3,0,0.5c0,0.5,0.3,0.9,0.8,0.9h0.1c0.4,0,0.8-0.3,0.9-0.8c0-0.2,0-0.4,0-0.6
                                                    C20.5,6.6,17.5,3.5,13.7,3.5z M14.4,11.3c0,0.5,0.4,0.9,0.9,0.9s0.9-0.4,0.9-0.9c0-1.9-1.5-3.4-3.4-3.4c-0.5,0-0.9,0.4-0.9,0.9
                                                    s0.4,0.9,0.9,0.9C13.7,9.6,14.4,10.4,14.4,11.3z"/>
                                                </svg>
                                            </div>
                                            <div class="number">0-2224-3006</div>
                                        </div>
                                        <div class="tel-internal">
                                            <div class="on">ภายใน</div>
                                            <div class="number">1100 - 3</div>
                                        </div>
                                    </div>
                                    <div class="social-wrapper d-flex align-items-center">
                                        <ul>
                                            <li class="facebook">
                                                <a href="" title="facebook">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                    <g>
                                                        <path class="st0" d="M22.4,12c0-5.8-4.7-10.4-10.4-10.4C6.2,1.6,1.6,6.2,1.6,12c0,5.2,3.8,9.5,8.8,10.3V15H7.7v-3h2.7l0-2.3
                                                            c0-2.6,1.5-4.1,3.9-4.1c1.1,0,2.3,0.2,2.3,0.2v2.5h-1.3c-1.3,0-1.7,0.8-1.7,1.6l0,2h2.9l-0.5,3h-2.4v7.3
                                                            C18.6,21.5,22.4,17.2,22.4,12"/>
                                                        <path class="st1" d="M16.1,15l0.5-3h-2.9l0-2c0-0.8,0.4-1.6,1.7-1.6h1.3V5.9c0,0-1.2-0.2-2.3-0.2c-2.4,0-3.9,1.4-3.9,4.1l0,2.3H7.7
                                                            v3h2.7v7.3c0.5,0.1,1.1,0.1,1.6,0.1c0.6,0,1.1,0,1.6-0.1V15H16.1z"/>
                                                    </g>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="load-more txt-center">
                            <a href="" class="btn btn-outline-dark">โหลดเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

