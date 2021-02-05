<div class="section-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <div class="main-content -contact">
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
            <div class="col-lg-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="top-content">
                                <div class="group-text pr-5">
                                    <h3 class="title color-primary">ติดต่อสอบถาม</h3>
                                    <p class="desc">กรุณากรอกข้อมูลของท่าน</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="main-content pt-0">
                                 <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                                    <div class="group-form-section mt-0 -contact">
                                        <div class="row">
                                            <div class="col-lg-6">
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
                                                            <textarea class="text-area -contact" name="" id="" placeholder="ข้อความ"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="input-custom">
                                                            <input class="style-input" type="text" name="" placeholder="ชื่อ-นามสกุล">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-custom">
                                                            <input class="style-input" type="text" name="" placeholder="เบอร์โทรศัพท์">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-custom">
                                                            <input class="style-input" type="text" name="" placeholder="อีเมล">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="input-custom">
                                                            <textarea class="text-area" row="2" name="" id="" placeholder="ที่อยู่"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-custom d-flex">
                                        <button class="btn width-full btn-primary" type="submit">ส่งข้อความ</button>
                                    </div>
                                </form>
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
        <div class="inner-content">
            <div class="main-content p-0 -contact">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="top-content">
                            <div class="group-text">
                                <h3 class="title color-primary">สำนักงานเลขานุการสภากรุงเทพฯ</h3>
                                <p class="desc">ชั้น 3 ศาลาว่าการกรุงเทพมหานคร 173 ถนนดินสอ เขตพระนคร กรุงเทพมหานคร 10200</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-tel">
                                    <img src="{{ asset('template3/assets/images/icons/icon-tel-gray.svg')}}" alt="icon"> 
                                    <a class="link-tel" href="tel:022212141">0-2221-2141-69</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-tel">
                                    <img src="{{ asset('template3/assets/images/icons/icon-fax-gray.svg')}}" alt="icon"> 
                                    <a class="link-tel" href="tel:022243038">0-2224-3038</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="list-item-gov">
                                <div class="col-lg-6 d-flex">
                                    <div class="title-gov d-flex align-items-start">เลขานุการสภากรุงเทพฯ</div>
                                    <div class="social-wrapper">
                                        <ul>
                                            <li class="facebook">
                                                <a href="" title="facebook">
                                                    <img src="{{ asset('template3/assets/images/icons/icon-social-facebook.svg')}}" alt="icon">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-gov">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="tel">
                                                    <div class="on">โทรศัพท์กลาง</div>
                                                    <div class="number">
                                                        <a href="">
                                                            0-2222-5349
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="tel">
                                                    <div class="on">ภายใน</div>
                                                    <div class="number">
                                                        <a href="">
                                                            1120
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item-gov">
                                <div class="col-lg-6 d-flex">
                                    <div class="title-gov d-flex align-items-start">เลขานุการสภากรุงเทพฯ</div>
                                    <div class="social-wrapper">
                                        <ul>
                                            <li class="facebook">
                                                <a href="" title="facebook">
                                                    <img src="{{ asset('template3/assets/images/icons/icon-social-facebook.svg')}}" alt="icon">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-gov">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="tel">
                                                    <div class="on">โทรศัพท์กลาง</div>
                                                    <div class="number">
                                                        <a href="">
                                                            0-2222-5349
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="tel">
                                                    <div class="on">ภายใน</div>
                                                    <div class="number">
                                                        <a href="">
                                                            1120
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item-gov">
                                <div class="col-lg-6 d-flex">
                                    <div class="title-gov d-flex align-items-start">เลขานุการสภากรุงเทพฯ</div>
                                    <div class="social-wrapper">
                                        <ul>
                                            <li class="facebook">
                                                <a href="" title="facebook">
                                                    <img src="{{ asset('template3/assets/images/icons/icon-social-facebook.svg')}}" alt="icon">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-gov">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="tel">
                                                    <div class="on">โทรศัพท์กลาง</div>
                                                    <div class="number">
                                                        <a href="">
                                                            0-2222-5349
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="tel">
                                                    <div class="on">ภายใน</div>
                                                    <div class="number">
                                                        <a href="">
                                                            1120
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item-gov">
                                <div class="col-lg-6 d-flex">
                                    <div class="title-gov d-flex align-items-start">เลขานุการสภากรุงเทพมหานครฯ</div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-gov">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="tel">
                                                    <div class="on">โทรศัพท์กลาง</div>
                                                    <div class="number">
                                                        <a href="">
                                                            0-2222-5349
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="tel">
                                                    <div class="on">ภายใน</div>
                                                    <div class="number">
                                                        <a href="">
                                                            1120
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="load-more text-right">
                                    <a href="" class="btn btn-outline-dark" style="width: 100%">โหลดเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                        
</div>