<div class="section-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="inner-content">
                                <div class="top-content">
                                    <div class="group-text">
                                        <h3 class="title color-primary">ติดต่อสอบถาม</h3>
                                        <p class="desc color-secondary">กรุณากรอกข้อมูลของท่าน</p>
                                    </div>
                                </div>
                                <div class="main-content">
                                     <form action=""> 
                                    @csrf <!-- {{ csrf_field() }} -->
                                        <div class="group-form-section -contact">
                                            <div class="row">
                                                <div class="col-lg-12">
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
                                                <div class="col-lg-12">
                                                    <div class="input-custom">
                                                        <textarea class="text-area" name="" id="" rows="3" placeholder="ข้อความ"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-custom">
                                                        <label for="" class="title-field">ชื่อ-นามสกุล</label>
                                                        <input class="style-input" type="text" name="" placeholder="ระบุ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="input-custom">
                                                        <label for="" class="title-field">ที่อยู่</label>
                                                        <input class="style-input" type="text" name="" placeholder="ระบุ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-custom">
                                                        <label for="" class="title-field">เบอร์โทรศัพท์</label>
                                                        <input class="style-input" type="text" name="" placeholder="ระบุ">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="input-custom">
                                                        <label for="" class="title-field">อีเมล</label>
                                                        <input class="style-input" type="text" name="" placeholder="ระบุ">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-custom width-full d-flex justify-content-center">
                                            <button class="btn btn-primary" type="submit">ส่งข้อความ</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="inner-content">
                                <div class="top-content">
                                    <div class="group-text">
                                        <h3 class="title color-primary">สำนักงานเลขานุการสภากรุงเทพฯ</h3>
                                        <p class="desc color-secondary">ชั้น 3 ศาลาว่าการกรุงเทพมหานคร 173 ถนนดินสอ เขตพระนคร กรุงเทพมหานคร 10200</p>
                                    </div>
                                </div>
                                <div class="main-content -contact">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="contact-tel">
                                                <img src="{{ asset('template1/assets/images/icons/icon-tel-gray.svg')}}" alt="icon"> 
                                                <a class="link-tel" href="tel:022212141">0-2221-2141-69</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="contact-tel">
                                                <img src="{{ asset('template1/assets/images/icons/icon-fax-gray.svg')}}" alt="icon"> 
                                                <a class="link-tel" href="tel:022243038">0-2224-3038</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="iframe-map">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.0338107750213!2d100.4296997148538!3d13.594746604576166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2bb0940b60c95%3A0x7916bd3efb77017b!2z4LiY4Liy4Lij4LiX4Liw4LmA4Lil4LiL4Li14Lif4Li54LmJ4LiU!5e0!3m2!1sen!2sth!4v1605687616968!5m2!1sen!2sth" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

<div class="section-content bg-color-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <div class="top-content">
                        <div class="group-text">
                            <h3 class="title color-primary">ติดต่อส่วนราชการ</h3>
                            <p class="desc color-secondary">สำนักงานเลขานุการสภากรุงเทพมหานคร</p>
                        </div>
                    </div>
                    <div class="main-content -contact">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="list-item-gov">
                                    <div class="title-gov">เลขานุการสภากรุงเทพฯ</div>
                                    <div class="contact-gov d-flex">
                                        <div class="tel-gov bg-color-secondary">
                                            <div class="on">
                                                <img src="{{ asset('template1/assets/images/icons/icon-tel.svg')}}" alt="icon">
                                            </div>
                                            <div class="number">0-2222-5349</div>
                                        </div>
                                        <div class="tel-internal bg-color-primary">
                                            <div class="on">ภายใน</div>
                                            <div class="number">1120</div>
                                        </div>
                                    </div>
                                    <div class="social-wrapper d-flex align-items-center">
                                        <ul>
                                            <li class="facebook">
                                                <a href="" title="facebook">
                                                    <img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-social-facebook.svg" alt="icon">
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
                                        <div class="tel-gov bg-color-secondary">
                                            <div class="on">
                                                <img src="{{ asset('template1/assets/images/icons/icon-tel.svg')}}" alt="icon">
                                            </div>
                                            <div class="number">0-2226-2759</div>
                                        </div>
                                        <div class="tel-internal bg-color-primary">
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
                                        <div class="tel-gov bg-color-secondary">
                                            <div class="on">
                                                <img src="{{ asset('template1/assets/images/icons/icon-tel.svg')}}" alt="icon">
                                            </div>
                                            <div class="number">0-2225-7093</div>
                                        </div>
                                        <div class="tel-internal bg-color-primary">
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
                                        <div class="tel-gov bg-color-secondary">
                                            <div class="on">
                                                <img src="{{ asset('template1/assets/images/icons/icon-tel.svg')}}" alt="icon">
                                            </div>
                                            <div class="number">0-2222-5349</div>
                                        </div>
                                        <div class="tel-internal bg-color-primary">
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
                                        <div class="tel-gov bg-color-secondary">
                                            <div class="on">
                                                <img src="{{ asset('template1/assets/images/icons/icon-tel.svg')}}" alt="icon">
                                            </div>
                                            <div class="number">0-2224-3006</div>
                                        </div>
                                        <div class="tel-internal bg-color-primary">
                                            <div class="on">ภายใน</div>
                                            <div class="number">1100 - 3</div>
                                        </div>
                                    </div>
                                    <div class="social-wrapper d-flex align-items-center">
                                        <ul>
                                            <li class="facebook">
                                                <a href="" title="facebook">
                                                    <img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-social-facebook.svg" alt="icon">
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
                                        <div class="tel-gov bg-color-secondary">
                                            <div class="on">
                                                <img src="{{ asset('template1/assets/images/icons/icon-tel.svg')}}" alt="icon">
                                            </div>
                                            <div class="number">0-2224-3006</div>
                                        </div>
                                        <div class="tel-internal bg-color-primary">
                                            <div class="on">ภายใน</div>
                                            <div class="number">1100 - 3</div>
                                        </div>
                                    </div>
                                    <div class="social-wrapper d-flex align-items-center">
                                        <ul>
                                            <li class="facebook">
                                                <a href="" title="facebook">
                                                    <img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-social-facebook.svg" alt="icon">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="load-more text-right">
                            <a href="" class="btn btn-outline-dark">โหลดเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>