@extends('layouts.app')


@section('content')
<div class="container">
<section class="content">

<div class="row">
<div class="col-lg-3 col-xs-6">
     <div class="small-box bg-red">
      <div class="inner"><p>SUMMARY</p></div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

<!-- biu begin -->
    <div class="col-lg-3 col-xs-6">
       <div class="small-box bg-aqua">
          <div class="inner"> <p>BARANGAY ISOLATION UNIT</p> </div>
            <a href="#" class="small-box-footer" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add New <i class="fa fa-arrow-circle-right"></i></a>
     
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
  <div class="modal-content">
      
      <!-- method begin -->
 
        <!-- method end -->

      <div class="modal-header">
        <h2 class="modal-title textheader" id="exampleModalLabel">BARANGAY ISOLATION UNIT NEW ENTRY</h2>
        <i class="fas fa-times-circle" style="color:red" data-bs-dismiss="modal" aria-label="Close"></button></i>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3 input-group">
                <label for="recipient-name" class="col-form-label textlabel" >Complete Name:</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="text" class="form-control" placeholder="Juan A. Delacruz Sr." required />&nbsp&nbsp&nbsp&nbsp
                <label for="recipient-name" class="col-form-label textlabel" >Address:</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="text" class="form-control" placeholder="Purok,Sitio,Barangay"  required />
          </div>
          
          <div class="mb-3 input-group">
                <label for="recipient-name" class="col-form-label textlabel" >Contact Number:</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" placeholder="09xxxxxxxxx" required/>&nbsp&nbsp&nbsp&nbsp
                <label for="recipient-name" class="col-form-label textlabel" >Birthday:</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="date" id="birthday" name="birthday"input type="datepicker" class="form-control" required/>&nbsp&nbsp&nbsp&nbsp
                    <label for="recipient-name" class="col-form-label textlabel" >Age:</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" class="form-control" required />
          </div>

          <div class="mb-3 input-group">
                <label for="recipient-name" class="col-form-label textlabel" >Origin:</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="text" class="form-control" placeholder="Manila" required/>&nbsp&nbsp&nbsp&nbsp
                <label for="recipient-name" class="col-form-label textlabel" >Transpo:</label>&nbsp&nbsp&nbsp&nbsp
                    <select name="transpo" id="transpo" class="form-control" required>
                        <option value="">PLEASE SELECT</option>
                        <option value="Cokaliong">Cokaliong</option>
                        <option value="Cokaliong">Cokaliong via Cebu</option>
                        <option value="PAL">PAL</option>
                        <option value="Cebu">Cebu Pacific</option>
                        <option value="2Go">2Go</option>
                        <option value="Dapitan">Dapitan Fastcat</option>
                    </select>
                                            &nbsp&nbsp&nbsp&nbsp    
                <label for="recipient-name" class="col-form-label textlabel" >Departure:</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="date" id="birthday" name="birthday"input type="datepicker" class="form-control" required/>&nbsp&nbsp&nbsp&nbsp
                <label for="recipient-name" class="col-form-label textlabel" >Arrival:</label>&nbsp&nbsp&nbsp&nbsp
                    <input type="date" id="birthday" name="birthday"input type="datepicker" class="form-control" required/>
          </div>
<br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1">
                    <label class="form-check-label textlabel">Ticketed</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2">
                    <label class="form-check-label textlabel">Submitted Proof</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="3">
                    <label class="form-check-label textlabel">Scheduled</label>
            </div>  

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="3">
                    <label class="form-check-label textlabel">Letter of Coordination</label>
            </div>  

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="3">
                    <label class="form-check-label textlabel">Endorsed</label>
            </div>  
         
<br><br><br>
                    <button type="reset" value="Reset" class="btn btn-warning" data-bs-reset="modal">Reset</button>
                    <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
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
  <!-- <h1>Budget Consumption and Accomplishment Monitoring System</h1> -->
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Summary</a></li>
    <li><a data-toggle="tab" href="#menu1">Barangay Isolation Unit</a></li>
    <li><a data-toggle="tab" href="#menu2">Special Care Facility</a></li>
    <li><a data-toggle="tab" href="#menu3">Home Quarantine</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Barangay Isolation Unit</h3>
      <table class="table table-bordered table-condensed table-sm table-hover table-striped ">
					<thead class="bg-primary">
						<tr>
                            <th>Name</th>
                            <th>Quick Response Fund</th>
							<th>Trust Fund</th>
							<th>Unprogrammed Current (70%)</th>
						</tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Harrold</td>
                            <td> Harrold</td>
                            <td> 0956231</td>
                            <td> City</td>
                            
                            <!-- <td> <i class="fa fa-eye" ></i> &nbsp
                                  <i class="fa fa-edit"></i>&nbsp
                                  <i class="fa fa-trash"></i>&nbsp
                                  <i class="fa fa-print"></i>&nbsp
                                  <i class="fa fa-download"></i>
                            </td> -->
                        
                        </tr>
                    
                    </tbody>
				</table>

    </div>


    <div id="menu1" class="tab-pane fade">
      <h3>Special Care Facility</h3>
      <table class="table table-bordered table-condensed table-sm table-hover table-striped ">
					<thead class="bg-success">
						<tr>
                            <th>Name</th>
                            <th>Address</th>
							<th>Contact</th>
							<th>Birthday</th>
                            <th>Age</th>
                            <th>Origin</th>
                            <th>Transportaion</th>
                            <th>Departure</th>
                            <th>Arrival</th>
                            <th>Other Actions</th>

						

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


    <div id="menu2" class="tab-pane fade">
      <h3>Home Quarantine</h3>
      <table class="table table-bordered table-condensed table-sm table-hover table-striped ">
					<thead class="bg-primary">
						<tr>
                            <th>Fuund Status</th>
                            <th>Quick Response Fund</th>
							<th>Trust Fund</th>
							<th>Unprogrammed Current (70%)</th>
						

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


    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <table class="table table-bordered table-condensed table-sm table-hover table-striped ">
					<thead class="bg-primary">
						<tr>
                            <th>Fuund Status</th>
                            <th>Quick Response Fund</th>
							<th>Trust Fund</th>
							<th>Unprogrammed Current (70%)</th>
						

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



@endsection

