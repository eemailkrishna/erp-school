@include('common.header')
@include('common.navbar')

<script>
window.scrollTo(0, 0);
</script>
<section class="content-header">
    <h1>
        Goverment Requirement <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Govt. Requir.</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="box box-success">
        <div class="box-header with-border">

            <h3 class="box-title" style="color:teal;"><i class="fa fa-book"></i>&nbsp;&nbsp;&nbsp;<b>Main Panel</b></h3>
        </div>
        <div class="box-body">

            <a href="{{url('/govt-require-mappingList')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#E32636;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Mapping List</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <div class="icon">
                            <i class="ion"></i>
                        </div>
                        <a href="{{url('/govt-require-mappingList')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>

            <a href="{{url('/govt_require_studentList')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#3B7A57;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Student List</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <div class="icon">
                            <i class="ion"></i>
                        </div>
                        <a href="{{url('/govt_require_studentList')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>
            <a href="{{url('/govt_require_contactNo')}}">
                <div class="col-md-3 col-md-6">
                    <div class="small-box" style="background-color:#9F2B68;">
                        <div class="inner"><br>
                            <h3 style="font-size:20px;margin-left:5px;color:#fff;">Contact No.</h3>
                            <p style="margin-left:10px;color:#fff;">Enter</p>
                        </div>
                        <div class="icon">
                            <i class="ion"></i>
                        </div>
                        <a href="{{url('/govt_require_contactNo')}}" class="small-box-footer">More Info <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </a>


        </div>
    </div>
    <!-- <div class="box" style="display:none;">-->
    <!--<div class="box-header with-border">-->

    <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>Reports</b></h3>-->
    <!--</div>-->
    <!--<div class="box-body">-->




    <!--</div>-->
    <!-- </div>-->
    <!-- <div class="box box-success" >-->
    <!--<div class="box-header with-border">-->

    <!--<h3 class="box-title" style="color:teal;"><i class="fa fa-exclamation-circle"></i>&nbsp;&nbsp;&nbsp;<b>User Help</b></h3>-->
    <!--</div>-->
    <!--<div class="box-body">-->

    <!--<a href="../school_software_v1_old/userhelp/GOVERNMENT.pdf" target="_blank">-->
    <!--			<div class="col-md-3 col-md-6">-->
    <!--				<div class="small-box" style="background-color:red;">-->
    <!--					<div class="inner"><br>-->
    <!--					 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp English</h3>-->
    <!--					<p style="margin-left:10px;color:#fff;">Enter</p>-->
    <!--				</div>-->
    <!--				<div class="icon">-->
    <!--					<i class="ion"></i>-->
    <!--				</div>-->
    <!--					<a href="../school_software_v1_old/userhelp/GOVERNMENT.pdf" target="_blank" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
    <!--				</div>-->
    <!--			</div>-->
    <!--			</a>-->


    <!--			<a href="../school_software_v1_old/userhelp/GOVERNMENT Hindi.pdf" target="_blank"">-->
    <!--			<div class="col-md-3 col-md-6">-->
    <!--				<div class="small-box" style="background-color:green;">-->
    <!--					<div class="inner"><br>-->
    <!--					 <h3 style="font-size:20px;margin-left:5px;color:#fff;">Userhelp Hindi</h3>-->
    <!--					<p style="margin-left:10px;color:#fff;">Enter</p>-->
    <!--				</div>-->
    <!--				<div class="icon">-->
    <!--					<i class="ion"></i>-->
    <!--				</div>-->
    <!--					<a href="../school_software_v1_old/userhelp/GOVERNMENT Hindi.pdf" target="_blank"" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>-->
    <!--				</div>-->
    <!--			</div>-->
    </a>

    </div>
    </div>
</section>
@include('common.footer')