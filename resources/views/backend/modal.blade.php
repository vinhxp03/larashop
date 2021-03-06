{{-- Modal change password --}}
<div class="modal fade" id="change-pass" tabindex="-1" role="dialog" aria-labelledby="changePassword" aria-hidden="true">
  <div class="modal-dialog" style="width:420px;" role="document">
    <div class="modal-content">
      <div class="modal-header px-4">
        <h5 class="modal-title" id="changePassword">Đổi mật khẩu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="material-icons ">close</span>
        </button>
      </div>
      <div class="modal-body p-4">
        <div id="title-notify-change-password"></div>
        <form action="" method="post">
          {{ csrf_field() }}
          <div class="form-group" id="old-pass">
            <label for="">Mật khẩu cũ</label>
            <input type="password" class="form-control" placeholder="Nhập mật khẩu cũ" name="old_pass">
          </div>
          <div class="form-group" id="new-pass">
            <label for="">Mật khẩu mới</label>
            <input type="password" class="form-control" placeholder="Nhập mật khẩu mới" name="new_pass">
          </div>
          <div class="form-group" id="re-pass">
            <label for="">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" placeholder="Nhập lại mật khẩu mới" name="re_pass">
          </div>
          <div class="modal-footer px-4">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <button type="button" id="submit-changepass" class="btn btn-primary">Lưu thay đổi</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{{-- End modal change password --}}

{{-- Modal confirm  --}}
<div class="modal fade" id="confirm-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xác nhận</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="material-icons ">close</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Bạn có chắc rằng muốn xóa dòng này?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary">Đồng ý</button>
      </div>
    </div>
  </div>
</div>
{{-- End Modal Confirm  --}}

<div class="modal fade" id="switchApp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header px-4">
        <h5 class="modal-title" id="exampleModalLabel">Select Application</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="material-icons ">close</span>
        </button>
      </div>
      <div class="modal-body p-4">
        <div class="row align-items-stretch app-switcher">
          <div class="col-lg-3 col-6 mb-4">
            <a href="index-2.html" class="text-dark">
              <div class="card h-100">
                <div class="card-body text-center">
                  <span class="material-icons md-48 " style="color:#21C3E0;">bubble_chart</span>
                  <p class="weight-400 m-0">Dashboard</p>
                  <small class="weight-300 text-muted">This is some text within a card body.</small>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-6 mb-4">
            <a href="ecommerce-dashboard.html" class="text-dark">
              <div class="card h-100">
                <div class="card-body text-center">
                  <span class="material-icons md-48 text-primary">security</span>
                  <p class="weight-400 m-0">Ecommerce</p>
                  <small class="weight-300 text-muted">This is some text within a card body.</small>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-6 mb-4">
            <a href="mailbox.html" class="text-dark">
              <div class="card h-100 active-app">
                <div class="card-body text-center">
                  <span class="material-icons md-48 text-danger">blur_on</span>
                  <p class="weight-400 m-0">Mail Box</p>
                  <small class="weight-300 text-muted">This is some text within a card body.</small>
                  <span class="material-icons app-selected md-16">check</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-6 mb-4">
            <a href="blogger-feed-list.html" class="text-dark">
              <div class="card h-100">
                <div class="card-body text-center">
                  <span class="material-icons md-48 text-warning">camera</span>
                  <p class="weight-400 m-0">Blogger</p>
                  <small class="weight-300 text-muted">This is some text within a card body.</small>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-6 mb-lg-0 mb-4">
            <a href="task-manager.html" class="text-dark">
              <div class="card h-100">
                <div class="card-body text-center">
                  <span class="material-icons md-48" style="color:#f98e69;">leak_add</span>
                  <p class="weight-400 m-0">Task Manager</p>
                  <small class="weight-300 text-muted">This is some text within a card body.</small>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-6 mb-lg-0 mb-4">
            <a href="notes.html" class="text-dark">
              <div class="card h-100">
                <div class="card-body text-center">
                  <span class="material-icons md-48 text-success">color_lens</span>
                  <p class="weight-400 m-0">Notes</p>
                  <small class="weight-300 text-muted">This is some text within a card body.</small>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-6 ">
            <a href="file-uploder.html" class="text-dark">
              <div class="card h-100">
                <div class="card-body text-center">
                  <span class="material-icons md-48 " style="color:#9b84fb">category</span>
                  <p class="weight-400 m-0">File Manager</p>
                  <small class="weight-300 text-muted">This is some text within a card body.</small>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-6 ">
            <a href="photos-videos.html" class="text-dark">
              <div class="card h-100">
                <div class="card-body text-center">
                  <span class="material-icons md-48 text-muted" >layers</span>
                  <p class="weight-400 m-0">Videos & Photos</p>
                  <small class="weight-300 text-muted">This is some text within a card body.</small>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="modal-footer px-4">
        <div class="custom-control custom-checkbox mr-auto">
          <input type="checkbox" class="custom-control-input" id="customCheck1">
          <label class="custom-control-label" for="customCheck1">Default open this application</label>
        </div>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Switch Application</button>
      </div>
    </div>
  </div>
</div>