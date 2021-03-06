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
                            <div class="group-text__no-styled txt-center">
                                <h3 class="title">คำถามที่พบบ่อย</h3>
                                <p class="desc">The Bangkok Metropolitan Council Secretariat </p>
                            </div>
                        </div>
                        <div class="search-content">
                             <form action="">
                @csrf <!-- {{ csrf_field() }} -->
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="input-custom inp-categories">
                                            <div class="select-wrapper width-full">
                                                <select name="month" class="slc">
                                                    <optgroup label="เลือกประเทภ">
                                                        <option value="">ประเภทข่าว 1</option>
                                                        <option value="">ประเภทข่าว 2</option>
                                                        <option value="">ประเภทข่าว 3</option>
                                                        <option value="">ประเภทข่าว 4</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-custom inp-search">
                                            <input class="style-input" type="text" name="" placeholder="คำค้นหา" />
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="btn-search ">
                                            <button type="submit" class="icon-search bg-color-primary">
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
                        <div class="main-content border-bottom">
                            <div class="accordion-wrapper">
                                <div class="accordion" id="accordionExample">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="group-mange-section">
                                                    <div class="manage-tools">
                                                        <ul>
                                                            <li class="order-list">จัดการ</li>
                                                            <li class="order-list">ลบ</li>
                                                            <li class="order-list">ซ่อน</li>
                                                            <li class="order-list order-close">ปิด</li>
                                                        </ul>
                                                    </div> 
                                                    <div class="manage-edit">
                                                        <img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">
                                                    </div>
                                                </div>
                                                <div class="card-header" id="faq_1">
                                                    <div class="card-header-item d-flex align-items-center" data-toggle="collapse" data-target="#collapse_1" aria-expanded="false" aria-controls="collapse_1">
                                                        <div class="icon-card-header">
                                                            <div class="icon-content">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">
                                                                <path class="st0" d="M5.1,21c0,8.6,6.9,15.5,15.4,16c5.7,0.4,11.4-1.3,16.5-3.9c-2.8-2.8-2.1-6.8-1.3-9.6c1.1-3.3,1.1-7-0.5-10.1
                                                                    c-1.1-2.1-2.7-4-4.6-5.4c-0.7-0.6-2.4-1.4-2.4-1.4c-2.1-1-4.5-1.6-7-1.6c-9,0-16.2,7.3-16.2,16.2V21z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="title-card-header flex-grow-1">
                                                            เด็กอายุกี่ขวบต้องแจ้งการเข้าเรียนตามกฎหมาย และใช้เอกสารอะไรบ้าง?
                                                            <div class="icon-content">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                                <polyline class="st0" points="4.9,8.5 12,15.5 19.1,8.5 "/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse_1" class="collapse" aria-labelledby="faq_1" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="content">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                        <div class="show-view">View : 1.5K</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="group-mange-section">
                                                    <div class="manage-tools">
                                                        <ul>
                                                            <li class="order-list">จัดการ</li>
                                                            <li class="order-list">ลบ</li>
                                                            <li class="order-list">ซ่อน</li>
                                                            <li class="order-list order-close">ปิด</li>
                                                        </ul>
                                                    </div> 
                                                    <div class="manage-edit">
                                                        <img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">
                                                    </div>
                                                </div>
                                                <div class="card-header" id="faq_2">
                                                    <div class="card-header-item d-flex align-items-center" data-toggle="collapse" data-target="#collapse_2" aria-expanded="false" aria-controls="collapse_2">
                                                        <div class="icon-card-header">
                                                            <div class="icon-content">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">
                                                                <path class="st0" d="M5.1,21c0,8.6,6.9,15.5,15.4,16c5.7,0.4,11.4-1.3,16.5-3.9c-2.8-2.8-2.1-6.8-1.3-9.6c1.1-3.3,1.1-7-0.5-10.1
                                                                    c-1.1-2.1-2.7-4-4.6-5.4c-0.7-0.6-2.4-1.4-2.4-1.4c-2.1-1-4.5-1.6-7-1.6c-9,0-16.2,7.3-16.2,16.2V21z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="title-card-header flex-grow-1">
                                                            การถอนค้ำประกันสัญญาต้องใช้เอกสารอะไรบ้าง
                                                            <div class="icon-content">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                                <polyline class="st0" points="4.9,8.5 12,15.5 19.1,8.5 "/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse_2" class="collapse" aria-labelledby="faq_2" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="content">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                        <div class="show-view">View : 1.5K</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="group-mange-section">
                                                    <div class="manage-tools">
                                                        <ul>
                                                            <li class="order-list">จัดการ</li>
                                                            <li class="order-list">ลบ</li>
                                                            <li class="order-list">ซ่อน</li>
                                                            <li class="order-list order-close">ปิด</li>
                                                        </ul>
                                                    </div> 
                                                    <div class="manage-edit">
                                                        <img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">
                                                    </div>
                                                </div>
                                                <div class="card-header" id="faq_3">
                                                    <div class="card-header-item d-flex align-items-center" data-toggle="collapse" data-target="#collapse_3" aria-expanded="false" aria-controls="collapse_3">
                                                        <div class="icon-card-header">
                                                            <div class="icon-content">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">
                                                                <path class="st0" d="M5.1,21c0,8.6,6.9,15.5,15.4,16c5.7,0.4,11.4-1.3,16.5-3.9c-2.8-2.8-2.1-6.8-1.3-9.6c1.1-3.3,1.1-7-0.5-10.1
                                                                    c-1.1-2.1-2.7-4-4.6-5.4c-0.7-0.6-2.4-1.4-2.4-1.4c-2.1-1-4.5-1.6-7-1.6c-9,0-16.2,7.3-16.2,16.2V21z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="title-card-header flex-grow-1">
                                                            การถอนค้ำประกันสัญญาต้องใช้เอกสารอะไรบ้าง
                                                            <div class="icon-content">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                                <polyline class="st0" points="4.9,8.5 12,15.5 19.1,8.5 "/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse_3" class="collapse" aria-labelledby="faq_3" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="content">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                        <div class="show-view">View : 1.5K</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="group-mange-section">
                                                    <div class="manage-tools">
                                                        <ul>
                                                            <li class="order-list">จัดการ</li>
                                                            <li class="order-list">ลบ</li>
                                                            <li class="order-list">ซ่อน</li>
                                                            <li class="order-list order-close">ปิด</li>
                                                        </ul>
                                                    </div> 
                                                    <div class="manage-edit">
                                                        <img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">
                                                    </div>
                                                </div>
                                                <div class="card-header" id="faq_4">
                                                    <div class="card-header-item d-flex align-items-center" data-toggle="collapse" data-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                                        <div class="icon-card-header">
                                                            <div class="icon-content">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">
                                                                <path class="st0" d="M5.1,21c0,8.6,6.9,15.5,15.4,16c5.7,0.4,11.4-1.3,16.5-3.9c-2.8-2.8-2.1-6.8-1.3-9.6c1.1-3.3,1.1-7-0.5-10.1
                                                                    c-1.1-2.1-2.7-4-4.6-5.4c-0.7-0.6-2.4-1.4-2.4-1.4c-2.1-1-4.5-1.6-7-1.6c-9,0-16.2,7.3-16.2,16.2V21z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="title-card-header flex-grow-1">
                                                            การถอนค้ำประกันสัญญาต้องใช้เอกสารอะไรบ้าง
                                                            <div class="icon-content">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                                <polyline class="st0" points="4.9,8.5 12,15.5 19.1,8.5 "/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse_4" class="collapse" aria-labelledby="faq_4" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="content">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                        <div class="show-view">View : 1.5K</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="group-mange-section">
                                                    <div class="manage-tools">
                                                        <ul>
                                                            <li class="order-list">จัดการ</li>
                                                            <li class="order-list">ลบ</li>
                                                            <li class="order-list">ซ่อน</li>
                                                            <li class="order-list order-close">ปิด</li>
                                                        </ul>
                                                    </div> 
                                                    <div class="manage-edit">
                                                        <img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">
                                                    </div>
                                                </div>
                                                <div class="card-header" id="faq_5">
                                                    <div class="card-header-item d-flex align-items-center" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" aria-controls="collapse_5">
                                                        <div class="icon-card-header">
                                                            <div class="icon-content">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">
                                                                <path class="st0" d="M5.1,21c0,8.6,6.9,15.5,15.4,16c5.7,0.4,11.4-1.3,16.5-3.9c-2.8-2.8-2.1-6.8-1.3-9.6c1.1-3.3,1.1-7-0.5-10.1
                                                                    c-1.1-2.1-2.7-4-4.6-5.4c-0.7-0.6-2.4-1.4-2.4-1.4c-2.1-1-4.5-1.6-7-1.6c-9,0-16.2,7.3-16.2,16.2V21z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="title-card-header flex-grow-1">
                                                            การถอนค้ำประกันสัญญาต้องใช้เอกสารอะไรบ้าง
                                                            <div class="icon-content">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                                <polyline class="st0" points="4.9,8.5 12,15.5 19.1,8.5 "/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse_5" class="collapse" aria-labelledby="faq_5" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="content">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                        <div class="show-view">View : 1.5K</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="card">
                                                <div class="group-mange-section">
                                                    <div class="manage-tools">
                                                        <ul>
                                                            <li class="order-list">จัดการ</li>
                                                            <li class="order-list">ลบ</li>
                                                            <li class="order-list">ซ่อน</li>
                                                            <li class="order-list order-close">ปิด</li>
                                                        </ul>
                                                    </div> 
                                                    <div class="manage-edit">
                                                        <img src="http://127.0.0.1:8000/template1/assets/images/icons/icon-edit.svg" alt="icon">
                                                    </div>
                                                </div>
                                                <div class="card-header" id="faq_6">
                                                    <div class="card-header-item d-flex align-items-center" data-toggle="collapse" data-target="#collapse_6" aria-expanded="false" aria-controls="collapse_6">
                                                        <div class="icon-card-header">
                                                            <div class="icon-content">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="42.2px" height="42.2px" viewBox="0 0 42.2 42.2" style="enable-background:new 0 0 42.2 42.2;" xml:space="preserve">
                                                                <path class="st0" d="M5.1,21c0,8.6,6.9,15.5,15.4,16c5.7,0.4,11.4-1.3,16.5-3.9c-2.8-2.8-2.1-6.8-1.3-9.6c1.1-3.3,1.1-7-0.5-10.1
                                                                    c-1.1-2.1-2.7-4-4.6-5.4c-0.7-0.6-2.4-1.4-2.4-1.4c-2.1-1-4.5-1.6-7-1.6c-9,0-16.2,7.3-16.2,16.2V21z"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="title-card-header flex-grow-1">
                                                            เด็กอายุกี่ขวบต้องแจ้งการเข้าเรียนตามกฎหมาย และใช้เอกสารอะไรบ้าง?
                                                            <div class="icon-content">
                                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                                                <polyline class="st0" points="4.9,8.5 12,15.5 19.1,8.5 "/>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="collapse_6" class="collapse" aria-labelledby="faq_6" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="content">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                        <div class="show-view">View : 1.5K</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            <div class="group-social-share d-flex align-items-center justify-content-between">
                                <div class="shared-email d-flex align-items-center">
                                    <div class="social-wrapper d-flex align-items-center">
                                        <div class="text-social color-secondary">Share</div>
                                        <ul class="d-flex align-items-center">
                                            <li class="facebook d-flex align-items-center not-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-facebook.svg')}}" alt="icon"><span class="color-secondary">5</span> 
                                            </li>
                                            <li class="twitter d-flex align-items-center not-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-twitter.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                            </li>
                                            <li class="line d-flex align-items-center not-hover">
                                                <img src="{{ asset('template1/assets/images/icons/icon-social-googleplus.svg')}}" alt="icon"> <span class="color-secondary">5</span> 
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="email-link d-flex align-items-center">
                                        <div class="item">
                                            <a href="">
                                                <div class="icon -email">
                                                    <img src="{{ asset('template1/assets/images/icons/icon-email.png')}}" alt="icon">
                                                </div>
                                                <div class="text-email-link">อีเมล</div>
                                                <div class="clearboth"></div>
                                            </a>
                                        </div>
                                        <div class="item">
                                            <a href="">
                                                <div class="icon -link">
                                                    <img src="{{ asset('template1/assets/images/icons/icon-link.png')}}" alt="icon">
                                                </div>
                                                <div class="text-email-link">Copy Link</div>
                                                <div class="clearboth"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="views-like d-flex align-items-center">
                                    <div class="view-count">
                                        View : <span>1.5K</span>
                                    </div>
                                    <div class="like-count d-flex align-items-center">
                                        <a href="#" title="Love it" data-count="0" class="icon-like">
                                            <img src="{{ asset('template1/assets/images/icons/icon-like.png')}}" alt="icon">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>