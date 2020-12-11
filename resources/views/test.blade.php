@foreach($calon as $c)
        <div class="col-md-3 col-6 d-flex align-items-stretch">
          <div class="card mb-4 shadow-sm ">
          <img class="card-img-top lazyload" data-src="img\nominasi\{{ $c->foto }}" alt="">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="form-check" style="margin-left:3px;">
                  <label>{{ $c->nama }}</label>
                </div>
              </div>
            </div>
          </div>
        </div>
@endforeach