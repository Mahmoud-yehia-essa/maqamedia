{{-- ['Task', 'Hours per Day'],
['المستخدمين المسجلين',     {{$users->count()}}],
['الفئات',      {{$category->count()}}],
['الألعاب',  {{$games->count()}}],
['الأسئلة', {{$questions->count()}}], --}}
@extends('admin.master_admin')
@section('admin')
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['عدد الخدمات', {{$service->count()}}],

        ['عدد عملاء الشركة', {{$users->count()}}],
        ['عدد الأعمال', {{$companywork->count()}}],
        ['عدد الأخبار', {{$news->count()}}],
    ]);

    var options = {
        title: '',
        //#endregion

       // colors: ['#5636D3', '#67B586', '#3357FF', '#15232A'] // Add your desired colors here
        colors: ['#67B586', '#5636D3', '#3357FF', '#15232A'] // Add your desired colors here

    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
}
  </script>
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
    <div class="col">
        <a href="{{route('all.users')}}">
        <div class="card radius-10 bg-gradient-deepblue">
         <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-white">{{$users->count()}}</h5>
                <div class="ms-auto">
                    <i class='bx bx-user fs-3 text-white'></i>

                </div>
            </div>
            <div class="progress my-2 bg-opacity-25 bg-white" style="height:4px;">
                <div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex align-items-center text-white">
                <p class="mb-0">عدد عملاء الشركة</p>

            </div>
        </div>
    </a>
      </div>
    </div>
    <div class="col">
        <a href="{{route('all.service')}}">
        <div class="card radius-10 bg-gradient-ohhappiness">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-white"> {{$service->count()}}</h5>
                <div class="ms-auto">
                    <i class='bx bx-category fs-3 text-white'></i>
                </div>
            </div>
            <div class="progress my-2 bg-opacity-25 bg-white" style="height:4px;">
                <div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex align-items-center text-white">
                <p class="mb-0">عدد الخدمات</p>
            </div>
        </div>
    </a>

      </div>
    </div>
    <div class="col">
        <a href="{{route('all.work')}}">

        <div class="card radius-10 bg-gradient-ibiza">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-white">{{$companywork->count()}}</h5>
                <div class="ms-auto">
                    <i class='bx bx-category fs-3 text-white'></i>

                </div>
            </div>
            <div class="progress my-2 bg-opacity-25 bg-white" style="height:4px;">
                <div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex align-items-center text-white">
                <p class="mb-0">عدد أعمال الشركة</p>
            </div>
        </div>
    </a>

    </div>
    </div>
    <div class="col">
        <a href="{{route('all.news')}}">

        <div class="card radius-10 bg-gradient-moonlit bg-warning">
         <div class="card-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-white">{{$news->count()}}</h5>
                <div class="ms-auto">
                    <i class='bx bx-category fs-3 text-white'></i>
                </div>
            </div>
            <div class="progress my-2 bg-opacity-25 bg-white" style="height:4px;">
                <div class="progress-bar bg-white" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="d-flex align-items-center text-white">
                <p class="mb-0">عدد الأخبار</p>
            </div>
        </div>
    </a>

     </div>
    </div>
</div><!--end row-->





   <div class="row row-cols-1 row-cols-lg-1">
    <div class="col">
        <div id="piechart" style="width: 100%; height: 500px;"></div>

     </div>


    </div><!--End Row-->



    <hr>
    <h4 class="mb-4">المستخدمين</h4>


    <div class="card">

        <div class="card-body">

            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
    <tr>
    <th>الرقم</th>
    <th>إسم الأول</th>
    <th>إسم العائلة</th>
    <th>البريد الإلكتروني</th>
    <th>تاريخ التسجيل</th>

    <th> الصورة</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $item)
    <tr>
    <td> {{ $key+1 }} </td>
    <td>{{ $item->fname }}</td>
    <td>{{ $item->lname }}</td>
    <td>{{ $item->email }}</td>
    <td>{{ $item->created_at ? $item->created_at->diffForHumans() : 'لم يتم التحديد' }}</td>


    <td> <img class="rounded-circle"  src="{{ (!empty($item->photo)) ? url('upload/user_images/'.$item->photo):url('upload/no_image.jpg') }}" style="width: 50px; height:50px; border: 2px solid #0aa2dd;" >  </td>


    </tr>
    @endforeach


    </tbody>
    <tfoot>
    <tr>
        <th>الرقم</th>
        <th>إسم الأول</th>
        <th>إسم العائلة</th>
        <th>البريد الإلكتروني</th>
        <th>تاريخ التسجيل</th>

        <th> الصورة</th>
    </tr>
    </tfoot>
    </table>
            </div>
        </div>
    </div>



@endsection
