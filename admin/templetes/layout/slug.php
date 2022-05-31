<div class="card card-primary card-outline text-sm">
    <div class="card-header">
        <h3 class="card-title">Đường dẫn</h3>
        <span class="pl-2 text-danger">(Vui lòng không nhập trùng tiêu đề)</span>
    </div>
    <div class="card-body card-slug">
            <div class="form-group mb-2">
                <label for="slugchange" class="d-inline-block align-middle text-info mb-0 mr-2">Thay đổi đường dẫn theo tiêu đề mới:</label>
                <div class="custom-control custom-checkbox d-inline-block align-middle">
                    <input type="checkbox" class="custom-control-input" name="slugchange" id="slugchange">
                    <label for="slugchange" class="custom-control-label"></label>
                </div>
            </div>

        <input type="hidden" class="slug-id" value="">
        <input type="hidden" class="slug-copy" value="">

        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab-lang" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link " id="tabs-lang" data-toggle="pill" href="#tabs-sluglang-" role="tab" aria-controls="tabs-sluglang-" aria-selected="true"></a>
                        </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent-lang">
                    
                        <div class="tab-pane fade show " id="tabs-sluglang-" role="tabpanel" aria-labelledby="tabs-lang">
                            <div class="form-gourp mb-0">
                                <label class="d-block">Đường dẫn mẫu ():<span class="pl-2 font-weight-normal" id="slugurlpreview"><strong class="text-info"></strong></span></label>
                                <input type="text" class="form-control slug-input no-validate text-sm" name="slug" id="slug" placeholder="Đường dẫn ()" value="" required>
                                <input type="hidden" id="slug-default" value="">
                                <p class="alert-slug text-danger d-none mt-2 mb-0" id="alert-slug-danger">
                                    <i class="fas fa-exclamation-triangle mr-1"></i>
                                    <span>Đường dẫn đã tồn tại. Đường dẫn truy cập mục này có thể bị trùng lặp.</span>
                                </p>
                                <p class="alert-slug text-success d-none mt-2 mb-0" id="alert-slug-success">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    <span>Đường dẫn hợp lệ.</span>
                                </p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>