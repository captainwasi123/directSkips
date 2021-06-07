
<div class="step-wrapper">
   <div class="container">
      <div class="step-head">
         <h4> <b class="col-orange"> STEP 03 </b> SELECT YOUR SKIP SIZE  </h4>
      </div>
      <div class="step-data">
         <div class="step-width3">
            <div class="row all-skip-sizes">
               @if(!empty($pricing->four_yd))
                  @php $vat_1 = ($pricing->four_yd/100)*$vat; @endphp
                  <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                     <div class="skip-box">
                        <label for="skip-type1">
                           <input type="radio" name="skip_size" id="skip-type1" value="4 yd|{{number_format($pricing->four_yd, 2)}}|{{$vat_1}}|{{number_format($pricing->four_yd + $vat_1, 2)}}">
                           <h4> 4YD SKIP </h4>
                           <img src="{{URL::to('/assets/web/new')}}/images/skip-image.jpg">
                           <p> (3.2ft x 6.4ft x 4.7ft)* </p>
                           <h6> Skip Price: </h6>
                           <h5> <b> £{{number_format($pricing->four_yd, 2)}}  </b> + VAT </h5>
                        </label>
                     </div>
                  </div>
               @endif
               @if(!empty($pricing->six_yd))
                  @php $vat_2 = ($pricing->six_yd/100)*$vat; @endphp
                  <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                     <div class="skip-box active">
                        <label for="skip-type2">
                           <input type="radio" name="skip_size" id="skip-type2" value="6 yd|{{number_format($pricing->six_yd, 2)}}|{{$vat_2}}|{{number_format($pricing->six_yd + $vat_2, 2)}}" checked>
                           <h4> 6yd Skip </h4>
                           <img src="{{URL::to('/assets/web/new')}}/images/skip-image.jpg">
                           <p> (4.0ft x 8.8ft x 5.1 ft)* </p>
                           <h6> Skip Price: </h6>
                           <h5> <b> £{{number_format($pricing->six_yd, 2)}} </b> + VAT </h5>
                        </label>
                     </div>
                  </div>
               @endif
               @if(!empty($pricing->eight_yd))
                  @php $vat_3 = ($pricing->eight_yd/100)*$vat; @endphp
                  <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                     <div class="skip-box">
                        <label for="skip-type3">
                           <input type="radio" name="skip_size" id="skip-type3" value="8 yd|{{number_format($pricing->eight_yd, 2)}}|{{$vat_3}}|{{number_format($pricing->eight_yd + $vat_3, 2)}}">
                           <h4> 8yd Skip </h4>
                           <img src="{{URL::to('/assets/web/new')}}/images/skip-image.jpg">
                           <p> (4.2ft x 10.9ft x 5.5ft)* </p>
                           <h6> Skip Price: </h6>
                           <h5> <b> £{{number_format($pricing->eight_yd, 2)}}  </b> + VAT </h5>
                        </label>
                     </div>
                  </div>
               @endif
               @if(!empty($pricing->twelve_yd))
                  @php $vat_4 = ($pricing->twelve_yd/100)*$vat; @endphp
                  <div class="col-md-3 col-lg-3 col-sm-6 col-12">
                     <div class="skip-box">
                        <label for="skip-type4">
                           <input type="radio" name="skip_size" id="skip-type4" value="12 yd|{{number_format($pricing->twelve_yd, 2)}}|{{$vat_4}}|{{number_format($pricing->twelve_yd + $vat_4, 2)}}">
                           <h4> 12yd Skip </h4>
                           <img src="{{URL::to('/assets/web/new')}}/images/skip-image.jpg">
                           <p> (5.6ft x 12.2ft x 5.9ft)* </p>
                           <h6> Skip Price: </h6>
                           <h5> <b> £{{number_format($pricing->twelve_yd, 2)}}  </b> + VAT </h5>
                        </label>
                     </div>
                  </div>
               @endif
            </div>
         </div>
         <div class="step-width2">
            <div class="form-field1 m-b-20">
               <label> Delivery Date: </label>
               <input type="text" class="child-field1 step3_check" id="del_date" name="delivery_date">
            </div>
            <div class="form-field1">
               <label> Collection Date: </label>
               <input type="text" class="child-field1 step3_check" id="col_date" name="collection_date">
            </div>
            <div class="delivery-infos">
               <p> Delivery and Collection dates are a guide only. Maximum Skip Hire period is 14 days. </p>
               <p> *Approximate skip dimensions – actual sizes will vary depending on the local supplier used to deliver the skip. </p>
            </div>
            <div class="next-step" id="next_3">
               <button class="next-step-btn"> Next Step </button>
            </div>
         </div>
      </div>
   </div>
</div>