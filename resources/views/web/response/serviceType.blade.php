<div class="row">
	@if(!empty($pricing->four_yd))
    	@php $vat_1 = ($pricing->four_yd/100)*$vat; @endphp
 
	    <div class="col-md-6 col-xs-6 col-lg-3 ">
	      <div class="radio-back">
	        <div class="4yd"> 
	          <input type="radio"  name="skip_size" value="4 yd|{{number_format($pricing->four_yd, 2)}}|{{$vat_1}}|{{number_format($pricing->four_yd + $vat_1, 2)}}"> 4yd Skip
	        </div>
	           <p class="skip-dimension">  (3.2ft x 6.4ft x 4.7ft)*</p>
	           <p class="skip-dimension">Skip Price: <br/> <b> <span style="color:#eb7c32"> £{{number_format($pricing->four_yd, 2)}} </span>+ VAT </b> </p>
	
	      </div>
	    </div>
    @endif
    @if(!empty($pricing->six_yd))
		@php $vat_2 = ($pricing->six_yd/100)*$vat; @endphp
	    <div class="col-md-6 col-xs-6 col-lg-3 ">
	      <div class="radio-back">
	        <div class="6yd">
	          <input type="radio"  name="skip_size" value="6 yd|{{number_format($pricing->six_yd, 2)}}|{{$vat_2}}|{{number_format($pricing->six_yd + $vat_2, 2)}}" checked> 6yd Skip
	        </div>
	           <p class="skip-dimension"> (4.0ft x 8.8ft x 5.1 ft)*</p>
	           <p class="skip-dimension">Skip Price: <br/> <b>  <span style="color:#eb7c32"> £{{number_format($pricing->six_yd, 2)}} </span>+ VAT </b> </p>
	      </div>
	    </div>
 
    @endif
    @if(!empty($pricing->eight_yd))
		@php $vat_3 = ($pricing->eight_yd/100)*$vat; @endphp
	 
	    <div class="col-md-6 col-xs-6 col-lg-3 ">
	      <div class="radio-back">
	        <div class="8yd">
	          <input type="radio" name="skip_size" value="8 yd|{{number_format($pricing->eight_yd, 2)}}|{{$vat_3}}|{{number_format($pricing->eight_yd + $vat_3, 2)}}"> 8yd Skip
	        </div>
	           <p class="skip-dimension">  (4.2ft x 10.9ft x 5.5ft)*</p>
	           <p class="skip-dimension">Skip Price: <br/> <b> <span style="color:#eb7c32"> £{{number_format($pricing->eight_yd, 2)}} </span>+ VAT </b> </p>
	      </div>
	    </div>
    @endif
    @if(!empty($pricing->twelve_yd))
		@php $vat_4 = ($pricing->twelve_yd/100)*$vat; @endphp
	    <div class="col-md-6 col-xs-6 col-lg-3 ">
	      <div class="radio-back">
	          <div class="10yd">
	            <input type="radio" name="skip_size" value="12 yd|{{number_format($pricing->twelve_yd, 2)}}|{{$vat_4}}|{{number_format($pricing->twelve_yd + $vat_4, 2)}}"> 12yd Skip
	          </div>
	          <p class="skip-dimension">  (5.6ft x 12.2ft x 5.9ft)*</p>
	          <p class="skip-dimension">Skip Price: <br/> <b> <span style="color:#eb7c32"> £{{number_format($pricing->twelve_yd, 2)}} </span>+ VAT  </b> </p>
	      </div>
	    </div>
 
    @endif
  </div>