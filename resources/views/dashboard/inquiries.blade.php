@extends('dashboard.partials.base')

@section('title','Inquiries')

@section('styles')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@endsection

@section('main')
	<main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="full-container">
                        <div class="email-app">
                            <div class="email-side-nav remain-height ov-h">
                                <div class="h-100 layers">
                                    <div class="p-20 bgc-grey-100 layer w-100"><a href="#" class="btn btn-primary btn-block">New Message</a></div>
                                    <div class="scrollable pos-r bdT layer w-100 fxg-1">
                                        <ul class="p-20 nav flex-column">
                                            <li class="nav-item">
                                                <a href="javascript:void(0)" class="nav-link c-grey-800 cH-blue-500 active">
                                                    <div class="peers ai-c jc-sb">
                                                        <div class="peer peer-greed"><i class="mR-10 ti-email"></i> <span>Pending</span></div>
                                                        <div class="peer"><span class="badge badge-pill bgc-deep-purple-50 c-deep-purple-700">+99</span></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                                    <div class="peers ai-c jc-sb">
                                                        <div class="peer peer-greed"><i class="mR-10 ti-share"></i> <span>Processed</span></div>
                                                        <div class="peer"><span class="badge badge-pill bgc-green-50 c-green-700">12</span></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                                    <div class="peers ai-c jc-sb">
                                                        <div class="peer peer-greed"><i class="mR-10 ti-star"></i> <span>Important</span></div>
                                                        <div class="peer"><span class="badge badge-pill bgc-blue-50 c-blue-700">3</span></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                                    <div class="peers ai-c jc-sb">
                                                        <div class="peer peer-greed"><i class="mR-10 ti-file"></i> <span>Drafts</span></div>
                                                        <div class="peer"><span class="badge badge-pill bgc-amber-50 c-amber-700">5</span></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                                    <div class="peers ai-c jc-sb">
                                                        <div class="peer peer-greed"><i class="mR-10 ti-alert"></i> <span>Spam</span></div>
                                                        <div class="peer"><span class="badge badge-pill bgc-red-50 c-red-700">1</span></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                                    <div class="peers ai-c jc-sb">
                                                        <div class="peer peer-greed"><i class="mR-10 ti-trash"></i> <span>Trash</span></div>
                                                        <div class="peer"><span class="badge badge-pill bgc-red-50 c-red-700">+99</span></div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="email-wrapper row remain-height bgc-white ov-h">
                                <div class="email-list h-100 layers">
                                    <div class="layer w-100">
                                        <div class="bgc-grey-100 peers ai-c jc-sb p-20 fxw-nw">
                                            <div class="peer">
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="email-side-toggle d-n@md+ btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-menu"></i></button>
                                                    <button type="button" class="btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-folder"></i></button>
                                                    <button type="button" class="btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-tag"></i></button>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button" class="btn cur-p bgc-white no-after dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more-alt"></i></button>
                                                        <ul class="dropdown-menu fsz-sm" aria-labelledby="btnGroupDrop1">
                                                            <li><a href="" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i class="ti-trash mR-10"></i> <span>Delete</span></a></li>
                                                            <li><a href="" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i class="ti-alert mR-10"></i> <span>Mark as Spam</span></a></li>
                                                            <li><a href="" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i class="ti-star mR-10"></i> <span>Satar</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="peer">
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="fsz-xs btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-angle-left"></i></button>
                                                    <button type="button" class="fsz-xs btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-angle-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layer w-100">
                                        <div class="bdT bdB">
                                            <input type="text" class="form-control m-0 bdw-0 pY-15 pX-20" placeholder="Search...">
                                        </div>
                                    </div>
                                    <div class="layer w-100 fxg-1 scrollable pos-r">
                                        <div class="" id="list-of-emails-container">
                                            <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p" onclick="alert('you clicked me');">
                                                <div class="peer mR-10">
                                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                                        <label for="inputCall1" class="peers peer-greed js-sb ai-c"></label>
                                                    </div>
                                                </div>
                                                <div class="peer peer-greed ov-h">
                                                    <div class="peers ai-c">
                                                        <div class="peer peer-greed">
                                                            <h6>John Doe</h6></div>
                                                        <div class="peer"><small>1 min ago</small></div>
                                                    </div>
                                                    <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></div>
                                            </div>
                                            <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                                <div class="peer mR-10">
                                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                                        <label for="inputCall1" class="peers peer-greed js-sb ai-c"></label>
                                                    </div>
                                                </div>
                                                <div class="peer peer-greed ov-h">
                                                    <div class="peers ai-c">
                                                        <div class="peer peer-greed">
                                                            <h6>John Doe</h6></div>
                                                        <div class="peer"><small>1 min ago</small></div>
                                                    </div>
                                                    <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></div>
                                            </div>
                                            <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                                <div class="peer mR-10">
                                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                                        <label for="inputCall1" class="peers peer-greed js-sb ai-c"></label>
                                                    </div>
                                                </div>
                                                <div class="peer peer-greed ov-h">
                                                    <div class="peers ai-c">
                                                        <div class="peer peer-greed">
                                                            <h6>John Doe</h6></div>
                                                        <div class="peer"><small>1 min ago</small></div>
                                                    </div>
                                                    <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></div>
                                            </div>
                                            <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                                <div class="peer mR-10">
                                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                                        <label for="inputCall1" class="peers peer-greed js-sb ai-c"></label>
                                                    </div>
                                                </div>
                                                <div class="peer peer-greed ov-h">
                                                    <div class="peers ai-c">
                                                        <div class="peer peer-greed">
                                                            <h6>John Doe</h6></div>
                                                        <div class="peer"><small>1 min ago</small></div>
                                                    </div>
                                                    <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></div>
                                            </div>
                                            <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                                <div class="peer mR-10">
                                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                                        <label for="inputCall1" class="peers peer-greed js-sb ai-c"></label>
                                                    </div>
                                                </div>
                                                <div class="peer peer-greed ov-h">
                                                    <div class="peers ai-c">
                                                        <div class="peer peer-greed">
                                                            <h6>John Doe</h6></div>
                                                        <div class="peer"><small>1 min ago</small></div>
                                                    </div>
                                                    <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></div>
                                            </div>
                                            <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                                <div class="peer mR-10">
                                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                                        <label for="inputCall1" class="peers peer-greed js-sb ai-c"></label>
                                                    </div>
                                                </div>
                                                <div class="peer peer-greed ov-h">
                                                    <div class="peers ai-c">
                                                        <div class="peer peer-greed">
                                                            <h6>John Doe</h6></div>
                                                        <div class="peer"><small>1 min ago</small></div>
                                                    </div>
                                                    <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></div>
                                            </div>
                                            <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                                <div class="peer mR-10">
                                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                                        <label for="inputCall1" class="peers peer-greed js-sb ai-c"></label>
                                                    </div>
                                                </div>
                                                <div class="peer peer-greed ov-h">
                                                    <div class="peers ai-c">
                                                        <div class="peer peer-greed">
                                                            <h6>John Doe</h6></div>
                                                        <div class="peer"><small>1 min ago</small></div>
                                                    </div>
                                                    <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></div>
                                            </div>
                                            <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                                <div class="peer mR-10">
                                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                                        <label for="inputCall1" class="peers peer-greed js-sb ai-c"></label>
                                                    </div>
                                                </div>
                                                <div class="peer peer-greed ov-h">
                                                    <div class="peers ai-c">
                                                        <div class="peer peer-greed">
                                                            <h6>John Doe</h6></div>
                                                        <div class="peer"><small>1 min ago</small></div>
                                                    </div>
                                                    <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></div>
                                            </div>
                                            <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                                <div class="peer mR-10">
                                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                                        <label for="inputCall1" class="peers peer-greed js-sb ai-c"></label>
                                                    </div>
                                                </div>
                                                <div class="peer peer-greed ov-h">
                                                    <div class="peers ai-c">
                                                        <div class="peer peer-greed">
                                                            <h6>John Doe</h6></div>
                                                        <div class="peer"><small>1 min ago</small></div>
                                                    </div>
                                                    <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></div>
                                            </div>
                                            <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                                <div class="peer mR-10">
                                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                                        <label for="inputCall1" class="peers peer-greed js-sb ai-c"></label>
                                                    </div>
                                                </div>
                                                <div class="peer peer-greed ov-h">
                                                    <div class="peers ai-c">
                                                        <div class="peer peer-greed">
                                                            <h6>John Doe</h6></div>
                                                        <div class="peer"><small>1 min ago</small></div>
                                                    </div>
                                                    <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></div>
                                            </div>
                                            <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                                <div class="peer mR-10">
                                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                                        <label for="inputCall1" class="peers peer-greed js-sb ai-c"></label>
                                                    </div>
                                                </div>
                                                <div class="peer peer-greed ov-h">
                                                    <div class="peers ai-c">
                                                        <div class="peer peer-greed">
                                                            <h6>John Doe</h6></div>
                                                        <div class="peer"><small>1 min ago</small></div>
                                                    </div>
                                                    <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></div>
                                            </div>
                                            <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                                <div class="peer mR-10">
                                                    <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                                        <input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer">
                                                        <label for="inputCall1" class="peers peer-greed js-sb ai-c"></label>
                                                    </div>
                                                </div>
                                                <div class="peer peer-greed ov-h">
                                                    <div class="peers ai-c">
                                                        <div class="peer peer-greed">
                                                            <h6>John Doe</h6></div>
                                                        <div class="peer"><small>1 min ago</small></div>
                                                    </div>
                                                    <h5 class="fsz-def tt-c c-grey-900">title goes here</h5><span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-content h-100">
                                    <div class="h-100 scrollable pos-r">
                                        <div class="bgc-grey-100 peers ai-c jc-sb p-20 fxw-nw d-n@md+">
                                            <div class="peer">
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="back-to-mailbox btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-angle-left"></i></button>
                                                    <button type="button" class="btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-folder"></i></button>
                                                    <button type="button" class="btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-tag"></i></button>
                                                    <div class="btn-group" role="group">
                                                        <button id="btnGroupDrop1" type="button" class="btn cur-p bgc-white no-after dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more-alt"></i></button>
                                                        <ul class="dropdown-menu fsz-sm" aria-labelledby="btnGroupDrop1">
                                                            <li><a href="" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i class="ti-trash mR-10"></i> <span>Delete</span></a></li>
                                                            <li><a href="" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i class="ti-alert mR-10"></i> <span>Mark as Spam</span></a></li>
                                                            <li><a href="" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i class="ti-star mR-10"></i> <span>Satar</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="peer">
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="fsz-xs btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-angle-left"></i></button>
                                                    <button type="button" class="fsz-xs btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-angle-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="email-content-wrapper">
                                            <div class="peers ai-c jc-sb pX-40 pY-30">
                                                <div class="peers peer-greed">
                                                    <div class="peer mR-20"><img class="bdrs-50p w-3r h-3r" alt="" data-cfsrc="/admin_assets/img/11.jpg" style="display:none;visibility:hidden;">
                                                        <noscript><img class="bdrs-50p w-3r h-3r" alt="" src="admin_assets/img/11.jpg"></noscript>
                                                    </div>
                                                    <div class="peer"><small>Nov, 02 2017</small>
                                                        <h5 class="c-grey-900 mB-5">John Doe</h5><span>To: <a href="../../cdn-cgi/l/email-protection.html" class="__cf_email__" data-cfemail="73161e121a1f33141e121a1f5d101c1e">[email&#160;protected]</a></span></div>
                                                </div>
                                                <div class="peer"><a href="" class="btn btn-primary bdrs-50p p-15 lh-0" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-reply"></i></a></div>
                                            </div>
                                            <div class="bdT pX-40 pY-30">
                                                <h4>Title of this email goes here</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="email-compose-body">
            <h4 class="c-grey-900 mB-20">Respond To Inquiry</h4>
            <div class="send-header">
             	<div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="To" disabled="true" required="true">
                </div>                
                <div class="form-group">
                	<input class="form-control" name="subject" placeholder="Email Subject" disabled="true" required="true">
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Say Hi..." rows="5" required="true"></textarea>
                </div>
            </div>
            <div id="compose-area"></div>
            <div class="text-right mrg-top-30">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js">/*
        var inquiry_id = 0;
        $(function () 
        {
            $('form.email-compose-body').submit(function (this) 
            {
                if ($("input[name='message']").val() == "") 
                {
                    return false;
                }
                var str = $(this).serialize();
                $.ajax({
                  type: "POST",
                  url: "{{ url('/admin/inquiries') }}",
                  data: str,
                  contentType: 'application/x-www-form-urlencoded',
                  dataType: "text",
                  success: function(msg) 
                  {
                    //alert(msg);
                    if (msg == 'OK') 
                    {
                      $("#sendmessage").addClass("show");
                      $("#errormessage").removeClass("show");
                      $('.contactForm').find("input, textarea").val("");
                    } 
                    else 
                    {
                      $("#sendmessage").removeClass("show");
                      $("#errormessage").addClass("show");
                      $('#errormessage').html(msg);
                    }

                  }
                });
            });

            var return_list_item = function(id,name,subject,body,time_c)
            {
                var el = $("<div class='email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p' id='"+ id +"' onclick='view("+ id +")'></div>").html('<div class="peer mR-10"><div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1"name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"></label></div></div><div class="peer peer-greed ov-h"><div class="peers ai-c"><div class="peer peer-greed"><h6>'+ name +'</h6></div><div class="peer"><small>'+ time_c +' min ago</small></div></div><h5 class="fsz-def tt-c c-grey-900">'+ subject +'</h5><span class="whs-nw w-100 ov-h tov-e d-b">'+ body +'</span></div>');

                return el;
            };

            
        });*/
    </script>

@endsection