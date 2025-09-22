@extends('admin.master_admin')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="col-lg-16">
    <div class="card">
        <div class="card-body">

            {{-- Display Success Message --}}
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Display Validation Errors --}}
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('edit.journey.store') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $value->id }}">
                <input type="hidden" name="old_image" value="{{ $value->photo }}">

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">عنوان الرحلة</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                               name="title" value="{{ old('title', $value->title) }}">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Title (English)</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control @error('title_en') is-invalid @enderror"
                               name="title_en" value="{{ old('title_en', $value->title_en) }}">
                        @error('title_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">الوصف</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <textarea name="des" class="form-control @error('des') is-invalid @enderror"
                                  placeholder="الوصف ..." rows="3">{{ old('des', $value->des) }}</textarea>
                        @error('des')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Description (English)</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <textarea name="des_en" class="form-control @error('des_en') is-invalid @enderror"
                                  placeholder="Description ..." rows="3">{{ old('des_en', $value->des_en) }}</textarea>
                        @error('des_en')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                   <div class="row mb-3">
				<div class="col-sm-3">
					<h6 class="mb-0"> التاريخ  </h6>
				</div>
				<div class="form-group col-sm-9 text-secondary">

					{{-- <input type="date" min="{{Carbon\Carbon::now()}}" name="coupon_validity" class="form-control"   /> --}}
                    {{-- <input type="date" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" name="start" class="form-control"   /> --}}
                    <input type="date" value="{{ old('start', $value->start) }}"  name="start" class="form-control @error('start') is-invalid @enderror"   />

                      @error('coupon_validity')
                        <span class="text-danger">{{ $message }}</span>
                      @enderror
				</div>
			</div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">صورة الرحلة</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <input type="file" name="photo" class="form-control" id="image" />
                        @error('photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Image Preview -->
                <div class="row mb-3">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                        <img id="showImage"
                             src="{{ (!empty($value->photo) && $value->photo != 'non') ? url($value->photo) : url('upload/no_image.jpg') }}"
                             alt="Preview" width="110">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                        <input type="submit" class="btn btn-primary px-4" value="حفظ الرحلة">
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- jQuery for Image Preview -->
<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>
@endsection
