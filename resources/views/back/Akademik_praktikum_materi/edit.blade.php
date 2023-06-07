@extends("back/layouts.layout")
@section("content")
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
          <!--begin::Toolbar-->
          {{-- <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="card">
                    <div class="card-body">
                        @can("product-create")
                            <a class="btn btn-success" href="{{ route("akademik_praktikum_materi.create") }}"> Create New Akademik_praktikum_materi</a>
                        @endcan
      
                    </div>
                </div>
            </div>
        </div> --}}
      
        <!--begin::Main-->
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
          <!--begin::Content wrapper-->
          <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
              <!--begin::Toolbar container-->
              <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                  <!--begin::Title-->
                  <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">PRAKTIKUM MATERI LIST</h1>
                  <!--end::Title-->
                  <!--begin::Breadcrumb-->
                  <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                      <a href="{{url("")}}" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                      <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">PRAKTIKUM MATERI</li>
                    <!--end::Item-->
                  </ul>
                  <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">
                  <!--begin::Filter menu-->
                  <div class="m-0">
                    <!--begin::Menu toggle-->
                    <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-filter fs-6 text-muted me-1">
                      <span class="path1"></span>
                      <span class="path2"></span>
                    </i>Filter</a>
                    <!--end::Menu toggle-->
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_641ac41e77927">
                      <!--begin::Header-->
                      <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                      </div>
                      <!--end::Header-->
                      <!--begin::Menu separator-->
                      <div class="separator border-gray-200"></div>
                      <!--end::Menu separator-->
                      <!--begin::Form-->
                      <div class="px-7 py-5">
                        <!--begin::Input group-->
                        <div class="mb-10">
                          <!--begin::Label-->
                          <label class="form-label fw-semibold">Status:</label>
                          <!--end::Label-->
                          <!--begin::Input-->
                          <div>
                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_641ac41e77927" data-allow-clear="true">
                              <option></option>
                              <option value="1">Approved</option>
                              <option value="2">Pending</option>
                              <option value="2">In Process</option>
                              <option value="2">Rejected</option>
                            </select>
                          </div>
                          <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                          <!--begin::Label-->
                          <label class="form-label fw-semibold">Member Type:</label>
                          <!--end::Label-->
                          <!--begin::Options-->
                          <div class="d-flex">
                            <!--begin::Options-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                              <input class="form-check-input" type="checkbox" value="1" />
                              <span class="form-check-label">Author</span>
                            </label>
                            <!--end::Options-->
                            <!--begin::Options-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                              <span class="form-check-label">Customer</span>
                            </label>
                            <!--end::Options-->
                          </div>
                          <!--end::Options-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                          <!--begin::Label-->
                          <label class="form-label fw-semibold">Notifications:</label>
                          <!--end::Label-->
                          <!--begin::Switch-->
                          <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                            <label class="form-check-label">Enabled</label>
                          </div>
                          <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                          <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                          <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                        </div>
                        <!--end::Actions-->
                      </div>
                      <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                  </div>
                  <!--end::Filter menu-->
                  <!--begin::Secondary button-->
                  <!--end::Secondary button-->
                  <!--begin::Primary button-->
                  {{-- <a href="#" class="btn btn-sm fw-bold btn-info" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a> --}}
                  <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_Akademik_praktikum_materi">
                    <i class="ki-duotone ki-plus "></i>Add PRAKTIKUM MATERI</button>
                  <!--end::Primary button-->
                </div>
                <!--end::Actions-->
              </div>
              <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->


  <!--begin::Content-->
  <div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
      <!--begin::Card-->
      <div class="card">
        <div class="card-body">
          
          {!! Form::model($Akademik_praktikum_materi, ["method" => "PATCH","route" => ["akademik_praktikum_materi.update", $Akademik_praktikum_materi->id], "enctype"=>"multipart/form-data"]) !!}
          {{-- <form id="kt_modal_add_user_form" class="form" action="#"> --}}
            <!--begin::Scroll-->
            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
            
  <!--begin::Input group-->
  <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-semibold fs-6 mb-2">TITLE</label>
    <!--end::Label-->
    <!--begin::Input-->
    {!! Form::text("title", $Akademik_praktikum_materi->title, array("placeholder" => "TITLE","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
    <!--end::Input-->
  </div>
  <!--end::Input group-->
  
  <!--begin::Input group-->
  <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-semibold fs-6 mb-2">SHORT DESC</label>
    <!--end::Label-->
    <!--begin::Input-->
    {!! Form::text("short_desc", $Akademik_praktikum_materi->short_desc, array("placeholder" => "SHORT DESC","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
    <!--end::Input-->
  </div>
  <!--end::Input group-->
  
  <!--begin::Input group-->
  <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-semibold fs-6 mb-2">TEXT</label>
    <!--end::Label-->
    <!--begin::Input-->
    {{-- <input type="text" name="text" class="form-control form-control-sm form-control-solid" placeholder="text" value="{{$Akademik_praktikum_materi->text}}" /> --}}
    <textarea id="elm1" name="text">{{$Akademik_praktikum_materi->text}}</textarea>
    <!--end::Input-->
  </div>
  <!--end::Input group-->
  
  <!--begin::Input group-->
  <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-semibold fs-6 mb-2">TYPE</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="type" class="form-control form-control-sm form-control-solid" placeholder="type" value="{{$Akademik_praktikum_materi->type}}" />
    <!--end::Input-->
  </div>
  <!--end::Input group-->
  
  <!--begin::Input group-->
  <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class="d-block fw-semibold fs-6 mb-5">Image</label>
    <!--end::Label-->
    <!--begin::Image placeholder-->
    <style>.image-input-placeholder { background-image: url("assets/media/svg/files/blank-image.svg"); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url("assets/media/svg/files/blank-image-dark.svg"); }</style>
    <!--end::Image placeholder-->
    <!--begin::Image input-->
    <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
      <!--begin::Preview existing avatar-->
      @if (!empty($Akademik_praktikum_materi->image))
      <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ url("images") }}/akademik_praktikum_materi/{{ $Akademik_praktikum_materi->image }});"></div>
                      {{-- <img src="{{ url("images") }}/akademik_praktikum_materi/{{ $Akademik_praktikum_materi->image }}" alt="Emma Smith" class="w-100" /> --}}
                    @else
                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ url("images") }}/imagenotavailable.jpg);"></div>
                      {{-- <img src="{{ url("images") }}/imagenotavailable.jpg" alt="Emma Smith" class="w-100" /> --}}
                    @endif
      <!--end::Preview existing avatar-->
      <!--begin::Label-->
      <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
        <i class="ki-duotone ki-pencil fs-7">
          <span class="path1"></span>
          <span class="path2"></span>
        </i>
        <!--begin::Inputs-->
        <input type="file" name="image" accept=".png, .jpg, .jpeg" />
        <input type="hidden" name="image_remove" />
        <!--end::Inputs-->
      </label>
      <!--end::Label-->
      <!--begin::Cancel-->
      <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel image">
        <i class="ki-duotone ki-cross fs-2">
          <span class="path1"></span>
          <span class="path2"></span>
        </i>
      </span>
      <!--end::Cancel-->
      <!--begin::Remove-->
      <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove image">
        <i class="ki-duotone ki-cross fs-2">
          <span class="path1"></span>
          <span class="path2"></span>
        </i>
      </span>
      <!--end::Remove-->
    </div>
    <!--end::Image input-->
    <!--begin::Hint-->
    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
    <!--end::Hint-->
  </div>
  <!--end::Input group-->
  
  <!--begin::Input group-->
  <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-semibold fs-6 mb-2">FILE</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="file" name="file" class="form-control form-control-sm form-control-solid" placeholder="insert file" value="" />
    <!--end::Input-->
  </div>
  <!--end::Input group-->
  
  <!--begin::Input group-->
  <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-semibold fs-6 mb-2">VIDEO</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="video" class="form-control form-control-sm form-control-solid" placeholder="video" value="{{$Akademik_praktikum_materi->video}}" />
    <!--end::Input-->
  </div>
  <!--end::Input group-->
  
  <!--begin::Input group-->
  <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-semibold fs-6 mb-2">QUOTE TEXT</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="quote_text" class="form-control form-control-sm form-control-solid" placeholder="quote_text" value="{{$Akademik_praktikum_materi->quote_text}}" />
    <!--end::Input-->
  </div>
  <!--end::Input group-->
  
  <!--begin::Input group-->
  <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-semibold fs-6 mb-2">QUOTE AUTHOR</label>
    <!--end::Label-->
    <!--begin::Input-->
    <input type="text" name="quote_author" class="form-control form-control-sm form-control-solid" placeholder="quote_author" value="{{$Akademik_praktikum_materi->quote_author}}" />
    <!--end::Input-->
  </div>
  <!--end::Input group-->
  
  <!--begin::Input group-->
  <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-semibold fs-6 mb-2">AUTHOR</label>
    <!--end::Label-->
    <!--begin::Input-->
    {!! Form::text("author", $Akademik_praktikum_materi->author, array("placeholder" => "AUTHOR","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
    <!--end::Input-->
  </div>
  <!--end::Input group-->
  
  <!--begin::Input group-->
  <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-semibold fs-6 mb-2">SLUG</label>
    <!--end::Label-->
    <!--begin::Input-->
    {!! Form::text("slug", $Akademik_praktikum_materi->slug, array("placeholder" => "SLUG","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
    <!--end::Input-->
  </div>
  <!--end::Input group-->
  
  <!--begin::Input group-->
  <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-semibold fs-6 mb-2">STATUS</label>
    <!--end::Label-->
    <!--begin::Input-->
    {!! Form::text("status", $Akademik_praktikum_materi->status, array("placeholder" => "STATUS","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
    <!--end::Input-->
  </div>
  <!--end::Input group-->
  
  <!--begin::Input group-->
  <div class="fv-row mb-7">
    <!--begin::Label-->
    <label class=" fw-semibold fs-6 mb-2">IMAGES CODE</label>
    <!--end::Label-->
    <!--begin::Input-->
    {!! Form::text("images_code", $Akademik_praktikum_materi->images_code, array("placeholder" => "IMAGES CODE","class" => "form-control form-control-solid mb-3 mb-lg-0")) !!}
    <!--end::Input-->
  </div>
  <!--end::Input group-->
  
            </div>
            <!--end::Scroll-->
            <!--begin::Actions-->
            <div class="text-center pt-15">
              <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
              <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                <span class="indicator-label">Submit</span>
                <span class="indicator-progress">Please wait...
                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
              </button>
            </div>
            <!--end::Actions-->
            {!! Form::close() !!}

        </div>

      </div>
      <!--end::Card-->
    </div>
    <!--end::Content container-->
  </div>
  <!--end::Content-->
</div>
<!--end::Content wrapper-->

</div>
<!--end:::Main-->


</div>
<!--end::Content-->
@endsection
