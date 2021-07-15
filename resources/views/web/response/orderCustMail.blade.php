<!DOCTYPE html>
<html>
<head>
<style>
 td, th {
  border-bottom: 1px solid black;
  padding:5px 10px;
  vertical-align: text-top;
}
table{
    text-align:left;
    width: 60%;
    border: 1px solid black;
}
.head{
    background-color: #e6e6e6;
}
@media only screen and (max-width: 600px) {
  .mb-30 {
    margin-bottom: 20px;
  }
  .mt-30 {
    margin-top: 20px;
  }
}
</style>
</head>
<body>
    <p class="mb-30">Dear <strong>{{$name}}</strong>,</p>
    <p class="mb-30">Thank you for booking a skip with 24/7 Direct Skips Ltd.</p>
    <p>We appreciate your order and look forward to delivering/collecting* your skip on the dates you have provided. We may also contact you if we need to confirm any "delivery instructions" you have provided or to clarify the specific type of waste you are looking to dispose of. In the meantime, should you have any questions then please feel free to give us a call on <a href="tel:03309125247">0330 9125 247</a> or email us at <a href="mailto:orders@247directskips.com">orders@247directskips.com</a>
       </p>
    <br>
    <table>
        <tr>
            <th colspan="4" class="head">Customer Information</th>
        </tr>
        <tr>
            <th colspan="2">Customer Name</th>
            <td colspan="2">{{$name}}</td>
        </tr>
        <tr>
            <th colspan="2">Email</th>
            <td colspan="2">{{$email}}</td>
        </tr>
        <tr>
            <th colspan="2">Phone</th>
            <td colspan="2">{{$phone}}</td>
        </tr>
        <tr>
            <th colspan="4" class="head">Order Information</th>
        </tr>
        <tr>
            <th colspan="2">Service</th>
            <td colspan="2">{{$service}}</td>
        </tr>
        <tr>
            <th colspan="2">Skip Size</th>
            <td colspan="2">{{$skip_size}}</td>
        </tr>
        <tr>
            <th colspan="2">Delivery Date</th>
            <td colspan="2">{{$delivery_date}}</td>
        </tr>
        <tr>
            <th colspan="2">Collection Date</th>
            <td colspan="2">{{$collection_date}}</td>
        </tr>
        <tr>
            <th colspan="2">Price (including VAT)</th>
            <td colspan="2">{{'£'.number_format($net_price, 2).' + vat @ '.number_format($vat_price, 2).' = £'.number_format($price, 2)}}</td>
        </tr>
        <tr>
            <th colspan="2">Delivery Instructions</th>
            <td colspan="2">{{$comments}}</td>
        </tr>
        
        <tr>
            <th colspan="2" class="head">Delivery/Billing Details</th>
            <th colspan="2" class="head">Different Billing Details</th>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{$address}}</td>
            
            <th>Address</th>
            <td>{{$d_address}}</td>
        </tr>
        <tr>
            <th>Address 2</th>
            <td>{{$address_2}}</td>
            
            <th>Address 2</th>
            <td>{{$d_address_2}}</td>
        </tr>
        <tr>
            <th>County</th>
            <td>{{$county}}</td>
            
            <th>County</th>
            <td>{{$d_county}}</td>
        </tr>
        <tr>
            <th>Postcode</th>
            <td>{{$postal_code}}</td>
        
            <th>Postcode</th>
            <td>{{$d_postal_code}}</td>
        </tr>
    </table>
    <br>
    <strong>Regards,</strong>
    <br><br>
    <img src="http://dnpprojects.com/projects/directSkip/assets/web/images/logo.png" width="200px">
    
    <p style="font-size:12px;" class="mt-30"><i>*24/7 Direct Skips Ltd is a National Skip Hire Brokerage. We work with a network of reputable and reliable skip companies (across the UK) to provide you with a "one-stop shop" solution for your skip hire needs.</i></p>
</body>
</html>







