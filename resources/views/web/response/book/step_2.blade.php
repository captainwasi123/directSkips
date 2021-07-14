
<div class="step-wrapper" id="2">
   <div class="container">
      <div class="step-head">
         <h4> <b class="col-orange"> STEP 02 </b> SELECT THE TYPE OF WASTE <a data-toggle="modal" data-target="#modal-type2"  class="popup-icon1"> <i class="fa fa-info"> </i> </a> </h4>
      </div>
      <div class="step-data">
         <div class="step-width1">
            <div class="all-buttons">
               @php $x=1; @endphp
               @foreach($type as $val)
                  <label  for="service_type{{$x}}" {{$x==1 ? 'class=active-btn' : ''}}> 
                     <input type="radio" name="service_type" value="{{$val->id}}|{{$val->service}}"  {{$x==1 ? 'checked' : ''}} id="service_type{{$x}}"> 
                        {{$val->service}}  
                  </label>
                  @php $x++; @endphp
               @endforeach
            </div>
            <div class="next-step" id="next_2">
               <button type="button" class="next-step-btn"> Next Step </button>
            </div>
         </div>
      </div>
   </div>
</div>