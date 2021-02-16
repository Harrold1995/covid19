@extends('layouts.dashboard')
@extends('layouts.app')


@section('content')
<div class="container">
<section class="content">

<div class="row">
    <div class="col-lg-3 col-xs-6">
       <div class="small-box bg-aqua">
          <div class="inner"> <p>BARANGAY ISOLATION UNIT</p> </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

 
    <div class="col-lg-3 col-xs-6">
     <div class="small-box bg-green">
      <div class="inner"><p>SPECIAL CARE FACILITY</p></div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

  
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner"><p>HOME QUARANTINE</p> </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
</div>
</section>
</div>



<div class="container">
  <h2>Dynamic Tabs</h2>
  <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <center><div class="pt-5"><h3>CDRRM FUND OVERALL STATUS</h3></div></center>
      <table class="table table-bordered table-condensed table-sm table-hover table-striped">
					<thead class="bg-success">
						<tr>
              <th>DESCRIPTION</th>
              <th>FUND</th>
              <th>EXPENSES</th>
              <th>APPROPRIATION</th>
              <th>BALANCE(Less Appropriation)</th>
            </tr>
          </thead>
              <tbody>
                <tr>
                  <td> Harrold</td>
                  <td> Harrold</td>
                  <td> 0956231</td>
                  <td> City</td>
                </tr>
            </tbody>
				</table> 
    </div>
    </div>            
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>


@endsection

